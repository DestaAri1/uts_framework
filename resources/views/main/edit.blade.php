@extends('main.master')

@section('judul_halaman', 'Halaman Edit Buku')

@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Buku</h1>
</div>
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Lama</h6>
            </div>
            <div class="card-body">
                <form>
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" placeholder="{{$buku->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="">Penerbit</label>
                            <input type="text" class="form-control" placeholder="{{$buku->penerbit}}">
                        </div>
                        <div class="form-group">
                            <label for="">Pengarang</label>
                            <input type="text" class="form-control" placeholder="{{$buku->pengarang}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="number" class="form-control"placeholder="{{$buku->year}}">
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <input type="text" class="form-control" placeholder="{{$buku->id_kategori}}">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Baru</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input id="judul" name="judul" type="text" class="form-control" placeholder="Masukkan Judul" required>
                      </div>
                      <div class="form-group">
                        <label for="">Penerbit</label>
                        <input id="penerbit" name="penerbit" type="text" class="form-control" placeholder="Masukkan Penerbit" required>
                      </div>
                      <div class="form-group">
                        <label for="">Pengarang</label>
                        <input id="pengarang" name="pengarang" type="text" class="form-control" placeholder="Masukkan Pengarang" required>
                      </div>
                      <div class="form-group">
                        <label for="">Tahun</label>
                        <input id="year" name="year" type="number" class="form-control"placeholder="Masukkan Tahun" required>
                      </div>
                      <div class="">
                        <label for="">Pilih Kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori" required>
                            <option value="">...</option>
                            @foreach ($kategori as $k)
                                <option value="{{$k->nama_kategori}}">{{$k->nama_kategori}}</option>
                                <input type="hidden" name="id" id="id" value="{{$k->id}}">
                            @endforeach
                        </select>
                    </div>
                    <br>
                      <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
         </div>
    </div>
</div>
@endsection
