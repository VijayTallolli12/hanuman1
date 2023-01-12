<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        //
    }

    public function login(){
        $data=[];
        if($this->request->getMethod()=="post"){
            $rules=[
                "email"=>"required|valid_email|min_length[6]|max_length[50]",
                "password"=>"required|min_length[4]|max_length[50]|validateAdmin[email,password]"
            ];
            $errors=[
                "password"=>["validateAdmin"=>"Email or password don't match"]
            ];
            if(!$this->validate($rules,$errors)){
                return view("admin/login",["validation"=>$this->validator]);
            }else{
                $model=new AdminModel();
                $admins=$model->where("email",$this->request->getVar("email"))->first();
                $this->setUserSession($admins);
                return redirect()->to(base_url("admin/index"));
            }
        }
    }
    public function logout(){
        // 
         session()->destroy();
        return redirect()->to('login');
    }
    private function setUserSession($user){
        $data=[
            'id'=>$user['id'],
            'Aname'=>$user['name'],            
            'Aemail'=>$user['email'],
            'isLoggedIn'=>true
        ];
        session()->set($data);
        return true;
    } 

    public function dashboard(){
        return view("admin/dashboard");
    }

    public function profile(){
        $data=[];
        $model=new AdminModel();
        $admins=$model->where("id",session()->get("id"))->first();
        return view("admin/profile",$admins);
    }
}
