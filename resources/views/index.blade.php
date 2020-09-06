@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <h3 class="text-center">Utilisateurs <a href="/meekouser0s/create" class="btn btn-primary btn-sm"">Ajouter</a></h3>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Email</td>
          <td>Mot de pass</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($meekouser0 as $meekouser0s)
        <tr>
            <td>{{$meekouser0s->id}}</td>
            <td>{{$meekouser0s->nom}}</td>
            <td>{{$meekouser0s->prenom}}</td>
            <td>{{$meekouser0s->email}}</td>
            <td>{{$meekouser0s->motdepass}}</td>
            <td class="text-center">

                <a href="{{ route('meekouser0s.edit', $meekouser0s->id)}}" class="btn btn-primary btn-sm"">Modifier</a>
                <form action="{{ route('meekouser0s.destroy', $meekouser0s->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Supprimer</button>
                  </form>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

<div>
@endsection
