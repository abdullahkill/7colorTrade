<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required',
            'string',
            'min:8',             // must be at least 10 characters in length
            'regex:/[a-z]/',      // must contain at least one lowercase letter
            'regex:/[A-Z]/',      // must contain at least one uppercase letter
            'regex:/[0-9]/',      // must contain at least one digit
            'regex:/[@$!%*#?&]/', 
 ' confirmed'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $refer_g= sha1(time());
if(isset($input['refer'])){

    $data= User::where('refer',$input['refer'])->first();
    
    if(!isset($data)){
            return redirect('/register')->with('error',"Refer id is wrong");
    }
       $hi=$data->refer_number;
       $data->refer_number = ++$hi;
       $data->save();
    
    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'refer'  => $refer_g,
        'password' => Hash::make($input['password']),
    ]);
}else{
    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'refer'  => $refer_g,
        'password' => Hash::make($input['password']),
    ]);
}
        
    }
}
