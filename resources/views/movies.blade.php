@extends('layouts.app')
  
@section('content')
<link href="{{ asset('/css/listing.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-3">
                <div class="col-sm-3" id="searchbox">
                    <input type="search" class=" form-control" id="movie" placeholder="Movie name..">
                </div>
                <div class="col">
                    <button class="mt-1 btn border" id="search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Movies</div>
                <div class="card-body">
                    <div class="team-area sp">
                        <div class="container" id="film-card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset("/scripts/MovieAPI.js")}}">
</script>
@endsection
