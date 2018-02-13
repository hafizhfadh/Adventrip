@extends('layouts.app')
@section('content')
  <div class="column is-10">
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
        <div class="table__wrapper">
          <table class="table is-bordered pricing__table is-fullwidth">
            <thead>
              <tr>
                <th><abbr title="Position">No</abbr></th>
                <th>Nama Stasiun</th>
                <th>Alamat Stasiun</th>
                <th>No Telp Stasiun</th>
                <th>Keterangan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $a)
              <tr>
                <th>{{ $a->id }}</th>
                <td>{{ $a->nama_st }}</td>
                <td>{{ $a->alamat_st }}</td>
                <td>{{ $a->tlp_st }}</td>
                <td>{{ $a->keterangan }}</td>
                <td>
                  <div class="columns">
                    <div class="column">
                      <a href="station/{{$a->id}}/edit" class="button is-warning fa fa-edit"></a>
                    </div>
                    <div class="column">
                      <form action="station/{{$a->id}}" method="delete">
                        {{ csrf_field() }}
                        <input type="hidden" name="" value="_method">
                        <button type="submit" name="button" class="button is-danger"><i class="fa fa-trash"></i></button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
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
