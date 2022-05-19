@extends('layouts.template')

@section('content')

<div class="container">
    @if (Auth::user())
    <h3>Bonjour {{Auth::user()->name}}</h3>
    @endif
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Prénom</label>
                <input type="text" class="form-control" id="validationTooltip01" placeholder="Entrez votre prénom" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Nom</label>
                <input type="text" class="form-control" id="validationTooltip02" placeholder="Entrez votre nom" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Message</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>
<div id="map"></div>
@endsection