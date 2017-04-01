<!doctype html>
<html lang="en">
    <head>
        <title>Level 1: Source is the destination</title>
        <?php $level = 1.3; ?>
        @include('layouts.topsec')
        <style>
            area { 
                display: none;
                cursor: auto;
            }
        </style>
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')

            <div class="row">
                <div class="col-md-12 text-center">
                     <img src="{{URL::asset('files/images/level1/noone.jpg')}}" alt="cortana" width="500" height="300"><br>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
	
	<!--- clue ---->
    <!--- Who killed Jessica?  --->
	
</html>