@extends('component.layouts.kkelas')
@section('kelas')
<header id="header">
  <h1><a href="index.html">SIKAMPUS</a></h1>
  <nav id="nav">
    <ul>
      <li><a href="/" >Beranda</a></li>
      <li><a href="/kelas" class="button special">Perkuliahan</a></li>
      <li><a href="/kontak">Kontak Kami</a></li>
    </ul>
  </nav>
</header>

<!-- Main -->
<section id="main" class="wrapper">
<div class="container">

  <!-- Table -->
    <section>
      <header class="major"><h2>Jadwal Kuliah Dengan NIM {{$nim}} Tidak Ditemukan, Atau Salah ! </h2></header>
    </section>
</div>
</section>
<section id="three" class="wrapper style3 special">
  <div class="container">
    <header class="major">
      <h2>Cari Kelas</h2>
      <p>Masukan NIM pada form di bawah ini untuk mengetahui kelas. </p>
    </header>
  </div>
  <div class="container 50%">
    <form action="/cari" method="post">
      <div class="row uniform">
        <div class="12u$">
          <input name="cari" placeholder="Nomor Induk Mahasiswa" type="text" width="200px">
        </div>
        <div class="12u$">
          <ul class="actions">
            <li><input value="Cek Kelas" class="special big" type="submit"></li>
          </ul>
        </div>
      </div>
      {{csrf_field()}}
    </form>
  </div>
</section>
@endsection
