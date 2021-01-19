<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Config;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\MailSetting;
use App\Models\UserRecovery;
use Carbon\Carbon;
use App\Http\Requests\UserRequest;

/*
  CREATE TABLE sessions(
  id integer not null primary key,
  user_id integer,
  ip_address varchar(45),
  date_in  datetime default now(),
  date_out  datetime default null


  )
 */

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        //dd("O,o");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home() {
        //dd(Auth::user());
        return view('users.home');
    }

    public function logOut() {
        Session::flush();
        Auth::logout();

        return Redirect::to('login')
                        ->with('mensaje_error', __('Tu sesión ha sido cerrada.'));
    }

    function set_pass_recovery(Request $request, $token = null) {

        if ($this->getAllowPasswRecovery() == 0) {
            return Redirect::to('login')
                            ->with('mensaje_error', __('Password Recovery Disabled'));
        }
        if ($token == null && $request->token == null) {
            return Redirect::to('PassRecovery');
        } else {

            if ($request->isMethod('post')) {
                //dd($this->getValidRegex());
                //|regex:/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[A-Z])(?=.*?[/+.]).{8,}$/ 
                //|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[.#?!@$%&*-]).{8,}$/
                $this->validate($request, [
                    'password' => 'required|min:8' . $this->getValidRegex(),
                    'password2' => 'required|same:password'
                        ], [
                    'password.required' => __('Field New Password is Required'),
                    'password.min' => __('Please enter a Password Greater than or Equal to 8'),
                    'password.regex' => __('Bad Format'),
                    'password2.required' => __('Field Confirm Password is Required'),
                    'password2.same' => __('Please enter the same value again')
                ]);

                //dd($request->all());

                $token = $request->token;
                $UserRecovery = UserRecovery::where('token', $token)->where("status", 1)->orderBy("date_request", "desc")->first();
                if ($UserRecovery != null) {
                    $now = Carbon::now();
                    
                    
                    $day_time = substr($UserRecovery->date_request, 0, 19);
                    $to = Carbon::createFromFormat('Y-m-d H:i:s', $day_time);

                    $diff = $now->diffInMinutes($to);
                    
                    
                    
                    if ($diff > $this->TimeMinimumRecoverPassword) {// IF DIF > 15 MIN
                        $UserRecovery = UserRecovery::find($UserRecovery->id);
                        $UserRecovery->token = null;
                        $UserRecovery->status = 0;
                        $UserRecovery->save();

                        return Redirect::to('PassRecovery')
                                        ->with('mensaje_error', __('Token Expire Try Again'))
                        ;
                    } else {
                        
                    }

                    $Recovery = UserRecovery::find($UserRecovery->id);
                    $Recovery->token = '';
                    $Recovery->status = 0;
                    $Recovery->date_processed = date("Y-m-d H:i:s");
                    $Recovery->save();

                    $User = User::find($UserRecovery->user_id);
                    $User->password = Hash::make(md5($request->password));
                    $User->save();

                    return Redirect::to('login')
                                    ->with('mensaje_success', __('Password Updated Successfully'));
                } else {
                    return Redirect::to('PassRecovery')
                                    ->with('mensaje_error', __('Token Not Valid'));
                }
            } else {



                $UserRecovery = UserRecovery::where('token', $token)->where("status", 1)->orderBy("date_request", "desc")->first();
                if ($UserRecovery != null) {

                    $now = Carbon::now();

                    //$diff = (int) $now->diff($date)->format('%I');

                    $day_time = substr($UserRecovery->date_request, 0, 19);
                    $to = Carbon::createFromFormat('Y-m-d H:i:s', $day_time);

                    $diff = $now->diffInMinutes($to);
                    //dd($this->TimeMinimumRecoverPassword); // Output: 20
                    if ($diff > $this->TimeMinimumRecoverPassword) {// IF DIF > 15 MIN
                        $UserRecovery = UserRecovery::find($UserRecovery->id);
                        $UserRecovery->token = '';
                        $UserRecovery->status = 0;
                        $UserRecovery->save();


                        return Redirect::to('PassRecovery')
                                        ->with('mensaje_error', __('Token Expire Try Again'))
                        ;
                    } else {
                        
                    }
                    //$SpecialCharacter = env("APP_SPECIALCHARACTER", $this->SpecialCharacter);
                    //dd($SpecialCharacter);
                    return view('users.set_pass_recovery', compact('token'));
                } else {
                    return Redirect::to('PassRecovery')
                                    ->with('mensaje_error', __('Token Not Fount'));
                }
            }
            /*
              dd($UserRecovery);
              $UserRecovery->token = null;
              $UserRecovery->status = 0;
              $UserRecovery->save();

             */
        }
    }

    /*
     * 
     */

    public function pass_recovery(Request $request) {

        if ($this->getAllowPasswRecovery() == 1) {
            if (Auth::check()) {
                return Redirect::to('/');
            } else {
                if ($request->isMethod('post')) {
                    //dd($request->all());

                    $this->validate($request, [
                        'email' => 'required|email',
                        'captcha' => 'required|captcha'
                            ], [
                        'email.required' => __('Field :attribute is Required'),
                        'email.email' => __('Email ' . $request->email . ' Not Allowed'),
                        'captcha.required' => __('Field :attribute is Required'),
                        'captcha.captcha' => __('Captcha Error'),
                    ]);

                    /*
                      $this->validate($request, [
                      'email' => 'required|email',
                      ], [
                      'email.required' => __('Field :attribute is Required'),
                      'email.email' => __('Email ' . $request->email . ' Not Allowed'),
                      ]);
                     */
                    $User = User::where("email", $request->email)->first();
                    //dd();
                    if ($User == null) {
                        return Redirect::to('PassRecovery')
                                        ->with('mensaje_error', __('Mail Not Found'));
                    }

                    if ($User->active == 0) {
                        return Redirect::to('PassRecovery')
                                        ->with('mensaje_error', __('User Inactive'));
                    }


                    if (count($User->getPassRecovery) > 0) {
                        $now = Carbon::now();
                        $date = Carbon::parse($User->getPassRecovery[0]->date_request);
                        $diff = (int) $date->diff($now)->format('%Y%M%D%H%I');
                        if ($diff > $this->TimeMinimumRecoverPassword) {// IF DIF > 15 MIN
                            if ($diff > $this->TimeMaxKillRecoverPassword) { // IF DIF > 1 DAYS
                                $UserRecovery = UserRecovery::find($User->getPassRecovery[0]->id);
                                $UserRecovery->token = null;
                                $UserRecovery->status = 0;
                                $UserRecovery->save();
                            } else {
                                return Redirect::to('PassRecovery')
                                                ->with('mensaje_error', __('You already generated a token to recover your password, you must wait 24 hours to try again'))
                                ;
                            }
                        } else {
                            return Redirect::to('PassRecovery')
                                            ->with('mensaje_error', __('You Have A Token To Recover Your Password, Please Check Your Email'))
                            ;
                        }
                    }
                    $token = Str::random(60);
                    $UserRecovery = new UserRecovery();
                    $UserRecovery->user_id = $User->id;
                    $UserRecovery->date_request = date('Y-m-d H:i:s');
                    $UserRecovery->token = $token;
                    $UserRecovery->status = 1;
                    $UserRecovery->save();

                    //dd(date('d/m/Y H:i:s'));
                    //$user = User::find(1)->toArray();

                    $user = $User->toArray();
                    $user['fullName'] = $User->getFullName();

                    //dd($user['email']);

                    $mail = MailSetting::first();
                    //dd($mail);
                    $config = array(
                        'driver' => $mail->mailer,
                        'host' => $mail->host,
                        'port' => $mail->port,
                        'encryption' => $mail->encryption,
                        'from' => array('address' => 'noRepli@gmail.com', 'name' => $mail->name),
                        'username' => $mail->user_name,
                        'password' => $mail->password,
                    );



                    Config::set('mail', $config);



                    $m = Mail::send('Mails.mail_recovery', array("user" => $user, "token" => $token), function($message) use ($user) {
                                $message->to($user['email']);
                                $message->subject('Welcome Mail');
                            });
                    if (Mail::failures()) {
                        return Redirect::to('PassRecovery')
                                        ->with('mensaje_error', __('Error Sending Mail'))
                        ;
                    } else {
                        return Redirect::to('PassRecovery')
                                        ->with('mensaje_success', __('An Email has Been Sent With Instructions for Recovering Your Password'))
                        ;
                    }

                    //dd($User);
                    //return view('users.pass_recovery');
                } else {
                    return view('users.pass_recovery');
                }
            }
        } else {
            return Redirect::to('login')
                            ->with('mensaje_error', __('Does Not Allow Password Recovery'))
            ;
        }
    }

    function refreshCaptcha() {
        return response()->json(['captcha' => captcha_img('flat')]);
    }

    /*
     * 
     */

    public function login(UserRequest $request) {
        //dd(User::create(['username'=>'mrivero', 'password'=>Hash::make(md5('123456')), 'name'=>'Miguel', 'surname'=>'Rivero', 'email'=>'sdfsdsdfsd@sdf.sdf', 'active'=>1, 'rol_id'=>1 ]));
        //dd(Config::get('app.URLAPI'));
        //dd(Hash::make('123456'));
        //dd(Hash::check($request->password ,$p1));
        //$U = new User();
        //dd($U->rules());


        $allow_password_recovery = Parameter::where("name", "allow_password_recovery")->first();
        $allow_password_recovery = $allow_password_recovery != null ? ( (int) $allow_password_recovery->value) : 0;

        if (Auth::check()) {
            return Redirect::to('/');
        } else {
            if ($request->isMethod('post')) {

                $userdata = array(
                    'username' => $request->username,
                    'password' => $request->password
                );

                if (Auth::attempt($userdata, $request->rememberme)) {
                    //dd(Auth::user());
                    return Redirect::to('/');
                    //return redirect()->route('home');
                    //if(Auth::attempt($userdata, Input::get('remember-me', 0))){
                } else {
                    return Redirect::to('login')
                                    ->with('mensaje_error', __('Tus datos son incorrectos'))
                                    ->withInput();
                }
            } else {
                //return View::make('login');
                // $list = array("1" => "Uno", "2" => "Dos", "3" => "Tres");
                return view('users.login', compact('allow_password_recovery'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        //
    }

}
