<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTasksTable extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('description')->nullable()->after('title');
            $table->dropColumn('content');
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('content')->nullable()->after('title');
            $table->dropColumn('description');
        });
    }
}
