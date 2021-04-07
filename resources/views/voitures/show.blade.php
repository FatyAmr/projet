@extends('voitures.layout')
@extends('Head')
@extends('Footer')
@extends('Navbar')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Afficher information voiture</h2>
            </div>
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('voitures.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marque :</strong>
                {{ $voiture->marque }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Année</strong>
                {{ $voiture->annee }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix</strong>
                {{ $voiture->prix }}
            </div>
        </div>
    </div>
@endsection