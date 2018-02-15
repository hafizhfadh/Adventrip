@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Edit Data Booking
              </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ route('booking.store') }}">
          <div class="field">
            <label class="label">Nama Customer</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nama Customer">
              </div>
            </div>

          <div class="columns">
            <div class="column">
                <div class="field">
                  <label class="label">Tanggal Pesan</label>
                  <div class="control">
                    <input class="input" type="date" placeholder="Tanggal Pesan">
                  </div>
                </div>
            </div>
          </div>
        

            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Nama Kereta</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Nama Kereta">
                  </div>
                </div>
              </div>
            </div>

          <div class="columns">
          <div class="column">
                <div class="field">
                  <label class="label">Stasiun Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Stasiun Keberangkatan">
                  </div>
                </div>
              </div>

              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Kedatangan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Stasiun Kedatangan">
                  </div>
                </div>
                </div>
                </div>
                
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="time" placeholder="Waktu Keberangkatan">
                  </div>
                </div>
                </div>
      
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Kedatangan</label>
                  <div class="control">
                    <input class="input" type="time" placeholder="Waktu Kedatangan">
                  </div>
                </div>
                </div>
                </div>
              
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Jumlah Tiket</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Jumlah Tiket">
                  </div>
                </div>
            </div>

              <div class="column">
                <div class="field">
                  <label class="label">Tarif Per Tiket</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Tarif Per Tiket">
                  </div>
                </div>
              </div>
              </div>

            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Total Bayar</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Total Bayar">
                  </div>
                </div>
              </div>
              </div>              


              <div class="column m-t-30">
                <button class="button is-success fa fa-check"></button>
              </div>
            </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script type="text/javascript">

  </script>
@endpush

@push('style')
  <style media="screen">

  </style>
@endpush
