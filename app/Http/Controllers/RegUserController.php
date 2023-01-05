<?php

namespace App\Http\Controllers;

use App\Models\regForm;
use Illuminate\Http\Request;

class RegUserController extends Controller
{
    public function index(){
        $allUsers = regForm::all();
        return view('test.index',[
            'allUsers' => $allUsers,
        ]);
    }

    public function create(){
        return view('test.testloginForm');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'emailAddress' => 'required|email|unique:reg_forms',
            'password' => 'required|min:6'
        ]);

        $regUser = new regForm();
        $regUser->name = $request->name;
        $regUser->emailAddress = $request->emailAddress;
        $regUser->userType = $request->userType;
        $regUser->password = $request->password;
        $regUser->save();

        $notification = array(
            'message' => 'Thanks For Your Registration',
            'alert-type' => 'success'
        );

        return redirect('/index')->with($notification);
    }

    public function show($id){
        //
    }

    public function edit($id){
        $regDataById = regForm::where('id',$id)->first();
        return view('test.editLoginForm', ['regDataById'=>$regDataById]);
    }

    public function update(Request $request){
        $regUserById = regForm::find($request->regDataById);

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        $regUserById->name = $request->name;
        $regUserById->emailAddress = $request->emailAddress;
        $regUserById->userType = $request->userType;
        $regUserById->password = $request->password;
        $regUserById->save();

        $notification = array(
            'message' => 'Thanks For Your Registration',
            'alert-type' => 'success'
        );

        return redirect('/index')->with($notification);
    }

    public function destroy($id){
        $regUser = regForm::find($id);
        $regUser->delete();
        return redirect('/index')->with('deleteMessage','User info Delete Successfully');
    }
}
