<?php

    class Home extends BaseController {

        public $restful = true;

        public function lb(){
            return View::make('lb')->with('users', User::where('role','user')->orderBy('level','desc')->orderBy('rank','asc')->get());
        }


        public function create(){
            $username = Input::get('signup_username');
            $password = Input::get('signup_password');
            $mobile = Input::get('mobile');
            $email = Input::get('email');

            $validator = Checker::validate_signup($username, $password, $mobile, $email);  
            if ($validator->fails())
                return Redirect::route('signin')->withInput(Input::except('signup_password'))->withErrors($validator->messages());

            User::create(array(
                'username' => $username,
                'password' => Hash::make($password),
                'mobile' => $mobile,
                'email' => $email
            ));

            return Redirect::route('signin')->with('message','<span class="text-primary">Account created successfully! Sign in to continue</span>');
        }



        
        public function enter(){
            $username = Input::get('username');
            $password = Input::get('password');
            $remember = (Input::has('remember')) ? true : false;
			
            $validator = Checker::validate_signin($username, $password);

            if ($validator->fails())
                return Redirect::route('signin')->withInput(Input::except('password'))->withErrors($validator->messages());

            if (Auth::validate(array('username' => $username, 'password' => $password))){

                if (Auth::validate(array('username' => $username, 'password' => $password, 'active' => '1'))){

                    if(Manager::one_login($username) === 0){
                        return Redirect::to('/')->with('message','You can login from only one device at a time. To login using this device please wait for few seconds and try again.');
                    }
                    else if (Auth::attempt(array('username' => $username, 'password' => $password), $remember)){
                        if(Auth::user()->level == 0)
                            Manager::capture_details(0);
                        return Redirect::to("levels/" . Auth::user()->level);
                    }
                }
                return Redirect::route('signin')->with('message', 'Your account has been disabled');
            }
            else
                return Redirect::route('signin')->withInput(Input::except('password'))->with('message', 'Incorrect Username or Password');
        }
    }
