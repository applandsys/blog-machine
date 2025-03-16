<?php

if (!function_exists('siteSetting')) {
    function siteSetting($paginate=10)
    {
        return \App\Models\SiteSetting::first();
    }

    function socialLinks()
    {
        return \App\Models\SocialLink::all();
    }
}

