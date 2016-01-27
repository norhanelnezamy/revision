<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Auth ;
use \Hash;
use \Validator;
use App\User;
use Image;
use DB;

class UsersController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['except' => ['getLogin','post']]);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
      $users = DB::table('users')->paginate(10);
      return view('users.index', ['objects' => $users]);
    }

    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){

      if(Auth::attempt(['email' => $request->email ,'password' => $request->password ])){
        return redirect()->intended('users');
      }
      return view('login')->with('error', 'invalid email or password');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('users/create');
    }

    public function postCreate(Request $request)
    {
      $validate = Validator::make($request->all(), User::$rules);
     if ($validate->passes()) {
         $user = new User();
         $user->username = $request->username;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $fileName = date('Y-m-d-H:i:s') . "-" . $request->photo->getClientOriginalName();
         $path = public_path('images/' . $fileName);
         Image::make($request->photo->getRealPath())->save($path);
         $user->photo = '/images/' . $fileName;
         $user->save();
         return redirect()->intended('users');
     }
     return view('users/create')
         ->with('error', $validate->errors());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        DB::table('users')->where('id','=', $id)->delete();
        return redirect()->back();
    }
    public function getLogout(){
      Auth::logout();
      return redirect()->intended('users/login');
    }
}
