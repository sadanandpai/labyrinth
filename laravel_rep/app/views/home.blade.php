<html lang="en">
    <head> 
        <title>Labyrinth | Technidarshan</title> 
        <?php    
            header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
            header('Pragma: no-cache'); // HTTP 1.0.
            header('Expires: 0');
			header('X-Frame-Options: SAMEORIGIN');
			header('x-xss-protection: 1; mode=block');
        ?>       
        @include('layouts.topsec')
		
		<style>
			body {
				background-image: url({{ Config::get('app.url') }}/files/images/labyrinth.jpg); 
				background-size: 100%;
				background-position: top center !important;
				background-repeat: no-repeat !important;
			}
		</style>
		
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
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="about">About</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="lb"><span class="glyphicon glyphicon-list"></span> Leaderboard</a></li>
                                @If(Auth::check())
                                <li><a href="logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                                @else
                                <li><a href="signin"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
                                @Endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="jumbotron">
                <h1><span class="text-info">Welcome to Labyrinth !</span></h1> 
                <p>Online riddles to puzzle your brain.
                    @If(Auth::check())
                    <a href="levels/{{ Auth::user()->level }}">Lets Play...</a>
                    @else
                    <a href="signin">Lets Play...</a>
                    @Endif
                </p>
            </div>

            <p class="well col-md-12">
				<font size="5x" color="red">How to play</font><br><br>
				
				<font size="3x" color="red">Rules</font><br>
				 1. Your target is to go to next level by any means.<br>
				 1. Enter the answers in small letters without any spaces. <br>
				 2. Enter only alphanumerics for answer.<br>
				 3. Google may be your best friend.<br><br>
				
				<font size="3x" color="red">Suggestion</font><br>
				 1. Answers can be hidden anywhere in the page in different forms.<br>
				 2. Common places of clues are<br><b>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image name<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last word of the url<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Page title / Level Name<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Source code of the page. etc</b><br>
				 3. Some amount of lateral thinking is required to solve few puzzles.<br>
				 4. Modification of url or page elements to obtain clues might be helpful.<br><br>
				
				<font size="3x" color="red">Guidelines</font><br>
				 1. Users are requested not to hack or crack the websites or attempt any kind of alternate methods to get the answer.<br>
				 2. Such accounts will be deleted by admin.<br>
				 3. Anyone can enjoy the game of labyrinth.<br>
				 3. Users with global registration are only allowed for rewards.<br>
				 4. First registered person to complete the game will be anounced as winner.<br>
				 5. Please fill the valid details to during signup.
            </p>
            
        </div>  
    </body>
</html>
