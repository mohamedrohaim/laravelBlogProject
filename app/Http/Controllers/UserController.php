<?php
use Illuminate\Support\Facades\Route;

namespace App\Http\Controllers;
use Cookie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $inputs=$request->except('_token');
        $inputs['password']=Hash::make($inputs['password']);
        if($request->hasFile('image')){
            $inputs['image']=Storage::disk('public')->put('files',$request->file('image'));

        }
        User::Query()->create($inputs);
        if (Auth::attempt($request->only('email','password'))) {
            return redirect()->route('home');

        }else{
            return  redirect()->back();
        }

    }
    public function login(Request $request)
    {

        if (Auth::attempt($request->only('email','password'))) {
            return redirect()->route('home');
        }else{
            return  redirect()->back();
        }

    }
    public function getLogout() {
        \auth()->logout();

        return redirect()->route('home');
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('blog.admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('blog.home.editProfile',compact('user'));
    }
    public function showUser(User $item)
    {
        return view('blog.admin.editUsers',compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        //return view('blog.home.editProfile',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $input=$request->except('_token','_method');
       $input['password']=Hash::make( $input['password']);
       
        if ($request->hasFile('image')) {
            $input['image']=Storage::disk('public')->put('files',$request->file('image'));
        }
        $user->update($input);
        return redirect()->route('home');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('showUsers')->with('success','user addeletedded successfully');
      }

      public function permition(User $user)
    {
        $input=$request->except('_token','_method');

        $user->update($input);
        return redirect()->route('showUsers');
        //
    }


}
