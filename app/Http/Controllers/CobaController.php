<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
  public function Page()
  {
    return view('PengaturanUmum');
  }
  public function Post()
  {
    return view('LogoUtama');
  }
  public function User()
  {
    return view('IkonWebsite');
  }
  public function HalamanInformasi()
  {
    return view('HalamanInformasi');
  }
  public function slideshow()
  {
    return view('slideshow');
  }

  public function banner()
  {
    return view('Banner');
  }
  public function FAQ()
  {
   return view('FAQ');
  }
  public function Customer()
  {
   return view('Customer');
  }
  public function Kategori()
  {
   return view('ManajemenProduk');
  }
  public function LihatKategori()
  {
    return view('ProdukKategori');
  }

}
