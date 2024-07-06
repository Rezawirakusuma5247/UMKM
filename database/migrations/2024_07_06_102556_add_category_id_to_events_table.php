<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToEventsTable extends Migration
{
    public function up()
{
    Schema::table('events', function (Blueprint $table) {
        $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
    });
}

public function down()
{
    Schema::table('events', function (Blueprint $table) {
        $table->dropForeign(['category_id']);
        $table->dropColumn('category_id');
    });
}

}
