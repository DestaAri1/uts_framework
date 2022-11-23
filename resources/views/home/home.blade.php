@extends('home.master')

@section('konten')
<div class="site-section" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <h1 class="text-white serif text-uppercase mb-4">Atur Penyimpanan Bukumu dengan Website Kami</h1>
          <p class="text-white mb-5">Book Collection atau My Book Collection merupakan sebuah aplikasi berbasis website yang mana kami menyediakan fitur untuk megetahui buku apa saja yang kalian miliki</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <img src="{{asset('style3/images/book_1.png')}}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
@endsection
