<!doctype html>
<html lang="en">
    <head>
        <title>Level 15: The Missing one</title>
        <?php $level = 15; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level15/challenge.jpg')}}" alt="challenge" width="500" height="500" />     
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- it looks impossible --->