<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Customer;

class AdminController extends Controller
{
    
    public function index(){
        if(Session::get('loginAdmin')){
            return redirect('/admin/dashboard');
        }else{
            return redirect('/admin/login');
        }
    }

    public function login_index(){
        $customer = Customer::count();
        if(Session::get('loginAdmin')){
            return redirect('/admin/dashboard');
        }else{
            return view('/Admin/loginAdmin', compact('customer'));
        }
    }

    public function login_post(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = Admin::where('username', $username)->first();
        
        if($data){
            if(Hash::check($password, $data->password)){
                Session::put('loginAdmin', TRUE);
                Session::put('username', $data->username);
	            return redirect('/admin/dashboard')->with('alert success', 'Login berhasil');
            }else{
                return redirect('/admin/login')->with('alert', 'Login Gagal / Password Salah');
            }
        }else{
            return redirect('/admin/login')->with('alert', 'Login Gagal / Username Salah');
        }
    }

    public function logout(){
        if(!Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert', 'Anda harus login terlebih dulu');
        }else{
            Session()->forget('loginAdmin');
            return redirect('admin/login')->with('alert','Anda sudah logout');	}
    }

    public function dashboard() {
        if(!Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert', 'Anda harus login terlebih dulu');
        }else{
            $member_count = Customer::all()->count();

			return view('/Admin/dashboardAdmin', compact('member_count'));
		}
    }

    public function ganti_password_index(){
        if(!Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert', 'Anda harus login terlebih dahulu');
        }elseif(Session::get('loginAdmin')){
            $username = Session::get('username');
            return view('Admin/gantiPassword', compact('username'));
        }
    }

    public function ganti_password_post(Request $request){
        $password = Admin::where('username', $request->username)->value('password');

        if (Hash::check($request->password_lama, $password)) {
            if($request->password_baru == $request->password_baru_ulang){
                $password = Admin::findOrFail($request->username);
                $password_baru = Hash::make($request->password_baru);
                $password->password = $password_baru;
                $password->save();
                return redirect('/admin/dashboard')->with('alert success', 'Password Admin Telah diganti!');
            }else{
                return redirect('/admin/gantiPassword')->with('alert danger', 'Password Ulang yang Anda Masukkan Salah ');
            }
        }else{
            return view('/admin/gantiPassword')->with('alert danger', 'Password Lama yang Anda Masukkan Salah ');
        }
    }
}
