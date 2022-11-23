@extends('layouts.app')
  
@section('content')
<link href="{{ asset('/css/listing.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies</div>
                <div class="card-body">
                    <div class="team-area sp">
                        <div class="container" id="film-card">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                                    <div class="inner">
                                        <div class="team-img">
                                            <img src="https://m.media-amazon.com/images/M/MV5BYjQ1ZTMxNzgtZDcxOC00NWY5LTk3ZjAtYzRhMDhlNDZlOWEzXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg" alt="Film Picture">
                                        </div>
                                        <div class="team-content">
                                            <h4 id="film-name"></h4>
                                            <h5 id=></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
