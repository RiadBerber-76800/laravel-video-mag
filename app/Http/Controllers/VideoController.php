<?php

namespace App\Http\Controllers;

use App\Http\Controllers\VideoController;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $videos = Video::orderBy('updated_at', 'DESC')->paginate(4);
  return view('pages.home', compact('videos'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('pages.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  // validation du form
  $request->validate([
   'title' => 'required|max:255',
   'description' => 'required|max:10000',
   'url_img' => 'required|max:20000|mimes:png,jpg|image',
   //ect pour les autres champs

  ]);

  $validateImg = $request->file('url_img')->store('cover');
/**
 * cette fonction permet d'envoyer les données vers bdd
 */
  Video::create([
   'title' => $request->title,
   'description' => $request->description,
   'url_img' => $validateImg,
   'actors' => $request->actors,
   'nationality' => $request->nationality,
   'year_created' => $request->year_created,
   'created_at' => now(),
  ]);
  //redirect
  return redirect()->route('home')->with('status', 'Video enregistrée');
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show(Video $video)
 {
  return view('pages.show', compact('video'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit(Video $video)
 {
  return view('pages.edit', compact('video'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Video $video)
 {
  //validate form
  $request->validate([
   'title' => 'required|max:255',
   'description' => 'required|max:10000',
   'url_img' => 'required|sometimes|max:20000|mimes:png,jpg|image',
  ]);
  //if image
  if ($request->hasFile('url_img')) {
   // delete the images
   Storage::delete($video->url_image);
   //store new image in storage
   $video->url_img = $request->file('url_img')->store('cover');
  }
  // update and store to db
  $video->update([
   'title' => $request->title,
   'description' => $request->description,
   'url_img' => $video->url_img,
   'actors' => $request->actors,
   'nationality' => $request->nationality,
   'year_created' => $request->year_created,
   'created_at' => now(),
  ]);
  //redirect
  return redirect()->route('videos.show', $video->id)->with('status', 'update ok');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy(Video $video)
 {
  $video->delete();
  return redirect('/')->with('status', 'Video deleted!');
 }
}
