<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('moto')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('intro')->nullable();
            $table->string('logo')->nullable();
            $table->string('pro_pic')->nullable();
            $table->text('location')->nullable();
            $table->string('address')->nullable();
            $table->string('copyright')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('tw_link')->nullable();
            $table->string('ln_link')->nullable();
            $table->string('vb_link')->nullable();
            $table->string('wa_link')->nullable();
            $table->string('sk_link')->nullable();
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
        Schema::dropIfExists('company_profiles');
    }
}
