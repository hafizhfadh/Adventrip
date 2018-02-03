@extends('layouts.app')

@section('content')
  <section>
    <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
      <div class='carousel-container'>
        <div class='carousel-item has-background is-active'>
          <img class="is-background" src="https://images.pexels.com/photos/433301/pexels-photo-433301.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Merry Christmas</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://images.pexels.com/photos/78791/railway-bernina-railway-lagalb-bernina-78791.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://images.pexels.com/photos/221281/pexels-photo-221281.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Sushi time</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://images.pexels.com/photos/159252/bernina-railway-sweeping-viaduct-brusion-bernina-159252.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
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

  <section class="container m-t-20">
    <div class="card">
      <div class="card-header">
        <h3 class="card-header-title">Pemesanan Tiket</h3>
      </div>
      <div class="card-content">
        <div class="columns">
          <div class="column">
            <div class="field">
              <label class="label">Label</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>
              <p class="help">This is a help text</p>
            </div>
          </div>
          <div class="column">
            <div class="field">
              <label class="label">Label</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>

              <p class="help">This is a help text</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
