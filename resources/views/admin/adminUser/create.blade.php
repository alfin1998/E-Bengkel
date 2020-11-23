<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>CRUD User</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('tambahUsers')}}" method="post">
                    <div class="form-group">
                        <label for="id">id</label>
                        <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">

                        
                    </div>                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>          
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>          
                    <div class="form-group">
                        <label for="nohp">No Hp</label>
                        <input type="number" name="nohp" id="nohp" class="form-control">
                    </div>      
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>      
                    <div class="form-group">
                        
                        <label for="created_when">Created When</label>
                        <input type="hidden" name="created_when" id="created_when" class="form-control">
                    </div>   
                    <div class="form-group">
                        <label for="update_when">Update When</label>
                        <input type="hidden" name="update_when" id="update_when" class="form-control">
                    </div>    
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>