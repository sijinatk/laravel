<?php

namespace App\Http\Controllers;

use App\Models\FormSetup;
use App\Models\FormElements;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$form_setups=FormSetup::orderBy('display_order')->get();
        return view('admin/form_setup',compact('form_setups'));              
    }

    public function add_element(Request $request)
    {
    	$form_elements=FormElements::all();
        return view('admin/add_element',compact('form_elements'));              
    }

    public function storeElements(Request $request)
    {
   

         $request->validate([
            'element' => 'required|max:255',
            'label_name' => 'required|max:255',
            'name_name' => 'required|max:255',
            'id_id' => 'required|max:255'
        ],
        [
      'element.required'=> 'The ELement is Required', 
      'name_name.required'=> 'The Name is Required',   
      'id_id.required'=> 'The Id is Required',   
       ]
    );
        
        $form_setup = new FormSetup();
        $form_setup->type = $request->element;   
        $form_setup->label = $request->label_name;   
        $form_setup->name = $request->name_name;   
        $form_setup->input_id = $request->id_id;     
        $form_setup->save();
 
return redirect()->route('admin.form-setup')->with('successMessage', 'Elements Added');
    
}
}
