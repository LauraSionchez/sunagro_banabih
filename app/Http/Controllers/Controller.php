<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;
use Illuminate\Http\Request;
use App\Models\Parameter;
use Config;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    private $Ip = '127.0.0.1';
    private $ipAllowed = array('127.0.0.1');
    public $TimeMinimumRecoverPassword = 15; //Minutes
    public $TimeMaxKillRecoverPassword = 10000; //Hour
    public $SpecialCharacter = '';

    //$url = Config::get('app.urlapi');
    /*
     * 
     */
    public function __construct() {
        //$this->SpecialCharacter = Config::get('app.SPECIALCHARACTER');
        $this->SpecialCharacter = env('APP_SPECIALCHARACTER', '');
        
        View::share('password_security_level', $this->getSecurityLevel());
        View::share('SpecialCharacter', $this->SpecialCharacter);
    }
    /*
     * 
     */
    public function getSecurityLevel() {
        $password_security_level = Parameter::where("name", "password_security_level")->first();
        return ( $password_security_level != null ? ( (int) $password_security_level->value) : 0);
    }
    
    /*
     * 
     */
    public function getAllowPasswRecovery(){
        $allow_password_recovery = Parameter::where("name", "allow_password_recovery")->first();
        return ($allow_password_recovery != null ? ( (int) $allow_password_recovery->value) : 0);
    }
    
    /*
     * 
     */
    public function getValidRegex() {
        if ($this->getSecurityLevel() > 0) {
            $min_character = ($this->getSecurityLevel() > 0 ? '.{8,}' : '' );
            $lower = ($this->getSecurityLevel() > 1 ? '(?=.*?[a-z])(?=.*?[0-9])' : '' );
            $upper = ($this->getSecurityLevel() > 2 ? '(?=.*?[A-Z])(?=.*?['.$this->SpecialCharacter.'])' : '' );
            return '|regex:/^' . $lower . $upper . $min_character . '$/';
        } else {
            return '';
        }
    }

    /*
     * 
     */

    function showFloat($monto, $dec = 2) {//se7ho
        return number_format($monto, $dec, ',', '.');
    }

    /*
     * 
     */

    function saveFloat($monto) {//se7ho
        return str_replace(',', '.', str_replace('.', '', $monto));
    }

    /*
     * 
     */

    function getIp() {
        $this->Ip = (\Request::ip() == '::1' ? '127.0.0.1' : \Request::ip());
        return $this->Ip;
    }

    /*
     * 
     */

    function getIpAllowed() {
        return $this->ipAllowed;
    }

    /*
     * 
     */

    function checkPermissions() {
        return (!\Request::ajax() && ( count($this->getIpAllowed()) == 0 || in_array($this->getIp(), $this->getIpAllowed()) ));
    }

}
