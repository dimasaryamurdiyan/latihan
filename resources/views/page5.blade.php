@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL USER</h1><br>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th >NO</th>
                    <th >Nama</th>
                    <th >User</th>
                    <th >Password</th>
                    <th >Aksi</th>              
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $i=>$value)
                <tr>
                    <th>{{$value->id}}</th>
                    <th>{{$value->nama}}</th>
                    <th>{{$value->username}}</th>
                    <th>{{$value->password}}</th>
                    <th>
                    <form action="{{route('user.destroy',$value->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{route('user.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
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