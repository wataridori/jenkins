<?php

class SignUpForm extends User 
{
    public $password;
    public $passwordConfirm;    

    public function rules() {
        $rules = parent::rules();               
        $rules[] = array('passwordConfirm', 'required');
        $rules[] = array('password', 'compare',
            'compareAttribute' => 'passwordConfirm',
            'message' => 'Retype password is incorrect.');        
        return $rules;
    }
}