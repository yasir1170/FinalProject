<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('parts_name');
            $table->text('parts_description');
            $table->string('photo');
            $table->decimal("price", 6, 2); 
            $table->integer('stock_qty')->unsigned()->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('parts');
    }
};