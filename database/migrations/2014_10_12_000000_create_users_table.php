<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
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
            $table->string('firstName');
            $table->string('lastName')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('countryId')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(0);
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User;
        $user->firstName = 'James';
        $user->lastName = 'Githiora';
        $user->surname = 'Maina';
        $user->email = 'jaygithiora@gmail.com';
        $user->phone = '0791162496';
        $user->password = \Hash::make('12345');
        $user->role = 1;
        $user->save();
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
};
