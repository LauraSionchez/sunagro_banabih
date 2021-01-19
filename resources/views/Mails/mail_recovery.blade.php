<h1>PASSWORD RESET REQUEST</h1>

Dear User {{$user['fullName']}},

We have received your request to reset your password. Please click the link below to complete the reset:<br/>

<a href="{{ asset('SetPassRecovery').'/'.$token }}" class="card-link">{{__("Password Recovery")}}</a>



