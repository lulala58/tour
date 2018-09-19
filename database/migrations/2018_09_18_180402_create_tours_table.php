<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->comment('关联旅游产品id');
            $table->string('name',100)->comment('旅游产品名称');
            $table->string('address',200)->comment('旅游产品地址');
            $table->string('pics',100)->comment('旅游产品地址');
            $table->string('des')->comment('旅游景点描述');
            $table->integer('price')->comment('旅游景点价格');
            $table->tinyInteger('state')->comment('旅游景点开放状态0是禁止1是开放');
            $table->timestamp('start_time')->comment('旅行开始的时间');
            $table->timestamp('end_time')->comment('旅行结束的时间');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
