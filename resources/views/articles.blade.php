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
        <h4 class="text-center text-uppercase text-light mt-3  mb-3">Liste des articles</h4>
    </div>
</section>
    <div class="container">
        <ul class="list-group shadow w-50 d-block m-auto mt-5">
            @foreach($posts as $post)
            <li class="list-group-item ">
                <a  href="{{route('post',$loop->iteration )}}"class="fw-light text-dark">{{$post}}</a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
