@extends('siswa.layout')
@section('content')
    <!-- Area Chart -->
    <div class="card shadow" style="position: relative;width:100vw;height:100vh;">
        <div class="card-header text-center">
            Data siswa
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <table>

                @if ($message = Session::get('succes'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('update'))
                    <div class="alert alert-warning">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('delete'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <a href="/add" class="btn btn-primary mb-2">Tambah data</a>
                <table class="table table-bordered">
                    <tr>
                        <th width="280px" class="text-center">NIS</th>
                        <th width="280px" class="text-center">Nama</th>
                        <th width="280px" class="text-center">Kelas</th>
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                    @foreach ($data as $r)
                        <tr>
                            {{-- <td class="text-center">{{ ++$i }}</td> --}}
                            <td>{{ $r->nis_siswa }}</td>
                            <td>{{ $r->nama_siswa }}</td>
                            <td>{{ $r->kelas_siswa }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm" href="/edit/{{ $r->id_siswa }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/hapus/{{ $r->id_siswa }}">Delete</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{-- {!! $sisw->links() !!} --}}
            </table>
        </div>
    </div>
@endsection
