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
        <div class="row">
            {!! Form::open(['url' => '/admin/edit', 'files' => true, 'class' => 'col s12']) !!}
                <div class="row">
                    <div class="file-field input-field col s6 offset-s3">
                        <div class="btn">
                            <span>Fichier</span>
                            <input type="file" name="landing_image">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Image d'accueil">
                            <span class="helper-text" data-error="wrong" data-success="right">{{ basename($stadium->landing_image) }}</span>
                        </div>
                    </div>
                    <div class="input-field col s6 offset-s3">
                        <input id="g_map_key" name="g_map_key" type="text" class="validate" value="{{ $stadium->g_map_key }}">
                        <label for="g_map_key">Clé pour Google Maps</label>
                    </div>
                    <div class="file-field input-field col s6 offset-s3">
                        <div class="btn">
                            <span>Fichier</span>
                            <input type="file" name="logo">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Logo" >
                            <span class="helper-text" data-error="wrong" data-success="right">{{ basename($stadium->logo) }}</span>
                        </div>
                    </div>

                    <div class="file-field input-field col s6 offset-s3">
                        <div class="btn">
                            <span>Fichier</span>
                            <input type="file" name="background_description">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Image de la description">
                            <span class="helper-text" data-error="wrong" data-success="right">{{ basename($stadium->background_description) }}</span>
                        </div>
                    </div>

                    <div class="input-field col s6 offset-s3">
                        <input id="description" name="description" type="text" class="validate" value="{{ $stadium->description }}">
                        <label for="description">Description</label>
                    </div>

                    <div class="input-field col s6 offset-s3">
                        <input id="hours" type="text" name="hours" class="validate" value="{{ $stadium->hours }}">
                        <label for="hours">Horaires</label>
                    </div>

                    <div class="input-field col s6 offset-s3">
                        <input id="location" name="location" type="text" class="validate" value="{{ $stadium->location }}">
                        <label for="location">Adresse</label>
                    </div>

                    <div class="file-field input-field col s6 offset-s3">
                        <div class="btn">
                            <span>Fichiers</span>
                            <input type="file" name="gallery[]" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Uploader plusieurs images">
                            <span class="helper-text" data-error="wrong" data-success="right">
                                @foreach(unserialize($stadium->gallery) as $picture)
                                    <li>{{ basename($picture) }}</li>
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection

