<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{
    //////////////////////////////////////////////////////////////////////////////////////////
    public function update(Request $request, $id)
{
    $apprentices = Apprentice::find($id);
    if (!$apprentices) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }
    
    $apprentices->name = $request->input('nombre');
    $apprentices->document_number = $request->input('edad');
    $apprentices->city = $request->input('nombre');
    $apprentices->email = $request->input('edad');
    $apprentices->telephone = $request->input('nombre');
    
    
    $datos->save();
    
    return response()->json(['message' => 'Registro actualizado con éxito'], 200);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////7
    public function apprentices()
    {
        $apprentices = DB::table('apprentices')->get();
        return response()->json($apprentices);
    }
    ////////////////////////////////////////////////////////////////////////////////////

    public function users(Request $request){

        if($request->has('active')){
            $users = User::where('active',true)->get();
        }else{
            $users = User::all();
        }


        return response()->json($users);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    

    public function login(Request $request){

        $response = ["status"=>0,"msg"=>""];

        $data = json_decode($request->getContent());

        $user = User::where('email',$data->email)->first();

        if($user){

            if(Hash::check($data->password,$user->password)){

                $token = $user->createToken("example");

                $response["status"] = 1;
                $response["msg"] = $token->plainTextToken;

            }else{
                $response["msg"] = "Credenciales incorrectas.";
            }

        }else{
            $response["msg"] = "Usuario no encontrado.";
        }

        return response()->json($response);        
    }

}