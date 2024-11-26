<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Packet extends Model
{
    use HasUlids;

    protected $timestamps = false;
    protected $fillable = [
        'packet_type_id',
        'receiver_address_id',
        'receiver_region',
        'receiver_email',
        'is_mailbox',
        'needs_signature',
        'warehouse_location',
    ];
    protected $casts = [
        'is_mailbox' => 'boolean',
        'needs_signature' => 'boolean',
    ];

    public function packetType(): BelongsTo
    {
        return $this->belongsTo(PacketType::class);
    }

    public function receiverAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
