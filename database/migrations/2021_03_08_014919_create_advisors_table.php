<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('advisors', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('CASCADE');
        });

        Schema::table('advisors', function (Blueprint $table) {
            $table->foreignId('cities_id')
                ->constrained('cities')
                ->onUpdate('CASCADE');
        });

        Schema::table('advisors', function (Blueprint $table) {
            $table->foreignId('channels_id')
                ->constrained('channels')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advisors');

        Schema::table('advisors', function (Blueprint $table) {
            $table->dropForeign('advisors_users_id_foreign');
            $table->dropForeign('advisors_cities_id_foreign');
            $table->dropForeign('advisors_channels_id_foreign');
        });
    }
}
