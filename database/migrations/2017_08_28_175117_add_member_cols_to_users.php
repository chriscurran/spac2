<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMemberColsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('spouse',128)->default('');

            $table->string('minor1_name',128)->default('');
            $table->string('minor2_name',128)->default('');
            $table->string('minor3_name',128)->default('');
            $table->string('minor4_name',128)->default('');
            $table->string('minor5_name',128)->default('');

            $table->date('minor1_age')->nullable()->default(null);
            $table->date('minor2_age')->nullable()->default(null);
            $table->date('minor3_age')->nullable()->default(null);
            $table->date('minor4_age')->nullable()->default(null);
            $table->date('minor5_age')->nullable()->default(null);

            $table->string('addr',512)->default('');
            $table->string('city',64)->default('');
            $table->string('state',64)->default('');
            $table->string('zip',64)->default('');

            $table->string('phone1',20);
            $table->string('phone2',20);
            $table->string('cell',20);

            $table->date('joined')->nullable()->default(null);
            $table->date('renew')->nullable()->default(null);

            $table->string('newsletter_delivery',8)->default('email');
            $table->string('membership_type',8)->default('s');

            $table->string('office1',64)->default('');
            $table->string('office1sort',8)->default('');
            $table->string('office2',64)->default('');
            $table->string('office2sort',8)->default('');
            $table->string('office3',64)->default('');
            $table->string('office3sort',8)->default('');

            $table->string('auth',128);

            $table->unsignedInteger('flgs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
