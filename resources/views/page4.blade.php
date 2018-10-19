@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL MAHASISWA</h1><br>
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
                        <a href="">Edit</a>
                        <button type="">Delete</button>
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