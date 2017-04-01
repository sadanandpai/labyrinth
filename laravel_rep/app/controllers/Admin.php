<?php

    class Admin extends BaseController {

        public function panel(){
            return View::make('admin/panel')->with('users', User::orderBy('level','desc')->orderBy('rank','asc')->get());
        }

        public function user($username){
            return View::make('admin/user')->with('users', Userdata::where('username', $username)->orderBy('level')->get());
        }

        public function details($username, $level){
            return View::make('admin/details')->with('answers', Userdata::where('username', $username)->where('level', $level)->pluck('answer'));
        }

        
        
        public function rolechange(){
            $username = Input::get('username');
            $role = Input::get('role');
            $active = Input::get('active');

            if(($role != 'user' and $role != 'spy') or ($active != 0 and $active != 1))
                return Redirect::to('admin/panel')->withInput()->with('message', '<span class="text-danger">Invalid data</span');

            $validator = Validator::make(
                array('username' => $username),
                array('username' => 'required|alpha_dash|min:6|max:15|exists:users,username')
            );

			$dbrole = User::where('username', $username)->pluck('role');
            if ($dbrole == 'admin' or $validator->fails())
                return Redirect::to('admin/panel')->withInput()->with('message', '<span class="text-danger">Invalid username</span>');
            
			
            User::where('username', $username)->update(array('role' => $role, 'active' => $active)); 
            Auth::user()->role = $role;
            Auth::user()->active = $active;

            return Redirect::to('admin/panel')->withInput()->with('message', '<span class="text-success">Success</span>');

        }

}