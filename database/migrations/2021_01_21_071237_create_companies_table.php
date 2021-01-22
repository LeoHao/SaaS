<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->bigInteger('pid')->comment('父id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('plugins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('插件名');
            $table->string('present')->comment('介绍');
            $table->string('description')->comment('说明');
            $table->timestamps();
        });

        Schema::create('company_plugins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('plugin_id');
            $table->bigInteger('company_id');
            $table->bigInteger('status')->comment('0:已过期(未开通|关闭) | 1:申请 | 2:通过');
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
        Schema::dropIfExists('companies');
        Schema::dropIfExists('plugins');
        Schema::dropIfExists('company_plugins');
    }
}
