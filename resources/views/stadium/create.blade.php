@extends('layouts.app')

@section('content')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        {!! Form::open(['url' => '/admin/create', 'files' => true, 'class' => 'col s12']) !!}
            <div class="file-field input-field col s6 offset-s3">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="landing_image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Image d'accueil" />
                </div>
            </div>
            <div class="input-field col s6 offset-s3">
                <input id="g_map_key" name="g_map_key" type="text" class="validate" />
                <label for="g_map_key">Clé pour Google Maps</label>
            </div>
            <div class="file-field input-field col s6 offset-s3">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="logo" />
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Logo" />
                </div>
            </div>

            <div class="file-field input-field col s6 offset-s3">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="background_description">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Image de la description" />
                </div>
            </div>

            <div class="input-field col s6 offset-s3">
                <input id="description" name="description" type="text" class="validate" />
                <label for="description">Description</label>
            </div>

            <div class="input-field col s6 offset-s3">
                <input id="hours" type="text" name="hours" class="validate" />
                <label for="hours">Horaires</label>
            </div>

            <div class="input-field col s6 offset-s3">
                <input id="location" name="location" type="text" class="validate" />
                <label for="location">Adresse</label>
            </div>

            <div class="file-field input-field col s6 offset-s3">
                <div class="btn">
                    <span>Fichiers</span>
                    <input type="file" name="gallery[]" multiple />
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Uploader plusieurs images">
                </div>
            </div>
            <div class="col s6 input-field center">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>

        {!! Form::close() !!}
    </div>
@endsection