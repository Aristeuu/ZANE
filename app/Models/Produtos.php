<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'produtos';
    protected $fillable = ['foto','nome','preco','desconto','descricao','status'];

    public static function getAll()
    {
        return $data = Produtos::select('*')
                            ->whereNUll('deleted_at')
                            ->paginate(10);
    }

    public static function getLAST()
    {
        return $data = Produtos::select('*')
                            ->whereNUll('deleted_at')
                            ->orderBy('id','desc')
                            ->paginate(5);
    }
    public static function getProduto($id)
    {
        return $data = Produtos::select('*')
                                ->whereNUll('deleted_at')
                                ->where('id',$id)
                                ->get();
    }
}
