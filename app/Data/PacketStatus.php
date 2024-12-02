<?php

namespace App\Data;

enum PacketStatus : string
{
    case INVALID = 'invalid';
    case WH_PENDING = 'wh_pending';
    case WH_ARRIVED = 'wh_arrived';
    case DL_PENDING = 'dl_pending';
    case DL_ARRIVED = 'dl_arrived';
    case RETOUR = 'retour';

    public function label(): string
    {
        return match ($this) {
            static::INVALID => 'Fout',
            static::WH_PENDING => 'Verzonden naar SpeedyPacket',
            static::WH_ARRIVED => 'Aangekomen bij SpeedyPacket',
            static::DL_PENDING => 'Aan het bezorgen',
            static::DL_ARRIVED => 'Bezorgd',
            static::RETOUR => 'Met retour verzonden',
        };
    }
}