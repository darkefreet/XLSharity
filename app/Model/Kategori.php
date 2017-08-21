<?php

namespace App\Model;

use App\Model\BaseModel;
use DB;

class Kategori extends BaseModel
{
    
    protected $primaryKey = 'id';
    protected $table = 'kategori';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','icon','banner'
    ];
}
