<!doctype html>
<html lang="en">
    <head>
        <title>Relationship</title>
        <?php $level = 2; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{URL::asset('files/images/level2/bright.jpg')}}" alt="bright" width="600" height="400">
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>    
</html>

<!--- clue ---->
<!---- We are I ----->