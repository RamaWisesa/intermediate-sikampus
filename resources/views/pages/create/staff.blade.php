@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah Staff</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">
            <div class="card-body">
                    <form action="/staff" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <span class="help">"Tahun - Bulan - Hari" contoh "1998-05-04"</span>
                                <input type="text" name="dob" placeholder="1999-01-01" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <span class="help">"contoh "081234567891"</span>
                                <input type="text" name="phone" placeholder="081234567891" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <br>
                                <select name="gender" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                    						<option value="Laki-laki">Laki-laki</option>
                    						<option value="Perempuan">Perempuan</option>
                    						</select>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="username" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control" required="">
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                                {{csrf_field()}}
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
