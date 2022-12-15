@extends('layouts.app')
  
@section('content')
<script src="{{asset("/scripts/actorAPI.js")}}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">
                    <p class="display-4" id="actorname"></p>
                </div>

                <div class="card-body">
                    <input type="hidden" value="{{$aid}}" id="actorid">
                    <div class="team-area sp">
                        <div id="actorpicture">
                        </div>
                        <tr><td class="col-5 align align-middle"><span class="fw-bold m-3">Real Name: </span></td><td><span id="realname"></span></td></tr><br>
                        <tr><td class="align align-middle"><span class="fw-bold m-3">Birth Date: </span></td><td><span id="birthdate"></span></td></tr><br>
                        <tr><td class="align align-middle"><span class="fw-bold m-3">Birth Place: </span></td><td><span id="birthplace"></span></td></tr><br>
                        <tr><td class="col-5 align align-middle"><span class="fw-bold m-3">Trademarks: </span></td><td><span id="trademarks"></span></td></tr><br>
                        <tr><td class="align align-middle"><span class="fw-bold m-3"></span></td><td><span id=""></span></td></tr><br>
                        <tr><td class="align align-middle"><span class="fw-bold m-3"></span></td><td><span id=""></span></td></tr><br>
                    </div>
                </div>
                <div id="flip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
                    </svg>
                  Show Biography
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
                    </svg>
                </div>
                <div id="panel">
                    <p id="bio">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
