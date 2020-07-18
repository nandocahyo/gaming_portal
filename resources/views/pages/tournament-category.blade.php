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

@endsection
