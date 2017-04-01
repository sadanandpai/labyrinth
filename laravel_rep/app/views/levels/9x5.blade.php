<!doctype html>
<html lang="en">
    <head>
        <title>Level 9: ...</title>
        <?php $level = 9.5; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level9/dot.jpg')}}" alt="dot" width="500" height="300" />
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>

<!--- clue ---->
<!--- Save the sky fleet --->