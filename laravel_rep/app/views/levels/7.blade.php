<!doctype html>
<html lang="en">
    <head>
        <title>Level 7: Colors of Sky</title>
        <?php $level = 7; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{URL::asset('files/images/level7/voilet.jpg')}}" alt="voilet" width="700" height="400">
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>	

<!--- hint ---->
<!--- Pictures talk more than words --->