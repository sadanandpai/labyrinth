<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Board</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script src="../../../files/js/jquery.js"></script> 
        <link href="../../../files/css/bootstrap.css" rel="stylesheet"> 
        <script src="../../../files/js/bootstrap.js"></script> 
    </head>
    <body>
        <div class="container">
        @include('layouts.header')

        <?php $answers = explode('::',$answers); ?>
        @foreach ($answers as $count => $answer)
            @if($count !== 0) 
                {{ '<b>' . $count . '</b>' . ' :    ' }}
            @endif
            {{ HTML::entities($answer) }}
            {{ '<br>' }}
       @endforeach
       </div>
    </body>
</html>