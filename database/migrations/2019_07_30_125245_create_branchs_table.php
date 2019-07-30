<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('branchs', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('address');
      $table->string('IFSC');
      $table->bigInteger('bank_id')->unsigned();
      $table->foreign('bank_id')->references('id')->on('banks')
            ->onDelete('cascade');
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
    Schema::dropIfExists('branchs');
  }
}
