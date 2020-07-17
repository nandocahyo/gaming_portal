@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tournament Category</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Tournament Category</div>
            <div class="card-body">
                <a href="javascript:void(0)" class="btn btn-primary mb-2" id="create-new-post">Tambah Tournament Category</a> 
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><span id="laravel_crud"></span>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody id="posts-crud">
                    @foreach($posts as $post)
                    <tr id="post_id_{{ $post->id }}">
                      <td>{{ $post->id }}</td>
                      <td>{{ $post->nama }}</td>
                      <td>
                            <a href="javascript:void(0)" id="edit-post" data-id="{{ $post->id }}" class="btn btn-info mr-2">Edit</a>
                            <a href="javascript:void(0)" id="delete-post" data-id="{{ $post->id }}" class="btn btn-danger delete-user">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>

        <!-- modal section -->
        <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="postCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="postForm" name="postForm" class="form-horizontal">
                    <input type="hidden" name="post_id" id="post_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nama" name="nama" value="" required="">
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save
                        </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
            </div>
        </div>
   

@endsection

@section('script-addon')
<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#create-new-post').click(function () {
        $('#btn-save').val("create-post");
        $('#postForm').trigger("reset");
        $('#postCrudModal').html("Tambah Data Siswa");
        $('#ajax-crud-modal').modal('show');
    });
 
    $('body').on('click', '#edit-post', function () {
      var post_id = $(this).data('id');
      $.get('tournament-category/'+post_id+'/edit', function (data) {
         $('#postCrudModal').html("Edit Siswa");
          $('#btn-save').val("edit-post");
          $('#ajax-crud-modal').modal('show');
          $('#post_id').val(data.id);
          $('#nama').val(data.nama); 
      })
   });

    $('body').on('click', '.delete-post', function () {
        var post_id = $(this).data("id");
        confirm("Are You sure want to delete !");
 
        $.ajax({
            type: "DELETE",
            url: "{{ url('tournament-category')}}"+'/'+post_id,
            success: function (data) {
                $("#post_id_" + post_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });   
  });
 
 if ($("#postForm").length > 0) {
      $("#postForm").validate({
 
     submitHandler: function(form) {

      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');

      
      $.ajax({
          data: $('#postForm').serialize(),
          url: "{{ route('tournament-category.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              var post = '<tr id="post_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.nama + '</td>';
              post += '<td><a href="javascript:void(0)" id="edit-post" data-id="' + data.id + '" class="btn btn-info">Edit</a></td>';
              post += '<td><a href="javascript:void(0)" id="delete-post" data-id="' + data.id + '" class="btn btn-danger delete-post">Delete</a></td></tr>';
               
              
              if (actionType == "create-post") {
                  $('#posts-crud').prepend(post);
              } else {
                  $("#post_id_" + data.id).replaceWith(post);
              }
 
              $('#postForm').trigger("reset");
              $('#ajax-crud-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
}
   
</script>
@endsection