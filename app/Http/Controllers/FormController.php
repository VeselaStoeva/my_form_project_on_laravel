<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormDate;

class FormController extends Controller
{
    public function shoewForm(){
        return view('form');
    }
    public function proccessForm(Request $request){
          $validateData=$request->validate([
              'name'=>'required|string|max:255',
              'email'=>'required|email|unique:form_dates,email',
          ]);
          FormDate::create($validateData);
          return redirect()->route('form.show')->with('success','Form submited successfully.');
    }
}
