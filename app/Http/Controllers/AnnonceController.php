<?php

namespace App\Http\Controllers;
use App\User;
use App\Annonce;
use App\Http\Requests\AdStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class AnnonceController extends Controller
{

  use RegistersUsers;

public function index()
{
  $ads = DB::table('annonces')->orderBy('created_at', 'DESC')->paginate(1);

  return view('ads', compact('ads'));
}
    public function createAd()
    {
        return view('createAd');
    }

    public function store(AdStore $request)
    {
        $validated = $request->validated();

        if(!Auth::check()) {//regles de validation du form annonces (vos infos) si jamais user n'est pas connecté
          $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
          ]);

          $user = User::create([
            'name'=> $request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
          ]);

          $this->guard()->login($user);
        }

        $ad = new Annonce();
        $ad->title = $validated['title'];
        $ad->description = $validated['description'];
        $ad->price = $validated['price'];
        $ad->localisation = $validated['localisation'];
        $ad->user_id = auth()->user()->id;//associé l'id de l'ad au id de l'user qui l'a posté
        $ad->save();

        return redirect()->route('welcome')->with('success', 'Votre annonce a été postée !');
    }

    public function search()
    {
      $q = request()->input('q');

        $annonce = annonce::where('title', 'like', "%$q%")
        ->paginate(2);

        return view('annonce.search')->with('annonce',$annonce);
    }
}
