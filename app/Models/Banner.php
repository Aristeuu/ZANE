<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    
    protected $table = 'banners';

    public static function getAll()
    {
        return $data = Banner::select('*')
                            ->whereNUll('deleted_at')
                            ->get();
    }
}
