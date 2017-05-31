@extends('dashboard')

@section('nameheader')
    <h1><span class="glyphicon glyphicon" aria-hidden="true"></span>Pengaturan Umum Website <br>
         <small>Disini anda dapat mengatur data website anda</small></h1>
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
        <h3 class="panel-title">Silahkan Mengisikan Data Yang Diperlukan </h3>
      </div>
      <div class="panel-body">
          <form>
              <div class="form-group col-md-6">
                <label>Nama Perusahaan</label>
                <input type="text" class="form-control" id="" placeholder="Nama Perusahaan">
              </div>
              <div class="form-group col-md-6">
                  <label>Tag Line</label>
                <input type="text" class="form-control" id="" placeholder="Tag Line Perusahaan">
              </div>
              <div class="form-group col-md-12">
                <label >Alamat Perusahaan</label>
                <textarea type="text" class="form-control" id="" placeholder=""></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>kontak 1</label>
                <input type="text" class="form-control" id="" placeholder="082xxxxxxxxx">
              </div>
              <div class="form-group col-md-6">
                  <label>Kontak 2</label>
                <input type="text" class="form-control" id="" placeholder="082xxxxxxxxx">
              </div>
              <div class="form-group col-md-6">
                <label>Email 1</label>
                <input type="email" class="form-control" id="" placeholder="example@gmai.com">
              </div>
              <div class="form-group col-md-6">
                  <label>Email 2</label>
                <input type="email" class="form-control" id="" placeholder="example@gmai.com">
              </div>
              <div class="form-group col-md-12">
                <label >Deskripsi Perusahaan</label>
                <textarea type="text" class="form-control" id="" placeholder=""></textarea>
              </div>
              <div class="checkbox">
                <!-- <label>
                  <input type="checkbox"> Check me out
                </label>
            </div>-->
              <button type="submit" class="btn btn-default">Submit</button>
          </form>




      </div>
    </div>
@endsection
