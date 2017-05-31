@extends('dashboard')

@section('nameheader')
    <h1><span class="glyphicon glyphicon" aria-hidden="true"></span>FAQ<br>
         <small>disini anda dapat melihat daftar FAQ (Pertanyaan yang sering Diajukan) di website anda</small></h1>
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
    </div>  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Manajemen Pesanan</a>
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <thead class="main-color-bg">
                    <th><center>No</center></th>
                    <th><center>Pertanyaan</center></th>
                    <th><center>Jawaban </center></th>
                    <th><center>Tindakan</center></th>
                </thead>
            </tr>
            <tr>
                <td>1</td>
                <td>Tentang Kami</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>
                    <center>
                    <a href="#"><button type="button" name="button" class="btn btn-xs main-color-bg" data-toggle="modal" data-target="#hapus"><span class="glyphicon glyphicon-trash"></span></button></a>
                    <a href="#"><button type="button" name="button" class="btn btn-xs main-color-bg" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button></a>
                    </center>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tentang Kami</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>
                    <center>
                    <a href="#"><button type="button" name="button" class="btn btn-xs main-color-bg" data-toggle="modal" data-target="#hapus"><span class="glyphicon glyphicon-trash"></span></button></a>
                    <a href="#"><button type="button" name="button" class="btn btn-xs main-color-bg" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button></a>
                    </center>
                </td>
            </tr>
        </table>
    </div>
@endsection

@section('dropdown create')
        <div class="dropdown create nav navbar-right">
          <button class="btn btn-default dropdown-toggle " type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-plus"></span>Tambah
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a type="button" data-toggle="modal" data-target="#addFAQ">Tambah FAQ</a></li>
          </ul>
        </div>
@endsection
<!-- Modal FAQ -->
<div class="modal fade" id="addFAQ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah FAQ</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Pertanyaan </label>
          <input type="text" name="pertanyaan"  class="form-control" placeholder="Isi Pertanyaan" />
        </div>
        <div class="form-group">
          <label>Jawaban</label>
          <textarea name="editor1" class="form-control"  placeholder="Nama"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit FAQ</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Pertanyaan </label>
          <input type="text" name="pertanyaan"  class="form-control" placeholder="Isi Pertanyaan" />
        </div>
        <div class="form-group">
          <label>Jawaban</label>
          <textarea name="editor1" class="form-control"  placeholder="Nama"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Halaman</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus ........</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>
