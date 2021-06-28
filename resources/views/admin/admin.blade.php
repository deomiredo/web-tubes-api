@extends('admin.template.layout')

@section('title','dashboard')


@section('content')
<div class="container-fluid">
	
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Tambah data</button>

<table class="table mt-2">  
 <tr>   
   <th>No.</th>
   <th>Title</th> 
   <th>Rating</th>
   <th>Duration</th>
   <th>Waktu</th>
   <th>Description</th>
   <!-- <th>Terakhir diubah</th>   -->
   <th>Aksi</th> 
 </tr>


 <tr>
  <?php $count = 0; ?>
  @foreach ($film as $a)
  <?php $count++; ?>

   <th>{{$count}}</th>
   
   <th>{{$a->title}}</th>     
   <th>{{$a->rating}}</th>
   <th>{{$a->duration}} menit</th>
   <th>{{$a->waktu}}</th>
   <th>{{$a->description}}</th>  
   <th>
   <a  href="{{"hapus/".$a->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></a></th>
   <th>
    <!-- <a href="{{"edit/".$a->id}}"href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>edit</a>      -->
   <th onClick="javacript : return confirm('hapus?')" ></th>

  </tr>
  @endforeach  

</table>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
         <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
          @CSRF
             <div class="form-group">
                 <label>Title</label>
                 <input type="text" name="title" class="form-control">
             </div>
             <div class="form-group">
              <label>Rating</label>
                <input type="text" name="rating" class="form-control">
             </div>
             <div class="form-group">
                 <label>Duration</label>
                 <input type="text" name="duration" class="form-control">
             </div>
             <div class="form-group">
                 <label>Time</label>
                 <input type="text" name="waktu" class="form-control">
             </div>
             <div class="form-group">
                 <label>Description</label>
                 <input type="text" name="description" class="form-control">
             </div>                                        
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
         </form>
     </div>
   </div>
 </div>

</div>
</div>

@endsection



