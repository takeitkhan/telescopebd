<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
//use App\Http\Requests;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Roleuser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function whyRegister()
    {
        return view('auth.why_register');
    }

    public function memberRegistrationForm()
    {
        return view('auth.member_register');
    }

    public function memberSignin() {
        return view('auth.member_signin');
    }

    public function registerNow(Request $request)
    {

        //dd($request->membertype);

        $validator = Validator::make($request->all(),[

            'transaction_id' => 'required|unique:users,transaction_id',
            'payment_method' => 'required',
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'district' => 'required',
            'highest_qualification' => 'required',
            'major_subject' => 'required',
            'hobbies' => 'required',
            'membertype' => 'required',
            'member_status' => 'required',
            'member_interest' => 'required',
            
        ]);

        if ($validator->fails()) {        
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $membertypearr = [
            '2' => 'Student',
            '3' => 'Regular',
            '4' => 'Executive'
        ];

        $data = [
            
            'transaction_id' => $request->transaction_id,
            'payment_method' => $request->payment_method,
            'full_name' => $request->full_name,
            'password' => bcrypt($request->phone_number),
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'payment_address' => $request->payment_address,
            'religion' => $request->religion,
            'district' => $request->district,
            'highest_qualification' => $request->highest_qualification,
            'major_subject' => $request->major_subject,
            'hobbies' => $request->hobbies,
            'membertype' => $membertypearr[$request->membertype],
            'member_status' => $request->member_status,
            'member_interest' => $request->member_interest,
        
        ];

        $store = User::create($data);
        $role_added = Roleuser::create([
            'role_id' => $request->membertype,
            'user_id' => $store->id
        ]);

        if($store && $role_added) {
            return redirect()->back()->with('success', 'Save Successfully');    
        }        
    }
}
