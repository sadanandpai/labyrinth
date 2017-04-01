<!doctype html>
<html lang="en">
    <head>
        <title>Level 2: Switch on</title>
        <?php $level = 2; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{URL::asset('files/images/level2/dark.jpg')}}" alt="closecircuit" width="600" height="400">

                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>

<!--- hint ---->
<!--- Kill the darkness  ----->
