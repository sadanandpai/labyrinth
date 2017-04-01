<div class="row well">
    <div class="col-xs-10 col-sm-3"><strong>
        <a href="{{ Config::get('app.url') }}" class="btn btn-info btn-xs">
          <span class="glyphicon glyphicon-home"></span></a> Hey, {{{ Auth::user()->username }}}</strong></div>
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
        <p>3. Enter only alphanumeric.</p>
        <p>4. Answers can be hidden anywhere in the page in different forms.</p>
        <p>5. Google might be your best friend.</p>
        <br>
        <p>Common places of clues are <strong>url, image, source code</strong> etc.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div></div>
     <noscript><a href="../rules">Rules</a></noscript>
</div>

    <div class="col-xs-10 col-sm-4">{{ link_to_route('lb', 'Leaderboard'); }}</div>
    <div class="col-xs-1 col-sm-2 text-warning text-right">{{ link_to_route('logout', 'Logout'); }}</div>
  </div>

<div class="row text-center">
</div>