<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignments', function (Blueprint $table) {
            $table->id();
            $table->string('bank');
            $table->date('date');
            $table->text('detail');
            $table->string('evidence')->nullable();
            $table->timestamps();
        });

        Schema::table('consignments', function (Blueprint $table) {
            $table->foreignId('advisors_id')
                ->constrained('advisors')
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
        Schema::dropIfExists('consignments');

        Schema::table('advisors', function (Blueprint $table) {
            $table->dropForeign('consignments_advisors_id_foreign');
        });
    }
}
