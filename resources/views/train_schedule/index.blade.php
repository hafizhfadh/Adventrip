@extends('layouts.app')

@section('content')
<div class="column">
    <div class="card">
        <div calss="card-header">
            <div class="column">
                <p class="card-header-title">
                 Train Shcedule
                </p>
            </div>
        </div>
        <div class="card-content">
            <table class="table is-stripped">
                <thead>
                    <tr>
                        <th><abbr title="No KA">No KA</abbr></th>
                        <th>Nama Kereta</th>
                        <th><abbr title="Stasiun Keberangkatan">Stasiun Keberangkatan</abbr></th>
                        <th><abbr title="Waktu Keberangkatan">Waktu Keberangkatan</abbr></th>
                        <th><abbr title="Stasiun Kedatangan">Stasiun Kedatangan</abbr></th>
                        <th><abbr title="Waktu Kedatangan">Waktu Kedatangan</abbr></th>
                        <th><abbr title="Waktu Yang Ditempuh">Waktu Yang Ditempuh</abbr></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <th>1</th>
                          <td>Argo Bromo Anggrek Pagi</td>
                         <td>Surabaya Pasutri (SBI)</td>
                         <td>08.00</td>
                         <td>Gambir (GMR)</td>
                         <td>17.00</td>
                         <td>Waktu Yang Ditempuh</td>
                         <td>
                <a herf="{{ url('train_schedule/{2}/edit') }}" class="button is-warning fa fa-edit"></a>
                <a herf="{{ url('train_schedule.create') }}" class="button is-danger fa fa-trash"></a>
                </td>
                </tr>
                    <tr>
                    </tr>
                </tbody>
                <tfoot>
                    <a href="{{ route('train_schedule.create') }}" class="button fa fa-plus"></a>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection