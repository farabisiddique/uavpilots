<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('user_data_id');

            $table->foreign('user_data_id')->references('id')->on('users');

            // $table->unsignedBigInteger('user_data_id');
            // $table->foreignId('user_data_id')->constrained('users');            
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->longText('description');
            $table->string('state',30);
            $table->string('country',30);
            $table->string('industry',30);
            $table->string('photo_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('instagram_link')->nullable();
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
        Schema::dropIfExists('user_data');
    }
}
