@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Tanding</div>
            <div class="card-body">
                <a href="{{ route('tanding.create') }}" class="btn btn-info mb-2" id="create-new-post">Tambah Pertandingan</a> 
                <a href="{{ route('history') }}" class="btn btn-primary mb-2" id="create-new-post">Riwayat Pertandingan</a> 
                <a href="{{ route('bracket') }}" class="btn btn-warning mb-2" id="create-new-post">Bracket Pertandingan</a> 
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><span id="laravel_crud"></span>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ID Team</th>
                      <th>Nama Team</th>
                      <th>Nama Tournament</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody id="posts-crud">
                    @foreach($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->id_team }}</td>
                      <td>{{ $item->team->nama }}</td>
                      <td>{{ $item->tournament->nama }}</td>
                      <td>{{ $item->tournament->tanggal }}</td>
                      @if($item->status =='RUNNING') 
                        <td><span class="badge badge-pill badge-warning">{{ $item->status }}</span></td>
                      @elseif($item->status =='FINISH') 
                        <td><span class="badge badge-pill badge-success">{{ $item->status }}</span></td>
                      @endif  
                      <td>
                            <a href="{{ route('ronde1') }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                      
                            <form action="{{ route('tanding.update', $item->id) }}" method="post" class="d-inline" id="delete-pack">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-danger" onclick="confirmDelete(this)" type="button"><i class="fa fa-th"></i></button>
                            </form>  
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
