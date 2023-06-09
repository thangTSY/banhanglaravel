<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;
use Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function customLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();

            if($user->is_admin == 1){
                return redirect()->route('admin')->with('success','Đăng nhập thành công.');
            }
        }
        else {
            return back()->with('error','Sai email hoặc password .');
        }
    }

    public function register()
    {
        return view('admin.register');
    }
      
    public function customRegister(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("adminauth")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return Admin::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    

    public function dashboard()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login')->with('error', 'Bạn không được phép truy cập.');
    }

}