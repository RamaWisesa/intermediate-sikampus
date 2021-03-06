<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('staffs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->date('dob');
        $table->string('phone');
        $table->enum('gender',['Laki-laki', 'Perempuan']);
        $table->string('username');
        $table->string('password');
        $table->rememberToken();
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
        Schema::dropIfExists('staffs');
    }
}
