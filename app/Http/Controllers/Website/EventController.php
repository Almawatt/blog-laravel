<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;

class EventController extends Controller
{
  use SlugTrait;
  use UploadTrait;

  public function index()
  {
    // pesquisar por nome
    $pesquisa = request('pesquisa');
    
    if($pesquisa){
      $events = Event::where([['nome', 'like', '%'.$pesquisa.'%']])->get();
    } else {
      // select pra apresentar os dados no welcome
      $events = Event::select("*")
      ->orderBy("id", "desc")
      ->limit(8)
      ->get();;
    }

    return view('welcome', ['events' => $events, 'pesquisa' => $pesquisa]);
  }

  //select pra apresentar os dados no show 


  public function create()
  {
    return view('events.create');
  }

  public function addmateria()
  {
    return view('addmateria');
  }

  // adicionar no banco de dados
  public function store(Request $request)
  {
    $nome = $request->input('nome');
    $descricao = $request->input('descricao');
    $materia = $request->input('materia');
    $datap = $request->input('datap');
    $img = $request->file('img');
    $data = array('nome' => $nome, "descricao" => $descricao, 'materia' => $materia, 'data' => $datap, 'img' => $img);
    $data['slug'] = $this->getSlug($data['nome'], 'materia');

    if (!empty($data['img'])) {
      if (!$image = $this->uploadValidFile('uploads', $data['img'], 800)) {
        return redirect()->back()->withErrors(['errors' => 'image cannot be uploaded'])->withInput();
      }
    }

    if (!empty($image)) {
      $data['img'] = $image;
    }

    DB::table('materia')->insert($data);

    return redirect()->route('welcome.index');
  }

  // mostrar infos especificas de cada dado
  public function show($slug)
  {

    $main_post = Event::select('slug', 'img', 'nome', 'descricao', 'materia', 'data')
      ->where('slug', $slug)
      ->first();

  // mostra as materias no veja mais exeto qual já está aberta
      $events = Event::select("*")
      ->where('slug', '<>', $slug)
      ->orderBy("id", "desc")
      ->limit(4)
      ->get();;

    return view('show', ['event' => $main_post, 'slug' => $slug, 'events' => $events]);
  }
  public function dashboard(){
    
  }
  



}