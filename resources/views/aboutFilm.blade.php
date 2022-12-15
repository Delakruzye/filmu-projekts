@extends('layouts.app')
  
@section('content')
<script src="{{asset("/scripts/filmAPI.js")}}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">
                    <p id="filmname" class="display-4"></p>
                </div>
                <div class="card-body">
                    <div class="team-area sp">
                        <div class="container" id="film-card">
                            <p id="filmname" class="card-title display-4"></p>
                            <div id="coverphoto"></div>
                            <input type="hidden" value="{{$id}}" id="movieid">
                            <div>
                                <tr><td class="col-5 align align-middle"><span class="fw-bold m-3">Release Year:</span></td><td><span id="ry"></span></td></tr><br>
                                <tr><td class="align align-middle"><span class="fw-bold m-3">Length:</span></td><td><span id="length"></span> minutes</td></tr><br>
                                <div class="" id="starlist">
                                <tr><td class="align align-middle"><span class="fw-bold">Stars:</span></td><td><span id="stars" class=""></span></td></tr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
