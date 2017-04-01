<?php

    class Manager extends BaseController {

        public $restful = true;

        public static function attempt_capture($answer, $level){
            $userdata = Userdata::where('username', Auth::user()->username)->where('level', $level)->get()->first();

            if($userdata == null)
                return 0;

            $userdata->attempt = $userdata->attempt + 1;                //increment attempt value
            $userdata->answer = $userdata->answer . "::" . $answer;     //save the answer entered
            $userdata->save();

            return 1;                                                   //return 1 as save success
        }




        public static function capture_details($level, $next_level = false){

            if($level === 0)                                            // for new user, Give access to level 1
                $next_level = Game::$basicLevel;

            if($next_level > Auth::user()->level){
                User::where('username', Auth::user()->username)->update(array('level' => $next_level, 'rank' => User::where('level', $next_level)->max('rank')+1));                                   //update user table with new level and rank
                Auth::user()->level = $next_level;                           //Update Auth level
            }

            if($next_level > $level){
                Userdata::create(array(                                     //create new row in userdata table
                    'username' => Auth::user()->username,
                    'level' => Auth::user()->level
                ));
            }
        }



        public static function one_login($username){
            $user = User::where('username', $username)->get()->first();
            if($user->session_id === Session::getId())
                return 1;
            else if(time() - $user->activity >= Game::$userwaitingtime)         //make user wait for specified time
                return 1; 
                else 
                    return 0;
        }

}