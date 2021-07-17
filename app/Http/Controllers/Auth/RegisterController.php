<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\AssignStudent;
use App\Model\DiscountStudent;
use App\Model\Year;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/admin';


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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (isset($data['usertype']) && $data['usertype'] == 'student'){

            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                // 'mobile' => ['required', 'string', 'regex:/^(?:\+88|01)?(?:\d{11}|\d{13})$/', 'max:255', 'unique:users'],
                // 'dob' => ['required'],
                // 'gender' => ['required', 'string'],
                // 'fname' => ['required', 'string'],
                // 'mname' => ['required', 'string'],
                // 'address' => ['required', 'string'],
                // 'religion' => ['required', 'string'],
                // 'student_id' => ['required'],
                // 'year_id' => ['required'],
                // 'class_id' => ['required'],
            ]);

        }else {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'mobile' => ['required', 'string', 'regex:/^(?:\+88|01)?(?:\d{11}|\d{13})$/', 'max:255', 'unique:users'],
                'address' => ['required', 'string'],
            ]);
        }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $users = User::count();

        if ($users == 0) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'usertype' => 'admin',
                'password' => Hash::make($data['password']),
            ]);
        } else {
            if (isset($data['usertype']) && $data['usertype'] == 'teacher') {
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'usertype' => 'teacher',
                    'password' => Hash::make($data['password']),
                ]);

            } else if (isset($data['usertype']) && $data['usertype'] == 'student') {

                $users = User::create ([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'usertype' => 'student',
                    'status' => 0,
                    'password' => Hash::make($data['password']),
                ]);

                if ($users) {
                    $assign_student = new AssignStudent();
                    $assign_student->student_id = $users->id;
                    $assign_student->year_id = $data['year_id'];
                    $assign_student->class_id = $data['class_id'];
                    $assign_student->save();

                    $discount_student = new DiscountStudent();
                    $discount_student->assign_student_id = $assign_student->id;
                    $discount_student->fee_category_id = '1';
                    $discount_student->discount = $data['discount'];
                    $discount_student->save();
                }



                return $users;





            } else {

                return User::create([

                    'name' => $data['name'],
                    'email' => $data['email'],
                    'usertype' => 'parent',
                    'password' => Hash::make($data['password']),
                    'mobile' => $data['mobile'],
                    'address' => $data['address'],

                ]);

            }
        }
    }
}
