<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    //
    protected $table ='sub_categories';

    public function category()
    {
        return $this->hasMany('App\Models\Backend\category');
    }
}
