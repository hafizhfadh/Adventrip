@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Stations
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <div class="columns">
          <a href="{{ route('station.create') }}"class="button is-light fa fa-plus"></a>
        </div>
        <table class="table is-striped">
          <thead>
            <tr>
              <th><abbr title="Position">No</abbr></th>
              <th>Nama Kereta</th>
              <th>Stasiun Keberangkatan</th>
              <th>Alamat Stasiun Keberangkatan</th>
              <th>No Telp Stasiun Keberangkatan</th>
              <th>Stasiun Kedatangan</th>
              <th>Alamat Stasiun Kedatangan</th>
              <th>No Telp Stasiun Kedatangan</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>Argo Bromo Anggrek Pagi</td>
              <td>Surabaya Pasar Turi (SBI)</td>
              <td>Jl. Semarang 1, Tembok Dukuh, Bubutan, Surabaya</td>
              <td>031-5345014</td>
              <td>Gambir (GMR)</td>
              <td>Jalan Medan Merdeka Timur No.27, Kel. Gambir, Kec. Gambir, Jakarta Pusat 10110, DKI Jakarta, Indonesia</td>
              <td>(belom nyari)</td>
              <td><a href="{{ url('station/{2}/edit') }}" class="button is-warning fa fa-edit"></a></td>
              <td><a href="{{ route('station.create') }}" class="button is-danger fa fa-trash"></a></td>
            </tr>

          </tbody>
        </table>
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
