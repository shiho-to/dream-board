<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnDreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreams', function (Blueprint $table) {
            $table->renameColumn("article_id", "id");
            $table->text("title")->default(NULL)->change();
            $table->text("content")->default(NULL)->change();
            $table->string('pict', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dreams', function (Blueprint $table) {
        });
    }
}
