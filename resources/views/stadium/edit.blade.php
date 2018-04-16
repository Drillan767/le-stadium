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
            <div class="file-field input-field col s12 m6 offset-m3">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="landing_image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Image d'accueil">
                    <span class="helper-text" data-error="wrong" data-success="right">{{ basename($stadium->landing_image) }}</span>
                </div>
            </div>
            <div class="input-field col s12 m6 offset-m3">
                <input id="g_map_key" name="g_map_key" type="text" class="validate" value="{{ $stadium->g_map_key }}">
                <label for="g_map_key">Clé pour Google Maps</label>
            </div>
            <div class="file-field input-field col s12 m6 offset-m3">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="logo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Logo" >
                    <span class="helper-text" data-error="wrong" data-success="right">{{ basename($stadium->logo) }}</span>
                </div>
            </div>

            <div class="col s12 m6 offset-m3">
                <h5>Menu du jour</h5>

                <div class="input-field col s9">
                    <input id="today_special" name="today_special" type="text" value="{{ $stadium->today_special }}"/>
                    <label for="today_special">Nom</label>
                </div>
                <div class="input-field col s3">
                    <input id="today_price" name="today_price" type="text" value="{{ $stadium->today_price }}" />
                    <label for="today_price">Prix</label>
                </div>
            </div>

            <div class="col s12 m6 offset-m3">
                <h5>Menus</h5>
                <table class="responsive-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody id="dish_field">
                    @foreach($stadium->dishes as $dish)
                        <tr>
                            <td width="60%">
                                <input type="text" name="name[]" placeholder="Nom" class="form-control name_list" value="{{$dish->name }}"/>
                            </td>
                            <td width="10%">
                                <input type="text" name="price[]" placeholder="Prix" class="form-control name_list" value="{{$dish->price }}"/>
                            </td>
                            <td width="20%">
                                <select name="category[]">
                                    <option value="salade" {{ $dish->category === 'salade' ? 'selected' : '' }}>Salade</option>
                                    <option value="plat" {{ $dish->category === 'plat' ? 'selected' : '' }}>Plat</option>
                                    <option value="dessert" {{ $dish->category === 'dessert' ? 'selected' : '' }}>Dessert</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td width="60%">
                            <input type="text" name="name[]" placeholder="Nom" class="form-control name_list"/>
                        </td>
                        <td width="10%">
                            <input type="text" name="price[]" placeholder="Prix" class="form-control name_list"/>
                        </td>
                        <td width="20%">
                            <select name="category[]">
                                <option value="salade">Salade</option>
                                <option value="plat">Plat</option>
                                <option value="dessert">Dessert</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" name="add" id="add_dish" class="btn btn-success">Ajouter</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="file-field input-field col s12 m6 offset-m3">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="background_description">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Image de la description">
                    <span class="helper-text" data-error="wrong" data-success="right">{{ basename($stadium->background_description) }}</span>
                </div>
            </div>

            <div class="input-field col s12 m6 offset-m3">
                <textarea id="description" name="description" class="materialize-textarea">{{ strip_tags($stadium->description) }}</textarea>
                <label for="description">Description</label>
            </div>

            <div class="input-field col s12 m6 offset-m3">
                <textarea id="hours" name="hours" class="materialize-textarea">{{ strip_tags($stadium->hours) }}</textarea>
                <label for="hours">Horaires</label>
            </div>

            <div class="input-field col s12 m6 offset-m3">
                <textarea id="location" name="location" class="materialize-textarea">{{ strip_tags($stadium->location) }}</textarea>
                <label for="location">Adresse</label>
            </div>

            <div class="file-field input-field col s12 m6 offset-m3">
                <div class="btn">
                    <span>Fichiers</span>
                    <input type="file" name="gallery[]"  multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Uploader plusieurs images">
                </div>
            </div>

            <table class="responsive-table col s12 m6 offset-m3">
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

