@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Edit Data Station
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="station/{{$data->id}}" method="post">
          <div class="field">
            <label class="label">Nama Stasiun</label>
              <div class="control">
                <input class="input" type="text" placeholder="{{ $data->nama_st }}" name="nama_st">
              </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Alamat Stasiun</label>
                <div class="control">
                  <input class="input" type="text" placeholder="{{ $data->alamat_st }}" name="alamat_st">
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">No Telp Stasiun</label>
                <div class="control">
                  <input class="input" type="text" placeholder="{{ $data->tlp_st }}" name="tlp_st">
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Keterangan</label>
                <div class="control">
                  <textarea class="textarea" name="keterangan" placeholder="{{ $data->keterangan }}"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="columns m-t-30 is-gapless">
            <div class="column">
              <a href="{{ route('station.index') }}"class="button is-light fa fa-home"></a>
            </div>
            <div class="column">
              <button class="button is-success fa fa-check" type="submit"></button>
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
