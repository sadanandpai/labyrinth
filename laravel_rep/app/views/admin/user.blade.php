<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Board</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script src="{{URL::asset('files/js/jquery.js')}}"></script>
        <link href="{{URL::asset('files/css/bootstrap.css')}}" rel="stylesheet"> 
        <script src="{{URL::asset('files/js/bootstrap.js')}}"></script>
    </head>
    
    <body>
        <div class="container">
        @include('layouts.header')

        <table class="table text-center"> 
                <thead>
                    <tr>
                        <th class="text-center">Level</th>
                        <th class="text-center">Attempts</th>
                        <th class="text-center">Updated</th>
                        <th class="text-center">Created</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr align=center>
                    <td>{{ link_to('admin/panel/' . $user->username . '/' . $user->level, $user->level) }}</td>
                    <td>{{ $user->attempt }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
            </table>
        </center>

    </body>
</html>