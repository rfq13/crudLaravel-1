@extends('master')
@section('title','CRUD Laravel 1')
@section('content')
<div class="container-fluid py-3">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-end">
        <a href="/add" class="btn btn-outline-primary mb-3">any questions?</a>
      </div>
      <div class="overflow-auto">
        <ul class="list-group list-group-flush py-3" style="width: 58rem;">
          @foreach($pertanyaan as $key=> $p)
          <li class="list-group-item">
            <h3><a href="">{{$p->judul}}</a></h3>
            <p>{{$p->isi}}</p>
            <span class="badge badge-dark float-right">{{$p->tgl_dibuat}}</span>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection