<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depoimentos extends Model
{
    use HasFactory;

    protected $table = 'depoimentos';

    public static function getAll()
    {
        return $data = Depoimentos::select('*')
                            ->whereNUll('deleted_at')
                            ->get();
    }

    
}
