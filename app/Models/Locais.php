<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locais extends Model
{
    use HasFactory;

    protected $table = 'locais';

    public static function getAll()
    {
        return $data = Locais::select('*')
                            ->whereNUll('deleted_at')
                            ->get();
    }
}