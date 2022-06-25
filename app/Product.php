<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('ctype', ['red', 'blue','green']);   
            $table->enum('stype', ['xl', 'sm']); 
            $table->string('PriceRange');                                                            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}