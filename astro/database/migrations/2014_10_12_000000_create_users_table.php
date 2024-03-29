<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('password');
            $table->date('birthdate')->nullable()->format('Y-m-d');
            $table->enum('gender',['Male', 'Female'])->nullable();
            $table->string('transaction_id');
            $table->string('payment_method');
            $table->string('full_name');
            $table->string('facebook');
            $table->string('religion');
            $table->string('highest_qualification');
            $table->string('major_subject');
            $table->string('hobbies');
            $table->string('membertype');
            $table->string('member_status');
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
        Schema::dropIfExists('users');
    }
}
