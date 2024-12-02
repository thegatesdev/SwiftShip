<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Packet extends Model
{
    use HasUlids;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;
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

    public function updates(): HasMany
    {
        return $this->hasMany(PacketUpdate::class);
    }
}
