<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('email')->unique();
            
            $table->string('fathers_name')->default('Empty');
            $table->string('mothers_name')->default('Empty');
            $table->string('date_of_birth')->default('Empty');
            $table->string('age')->default('Empty');
            $table->string('marital_status')->default('Empty');
            $table->string('gender')->default('Empty');
            $table->string('blood_group')->default('Empty');
            $table->string('place_of_birth')->default('Empty');
            
            $table->string('phone')->default('Empty');
            $table->longText('addresss')->default('Empty');
            
            $table->string('school')->default('Empty');
            $table->string('school_cgpa')->default('Empty');
            $table->string('collage')->default('Empty');
            $table->string('collage_cgpa')->default('Empty');
            $table->string('university')->default('Empty');
            $table->string('univeristy_cgpa')->default('Empty');

            $table->string('company_name')->default('Empty');
            $table->string('company_addresss')->default('Empty');
            $table->string('job_title')->default('Empty');
            
            $table->string('document_name')->default('Empty');
            $table->string('document_img')->default('Empty');


            $table->integer('leave_total')->default(30);
            $table->integer('leave_count')->default(0);
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
