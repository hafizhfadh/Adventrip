@extends('layouts.app')

@section('content')
  <section>
    <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
      <div class='carousel-container'>
        <div class='carousel-item has-background is-active'>
          <img class="is-background" src="https://wikiki-c4319bfccd.drafts.github.io/images/merry-christmas.jpg" alt="" width="640" height="310" />
          <div class="title">Merry Christmas</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://wikiki-c4319bfccd.drafts.github.io/images/singer.jpg" alt="" width="640" height="310" />
          <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://wikiki-c4319bfccd.drafts.github.io/images/sushi.jpg" alt="" width="640" height="310" />
          <div class="title">Sushi time</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://wikiki-c4319bfccd.drafts.github.io/images/life.jpg" alt="" width="640" height="310" />
          <div class="title">Life</div>
        </div>
      </div>
      <div class="carousel-navigation is-overlay">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </section>
@endsection
