<?php
use App\Models\NavigationItem;

if (!function_exists('navigationItems')) {
    function navigationItems()
    {
        return NavigationItem::all();
    }

    function navigationLink($link_type,$id=1,$slug='slug')
    {
        switch($link_type){
            case 'category':
                return route('front.category', [$id,$slug]);
                break;
            case 'post':
                return route('front.post', [$id,$slug]);
                break;
            case 'page': route('front.page',  [$id,$slug]);
            default:
                return  route('front.homepage',  [$id,$slug]);
        }
    }
}

