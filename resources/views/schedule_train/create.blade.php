@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Create Schedule Trains
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
      <div class="columns">
        <div calss="column">
          <a herf="{{ route('train_schedule.index') }}"class="button is-light fa fa-home"></a>
          </div>
          </div>
        <form class="form-vertical" action="{{ route('train_schedule.store') }}" method="post">
      {{ csrf_field()}}
          <div class="field">
            <label class="label">Nama Kereta</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nama Kereta" name="nama_kereta">
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Stasiun Keberangkatan" name="stasiun_keberangkatan">
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="date" name="waktu_keberangkatan">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Kedatangan</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Stasiun Kedatangan" name="stasiun_kedatangan">
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Kedatangan</label>
                  <div class="control">
                    <input class="input" type="date" name="waktu_kedatangan">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Perjalanan</label>
                  <div class="control">
                    <input class="input" type="date" name="waktu_yang_ditempuh">
                  </div>
                </div>
              </div>
              <div class="column m-t-30">
                <button type="submit" class="button is-link fa fa-save"></button>
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
