@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Pertandingan Berlangsung</div>
            <div class="card-body">
                <a href="{{ route('ronde1')}}" class="btn btn-primary mb-2" id="create-new-post">Ronde 1</a> 
                <a href="{{ route('ronde2')}}" class="btn btn-primary mb-2 {{ Request::path() === 'admin/ronde2' ? 'btn-warning' : ''}}" id="create-new-post">Ronde 2</a> 
                <a href="{{ route('ronde3')}}" class="btn btn-primary mb-2" id="create-new-post">Ronde 3</a> 
                <a href="{{ route('final')}}" class="btn btn-primary mb-2" id="create-new-post">Final</a> 
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
                      <th>Score</th>
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
                      <td>{{ $item->score }}</td>
                      @if($item->status =='RUNNING') 
                        <td><span class="badge badge-pill badge-warning">{{ $item->status }}</span></td>
                      @elseif($item->status =='FINISH') 
                        <td><span class="badge badge-pill badge-success">{{ $item->status }}</span></td>
                      @endif  
                      <td>
                      <form action="{{ route('score2', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-warning">
                                    <i class="fa fa-th"></i>
                                </button>
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
