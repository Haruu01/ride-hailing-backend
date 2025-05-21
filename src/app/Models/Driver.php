<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Driver extends Model
{
    protected $fillable = [
        'user_id',
        'license_number',
        'identity_number',
        'address',
        'vehicle_data',
    ];

    protected $casts = [
        'license_number' => 'encrypted',
        'identity_number' => 'encrypted',
        'address' => 'encrypted',
        'vehicle_data' => 'array', // JSON akan otomatis jadi array
        'address' => 'encrypted'
    ];
    
    

    protected $hidden = ['identity_number', 'license_number', 'address'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}
