<?php

namespace App\Http\Controllers;


use App\Models\User;

use App\Models\Producting;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class product extends Controller
{
    public function index(){
             

        return view('viewing.index',[
            'productss'=>'product name',
            'product'=>producting::latest()->filter(request(['tagi','search']))->simplePaginate(4),
        ]);
                    }
   public function  show(producting $producting){

    return view('viewing.show',[
        'product1'=>$producting
                   ]);
   }
   public function create(){
    return view('viewing.create');
   }

public function store(Request $request){
    // dd($request->file('logo'));
    $form=$request->validate([
      'title'=>'required',
      'location'=>'required',
      'website'=>'required',
      'email'=>['required','email'],
      'tags'=>'required',
      'description'=>'required',
     'company'=>['required',Rule::unique('productings','company')],
    ]);

if($request->hasFile('logo')){

    $form['logo']=$request->file('logo')->store('logos','public');
}
    $form['user_id']=auth()->id();

    producting::create($form);
    return redirect('/')->with('message','list created successfully');
}

public function edit(producting $producting){

    // dd($producting);
    return view('viewing.edit',[
        'product'=>$producting
    ]);
   }

   public function update(Request $request,producting $producting){
    if($producting->user_id !=auth()->id()){
        abort('403','Unauthorised action');
    }
 
    $form=$request->validate([
      'title'=>'required',
      'location'=>'required',
      'website'=>'required',
      'email'=>['required','email'],
      'tags'=>'required',
      'description'=>'required',
     'company'=>'required',
                       ]);

    if($request->hasFile('logo')){

    $form['logo']=$request->file('logo')->store('logos','public');
                             };

    $producting->update($form);
    return back()->with('message','list updated   successfully');
}

public function delete(producting $producting){
    if($producting->user_id !=auth()->id()){
        abort('403','Unauthorised action');
    }
  $producting->delete();
  return redirect('/')->with('message','list deleted successfully');
}


public function manage(){
    return view('viewing.manage',[
           'product'=>auth()->user()->product()->get()
    ]);
}

}
