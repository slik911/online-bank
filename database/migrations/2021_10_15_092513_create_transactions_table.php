<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('type');
            $table->string('ref');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('beneficiary');
            $table->string('beneficiary_account');
            $table->string('beneficiary_bank')->nullable();
            $table->string('amount');
            $table->string('narration');
            $table->string('date');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('transactions');
    }
}
