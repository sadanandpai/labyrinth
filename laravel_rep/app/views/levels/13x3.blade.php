<!doctype html>
<html lang="en">
    <head>
        <title>Level 13: The wrong path</title>
        <?php $level = 13.3; ?>
        @include('layouts.topsec')
    </head>
    <body style="background-color:#000">
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level13/eyes.jpg')}}" alt="limbo" width="500" height="500" />    
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- Play live or play dead --->