<!doctype html>
<html lang="en">
    <head>
        <title>Level 1: Welcome</title>
        <?php $level = 1; ?>
        @include('layouts.topsec')
    </head>
    <body>
        <div class="container">
            @include('layouts.header')
            
			<div class="row text-center">
				<div class="col-md-12 text-center">
					 <img src="{{URL::asset('files/images/level1/1.jpg')}}" id="circle" width="600" height="450" usemap="#map"/>
<br>
                    <map name="map">
                        <area shape="circle" coords="300,225,55" href="disabled" alt="click">
                    </map>
				</div>
			</div>
            @include('layouts.footer')
        </div>
    </body>
</html>

<!--- Hint ---->
<!---- You are just a click away --->	