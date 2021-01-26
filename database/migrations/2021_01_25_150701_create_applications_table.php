<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->comment('企业');
            $table->bigInteger('device_id')->comment('设备');
            $table->bigInteger('plugin_id')->comment('插件');
            $table->bigInteger('duration_id')->comment('时长');
            $table->bigInteger('bandwidth_id')->default(0)->comment('带宽');
            $table->bigInteger('stauts')->default(0);
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
        Schema::dropIfExists('applications');
    }
}
