<?php

namespace App\Authorization;

enum PermissionsEnum: string
{
    case PACKET_TYPE_CREATE = 'packet_type_create';
    case PACKET_CREATE = 'packet_create';
    case TRAFFIC_VIEW = 'traffic_view';
}