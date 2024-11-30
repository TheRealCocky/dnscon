<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    //create all crud logic
    public function loadAllUsers(){
        $all_users= user::all();
        
        return view('users',compact('all_users'));
        
    }
    public function home(){
        return view('welcome');
    }
public function loadAddUserFrom(){
return view('add-user');
}
public function AddUser(request $request){
    //perform from validation aqui
    $request->validate([
         'name'=> 'required|string',
         'BI'=>'required',
         'email'=> 'required|email|unique:users',
         'phone_number'=> 'required',
         'password'=> 'required|confirmed|min:4|max:8',
         'sexo'=>'required',
         'bancada'=> 'required',
         
    ]);
    //registar aqui os usuarios
try {
    $new_user=  new User;
    $new_user->name=  $request->name;
    $new_user->email=  $request->email;
    $new_user->phone_number=  $request->phone_number;
    $new_user->password=  Hash::make($request->password);
    $new_user->sexo=$request->sexo;
    $new_user->BI=$request->BI;
    $new_user->bancada=$request->bancada;
    $new_user->save();

    return redirect('/users')->with('success','Zungueira adicionada com sucesso');
    
   
} catch (\Exception $e) {
     return redirect('/add/user')->with('fail',$e->getMessage());
    
}
}


public function EditUser(request $request){
//editar usuarios
    $request->validate([
        'name'=> 'required|string',
        'email'=> 'required|email|unique:users',
        'phone_number'=> 'required',
        'sexo'=>'required',
        'BI'=>'required',
        'bancada'=>'required',
      
   ]);
   //registar aqui os usuarios
try {

    $update_user= User::where('id',$request->user_id)->update([
       'name'=>$request->name,
       'email'=>$request->email,
       'phone_number'=>$request->phone_number,
       'sexo'=>$request->sexo,
       'BI'=>$request->BI,
       'bancada'=>$request->bancada,
    ]);
  
   return redirect('/users')->with('success','Znungueira actualizada com sucesso');
   
  
} catch (\Exception $e) {
    return redirect('/edit/user')->with('fail',$e->getMessage());
   
}


}



public function loadEditForm($id)
{
    $user= User::find($id);
    return view('edit-user', compact('user'));
}
  
public function deleteUser($id){
    try {
        User::where('id',$id)->delete();
        return redirect('/users')->WITH('success', 'Zungueira excluida com sucesso');
    } catch (\Exception $e) {
       
        return redirect('/users')->with('fail',$e->getMessage());
    }
    
}
}
