<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\BuyBook;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;

class BuyBookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $cart;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Cart $cart)
    {
        //
        $this->cart = $cart;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $email = new BuyBook($this->cart);
        Mail::to($this->cart->user->email)->queue($email);
    }
}
