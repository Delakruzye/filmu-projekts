@extends('layouts.app')
  
@section('content')
<script src="{{asset("/scripts/filmAPI.js")}}"></script>
<div class="container">
    <div class="row">
    </div>
    <div class="row justify-content-end">
        <div class="col-sm-9">
            <div class="card-header">
                <p id="filmname" class="display-4 card-title"></p>
            </div>
            <div class="row">
            <div class="col-4 backg align-self-start">
                <div id="coverphoto">
                </div>
                <input type="hidden" value="{{$id}}" id="movieid">
            </div>
                <div class="col-7">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active link-secondary" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Details</button>
                            <button class="nav-link link-secondary" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cast</button>
                            <button class="nav-link link-secondary" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Crew</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <tr><td class="align align-middle"><span class="fw-bold m-3">Length: </span></td><td><span id="ry"></span></td></tr><br>
                            <tr><td class="align align-middle"><span class="fw-bold m-3">Release Year: </span></td><td><span id="length"></span> minutes</td></tr><br>
                            <tr><td class="align align-middle"><span class="fw-bold m-3">Genre: </span></td><td><span id="genre"></span></td></tr><br>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div id="starlist" class="tcontainers">
                                <span id="stars"></span>
                            </div> 
                        </div>
                        <div class="tab-pane fade tcontainers" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <p class="h3 mb-2">Writers<br><p id="writer"></p>
                            <p class="h3 mb-2">Producers<br><p id="producer"></p>
                            <p class="h3 mb-2">Directors<br><p id="director"></p>
                            <p class="h3 mb-2">Cinematographers<br><p id="cinematographer"></p>
                            <p class="h3 mb-2">Assistant directors<br><p id="assistant_director"></p>
                            <p class="h3 mb-2">Production designers<br><p id="production_designer"></p>
                            <p class="h3 mb-2">Stunts<br><p id="stunts"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 parent" id="rec">
        </div>
    </div>
</div>
@endsection
