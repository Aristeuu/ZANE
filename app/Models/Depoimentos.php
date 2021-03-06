<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Depoimentos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'depoimentos';

    protected $fillable = ['foto','nome','profissao','texto','status'];

    public static function getAll()
    {
        return $table = Depoimentos::select('*')
                                    ->whereNUll('deleted_at')
                                    ->paginate(9);
    }
    
}
