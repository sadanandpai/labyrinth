<html lang="en">
    <head> 
        <title>About</title> 
        @include('layouts.topsec') 
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
                                <li class="active"><a href="#">About</a></li>
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

            <br><br><br>

            
			
			<div class="col-md-12 text-center bg-primary">
				<h1><font color="white"><strong>Our Team</strong></font></h1>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
                    <h2>Sadanand Akshay Pai</h2><i><b>Design and Development</b></i><br>
                    <font color="blue">sadypai@gmail.com</font>
                </div>
				<div class="col-md-6 text-center">
					<h2>Naveen</h2><i>Support</i><br>
					<font color="blue">naveen_kumar_ns@yahoo.com</font>
				</div>
			</div>
			
			<br>

            <div class="col-md-12 text-center bg-primary">
				<h1><font color="white"><strong>Website details</strong></font></h1>
			</div>
			<h1></h1>
            <div class="row"> 
                <div class="col-sm-12">
                    <strong>Front End</strong>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <span class="pager"><li><a class="text-danger">Technologies</a></span>
                </div>
                <div class="col-sm-7">
                    <span class="pager"><li><a>HTML</a></li>&nbsp;&nbsp;<li><a>CSS</a></li></span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <span class="pager"><li><a class="text-danger">Frameworks&nbsp;&nbsp;</a></span>
                </div>
                <div class="col-sm-7">
                    <span class="pager"><li><a>BootStrap</a></li>&nbsp;&nbsp;<li><a>jQuery</a></li></span>
                </div>
            </div>
            
        
            
            <div class="row"> 
                <div class="col-sm-12">
                    <strong>Back End</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <span class="pager"><li><a class="text-danger">Technologies</a></span>
                </div>
                <div class="col-sm-7">
                    <span class="pager"><li><a>PHP</a></li>&nbsp;&nbsp;<li><a>AJAX</a></li>&nbsp;&nbsp;<li><a>MYSQL</a></li></span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <span class="pager"><li><a class="text-danger">Frameworks&nbsp;&nbsp;</a></span>
                </div>
                <div class="col-sm-7">
                    <span class="pager"><li><a>Laravel 4.2</a></li></span>
                </div>
            </div>
            <br>
            <br>
            </div>
        </div>

        </div>  
    </body>
</html>
