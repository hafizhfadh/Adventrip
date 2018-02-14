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
        <div class="columns">
          <div class="column">
            <a href="{{ route('station.index') }}"class="button is-light fa fa-home"></a>
        </div>
        </div>
        <form class="form-vertical" action="{{ route('station.store') }}" method="post">
          {{ csrf_field() }}
          <div class="field">
            <label class="label">Nama Stasiun</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nama Stasiun" name="nama_st">
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Alamat Stasiun<label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Alamat Stasiun" name="alamat_st">
                  </div>
                </div>
              </div>
              </div>
              <div class="columns">
                <div class="column">
                <div class="field">
                  <label class="label">No Telp Stasiun</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="No Telp Stasiun" name="tlp_st">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Keterangan</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Keterangan" name="keterangan"></textarea>
                  </div>
                </div>
              </div>
            </div>
              <div class="column">
                <div class="m-t-30">
                  <button class="button is-link fa fa-save" type="submit"></button>
                </div
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
