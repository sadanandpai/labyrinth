<?php
    
    Route::get('/', function(){ return View::make('home'); });
    Route::get('home', function(){ return View::make('home'); });
    Route::get('about', function(){ return View::make('about'); });
    Route::get('rules', function(){ return View::make('rules'); });
    
    Route::get('lb', array('as'=>'lb', 'uses'=>'Home@lb'));
    
    Route::group(array('before' => 'guest'), function(){
        Route::get('signup', array('as'=>'signup', function(){ return View::make('signin'); }));
        Route::get('signin', array('as'=>'signin', function(){ return View::make('signin'); }));
        Route::post('up', array('as'=>'up', 'uses'=>'Home@create'));
        Route::post('in', array('as'=>'in', 'uses'=>'Home@enter'));
    });
    
    Route::get('validate_u/{username}', 'Ajax@validate_username');
    Route::get('validate_e/{email}', 'Ajax@validate_email');

    Route::get('levels/{level}/{levelName?}', array('before'=>'auth|role_check|last_seen', 'uses'=>'Level@guide'))->where(['level' => '[0-9.]+', 'levelName' => '[A-z0-9.]+']);

    Route::post('answers/{level}', array('before'=>'auth|role_check|csrf', 'uses'=>'Level@answers'));
    Route::get('logout', array('before'=>'auth|logout', 'as' => 'logout', function(){ return Redirect::to('/'); }));

    Route::group(array('prefix' => 'admin', 'before' => 'auth|admin'), function(){
        Route::get('panel', 'Admin@panel');
        Route::get('panel/{username}', 'Admin@user');
        Route::get('panel/{username}/{level}', 'Admin@details');
    });
    Route::post('admin/rolechange', array('before' => 'auth|admin|csrf', 'uses' => 'Admin@rolechange'));
    
    Route::get('404', function(){ return View::make('levels/404'); });
    Route::any('{a?}/{b?}/{c?}/{d?}/{e?}/{f?}/{g?}/{h?}/{i?}/{j?}/{k?}/{l?}/{m?}/{n?}/{o?}/{p?}/{q?}/{r?}/{s?}/{t?}/{u?}/{v?}/{w?}/{x?}/{y?}/{z?}', 
    function(){ return View::make('levels/404');});