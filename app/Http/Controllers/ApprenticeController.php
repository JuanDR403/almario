<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use Validator;
class ApprenticeController extends Controller
{
    
    public function index(){
        $apprentices = Apprentice::get();
        $data = ['title'=>'Apprentices','content'=>'los mejores xd','apprentices'=>$apprentices];
        return view('apprentice.index',$data);
    }
    
    public function getapprenticeadd(){
        $data = ['title'=>'Agregar Aprendiz'];
        return view('apprentice.add',$data);
        //return "Abrir fromulario para agregar ";


    }
    public function postapprenticeadd(Request $request){
        $rule=[
            'document_number'=>'required|integer|min:6',
            'name'=>'required|min:7',
            'city'=>'required|min:3',
            'email'=>'required|email',
            'telephone'=>'required|integer'
        ];
        $message=[
            'document_number.required'=>'debe digitar el numero del documento',
            'document_number.interger'=>'Debe ser un numero entero',
            'document_number.min'=>'el numero de documento debe ser de minimo 6 numeros',
            'name.required'=>'debe digitar el nombre',
            'name.min'=>'el nombre debe tener minimo 7 numeros',
            'city.required'=>'Debe ingresar una ciudad',
            'city.min'=>'Debe tener por lo menos 3 caracteres',
            'email.required'=>'Se debe ingresar un correo electronico',
            'email.email'=>'Deve ser una direccion de correo electronico',
            'telephone.required'=>'Nuemro de telefono requerido',
            'telephone.interger'=>'Debe ser un numero entero',
        ];
        $validator = Validator::make($request->all(),$rule,$message);
        if($validator->fails()):
            return back()->withInput()->withErrors($validator)->with('message_error','se ha producido un error');
        else:
            $a = new Apprentice;
            $a->document_number = $request->input('document_number');
            $a->name = $request->input('name');
            $a->city = $request->input('city');
            $a->email = $request->input('email');
            $a->telephone = $request->input('telephone');
            if($a->save() ) {
                $apprentices = Apprentice::get();
                $data = ['title'=>'Apprentices','content'=>'los mejores xd','apprentices'=>$apprentices];
                return view('apprentice.index',$data);
        }
            endif;

    



       
    }
    public function getapprenticeedit($id){
        //return "Abrir fromulario para editar ";
        $a = Apprentice::findOrFail($id);
        //return $a;




        $data = ['title'=>'Modificar aprendiz', 'apprentice'=>$a];
        return view('apprentice.edit',$data);




    }
    public function postapprenticeedit(Request $request, $id){
        //return "Edita aprendiz ";
        $a = Apprentice::findOrFail($id);
        $a->document_number = $request->input('document_number');
        $a->name = $request->input('name');
        $a->city = $request->input('city');
        $a->email = $request->input('email');
        $a->telephone = $request->input('telephone');
        if($a->save() ) {
            $apprentices = Apprentice::get();
            $data = ['title'=>'Apprentices','content'=>'los mejores xd','apprentices'=>$apprentices];
            return view('apprentice.index',$data);
    

        }










    }
    public function getapprenticedelete($id){
        $a = Apprentice::findOrFail($id);
        $a->delete();
        $apprentices = Apprentice::get();
        $data = ['title'=>'Apprentices','content'=>'los mejores xd','apprentices'=>$apprentices];
        return view('apprentice.index',$data);





    }
}
