<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cxfs')->nullable()->comment('cxfs');
            $table->string('dwdm')->nullable()->comment('代码');
            $table->string('dwmc')->nullable()->comment('学校名称');
            $table->string('kg')->nullable()->comment('kg');
            $table->string('needlogin')->nullable()->comment('需要登录');
            $table->string('schurl')->nullable()->comment('学校网址');
            $table->string('province_id')->comment('所属省份');
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
        Schema::dropIfExists('schools');
    }
}
