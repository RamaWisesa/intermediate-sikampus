@extends('component.layouts.sidebar')
@section('content')
    <h5>Data Mahasiswa</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="/create/mahasiswa" class="text-right pull-right btn btn-complete btn-cons">Tambah Mahasiswa</a>
                    <div class="table-responsive">
                            <table class="table" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th style="width:10%">ID</th>
                                        <th style="">NIM</th>
                                        <th style="">Nama</th>
                                        <th style="">Tanggal Lahir</th>
                                        <th style="">Telephone</th>
                                        <th style="">Alamat</th>
                                        <th style="">Jenis Kelamin</th>
                                        <th style="">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      @foreach ($user as $users)
                                      <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->id }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->nim }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->name }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->dob }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->phone }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->address }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->gender }}</p>
                                      </td>
                                      <td class="v-align-middle">
                                        <a href="/mahasiswa/{{$users->id}}/edit" class="btn btn-default btn-cons m-b-10">Edit</a>
                                        <form action="/mahasiswa/{{$users->id}}" method="post">
                                          <input class="btn btn-default btn-cons m-b-10" type="submit" name="submit" value="delete">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                      </form>
                                      </td>
                                  </tr>
                                      @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
