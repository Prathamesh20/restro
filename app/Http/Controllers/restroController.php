<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\restaurant;
use App\User;
use Session;
use Crypt;
class restroController extends Controller
{
    public function index(){
        return view('home');
    }

    public function list(){
        $data=restaurant::all();
        return view('list',["data"=>$data]);
    } 
    public function add(Request $request){
        $resto=new restaurant();
        $resto->name=$request->name;
        $resto->email=$request->email;
        $resto->address=$request->address;
        $resto->created_at=date("d-m-Y");
        $resto->updated_at=date("d-m-Y");
        $resto->save();
        $request->session()->flash('status','Restaurant Submitted Successfully');
        return redirect('list');

    }
    public function delete($id){
        restaurant::find($id)->delete();
        $request->session()->flash('state','Restaurant deleted Successfully');
        return redirect('list');
    }
    public function edit($id){
       $data=restaurant::find($id);
       return view('edit',['data'=>$data]);
   
    }
    public function update(Request $request){
        
        $resto=restaurant::find($request->input('id'));
        $resto->name=$request->input('name');
        $resto->email=$request->input('email');
        $resto->address=$request->input('address');
        //$resto->created_at=$request->created_at;
        $resto->updated_at=date("d-m-Y");
       $resto->save();
       return redirect('list');
    }
    public function register(Request $req){
        //echo Crypt::encrypt('12345');
        $user=new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->contact=$req->input('contact');
        $user->password=Crypt::encrypt($req->input('password'));
        //$user->password=($req->input('password'));
        $user->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('home');
    }
    public function login(Request $req){
       $user=User::where('email',$req->input('email'))->get();
       if(Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
           $req->session()->put('user',$user[0]->name);
           return redirect('home'); 
         
        }
        else{
            $req->session()->flash('log','Wrong email id or password');

             return redirect('login');
        }
    


        
    }

}
