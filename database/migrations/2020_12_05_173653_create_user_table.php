<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->mediumInteger('id',8);
            $table->string('username',30)->nullable();
            $table->string('email',50)->uniqid();
            $table->char('password',60)->unique();
            $table->string('mobile')->nullable();
            $table->string('name',30)->nullable();
            $table->string('surname',30)->nullable();
            $table->string('job_title')->nullable();
            $table->text('bio')->nullable();
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
        Schema::dropIfExists('user');
    }
}
