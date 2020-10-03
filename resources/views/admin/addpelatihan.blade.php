@extends('admin.dashboard')
@section('content')
<br>
<h5 style="margin-left:30px">Masukkan Event</h5>
<div class="container-fluid" style="margin-left:200px">
    <div class="row">
        <div class="col-sm-8">
            <br>
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

            <form method="POST" action="{{route('admin.addpelatihan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contoh1">Title</label>
                        <input type="text" class="form-control" id="contoh1" name="title" placeholder="Title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contoh2">HTM</label>
                        <input type="text" class="form-control" id="contoh2" name="htm" placeholder="HTM">
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="caption">Caption</label>
                        <textarea class="form-control" name="caption" rows="3" placeholder="Caption .."></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="image">Image Upload</label>
                        <input type="file" class="form-control" id="image" name="image" onchange="loadPreview(this);" class="form-control"><br>
                        <img id="preview_img" src={{('/assets/logo/iconperson.png')}} class="hidden" width="95" height="90"/>

                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">submit</button>
                <button type="submit" class="btn btn-warning">Refresh</button>
            </form>

            
            <br>
            <br>
        </div>
    </div>
</div>
    <script>
        function loadPreview(input, id)
        {
            id = id || '#preview_img';
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();

                reader.onload = function (e)
                {
                    $(id) 
                        .attr('src', e.target.result)
                        .width(95)
                        .height(90);
                };

                reader.readAsDataURL(input.files[0]);
                 $('#preview_img').removeClass('hidden');
                 $('#start').hide();
            }
        }
    
    </script>


@endsection