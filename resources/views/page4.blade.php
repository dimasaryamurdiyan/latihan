@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL MAHASISWA</h1><br>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No.HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $i=>$value)
                <tr>
                    <th>{{$value->nim}}</th>
                    <th>{{$value->nama}}</th>
                    <th>{{$value->email}}</th>
                    <th>{{$value->nohp}}</th>
                    <th>{{$value->alamat}}</th>
                    <th>
                        <form action="{{route('mahasiswa.destroy',$value->nim)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{route('mahasiswa.edit',$value->nim)}}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>                           
                        </form>
                    </th>
                    
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection