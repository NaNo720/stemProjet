<!--

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            //
        });
    }
};
 -->

 <?php
 // database/migrations/2024_07_06_123456_add_description_to_quizzes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToQuizzesTable extends Migration
{
    public function up()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->text('description')->nullable()->after('title');
        });
    }

    public function down()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}

