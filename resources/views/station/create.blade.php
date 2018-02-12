@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Create Data Station
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ route('station.store') }}">
          <div class="field">
            <label class="label">Nama Kereta</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nama Kereta">
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
                  <label class="label">Alamat Stasiun Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Alamat Stasiun Keberangkatan">
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">No Telp Stasiun Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="No Telp Stasiun Keberangkatan">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Kedatangan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Stasiun Kedatangan">
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">Alamat Stasiun Kedatangan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Alamat Stasiun Kedatangan">
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">No Telp Stasiun Kedatangan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="No Telp Stasiun Kedatangan">
                  </div>
                </div>
              </div>
            </div>
              <div class="column m-t-30">
                <button class="button is-link fa fa-save"></button>
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
