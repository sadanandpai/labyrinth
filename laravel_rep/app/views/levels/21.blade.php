<!doctype html>
<html lang="en">
    <head>
        <title>Level 21: How it all started</title>
        <?php $level = 21; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level21/findmymissingfriend(s).jpg')}}" alt="findmymissingfriend(s)" width="800" height="500" />     
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- Listen to what you have found --->