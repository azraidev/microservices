<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_versions', function (Blueprint $table) {
            $table->id();
            $table->integer('api_id');
            $table->float('version')->default(1.0);
            $table->text('endpoint');
            $table->string('method');
            $table->text('inputs');
            $table->text('outputs');
            $table->text('documentation');
            $table->tinyInteger('enabled')->default(1);
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
        Schema::dropIfExists('api_versions');
    }
}
