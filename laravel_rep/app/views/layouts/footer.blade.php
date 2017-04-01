<hr style="border:2px solid thick">
		
<div class="row">
    <div class="col-md-12 text-center">
        <b>Levels</b> 
    </div>
	
	<?php 
		$levels = Game::$lblevels_num;
		$levels_name = Game::$levels_name;
	?>

    <div class="col-md-12 text-center">
        <ul class="pagination pagination-sm">
            @for ($i = 1; $levels[$i] <= Auth::user()->level; $i++)
            @if (Session::get('cur_level') == $levels[$i])
            <li class="active"><a href="#">{{$levels_name[$i]}}</a></li>
            @else
            <li><a href="{{ Config::get('app.url') }}/levels/{{$levels[$i]}}">{{$levels_name[$i]}}</a></li>
            @endif
            @endfor
        </ul>
    </div>
</div>