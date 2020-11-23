<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>CRUD Laravel</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Tanggal Lahir</th>
                            <th>Created When</th>
                            <th>Update When</th>
                            <th>Aksi</th>



                            {{-- // $table->id();
                            // $table->string('username');
                            // $table->string('password');
                            // $table->string('nama');
                            // $table->string('email')->unique();
                            // $table->string('nohp');
                            // $table->date('tanggal_lahir');
                            // $table->date('created_when');
                            // $table->date('update_when'); --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->username }}</td>
                            <td>{{ $d->password }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->nohp }}</td>
                            <td>{{ $d->tanggal_lahir }}</td>
                            <td>{{ $d->created_when }}</td>
                            <td>{{ $d->update_when }}</td>
                            <td>
                                <a href="{{url('deleteUsers',array($d->id))}}">Delete</a>
                                <a href="{{url('editUsers',array($d->id))}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <a href="{{url('create',array($d->id))}}">Create</a> --}}
            </div>
        </div>
    </div>
</body>
</html>