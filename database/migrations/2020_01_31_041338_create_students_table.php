<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 5)->default('')->nullable(false)->comment('姓名');// 姓名
            $table->string('id_card', 19)->default('')->nullable(false)->comment('证件号码');// 证件号码
            $table->string('ticket', 18)->default('')->nullable(false)->comment('准考证号');// 准考证号
            $table->tinyInteger('province')->nullable(true)->comment('报考省');// 报考省
            $table->tinyInteger('school')->nullable(true)->comment('报考学校');// 报考学校
            $table->timestamp('effect_at')->comment('查询有效时间');// 查询有效时间
            $table->integer('user_id')->unsigned()->default('0')->comment('user_id');// 关联user
            $table->string('memo')->default('')->comment('备注');
            $table->unique(['user_id']);
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
        Schema::dropIfExists('students');
    }
}
