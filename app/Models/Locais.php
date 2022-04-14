<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locais extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'locais';
    protected $fillable = ['local','preco','status'];

    public static function getAll()
    {
        return $data = Locais::select('*')
                            ->whereNUll('deleted_at')
                            ->paginate(10);
    }

    public static function get()
    {
        return $data = Locais::select('*')
                            ->whereNUll('deleted_at')
                            ->get();   
    }

    public static function getLocal($id)
    {
        return $data = Locais::select('*')
                            ->whereNUll('deleted_at')
                            ->where('id',$id)
                            ->first();
    }
}
