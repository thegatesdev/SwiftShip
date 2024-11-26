<?php

namespace App\Models;

use App\Data\PacketStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PacketUpdate extends Model
{
    protected $fillable = [
        'packet_id',
        'status',
    ];
    protected $casts = [
        'status' => PacketStatus::class,
    ];

    public function packet(): BelongsTo
    {
        return $this->belongsTo(Packet::class);
    }
}
