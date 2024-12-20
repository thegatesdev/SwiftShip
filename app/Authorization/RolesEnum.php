<?php

namespace App\Authorization;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case SENDER = 'sender';
    case WAREHOUSE = 'warehouse';
    case DELIVERY = 'delivery';
}