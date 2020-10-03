@extends('admin.dashboard')
@section('content')
<title>Admin Sinergi Profesional</title>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
                @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </div><br/>
            @endif

            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session()->get('success') }}  
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                </div><br/>
            @endif
            <div class="card-header">
                <a href="{{route('admin.addpelatihan')}}" class="btn btn-primary ">Add Event</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Caption</th>
                      <th>HTM</th>
                      <th>Picture</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                    @endphp
                    @foreach($dataPelatihan as $i)
                    <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$i->title}}</td>
                    <td>{{$i->caption}}</td>
                    <td>{{$i->htm}}</td>
                    <td><img src="{{('/image/' . $i->image )}}" height="80" width="85"/></td>
                    <td>
                        {{-- <form action="{{route('data-user.destroy', $i->id)}}" method="POST"> --}}
                        <a href="#" class="btn btn-success">Update</a>
                        <a href="{{route('admin.pelatihan.destroy', $i->id)}}" class="btn btn-danger">Delete</a> 
                        
                        {{-- @csrf
                        @method('POA') --}}
                        {{-- <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
        
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


@endsection
    
