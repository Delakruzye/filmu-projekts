@extends('layouts.app')
  
@section('content')
<script src="{{asset("/scripts/actorAPI.js")}}"></script>
                <div class="card-header">
                    <p class="display-4" id="actorname"></p>
                </div>
                <hr>
                <div class="">
                    <input type="hidden" value="{{$aid}}" id="actorid">
                    <div class="">
                        <div id="actorpicture">
                        </div>
                    <div class="row justify-content-center">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active link-secondary" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Details</button>
                              <button class="nav-link link-secondary" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Trademarks</button>
                              <button class="nav-link link-secondary" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Biography</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <tr><td class="col-5 align align-middle"><span class="fw-bold m-3">Real Name: </span></td><td><span id="realname"></span></td></tr><br>
                                <tr><td class="align align-middle"><span class="fw-bold m-3">Birth Date: </span></td><td><span id="birthdate"></span></td></tr><br>
                                <tr><td class="align align-middle"><span class="fw-bold m-3">Birth Place: </span></td><td><span id="birthplace"></span></td></tr><br>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <tr><td class="col-5 align align-middle"><span class="fw-bold"></span></td><td><span id="trademarks"></span></td></tr><br>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <p id="bio">
                                </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="flip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
                    </svg>
                  Show Biography
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
                    </svg>
                </div> --}}
            </div>
        </div>
</div>
@endsection
