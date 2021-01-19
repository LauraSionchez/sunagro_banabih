<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Config;
use App\Models\MailSettings;
use App\Models\Parameter;

/*
 * 

CREATE TABLE mail_settings(
    id integer(11) not null primary key AUTO_INCREMENT,
    mailer varchar(50),
    host varchar(50),
    port varchar(10),
    user_name varchar(100),
    name varchar(50),
    password varchar(50),
    encryption varchar(20)
   );
 * 
 * INSERT INTO mail_settings(mailer, host,  port, user_name, name ,password, encryption) 
 * VALUES('smtp', 'smtp.gmail.com', '587','marivero5000@gmail.com','Administrador','CAMPANITA.','tls') 
 */

class MailController extends Controller {
    /*
     * 
     */

    public function __construct() {
        $mail = MailSettings::first();
        //dd($mail);
        $config = array(
            'driver'    => $mail->mailer,
            'host'      => $mail->host,
            'port'      => $mail->port,
            'encryption'=> $mail->encryption,
            'from'      => array('address' => 'noRepli@gmail.com', 'name' => $mail->name),
            'username'  => $mail->user_name,
            'password'  => $mail->password,
            
            
        );
        
        
        
        Config::set('mail', $config);
    }

    public function send_test() {
        //dd('O,o');
        //date_default_timezone_set('');
        dd(date('d/m/Y H:i:s'));
        $user = User::find(1)->toArray();
        $m = Mail::send('Mails.test', $user, function($message) use ($user) {
            $message->to($user['email']);
            $message->subject('Welcome Mail');
        });
        if (Mail::failures()) {
            dd('Bad');
        }else{
            dd('Fine');
        }

       
    }
    
    
    public function pass_recovery(Request $request){
        
        $allow_password_recovery = Parameter::where("name", "allow_password_recovery")->first();
        $allow_password_recovery = $allow_password_recovery != null ? ( (int) $allow_password_recovery->value):0;
        
        
        
        if ($allow_password_recovery===1){
            
            if ($request->isMethod('post')) {
                
                
                
                dd($request->all());
            }else{
                return view('Mails.mail_recovery');
            }
            
            
            
        }else{
            return Redirect::to('login')
                                    ->with('mensaje_error', __('Access Denied'));
        }
        
        
        
    }

}
