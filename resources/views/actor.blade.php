@extends('layouts.app')
  
@section('content')
<link href="{{ asset('/css/listing.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row mb-3">
                <div class="col-sm-3" id="searchbox">
                    <input type="search" class=" form-control" id="movie" placeholder="Actor name..">
                </div>
                <div class="col">
                    <button class="mt-1 btn border" id="search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
                <div class="display-4">Actors</div>
                    <div class="team-area sp text-cnter">
                        <div class="container d-flex flex-wrap" id="film-card">
                        </div>
                     </div>
                </div>
        </div>
    </div>
<script src="{{asset("/scripts/findactor.js")}}">
</script>
@endsection
