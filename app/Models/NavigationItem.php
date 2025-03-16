<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationItem extends Model
{
    protected $fillable = ['parent_id', 'link_id', 'name', 'link_type', 'external_link','position'];

    public function link()
    {
        switch ($this->link_type) {
            case 'page':
                return $this->belongsTo(Page::class, 'link_id');
            case 'post':
                return $this->belongsTo(Post::class, 'link_id');
            case 'category':
                return $this->belongsTo(Category::class, 'id');
            default:
                return null;
        }
    }

}

