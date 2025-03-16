<?php

if (!function_exists('siteSetting')) {
    function siteSetting($paginate=10)
    {
        return \App\Models\SiteSetting::first();
    }
}

