<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <script src="{{URL::asset('files/js/jquery.js')}}"></script>
        <link href="{{URL::asset('files/css/bootstrap.css')}}" rel="stylesheet"> 
        <script src="{{URL::asset('files/js/bootstrap.js')}}"></script> 
    </head>

    <body>
        <div class="container">
            @include('layouts.header')
            
            <div class="row text-center">
            <form method="POST" action="rolechange" accept-charset="UTF-8" class="form-inline" role="form">
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}">
                <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required="yes" autocomplete="off" pattern="[A-z0-9_-]{6,15}" maxlength="15" />
                </div>

                <div class="form-group">
                    <label for="sel1">Role:</label>
                    <select class="form-control" name="role">
                        <option value="user">User</option>
                        <option value="spy">Spy</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="active">Active:</label>
                    <select class="form-control" name="active">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <div class="col-md-12 text-center"><b>{{ Session::get('message') }}</b></div>
            </div>
            <br>

            <table class="table text-center"> 
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Active</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Level</th>
                        <th class="text-center">Rank</th>
                        <th class="text-center">Joning time</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ link_to('admin/panel/' . $user->username, $user->username) }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->active }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->level }}</td>
                        <td>{{ $user->rank }}</td>
                        <td>{{ $user->created_at }}</td>
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
                </tbody>
            </table>
        </div>

    </body>
</html>