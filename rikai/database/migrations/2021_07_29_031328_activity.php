<?php

use App\Enums\FavoriteStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ReadStatus;

class Activity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->integer('user_id');
            $table->integer('type_id');
            $table->integer('read_status')->default(ReadStatus::NONE);
            $table->integer('favorite_status')->default(FavoriteStatus::NONE);
            $table->timestamp('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
