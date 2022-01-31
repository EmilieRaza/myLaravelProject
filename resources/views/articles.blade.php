@extends('layouts.app')
@extends('composant/navbar')

@section('content')

<h4 class="text-center text-uppercase mt-5">Liste des articles</h4>
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
