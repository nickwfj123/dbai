<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {
        Schema::create('update_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('version');
            $table->string('updated_time');
            $table->string('editor');
        });
    }

    /**
     * Reverse the migrations.
     */
   public function down(): void
   {
       Schema::dropIfExists('update_history');
   }
};