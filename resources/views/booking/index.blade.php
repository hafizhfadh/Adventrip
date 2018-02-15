@extends('layouts.app')
@section('content')
    <div class="column">
        <div class="card">
            <div class="card-header">
                <div class="column">
                    <div class="column">
                        <p class="card-header-tittle">
                        Booking
                        </p>
                    </div>
                </div>
            </div>
       
<div class="card-content">
<table class="table is-stripped">
  <thead>
    <tr>
    <th><abbr title="Position">No</abbr></th>
    <th><abbr title="Played">Nama Customer</abbr></th>
    <th><abbr title="Points">Tanggal Pesan</abbr></th>
    <th><abbr title="Won">Nama Kereta</abbr></th>
    <th><abbr title="Drawn">Stasiun Keberangkatan</abbr></th>
    <th><abbr title="Lost">Stasiun Kedatangan</abbr></th>
    <th><abbr title="Goals for">Waktu Keberangkatan</abbr></th>
    <th><abbr title="Lost">Waktu Kedatangan</abbr></th>
    <th><abbr title="Goals for">Jumlah Tiket</abbr></th>
    <th><abbr title="Goals against">Tarif (Per Tiket)</abbr></th>
    <th><abbr title="Goal difference">Total Bayar</abbr></th>
    <th></th>
    <th></th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th>1</th>
      <td>Mawar</td>
      <td>13-02-2018</td>
      <td>Argo Wilis</td>
      <td>Surabaya</td>
      <td>Bandung</td>
      <td>08:30</td>
      <td>20:19</td>
      <td>1</td>
      <td>500.000</td>
      <td>500.000</td>
    </tr>
  <td>
  <a href="{{ url('booking/{2}/edit') }}" class="button is-warning fa fa-edit"></a>
  <a href="{{ route('booking.create') }}" class="button is-danger fa fa-trash"></a>
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