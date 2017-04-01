<div class="row well">
    <div class="col-xs-10 col-sm-3"><strong>
        <a href="{{ Config::get('app.url') }}" class="btn btn-info btn-xs">
          <span class="glyphicon glyphicon-home"></span></a>
			@If(Auth::check())
				Hey, {{{ Auth::user()->username }}}
		    @else
				Welcome
			@endIf
		  
		  </strong></div>
    <div class="col-sm-2"></div>

    <div class="col-xs-2 col-sm-1">

    <a data-toggle="modal" data-target="#myModal"><script>document.write("Rules")</script></a><div id="myModal" class="modal fade" role="dialog"><div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-left text-primary">Rules</script></h4>
      </div>
      <div class="modal-body">
        <p>1. Your target is to go to next level by any means.</p>
        <p>2. Enter all the answers in small letters.</p>
        <p>3. Enter only alphanumeric and dot in answer field.</p>
        <p>4. Do not try to cheat / hack.</p>
        <p>5. Answers can be hidden anywhere in the page in different forms.</p>
        <p>6. Use Google to proceed with clues for help.</p>
        <p>7. There is an unique way to get into next level.</p>
        <br>
        <p>Common places of clues are <strong>url, image, source code</strong> etc.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div></div>
     <noscript><a href="rules">Rules</a></noscript>
</div>

    <div class="col-xs-10 col-sm-4">
	@If(Auth::check())
        <strong><a href="levels/{{ Auth::user()->level }}">Play</a></strong>
     @else
        <a href="about">About</a>
    @Endif
	</div>
    <div class="col-xs-1 col-sm-2 text-warning text-right">
    @If(Auth::check())
         {{ link_to_route('logout', 'Logout'); }}
    @else
         {{ link_to_route('signin', 'Login'); }}
    @endif
     </div>

  </div>			