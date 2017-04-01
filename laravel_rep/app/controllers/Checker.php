<?php

    class Checker extends BaseController {

        public static function validate_signup($username, $password, $mobile, $email){
            return Validator::make(
                array('signup_username' => $username, 'signup_password' => $password, 'mobile' => $mobile, 'email' => $email),
                array('signup_username' => 'required|alpha_dash|min:6|max:15|unique:users,username',
                    'signup_password' => 'required|alpha_dash|min:6|max:15', 
                    'mobile' => 'required||digits:10', 
                    'email' => 'required|email|min:8|max:40|unique:users')
            );
        }
        
        public static function validate_signin($username, $password){
            return Validator::make(
                array('username' => $username, 'password' => $password),
                array('username' => 'required|alpha_dash|min:6|max:15',
                    'password' => 'required|alpha_dash|min:6|max:15')
            );
        }
        
        public static function validate_answer($answer){
            return Validator::make(
                array('answer' => $answer),
                array('answer' => 'required|alpha_num|max:35')
            );
        }
}