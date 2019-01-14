<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10)->comment('material code')->unique();
            $table->string('name', 100)->comment('full name material')->unique();
            $table->integer('unit_id')->comment('ID unit')->nullable()->unsigned();  
            $table->foreign('unit_id')->references('id')->on('units');
            $table->integer('group_id')->comment('ID group')->nullable()->unsigned();    
            $table->foreign('group_id')->references('id')->on('groups'); 
            $table->integer('enable')->comment('0-disable, 1-enable')->default(1);        
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
        Schema::drop('materials');
    }
}
