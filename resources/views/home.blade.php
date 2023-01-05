@extends('base')

@include('navbar')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="bo" style="margin-top: 60px;">
        <header>
            <style>
              .mask {
                background-image: url("images/luffy.gif") !important;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
              }

              @media (min-width: 992px) {
                #introCarousel {
                  margin-top: -58.59px;
                }
                #introCarousel,
                .carousel-inner,
                .carousel-item,
                .carousel-item.active {
                  height: 50vh;
                }
              }

            </style>

            <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
              <ol class="carousel-indicators">
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
              </ol>


              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="mask" style="background-color: rgb(131, 219, 233);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                      <div class="text-white text-center">
                        <h1 class="mb-3 text-white" style="background-color: rgba(0, 0, 0, 0.297); padding: 10px; border-radius: 10px;"><span style="color:red">AEON</span><span style="color:blue">ime</span></h1>
                        <h3 class="mb-4 text-white" style="background-color: rgba(0, 0, 0, 0.301); padding: 10px; border-radius: 10px;">Everyone is free to post online</h3>
                        <a
                          class="btn text-dark btn-warning btn-lg m-2"
                          role="button"
                          href="/recentPost"
                          >Recent Anime</a
                        >
                        <a
                          class="btn text-dark btn-warning btn-lg m-2"
                          role="button"
                          href="/create"
                          >Add Anime</a>
                      </div>
                    </div>
                  </div>
                </div>
          </header>
          <main class="mt-5">
            <div class="container">
              <section>

              </section>
              <hr class="my-5 text-white" />
              <section class="text-center">
                <h4 class="mb-5 text-white"><strong>Top Anime</strong></h4>

                <div class="row">
                  <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="images/OP.jpg"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">One Piece</h5>
                        <p class="card-text">
                            One Piece Follows the adventures of Monkey D. Luffy and his pirate crew in order to find the greatest treasure ever left by the legendary Pirate, Gold Roger. The famous mystery treasure named "One Piece".
                        </p>
                        @if (Auth::check())
                        @else
                        <a href="/recentPost" class="btn btn-info">Visit Post <i class="fa-solid fa-arrow-right"></i></a>
                        @endif
                    </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="images/db.jpg"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Dragon Ball Super</h5>
                        <p class="card-text">
                            Dragon Ball tells the tale of a young warrior by the name of Son Goku, a young peculiar boy with a tail who embarks on a quest to become stronger and learns of the Dragon Balls, when, once all 7 are gathered, grant any wish of choice.                        @if (Auth::check())
                        @else
                        <a href="/register" class="btn btn-info">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                        @endif
                    </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="images/hxh.jpg"
                          class="img-fluid"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Demon Slayer</h5>
                        <p class="card-text">
                            A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.                        @if (Auth::check())
                        @else
                        <a href="/" class="btn btn-info">Login Now <i class="fa-solid fa-arrow-right"></i></a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </div>

@endsection

