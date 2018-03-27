<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stadium;

class StadiumController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function edit() {

    $stadium = Stadium::find(1);

    if (!$stadium) {
      return redirect('/admin/create');
    }

    return view('stadium.edit', compact('stadium'));
  }

  public function update(Request $request) {

    $data = [
      'g_map_key' => $request['g_map_key'],
      'description' => nl2br($request['description']),
      'hours' => $request['hours'],
      'location' => $request['location'],
    ];

    if ($request->gallery) {
      $gallery = [];
      foreach ($request->gallery as $file) {
        $gallery[] = $this->uploadFile($file, 'gallery');
      }
      $data['gallery'] = serialize($gallery);
    }

    foreach (['landing_image', 'logo', 'background_description'] as $field) {
      if (!empty($request->$field)) {
        $data[$field] = $this->uploadFile($request->$field, $field);
      }
    }

    Stadium::find(1)->update($data);

    return redirect('/admin')->with('success', 'Enregistré');
  }

  public function create() {
    return view('stadium.create');
  }

  /**
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request) {

//    dd($request);

    $stadium = new Stadium();
    $data = $this->validate($request, [
//      'description'=>'required',
//      'title'=> 'required'
    ]);

    $stadium->landing_image = $this->uploadFile($request->landing_image, 'landing_page');
    $stadium->g_map_key = $request->g_map_key;
    $stadium->logo = $this->uploadFile($request->logo, 'logo');
    $stadium->background_description = $this->uploadFile($request->background_description, 'background_description');
    $stadium->description = nl2br($request->description);
    $stadium->hours = $request->hours;
    $stadium->location = $request->location;
    $stadium->today_special = $request->today_special;
    $stadium->today_price = $request->today_price;

    $stadium->save();

    foreach($request->name as $key => $value) {
      $stadium->dishes()->create([
        'name' => $value,
        'price' => $request->price[$key],
        'category' => $request->category[$key]
      ]);
    }

    foreach ($request->gallery as $image) {
      $stadium->pictures()->create([
        'path' => $this->uploadFile($image, 'gallery')
      ]);
    }

    return redirect('/admin')->with('success', 'Enregistré');
  }

  private function uploadFile($file, $destination) {

    $filename = $file->getClientOriginalName();
    $path = $file->storeAs('public/' . $destination, $filename);
    return '/' . str_replace('public', 'storage', $path);
  }
}

//AIzaSyA5NDe1-4En7DrhR0uUQDIHV7x6vUt3lCw