<?php

    class Ajax extends BaseController {
        
        public function validate_username($username){
            
            $validator = Validator::make(
                array('username' => $username),
                array('username' => 'required|alpha_dash|min:6|max:15')
            );

            if ($validator->passes()){
                $validator = Validator::make(
                    array('username' => $username),
                    array('username' => 'unique:users')
                );
                if($validator->fails())
                    return 'Username is already taken';
                else
                    return 'Good username';
            }
            else
                return 'Please enter a valid username';

        }
        
        public function validate_email($email){
            
            $validator = Validator::make(
                array('email' => $email),
                array('email' => 'required|email|min:6|max:40')
            );

            if ($validator->passes()){
                $validator = Validator::make(
                    array('email' => $email),
                    array('email' => 'unique:users')
                );
                if($validator->fails())
                    return 'Email is already taken';
                else
                    return 'Email id looks valid';
            }
            else
                return 'Please enter a valid email';

        }
}