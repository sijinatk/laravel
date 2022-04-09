<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }

    public function adminIndex()
    {
        return view('admin.auth.login');
    }
    public function adminLogin(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        $errorMessage = 'These credentials do not match our records.';
        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($credentials, $remember)) { 
            // Authentication passed...
            $user = Auth::user();
            if ($user->role=='admin') {
                return redirect()->route('admin.admin.dashboard');
            } 
            else {
                Auth::logout();
                return back()->withErrors([$errorMessage]);
            }
        }
        return back()->withErrors([$errorMessage]);
    }

     public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('admin.login.admin-index');
    }

    
}
