@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Riwayat Pertandingan</div>
            <div class="card-body"> 
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
