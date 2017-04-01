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
                    <img src="{{URL::asset('files/images/level13/iregretnothing.jpg')}}" alt="noregret" width="500" height="500" />     
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- Listen to the song. "You may pass it, but might not get up with kick" --->