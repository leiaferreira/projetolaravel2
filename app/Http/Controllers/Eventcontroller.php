<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\User;


class Eventcontroller extends Controller
{
    public function index(){

        $search = request('search');
        if ($search) {
            $eventos =Events::where([
                ['title','like','%'.$search.'%']
            ])->get();
        }else{
            $eventos = Events::all();
        
        }
        return view('welcome',['eventos'=> $eventos,'search'=>$search]);
    }

    public function createevents(){
        return view('evento1.criarevento');
    }
    public function entrar(){
        return view('entrar');
    }
   
    public function cadastra(){
        return view('cadastro');
    }
    public function store(Request $request){
        $event = new Events;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->itens =$request->itens;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension =  $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).'.'.$extension;
            $requestImage->move(public_path('img/events'),$imageName);  
            $event->image =$imageName;
        }
        $user = auth()->user();
        $event->user_id = $user->id;
        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso');

 
   
   
    }
    public function show($id){
        $event= Events::findOrFail($id);
        $eventOwner = User::where('id',$event->user_id)->first()->toArray();

    
        return view('evento1.show', ['event'=> $event,'eventOwner'=>$eventOwner]);    

    }
    public function dashboard(){
        $user = auth()->user();
        $events =$user->events;
        return view('evento1.dashboard',['events'=>$events]);
    }
 


}