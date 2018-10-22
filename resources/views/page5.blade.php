@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL USER</h1><br>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th >Nama</th>
                    <th >User</th>
                    <th >Password</th>
                    <th >Aksi</th>              
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $i=>$value)
                <tr>
                    <th>{{$value->nama}}</th>
                    <th>{{$value->username}}</th>
                    <th>{{$value->password}}</th>
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