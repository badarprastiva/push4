<?php

namespace App\http\Controllers;

use Illuminate\http\Request;
use App\KategoriArtikel; 
class KategoriArtikelcontroller extends controller
{
   public function index(){
       //elloquent =>orm (object Relational Mapping)
    $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel

    return view('kategori_artikel.index' ,compact('listKategoriArtikel'));


   }

   public function show($id){
      $KategoriArtikel=KategoriArtikel::find($id);

      return view('kategori_artikel.show' ,compact('KategoriArtikel'));      
   }
}