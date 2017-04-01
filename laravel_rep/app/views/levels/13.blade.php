<!doctype html>
<html lang="en">
    <head>
        <title>Level 13: The dream world</title>
        <?php $level = 13; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level13/differentiator.jpg')}}" alt="differentiator" width="600" height="400" />     
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- Now that I am in your dream, I can extract what I want to unlock  --->