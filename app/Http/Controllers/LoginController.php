<?php

namespace App\Http\Controllers;

use App\Models\AdminsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginpage(){
        return view('clientend.login');
    }
    public function signin(Request $request){
        $request->validate([            
  
            'loginemail' => ['required'],
            'loginpassword' => ['required','min:6','max:12']]);

        session()->regenerate();
        $user=new AdminsModel();

        $userlogin = $request->input('loginemail');
        $password =$request->input('loginpassword');
        $data_user = $user->where('email', $userlogin)->first();

        if ($data_user && $data_user['is_deleted']==0) {

            if (Hash::check($password,$data_user['password'])) {
                $sessionData = [
                    'user_id' => $data_user['adminid'],
                    'email' => $data_user['email'],
                    'name'  => $data_user['adminname'],
                    'logged' => TRUE,                    
                ];
                session($sessionData);

                return redirect('dashboard')->with('status','Logged In Successfully.');
               
            } 
            else {
                return redirect('login')->with('status','Wrong password. Please enter correct password');
            }
        }
        else {
            return redirect('login')->with('status','User Does Not Exist. Please Confirm Credentials or Register');
        }
    }
    public function logout()
    {

        session()->flush();

        return redirect('login');
    }
}
