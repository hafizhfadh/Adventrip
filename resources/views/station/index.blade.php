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
              <th>Waktu Keberangkatan</th>
              <th>Stasiun Kedatangan</th>
              <th>Waktu Kedatangan</th>
              <th>Waktu Perjalanan</th>
              <th>Pilihan Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>Argo Bromo Anggrek Pagi</td>
              <td>Surabaya Pasar Turi (SBI)</td>
              <td>08.00</td>
              <td>Gambir (GMR)</td>
              <td>17.00</td>
              <td>09 Jam</td>
              <td>
                <a href="{{ url('station/{2}/edit') }}" class="button is-warning fa fa-edit"></a>
                <a href="{{ route('station.create') }}" class="button is-danger fa fa-trash"></a>
              </td>
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
