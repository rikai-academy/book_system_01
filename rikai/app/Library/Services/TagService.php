<?php

namespace App\Library\Services;

use App\Library\Services\Contracts\TagServiceInterface;
use App\Models\Tag;
use App\Enums\CartStatus;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Book;
use Exception;
use Illuminate\Support\Facades\DB;
use stdClass;
use Carbon\Carbon;
use App\Enums\Time;

class TagService implements TagServiceInterface
{
    public function getTag($date)
    {
        $now = Carbon::now();
        if($date == Time::Week){
            $now = Carbon::now();
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            $hottag = Tag::join('taggable_taggables','taggable_taggables.tag_id','=','taggable_tags.tag_id')
            ->groupBy('taggable_taggables.tag_id')
            ->orderBy(\DB::raw('count(taggable_taggables.tag_id)'), 'DESC')
            ->select('taggable_taggables.tag_id','taggable_tags.name')
            ->whereBetween('taggable_taggables.updated_at',[$weekStartDate,$weekEndDate])
            ->get();
        }else{
            $now = Carbon::now();
            $weekStartDate = $now->firstOfMonth()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfMonth()->format('Y-m-d H:i');
            $hottag = Tag::join('taggable_taggables','taggable_taggables.tag_id','=','taggable_tags.tag_id')
            ->groupBy('taggable_taggables.tag_id')
            ->orderBy(\DB::raw('count(taggable_taggables.tag_id)'), 'DESC')
            ->select('taggable_taggables.tag_id','taggable_tags.name')
            ->whereBetween('taggable_taggables.updated_at',[$weekStartDate,$weekEndDate])
            ->get();
        }
        return $hottag;
    }

}