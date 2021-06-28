
@extends('admin.template.layout')

@section('title','edit')


@section('content')


<div class="container-fluid">
    <form method="post" action="{{route('admin.update',[$author->id])}}" enctype="multipart/form-data">
        @CSRF
        @method('put')
           <div class="form-group">
               <label>Nama</label>
               <input type="text" name="name" class="form-control" value="{{$author->name}}">
           </div>
           <div class="form-group">
            <label>Picture</label>
            <input type="file" name="picture" class="form-control" value="{{$author->picture}}" >
            {{-- <input type="text" name="picture" class="form-control" value="{{$author->picture}}"> --}}
           </div>
           <div class="form-group">
               <label>Address</label>
               <input type="text" name="address" class="form-control" value="{{$author->address}}">
           </div>                                       
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
</div>



@endsection



