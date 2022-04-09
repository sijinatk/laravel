<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use App\Models\FormSetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


class UserRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_setups=FormSetup::orderBy('display_order')->get();
         return view('user_form',compact('form_setups'));  
    }

    public function storeRegistration(Request $request)
    { 
        foreach ($request->input() as $key => $value) {
            if($key == '_token' || $key == '_method'){
        
       }else{
         if (Schema::hasColumn('user_registration', $key)) {
            $newColumnType = 'string';
            $newColumnName = $key;

            Schema::table('user_registration', function (Blueprint $table) use ($newColumnType, $newColumnName) {
                    $table->$newColumnType($newColumnName);
                });
         }
       }
   }die();
       return redirect()->route('index')->with('successMessage', 'User Added');
    }

    

    
}
