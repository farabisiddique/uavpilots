<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;







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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   

        return Validator::make($data, [
            'username' => ['required','string', 'max:255'],
            'email' => [ 'required','string', 'email', 'max:255', 'unique:users'],
            'password' => [ 'required','string', 'min:8', ],
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
        // dd($data);
        // return User::create([
            
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'username' => $data['username'],
        // ])
        // and UserData::create([
            
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'description' => $data['description'],
        //     'state' => $data['state'],
        //     'country' => $data['country'],
        //     'industry' => $data['industry'],
            
        // ]);
                // dd($data);

                DB::beginTransaction();

                try {
                    // Validate, then create if valid
                    $user_add = User::create([           
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                        'username' => $data['username'],
                    ]);

                    
                    


                } 
                catch(ValidationException $e)
                {
                    // Rollback and then redirect
                    // back to form with errors
                    DB::rollback();
                    return Redirect::to('/register')
                        ->withErrors( $e->getErrors() )
                        ->withInput();
                } 
                catch(\Exception $e)
                {
                    DB::rollback();
                    throw $e;
                }

                try {

                    // $user_data_key = DB::table('files')->latest('upload_time')->first();



                    // $user_data_key = 5;

                    

                    // $fara = DB::table('users')->latest()->first()->id;


                    // $fara = User::latest();

                    // $model = $fara->first()->id;

                    // dd($model);


                    // Validate, then create if valid
                    $user_data_add = UserData::create([
                        'user_data_id' => 1,           
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'description' => $data['description'],
                        'state' => $data['state'],
                        'country' => $data['country'],
                        'industry' => $data['industry']
                        
                    ]);

                    // dd($user_data_id);
                } 
                catch(ValidationException $e)
                {
                    // Rollback and then redirect
                    // back to form with errors
                    DB::rollback();
                    return Redirect::to('/register')
                        ->withErrors( $e->getErrors() )
                        ->withInput();
                } 
                catch(\Exception $e)
                {
                    DB::rollback();
                    throw $e;
                }

                // If we reach here, then
                // data is valid and working.
                // Commit the queries!
                DB::commit();


                return $user_add;
    }


    //     public function transaction(Closure $callback)
    // {
    //         $this->beginTransaction();

    //         // We'll simply execute the given callback within a try / catch block
    //         // and if we catch any exception we can rollback the transaction
    //         // so that none of the changes are persisted to the database.
    //         try
    //         {
    //                 $result = $callback($this);

    //                 $this->commit();
    //         }

    //         // If we catch an exception, we will roll back so nothing gets messed
    //         // up in the database. Then we'll re-throw the exception so it can
    //         // be handled how the developer sees fit for their applications.
    //         catch (\Exception $e)
    //         {
    //                 $this->rollBack();

    //                 throw $e;
    //         }

    //         return $result;
    // }
}
