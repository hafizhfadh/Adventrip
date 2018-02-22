@extends('layouts.app')
@section('content')
    <div class="column is-10">
        <div class="card">
            <div class="card-header">
                <p class="card-header-title">
                    Booking
                </p>
            </div>
            <div class="card-content table__wrapper">
                <a href="{{ route('booking.create') }}"class="button is-light fa fa-plus"></a>
                <table class="table is-stripped pricing__table">
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
                    @php
                    $x = 1
                    @endphp
                    @foreach($data as $a)
                    <tr>
                        <th>{{ $x }}</th>
                        <td>{{ $a->nama_customer}}</td>
                        <td>{{ $a->tanggal_pesan}}</td>
                        <td>{{ $a->nama_kereta}}</td>
                        <td>{{ $a->stasiun_keberangkatan}}</td>
                        <td>{{ $a->stasiun_kedatangan}}</td>
                        <td>{{ $a->waktu_keberangkatan}}</td>
                        <td>{{ $a->waktu_kedatangan}}</td>
                        <td>{{ $a->jumlah_tiket}}</td>
                        <td>{{ $a->tarif_pertiket}}</td>
                        <td>{{ $a->total_bayar}}</td>
                        <td>
                            <div class="columns">
                                <div class="column">
                                    <a href="booking/{{$a->id}}/edit" class="button is-warning fa fa-edit"></a>
                                </div>
                                <div class="column">
                                    <form action="booking/{{$a->id}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" name="button" class=" button is-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php
                    $x++
                    @endphp
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
  <script type="text/javascript">
    $(document).ready(function() {
        $('table').dataTable({

        });
    });
  </script>
@endpush

@push('style')
  <style media="screen">
    .pricing__table {
        width: 100%;
        overflow-x: auto;
    }

    .table__wrapper {
        overflow-x: auto;
    }
  </style>
@endpush