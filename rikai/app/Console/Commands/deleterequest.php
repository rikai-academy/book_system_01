<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class deleterequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleterequest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $carts = Cart::where('status','=','done')->get();
        foreach($carts as $cart){
            DB::beginTransaction();
            try{
                $carts = DB::table('cart')->where('id','=',$cart->id)->delete();
                $cartitem = DB::table('cart_item')->where('cart_id' ,'=', $cart->id)->delete();
                DB::commit();
            }catch(Exception $e){
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
        }
    }
}
