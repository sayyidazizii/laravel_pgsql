@extends('siswa.layout')
@section('content')
    <!-- Area Chart -->
    <div class="card shadow" style="position: relative;width:100vw;height:100vh;">
        <div class="card-header text-center">
            Edit User
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="container" style="position: relative;width:80%">
                @foreach ($data as $user)
                <form action="/update" method="post">
                    {{ csrf_field('') }}
                    <input hidden type="text" class="form-control" name="id" type="text" value="{{ $user->id_siswa }}" readonly>
                    <label class="form-label">NIS</label>
                    <input class="form-control" name="nis" type="text" value="{{ $user->nis_siswa }}" required>
                    <label class="form-label">Nama</label> 
                    <input class="form-control" name="nama" type="text" value="{{ $user->nama_siswa }}"  required>
                    <label class="form-label">Kelas</label>
                    <select class="form-select mt-2" name="kelas">
                        <option value="{{ $user->kelas_siswa }}">{{ $user->kelas_siswa }}</option>
                        <option value="RPLA">RPLA</option>
                        <option value="RPLB">RPLB</option>
                        <option value="RPLC">RPLC</option>
                    </select>
                    <br>
                    {{-- <input class="form-control" name="kelas" type="text"  value="{{ $user->kelas_siswa }}" required> --}}
                    <button class="btn btn-primary mt-2" type="submit">Edit</button>
                    <a href="/index" class="btn btn-secondary mt-2">Batal</a>
                   </form>
                   @endforeach
            </div>
           
        </div>
    </div>

@endsection
                        