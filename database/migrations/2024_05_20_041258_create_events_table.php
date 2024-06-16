<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // 自動増分のプライマリキー
            $table->string('name'); // イベント名
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // カテゴリーID。categoriesテーブルへの外部キー
            $table->text('overview'); // イベント内容
            $table->string('location'); // イベント会場
            $table->dateTime('start_date'); // イベント開始日
            $table->dateTime('end_date'); // イベント終了日
            $table->string('image_url')->nullable(); // イベント告知用ポスターのパス
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
        Schema::dropIfExists('events');
    }
};
