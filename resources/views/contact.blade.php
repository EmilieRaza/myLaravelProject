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
        <h4 class="text-center text-uppercase text-light mt-3  mb-3">Contactez nous</h4>
    </div>
</section>
<section class="mt-3">
    <div class="container" >
           <div class="row">
            <div class="col-md-8">
                <div class="card input shadow bg-light p-5">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type de demande">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                        </div>
                        <input type="email" class="form-control input mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Téléphone">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prénom">
                            </div>
                        </div>
                        <input type="email" class="form-control input mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet">

                        <div class="form-floating">
                            <textarea class="form-control input mt-3" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <a type="submit" class="btn bouton text-uppercase text-light text-center text-center m-auto d-block p-2 mt-5 w-25">Envoyer</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
