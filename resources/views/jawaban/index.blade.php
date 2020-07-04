@extends('master')
@section('title','CRUD Laravel 1')
@section('content')
<div class="container-fluid py-3">
  <div class="card">
    <div class="py-3 px-3">
      <div class="card">
        <div class="py-3 px-3">
          <h4 class="mb-3">{{$jawaban[0]->judul}}</h4>
          <p class="mb-3">{{$jawaban[0]->pisi}}</p>
          <a href="/pertanyaan/{{{$jawaban[0]->pidi}}}"><i class="fas fa-pen-square fa-lg float-right"></i></a>
        </div>
      </div>
      <div class="card-body">
        @foreach($jawaban as $key=>$j)
        <hr>
        @if($j->isi=="kosong")
        <span class='text-muted'>{{$j->isi}}</span>
        @else
        <p class="mb-3">{{$j->isi}}</p>
        @endif
        @endforeach
        <hr>
        <form action="/jawaban/{{$jawaban[0]->pidi}}" method="post">
          @csrf
          <input type="hidden" name="id_pertanyaan" value="{{$jawaban[0]->pidi}}">
          <div class="form-group">
            <label for="isi">Jawaban</label>
            <textarea type="text" class="form-control" id="isi" name="isi"></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label for="tgl_dibuat">Tgl Buat</label>
                <input type="text" class="form-control" id="tgl_dibuat" name="tgl_dibuat" value="{{date('Y-m-d')}}">
              </div>
              <div class="col">
                <label for="tgl_diperbaharui">Tgl Update</label>
                <input type="text" class="form-control" id="tgl_diperbaharui" name="tgl_diperbaharui" value="{{date('Y-m-d')}}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right">jawab</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection