<?php

namespace App\Enums;

enum Role: string
{
    case SuperAdmin = 'super-admin';
    case Admin      = 'admin';
    case Manager    = 'manager';
    case User       = 'user';
}