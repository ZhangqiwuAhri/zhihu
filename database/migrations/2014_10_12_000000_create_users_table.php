<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->string('name')->comment('用户名');
            $table->string('email')->unique()->comment('邮箱地址');
            $table->smallInteger('is_active')->default(0)->comment('邮箱是否激活');//邮箱激活
            $table->string('active_token')->comment('激活token');
            $table->string('password')->comment('密码');

            $table->string('avatar')->comment('头像');//头像
            $table->integer('answers_count')->default(0)->comment('回答数');//回答数
            $table->integer('av_count')->default(0)->comment('视频数');//视频数
            $table->integer('article_count')->default(0)->comment('文章数');//文章数
            $table->integer('special column_count')->default(0)->comment('专栏数');//专栏数
            $table->integer('questions_count')->default(0)->comment('提问数');//提问数
            $table->integer('collection_count')->default(0)->comment('收藏数');//收藏数

            $table->integer('comments_count')->default(0)->comment('点赞数');//点赞数
            $table->integer('fans_count')->default(0)->comment('粉丝数');//粉丝数
            $table->integer('concerned_count')->default(0)->comment('关注数');
            $table->text('setting')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
