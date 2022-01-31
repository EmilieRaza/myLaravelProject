@extends('layouts.app')
@extends('composant/navbar')

@section('content')
<style>
    .bouton{
        border-radius:20px;
        background-color:#D35400;
    }
    .input{
        border-radius:20px;
    }
    .bg1{
        background-color:#D35400;

    }
</style>
<section class="bg1 shadow">
    <div class="w-100 p-3">
        <h4 class="text-center text-uppercase text-light mt-3  mb-3">Article {{$post}}</h4>
    </div>
</section>

<div class=" container text-justify mt-5">
    <p class="bg-light card shadow input p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut corporis, porro consequuntur voluptate doloribus doloremque eius iure aspernatur sapiente, culpa in. Dolorum voluptas quibusdam ullam dolore enim facere qui unde.</p>
</div>
@endsection

