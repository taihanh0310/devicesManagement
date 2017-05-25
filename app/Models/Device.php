<?php

namespace App\Models;


class Device extends BaseModel
{
    protected $table = 'devices';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_id',
        'device_type_id',
        'os_type_id',
        'device_name',
        'model_name',
        'uuid',
        'imei',
        'serial_number',
        'device_capacity',
        'total_ram',
        'status',
        'wifi_mac_address',
        'bluetooth_mac_address',
        'lan_mac_address',
        'ip_address',
        'created_by',
        'modified_by'
    ];
}
