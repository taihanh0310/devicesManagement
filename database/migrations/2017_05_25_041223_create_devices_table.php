<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Thiết bị
 */
class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('device_type_id');
            $table->integer('os_type_id');
            $table->string('device_name',255);
            $table->string('model_name',255);
            $table->string('uuid',50);
            $table->string('imei',50);
            $table->string('serial_number',50);
            $table->integer('device_capacity'); // Dung luong
            $table->integer('total_ram'); // Dung luong
            $table->integer('status');
            $table->string('wifi_mac_address',255);
            $table->string('bluetooth_mac_address',255);
            $table->string('lan_mac_address',255);
            $table->string('ip_address',255);
            $table->integer('created_by');
            $table->integer('modified_by');
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
        Schema::dropIfExists('devices');
    }
}
