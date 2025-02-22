<?php
use App\Models\NavigationItem;

if (!function_exists('navigationItems')) {
    function navigationItems()
    {
        return NavigationItem::all();
    }
}

