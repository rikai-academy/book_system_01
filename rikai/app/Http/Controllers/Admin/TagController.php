<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\TagBook;
use Illuminate\Support\Facades\DB;
use App\Library\Services\Contracts\TagServiceInterface;
use App\Enums\Time;

class TagController extends Controller
{
    public function __construct(TagServiceInterface $tagServiceInterface)
    {
        $this->tagService = $tagServiceInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $date = Time::Week;

        $tags = Tag::paginate(10);
        return view('admin.category.tag',compact('tags','date'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tagid)
    {
        //
        $tag = $this->findTag($tagid);
        return view('admin.category.tagedit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tagid)
    {
        //
        $tag = $this->findTag($tagid);
        $data = $request->all();
        $tag = Tag::where('tag_id','=',$tagid)->update(['name' => $data['name'],'normalized'=>$data['name']]);
        
        if($tag){
            $message = 'message.update_profile_success';
            return redirect()->route('tag.index')->withMessage(__($message));
        } else {
            $message = 'message.update_profile_fail';
            return redirect()->route('tag.index')->withMessage(__($message));
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::where('tag_id','=',$id);
        $tagbooks = TagBook::where('tag_id','=',$id)->get();

        foreach($tagbooks as $tagbook){
            DB::beginTransaction();
            try{
                $tagbook = DB::table('taggable_taggables')->where('tag_id','=',$tagbook->id)->delete();
                DB::commit();
            }catch(Exception $e){
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
        }
        $tag->delete();
        return redirect()->route('tag.index');
    }

    public function tagTime($time)
    {
        $tags = $this->tagService->getTag($time);
        $date = $time;
        return view('admin.category.tag',compact('tags','date'));
    }

    public function findTag($tagId){
        $tag = Tag::where('tag_id','=',$tagId)->first();
        if($tag){
            return $tag;
        }else{
            $errors = 'message.no_tag';
            return redirect()->route('homeadmin.index')->withErrors(__($errors));
        }
    }

}
