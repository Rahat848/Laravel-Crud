<?php
//controller
namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
class NewUsers extends Controller
{
    function index(){
        return view('index');
    }

    //insert
    function store(Request $request){
        $users = new Users;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' =>'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = $request['password'];
        $users->save();

       return redirect('home');
    }

    //delete
    function delete($id){
      $users = Users::find($id);
        if(!is_null($users)){
            $users->delete();
            return redirect()->back();
        } else{
            return redirect('home');
        }
    }

    //force delete or permanent delete
    function forceDelete($id){
        $users = Users::withTrashed()->find($id);
            $users->forceDelete();
            return redirect()->back();
    }
    //trash
    function trash(){
        $users = Users::onlyTrashed()->get();
        $data = compact('users');
        return view('users-trash')->with($data);
    }

    //restore
    function restore($id){
        $users = Users::withTrashed()->find($id);
        if(!$users == null){
            $users->restore();
        }

        return redirect('home');
    }
    //edit
    function edit($id){
        $users = Users::find($id);
          if(!is_null($users)){
              $url = url('/update').'/'.$id;
              $data = compact('users','url');
              return view('usersupdateform')->with($data);
          } else{
              return redirect('home');
          }
      }
    //update
    function update($id,Request $request){
            $users = Users::find($id);
            $users->name = $request['name'];
            $users->email = $request['email'];
            $users->password = $request['password'];
            $users->save();
            return redirect('home');
    }

    //view korci
    function home(Request $request){
        $search = $request['search'] ?? null;
        if($search){
            //1 user search;
            $users = Users::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();

        }else{
        // $users  = Users::all();
        $users  = Users::paginate(5);

        }
        $data = compact('users','search');
        return view('home')->with($data);

    }

    function about(Request $request){
        $search = $request['search'] ?? null;
        if($search){
            //1 user search;
            $users = Users::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
            $data = compact('users','search');
            return view('home')->with($data);
        }else{

            return view('about');
        }

    }
    function contact(Request $request){
        $search = $request['search'] ?? null;
        if($search){
            //1 user search;
            $users = Users::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
            $data = compact('users','search');
            return view('home')->with($data);
        }else{

            return view('contact');
        }

    }
}
