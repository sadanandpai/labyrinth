<!doctype html>
<html lang="en">
    <head>
        <title>Level 4: who hAS KEY?</title>
        <?php $level = 4.5; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level4/domino.jpg')}}" alt="domino" width="800" height="200" />   
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- Close your eyes, and feel --->