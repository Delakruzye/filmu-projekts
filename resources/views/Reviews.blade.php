
@extends('layouts.app')
  
@section('content')
  <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Write a review
  </button>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title text-dark fs-5" id="exampleModalLabel">Review</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark ">
            <form action="{{route('review.store')}}" method="post">
                @csrf
                <div class="form-group">

                    <label for="Film_Title">Film Title</label>
                    <div class="col">
                    <input value="" type="search" class="form-control" name="Film_Title" id="Film_Title" aria-describedby="titleHelp" placeholder="Enter Film Title" required>
                    </div>
                    <div class="col">
                        <button type="button" data-bs-toggle="modal" id="search" class="mt-1 btn border" data-bs-target="#staticBackdrop">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                
                </div>
                <div class="form-group">
                    <label for="Review_Title">Review Title</label>
                    <input type="text" class="form-control" name="Review_Title" id="Review_Title" aria-describedby="reviewHelp" placeholder="Enter Review Title" required>
                </div>
                <div class="form-group">
                    <label for="picurl">Image URL</label>
                    <input value="" type="text" class="form-control" name="picurl" id="picurl" aria-describedby="picurlHelp" placeholder="Enter Image URL" required>
                </div>
                <div class="form-group">
                    <label for="filmyear">Year of Release</label>
                    <input value="" type="text" class="form-control" name="filmyear" id="filmyear" aria-describedby="filmyearHelp" placeholder="Enter Year of Release" required >
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <br>
                    <div class="rate">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="text">1 star</label>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <br>
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                </div>
                <button type="submit" class=" mt-2 btn btn-dark">Submit review</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Movies</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="team-area sp">
                <div class="container d-flex flex-wrap" id="film-card">
                </div>
             </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="container">
          @foreach($reviews as $review)
      <div class=" mb-1 p-2">
          <div class="card ">
            <div class="card-body row">
                <div class="col-4 col"> 
                    <img class="card-img-top" src="{{ $review->picurl }}" alt="Card image cap">
                </div>
                <div class="col-6 col">
                  <h5 class="display-5 text-dark card-title">{{ $review->Review_Title }}</h5>
                  <h6 class="display-6 text-dark card-title">{{ $review->Film_Title }}</h6>
                  <p class="card-text"><small class="text-muted">{{ $review->filmyear }}</small></p>
                  <p class="card-text text-dark">{{ $review->description }}</p>
                  <p class="card-text"><small class="text-muted">Created at {{ $review->created_at }}</small></p>
                </div>
                <div class="star-rating col-2 col">
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star {{ $i <= $review->rating ? 'filled' : 'empty' }}"></i>
                    @endfor
                 </div>
            </div>
          </div>
        </div>
          @endforeach
</div>
  <script src="{{asset("/scripts/review.js")}}">
  </script>
@endsection
