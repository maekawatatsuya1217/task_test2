<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            // id
            $table->bigIncrements('id');
            // 氏名
            $table->string('your_name', 20);
            // メールアドレス
            $table->string('email', 255);
            // url
            $table->longText('url')->nullable($value = true);
            // 性別
            $table->boolean('gender');
            // 年齢
            $table->tinyInteger('age');
            // お問い合わせ内容
            $table->string('contact', 200);
            // タイムスタンプ
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
        Schema::dropIfExists('contact_forms');
    }
}
