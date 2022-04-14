<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locais;

class LocaisController extends Controller
{
    public function index()
    {
        $data = Locais::getAll();

        return view('cms.locais', compact('data'));
    }
    

    public function store(Request $request)
    {
        try {
        
            
            $dados = [
                "local" => $request->local,
                "preco" => $request->preco,              
                "status" => '1'                   
                
            ];     
                                        
            $id = Locais::create($dados)->id;
        
            $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
            return redirect()->back();                        
            

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        try {
           
               
                $dados = [
                    "local" => $request->local,
                    "preco" => $request->preco,              
                    "status" => '1'                   
                    
                ];
               
                $data = Locais::find($id);
                $data->local    = $dados['local'];
                $data->preco = $dados['preco'];                                    
                $data->status    = $dados['status'];
               
                
                $data->update();
             
                $request->session()->flash('swalDefaultSuccess', 'Dados atualizados com sucesso.'); 
                return redirect()->back();

                           
             

        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function destroy(Request $request,$id)
    {
        $delete = Locais::find($id)->delete();
        if($delete)
        {
            $request->session()->flash('swalDefaultSuccess', 'Registo eliminado com sucesso');
            return redirect()->back();
        }
        else
        {
            $request->session()->flash('swalDefaultError', 'Registo não eliminado');
            return redirect()->back();
        }

    }

}
