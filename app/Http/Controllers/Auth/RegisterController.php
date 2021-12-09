<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserPersonalInformation;
use Carbon\Carbon;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    protected $redirectTo = 'profile';

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'regex:/^[ a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'numeric', 'digits_between:5,15', 'unique:user_personal_informations', 'unique:companies'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();

        try {
            $role = $data['type_of_user'];
            $user = User::create([
                'salutation' => $data['salutation'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            if($role == 'personal'){
                $personal_information = [
                    'unique_id' => $user->id . Carbon::now()->format('ymdHis'),
                    'address' => '',
                    'province_id' => '0',
                    'city_id' => '0',
                    'subdistrict_id' => '0',
                    'urban_village_id' => '0',
                    'postal_code' => '',
                    'telephone' => $data['telephone'],
                    'user_id' => $user->id
                ];
                UserPersonalInformation::create($personal_information);
            } else {
                $company = [
                    'slug' => GlobalHelper::generateSlug($data['company_name'], 'companies', 'slug'),
                    'address' => $data['company_address'],
                    'email' => $data['email'],
                    'name' => $data['company_name'],
                    'telephone' => $data['telephone']
                ];

                $company = Company::create($company);
                $user->update(['company_id' => $company->id]);
            }
            
            $user->assignRole($role);
            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi nanti');
        }
    }
}
