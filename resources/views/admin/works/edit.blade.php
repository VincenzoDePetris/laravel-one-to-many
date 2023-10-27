@extends('layouts.app')


@section('content')
<div class="container mt-5">

  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    Correggi i seguenti errori per proseguire:
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
  </div>
  @endif


  <form action="{{ route('admin.works.update', $work) }}" method="POST">
    @method('PUT') @csrf
    <label for="title" class="form-label">Titolo</label>
    <input
      type="text"
      class="form-control"
      id="title"
      name="title"
      value="{{ $work->title }}"
    />

    <label for="link" class="form-label">Link</label>
    <input
      type="text"
      class="form-control"
      id="link"
      name="link"
      value="{{ $work->link }}"
    />

    <label for="slug" class="form-label">Slug</label>
    <input
      type="text"
      class="form-control"
      id="slug"
      name="slug"
      value="{{ $work->slug }}"
    />
  

    <label for="description" class="form-label">Descrizione</label>
  <textarea class="form-control" id="description" name="description" rows="4">
      {{ $work->description }}
    </textarea
  >

    <button type="submit" class="btn btn-primary">Salva</button>
  </form>

</div>
@endsection