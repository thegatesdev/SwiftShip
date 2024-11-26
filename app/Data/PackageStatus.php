<?php

namespace App\Data;

enum PackageStatus : string
{
    case INVALID = 'invalid';
    case WH_PENDING = 'wh_pending';
    case WH_ARRIVED = 'wh_arrived';
    case DL_PENDING = 'dl_pending';
    case DL_ARRIVED = 'dl_arrived';
    case RETOUR = 'retour';
}