@extends('voitures.layout')
@extends('Head')
@extends('Footer')
@extends('Navbar')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bienvenue</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('voitures.create') }}"> Ajouter une voiture</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Année</th>
            <th width="280px">Prix</th>
        </tr>
        @foreach ($voitures as $voiture)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $voiture->marque }}</td>
            <td>{{ $voiture->annee }}</td>
            <td>{{ $voiture->prix }}</td>
            <td>
                <form action="{{ route('voitures.destroy',$voiture->id) }}" method="POST">
   
            
    
                    <a class="btn btn-primary" href="{{ route('voitures.edit',$voiture->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $voitures->links() !!}
      
@endsection
