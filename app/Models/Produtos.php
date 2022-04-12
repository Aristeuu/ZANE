<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public static function getAll()
    {
        return $data = Produtos::select('*')
                            ->whereNUll('deleted_at')
                            ->get();
    }

    public static function getLAST()
    {
        return $data = Produtos::select('*')
                            ->whereNUll('deleted_at')
                            ->orderBy('id','desc')
                            ->paginate(5);
    }
}
