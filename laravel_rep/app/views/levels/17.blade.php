<!doctype html>
<html lang="en">
    <head>
        <title>Level 17: Follow Your Instincts</title>
        <?php $level = 17; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container"> 
            @include('layouts.header')
            @include('layouts.answersec')
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{URL::asset('files/images/level17/humbert.jpg')}}" alt="humbert" width="600" height="500" />     
					<p>This is the trade mark of NASA</p>
				</div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
	
<!--- hint ---->
<!--- Mirror, mirror on the wall, who’s the fairest of them all? --->