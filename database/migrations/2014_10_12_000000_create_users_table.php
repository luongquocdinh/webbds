<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->tinyInteger('status')->default(0); // 0 inactive, 1 active, 2 ...
            $table->integer('updated_at')->nullable();
            $table->integer('created_at')->nullable();
            $table->rememberToken();
        });
        // Insert user login first
        DB::table('users')->insert(
            array(
                'id' => 1,
                'email' => 'admin@vuongphatland.com',
                'password' => bcrypt('admin@123451'),
                'status' => 1,
                'created_at' => Carbon::now()->timestamp,
                'updated_at' => Carbon::now()->timestamp
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
