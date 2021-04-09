<?php

namespace App\Http\Controllers\Auth;

use App\Models\Buyer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.buyer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $img = ImageManagerStatic::make($data['pic']);

        dd($data);
        $name = Str::random() . '.jpg';

        $originalPath = storage_path('app/public/buyer/');

        $img->save($originalPath . $name);
      
        $dados = Buyer::create([
            'pic' =>   $name,
            'nickname' =>   $data['nickname'],
            'name' =>       $data['name'],
            'lastname' =>   $data['lastname'],
            'email' =>      $data['email'],
            'password' => Hash::make($request['password']),
            'telefone' =>   $data['telefone'],
            'morada' =>     $data['morada'],
            'localidade' => $data['localidade'],
            'cep' =>        $data['cep'],
            'nif' =>        $data['nif'],
            'porto' =>      $data['porto'],
        ]);

        return redirect()->route('login')->with('success', 'Usuario criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
