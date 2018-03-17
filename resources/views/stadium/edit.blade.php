@extends('layouts.app')

@section('content')
    <div class="container">
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
            <form method="post" action="{{action('StadiumController@update')}}" >
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group">
                    <label for="landing_image">Image d'accueil</label>
                    <input type="text" class="form-control" name="landing_image" value="{{ $stadium->landing_image }}"/>
                </div>
                <div class="form-group">
                    <label for="g_map_key">Clé pour Google Maps</label>
                    <input type="text" class="form-control" name="g_map_key" value="{{ $stadium->g_map_key }}"/>
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="text" class="form-control" name="logo" value="{{ $stadium->logo }}"/>
                </div>
                <div class="form-group">
                    <label for="background_description">Image de la description</label>
                    <input type="text" class="form-control" name="background_description" value="{{ $stadium->background_description }}"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $stadium->description }}"/>
                </div>
                <div class="form-group">
                    <label for="hours">Horaires</label>
                    <input type="text" class="form-control" name="hours" value="{{ $stadium->hours }}"/>
                </div>
                <div class="form-group">
                    <label for="location">Adresse</label>
                    <input type="text" class="form-control" name="location" value="{{ $stadium->location }}"/>
                </div>
                <div class="form-group">
                    <label for="description">Gallerie</label>
                    <textarea cols="5" rows="5" class="form-control" name="gallery">{{ $stadium->gallery }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

