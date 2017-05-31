@extends('dashboard')

@section('nameheader')
<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard <small>your home</small></h1>
@endsection

@section('sidebar')
    <a href="/" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Dashboard</a>
    <div class="dropdown">
        <a  class=" list-group-item dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"   ><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Konfigurasi Website<span class="caret"></span></a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu1">
              <li class="dropdown">
                <a href="/Page" class="list-group-item" >Pengaturan Umum</a>
                <a href="/Post" class="list-group-item" >Logo Utama Website</a>
                <a href="/User" class="list-group-item" >Ikon Website</a>
              </li>
            </ul>
    </div>
    <a href="/HalamanInformasi" class="list-group-item"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Halaman Informasi</a>
    <a href="/Slideshow" class="list-group-item"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> SlideShow</a>
    <a href="/Banner" class="list-group-item"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Banner</a>
    <a href="/FAQ" class="list-group-item"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> FAQ</a>
    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Testimonial</a>
    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> Blog</a>
    <a href="/Customer" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customer</a>
    <div class="dropdown">
      <a  class=" list-group-item dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"   ><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Manajemen Produk<span class="caret"></span></a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li class="dropdown-submenu">
                <a href="/Kategori">Kategori</a>
              </li>
        </ul>
    </div><a href="#" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Manajemen Pesanan</a>

@endsection

@section('content')
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Website Overview</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-file" aria-hidden="true"></span> 23</h2>
                <h4>Halaman 1</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 40</h2>
                <h4>Halaman 2</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                <h4>Halaman 3</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 21,300</h2>
                <h4>Halaman 4</h4>
            </div>
        </div>
      </div>
    </div>
@endsection
