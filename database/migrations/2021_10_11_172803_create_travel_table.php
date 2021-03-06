<?php

use App\Models\Travel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20);
            $table->string('email');
            $table->string('adults', 4);
            $table->string('children', 4)->nullable();
            $table->json('children_ages')->nullable();
            $table->enum('type', [Travel::IDAYVUELTA, Travel::SOLOIDA])->default(Travel::IDAYVUELTA);
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('hotel')->nullable();
            $table->string('class')->nullable();
            $table->date('start_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('travel');
    }
}
