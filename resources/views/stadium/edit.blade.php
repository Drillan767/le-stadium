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
            <div class="col s6 offset-s3">
                <div class="card-panel teal">
                    <span class="white-text">
                        {{ session()->get('success') }}
                    </span>
                </div>
            </div>
        @endif
        {!! Form::open(['url' => '/admin/edit', 'files' => true, 'class' => 'col s12']) !!}
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
                <textarea id="description" name="description" class="materialize-textarea">{{ strip_tags($stadium->description) }}</textarea>
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
                    <input type="file" name="gallery[]"  multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Uploader plusieurs images">
                </div>
            </div>

            <table class="responsive-table col s6 offset-s3">
                <thead>
                <tr>
                    <th>Fichier</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="gallery">
                    @foreach($stadium->pictures as $picture)
                        <tr id="{{ $picture->id }}">
                            <td>
                                <a class="modal-trigger" data-content="{{ $picture->path }}" href="#modal">{{ basename($picture->path) }}</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-content="{{ $picture->id }}" class="btn red">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="col s6 offset-s3 input-field center">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>

        {!! Form::close() !!}
    </div>

    <div id="modal" class="modal"></div>
@endsection

