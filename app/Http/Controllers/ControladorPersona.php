<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\persona;
class ControladorPersona extends Controller{

  public function __construct(){
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $persona = persona::all();
      return view('index', array('personas' => $persona));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      $query = persona::all('id','nom','cognom');
      return view('create', array('personas' => $query));
    }

    public function edition($id){
      $user = persona::findOrFail($id);
      if($user != NULL){
        return view('edit', compact('user'));
      }else{
        return response('No encontrado' ,404);
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    //  return ("echo $request -> nom");
    //  if(is_null($request->nom)){
        //return response("Torna a introduïr les dades");
      //}else{
        $user = new persona;
        $user -> nom = Input::get("name");
        $user -> cognom = Input::get("cognom");
        $user -> email = Input::get("email");
        $user -> user_id = Auth::id();
        $user -> save();
        return redirect()->to('/');
      //}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
     $persona = persona::find($id);

      if (!is_null($persona)){
        return view('mostra', array('persona' => $persona));
      }else{
        return response('No encontrado', 404);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update($id, Request $request){
      /* if($persona->nom == NULL){
         echo '<script language="javascript">alert("juas");</script>';
       }else{*/
      $persona = persona::findOrFail($id);
      $persona -> nom = $request->name;
      $persona -> cognom = $request->cognom;
      $persona -> email = $request->email;
      $persona->save();
      return redirect()->to('index');
    //}
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      try{
        $persona = persona::findOrFail($id);
        $persona ->delete();
         return redirect('index');
      }catch (Exception $e){
        return "Fatal error - ".$e->getMessage();
      }
    }
}
