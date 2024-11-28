@extends('layouts.default')
 @section('contenu')
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Rôles</title>
</head>
 <div class="container mt-5">
    <div class="row">
      @foreach ($roles as $role)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $role->id }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $role->label }}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('roles.edit', $role->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                  <a href="{{ route('roles.show', $role->id) }}"
            class="btn btn-primary btn-sm">Show</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

 @section('pied_page')
<p>Ceci est un pied de page.</p>
 @stop