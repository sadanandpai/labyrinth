<div class="row">
    <div class="col-sm-8 col-sm-offset-3 col-md-offset-4">
        <form class="form-inline" role="form" method="POST" action="../../answers/{{ $level }}" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}">
            <div class="form-group">
                <label for="answer">Answer</label>
                <input type="text" class="form-control" name="answer" id="answer" required="yes" autocomplete="off" pattern="[A-z0-9]*" maxlength="35" title="Alphanumerics only" >
            </div>
            <button type="submit" class="btn btn-primary">Enter</button>
        </form>
    </div>
</div>
<br>