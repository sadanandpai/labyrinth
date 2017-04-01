<!doctype html>
<html lang="en">
<head> 
      <title>Play</title> 
      <?php    
            header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
            header('Pragma: no-cache'); // HTTP 1.0.
            header('Expires: 0');
			header('X-Frame-Options: SAMEORIGIN');
			header('x-xss-protection: 1; mode=block');
        ?>  
      @include('layouts.topsec')
      <script src="files/js/signup_validations.js"></script>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
   </head> 
   
<body>
    <div class="container">
            
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="#">TN</a>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li><a href="home">Home</a></li>
                                <li><a href="about">About</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="lb"><span class="glyphicon glyphicon-list"></span> Leaderboard</a></li>
                                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>Sign in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <br>
    
    <div class="row well">
        <h2>Sign in to your account</h2>
        <div class="col-md-10 col-md-offset-2 col-sm-offset-2 text-danger"><font size="5x"><b>{{ Session::get('message') }}</b></font><br><br>
       </div>
       
       <form method="POST" action="in" accept-charset="UTF-8" class="form-horizontal" role="form">
       <div class="row">
        <input name="_token" type="hidden" value="{{{ csrf_token() }}}">        
        <div class="form-group"> 
            <label for="username" class="col-md-2 col-sm-2 col-xs-12 control-label">Username</label> 
            <div class="col-md-3 col-sm-3 col-xs-6"> 
                <input type="text" class="form-control" name="username" placeholder="Username" required="yes" value="{{ Input::old('username') }}" autocomplete="off" pattern="[A-z0-9_-]{6,15}" maxlength="15" title="Alphanumerics, -  and _ only with 6 to 15 characters"> 
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 text-danger text-left">{{ $errors->first('username') }}</div> 
        </div> 
        </div>
        <div class="row">
        <div class="form-group"> 
            <label for="Password" class="col-md-2 col-sm-2 col-xs-12 control-label">Password</label> 
            <div class="col-md-3 col-sm-3 col-xs-6"> 
                <input type="password" class="form-control" name="password" placeholder="Password" pattern="[A-z0-9_-]{6,15}" maxlength="15" title="Alphanumerics, -  and _ only"> 
            </div>
            <div class="col-md-6 col-sm-7 col-xs-12 text-danger text-left">{{ $errors->first('password') }}</div>
        </div> 
        </div>
        
		<div class="row"> 
        <div class="form-group"> 
            <div class="col-md-offset-2 col-sm-offset-2 col-md-3"> 
                <div class="checkbox"> 
                    <label> <input type="checkbox" name="remember">Remember me</label> 
                </div> 
            </div> 
        </div> 
        </div>
        <div class="row"> 
        <div class="form-group"> 
            <div class="col-md-offset-2 col-sm-offset-2 col-md-1"> 
                <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-user"></span> Sign in</button> 
          </div> 
        </div> 
        </div>
        </form> 
        </div>
        
        
        
        <div class="row well">
        <h2>Create a new account</h2>
    <br>
    <form method="POST" action="up" accept-charset="UTF-8" class="form-horizontal" role="form">
       <input name="_token" type="hidden" value="{{{ csrf_token() }}}">
       
       <div class="row">
        <div class="form-group"> 
            <label for="username_up" class="col-md-2 col-sm-2 col-xs-12 control-label">Username</label> 
            <div class="col-md-3 col-sm-3 col-xs-6"> 
                <input type="text" class="form-control" name="signup_username" id="signup_username" placeholder="Alphanum, - and _ (6-15)" value="{{ Input::old('signup_username') }}" autocomplete="off" required="yes" pattern="[A-z0-9_-]{6,15}" maxlength="15" title="Alphanumerics, -  and _ only">
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 text-danger text-left">{{ Form::label('', '', array('id' => 'validate_username')) }} {{ $errors->first('signup_username') }}</div>
        </div> 
       </div>
       
       <div class="row">
        <div class="form-group"> 
            <label for="password" class="col-md-2 col-sm-2 col-xs-12 control-label">Password</label> 
            <div class="col-md-3 col-sm-3 col-xs-6"> 
                <input type="password" class="form-control" name="signup_password" id="signup_password" placeholder="Alphanum, - and _ (6-15)" required="yes" pattern="[A-z0-9_-]{6,15}" maxlength="15" title="Alphanumerics, -  and _ only"> 
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 text-danger text-left">{{ $errors->first('signup_password') }}</div> 
        </div> 
       </div>

       
       <div class="row">
        <div class="form-group"> 
            <label for="mobile" class="col-md-2 col-sm-2 col-xs-12 control-label">Mobile</label> 
            <div class="col-md-3 col-sm-3 col-xs-6"> 
                <input type="text" class="form-control" value="{{ Input::old('mobile') }}" name="mobile" id="mobile" placeholder="10 digits mobile no" autocomplete="off" required="yes" pattern="[0-9]{10,12}" maxlength="10" title="Enter 10 digits mobile number"> 
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 text-danger text-left">{{ $errors->first('mobile') }}</div> 
        </div> 
       </div>
       
       
       <div class="row">
        <div class="form-group"> 
            <label for="email" class="col-md-2 col-sm-2 col-xs-12 control-label">Email</label> 
            <div class="col-md-3 col-sm-3 col-xs-6"> 
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ Input::old('email') }}" autocomplete="off" required="yes"> 
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 text-danger text-left">{{ Form::label('', '', array('id' => 'validate_email')) }} {{ $errors->first('email') }}</div> 
        </div> 
       </div>
        
        <div class="row"> 
        <div class="form-group"> 
            <div class="col-md-offset-2 col-sm-offset-2 col-md-1"> 
                <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-user"></span> Sign up</button> 
          </div> 
        </div> 
        </div>
        </form> 
        </div>     
             
        
    </div>          

</body>
</html>
