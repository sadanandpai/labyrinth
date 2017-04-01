<?php

    /*
    |--------------------------------------------------------------------------
    | Application & Route Filters
    |--------------------------------------------------------------------------
    |
    | Below you will find the "before" and "after" events for the application
    | which may be used to do any work before or after a request into your
    | application. Here you may also register your custom route filters.
    |
    */

    App::before(function($request){
    });


    App::after(function($request, $response){
    });

    /*
    |--------------------------------------------------------------------------
    | Authentication Filters
    |--------------------------------------------------------------------------
    |
    | The following filters are used to verify that the user of the current
    | session is logged into this application. The "basic" filter easily
    | integrates HTTP Basic authentication for quick, simple checking.
    |
    */

    Route::filter('auth', function(){
        if (Auth::guest()){
            if (Request::ajax()){
                return Response::make('Unauthorized', 401);
            }
            else{
                return Redirect::guest('signin');
            }
        }
    });


    Route::filter('auth.basic', function(){
        return Auth::basic();
    });

    /*
    |--------------------------------------------------------------------------
    | Guest Filter
    |--------------------------------------------------------------------------
    |
    | The "guest" filter is the counterpart of the authentication filters as
    | it simply checks that the current user is not logged in. A redirect
    | response will be issued if they are, which you may freely change.
    |
    */

    Route::filter('guest', function(){
        if (Auth::check()) return Redirect::to('/');
    });

    /*
    |--------------------------------------------------------------------------
    | CSRF Protection Filter
    |--------------------------------------------------------------------------
    |
    | The CSRF filter is responsible for protecting your application against
    | cross-site request forgery attacks. If this special token in a user
    | session does not match the one given in this request, we'll bail.
    |
    */

    Route::filter('csrf', function(){
        if (Session::token() !== Input::get('_token'))
            return Redirect::to('logout');
    });

    //custom filter
    Route::filter('admin', function(){
        if(Auth::user()->role === 'admin')
            return;
        else 
            return Redirect::to('404');
    });

    
    
    Route::filter('role_check', function(){
        if(Auth::user()->active == 0)
            return Redirect::to('logout');
        else if(Auth::user()->role === 'admin')
            return Redirect::to('admin/panel');
        else if(Auth::user()->role === 'user')
            return;
        else if(Auth::user()->role === 'spy')
            return;
        else
            return Redirect::to('404');
    });
    


    Route::filter('last_seen', function(){
        if(Auth::user()->session_id === Session::getId()){
            User::where('username', Auth::user()->username)->update(array('activity' => time()));
            Auth::user()->activity = time();
        }
        else if(time() - Auth::user()->activity >= Game::$userwaitingtime){
            User::where('username', Auth::user()->username)->update(array('session_id' => Session::getId(), 'activity' => time()));
            Auth::user()->activity = time();
            Auth::user()->session_id = Session::getId();
        }
        else
            return Redirect::to('logout');
    });

    

    Route::filter('logout', function(){
        User::where('username', Auth::user()->username)->update(array('activity' => 0));
        Session::flush(); 
        Auth::logout();
    });