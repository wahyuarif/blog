<html>
    <head>

        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <div class="container">
                <div class="col-lg-8 mx-auto my-5">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }} </br>
                            @endforeach
                        </div>
                    @endif

                    <form action="/upload/process" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <b>Jenis Pengajuan</b></br>
                            <input type="text" name="jns_pengajuan">
                        </div>
                        <div class="form-group">
                            <b>File</b></br>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <b>Status</b></br>
                            <input type="text" name="status">
                        </div>
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                    <h4>Header Uhui</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">Jenis Pengajuan</th>
                                <th width="1%">File</th>
                                <th>Status</th>
                                <th width="1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($syarat_pengajuan as $syt)
                            <tr>
                                <td>{{$syt->jns_pengajuan}}</td>
                                <td><img width="150px" src="{{ url('/files_storage/'.$syt->file) }}"></td>
                                <td>{{$syt->status}}</td>
                                <td><a class="btn btn-danger" href="/upload/hapus/{{ $syt->id_pengajuan }}">HAPUS</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>