<!doctype html>
<html lang="en">
    <head>
        <title>Level 6: Twenty One</title>
        <?php $level = 6; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{URL::asset('files/images/level6/unlicensed.jpg')}}" alt="cards" width="400" height="300">
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- When a Spaniard went to play in Australia  ----->
