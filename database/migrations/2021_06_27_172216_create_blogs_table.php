<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
						$table->unsignedBigInteger('category_id')->nullable();
						$table->string('title');
						$table->string('slug')->nullable();
						$table->mediumText('short')->nullable();
						$table->longText('descr')->nullable();
						$table->string('pic')->nullable();
            $table->timestamps();

						$table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
