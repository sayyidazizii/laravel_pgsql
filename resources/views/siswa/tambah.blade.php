@extends('siswa.layout')
@section('content')
    <!-- Area Chart -->
    <div class="card shadow" style="position: relative;width:100vw;height:100vh;">
        <div class="card-header text-center">
            Tambah user
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="container" style="position: relative;width:80%">
                <form action="add/store" method="get">
                    {{ csrf_field() }}
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                    <input type="hidden" name="_token" value="mWSi4LS1kUlnA2Ec140nN25prqyPmpn6LQlAdTzW">
                    <label class="form-label">Nis</label>
                    <input class="form-control" name="nis" type="number" required>
                    <label class="form-label">Nama</label>
                    <input class="form-control" name="nama" type="text"  required>
                    <label class="form-label">Kelas</label>
                    {{-- <input class="form-control" name="kelas" type="text"  required> --}}
                    <select class="form-select mt-2" name="kelas">
                        <option value="RPLA">pilih kelas</option>
                        <option value="RPLA">RPLA</option>
                        <option value="RPLB">RPLB</option>
                        <option value="RPLC">RPLC</option>
                    </select>
                    <br>
                    <button class="btn btn-primary mt-2" type="submit">Simpan</button>
                    <a href="/index" class="btn btn-secondary mt-2">Batal</a>
                   </form>
            </div>
           
        </div>
    </div>

@endsection
                        