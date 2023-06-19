@extends('sistema.layout')
@section('title','PetMatch')
@section('content')
    <div class="row">
    <a class="navbar-brand" href="/adocao">
        <div class="col-sm-6" id="botoes"style="display:flex; justify-content: flex-end; flex-direction: row-reverse">
            <p class="h2 text-start" style="align-self: center;">Adoção</p>
            <img src="{{asset('storage/imagens/adocaofoto.png')}}" style="width: 150px; height: 150px" />
    </a>
        </div>
    </div>
    <div class="row">
         <div class="col-sm-6">
            <p class="h1 text-start" style="color: #656AA6; font-size: 100px; margin-left: 90px; margin-top: 40px; font-weight: bolder ">Adotar é amor :)</p>
            <p class="h3 text-start" style="color: #656AA6; font-size: 50px;   font-style: Italic align-Items: center "></p>
            <p class="h1 text-start" style=" font-size: 20px; margin-left: 25px; margin-bottom: 10px font-style: Italic a">Você salva a vida de um animal e ele ganha um lar novo.
                Ao adotar um bichinho, você estará salvando ele das ruas. 
            </p>
        </div>
@endsection