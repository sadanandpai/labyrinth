<!doctype html>
<html lang="en">
<head> 
      <title>Leader Board</title> 
      @include('layouts.topsec')
   </head> 
<body>
<div class="container">  
    @include('layouts.lb')                                 
    <table class="table text-center"> 
    <thead>
    <tr>
        <th></th>
        <th class="text-center">Username</th>
        <th class="text-center">Level</th>
        <th class="text-center">Status</th>
    </tr>
    </thead> 
    <tbody>
	
	@foreach ($users as $user)
		<?php 
		$user->level = (float) $user->level; 
		?>
	@endforeach
	
	<?php 
		$lvl = array(23, 22, 21, 20, 19, 18, 17, 16, 15, 14, 13.6, 13.3, 13, 12, 11, 10, 9.5, 9, 8, 7, 6, 5, 4.5, 4, 3, 2, 1.6, 1.3, 1, 0);
		$count = 0;
	?>
	
		<tr>
		<?php  foreach ($lvl as $l) {
			foreach ($users as $user){
				if($user->level == $l){ ?>
					<td>{{ ++$count }}</td>
					<td>{{ $user->username }}</td>
					<td>{{ floor($user->level) }}</td>
					<td>@If (time() - $user->activity < 180) 
							<img width="15px" height="15px" src="{{URL::asset('files/images/online.png')}}" />   
						@elseIf (time() - $user->activity < 360)  
							<img width="15px" height="15px" src="{{URL::asset('files/images/away.png')}}" />
						@else 
							{{ ' ' }}
						@endif
					</td>
					</tr>
				<?php }
			}
		} ?>
		
		
	
	
	<?php  /*
    @foreach ($users as $count => $user)
	
    @If (Auth::check() && Auth::user()->username == $user->username)
        <tr class="info">
    @else
        <tr>
    @Endif
        <td>{{ ++$count }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->level }}</td>
        <td>@If (time() - $user->activity < 180) 
                <img width="15px" height="15px" src="{{URL::asset('files/images/online.png')}}" />   
            @elseIf (time() - $user->activity < 360)  
                <img width="15px" height="15px" src="{{URL::asset('files/images/away.png')}}" />
            @else 
                {{ ' ' }}
            @Endif
        </td>
    </tr>
    @endforeach
	*/ 
	
	?>
    </tbody>     
</table>   
</div>

</body>
</html>	