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
          <a href="{{ route('station.create') }}"class="button is-danger">Create</a>
        </div>
        <div class="table__wrapper">
          <table class="table is-bordered pricing__table is-fullwidth">
            <thead>
              <tr>
                <th><abbr title="Position">No</abbr></th>
                <th>Nama Stasiun</th>
                <th>Kode Stasiun</th>
                <th>Kota</th>
                <th>Alamat Stasiun</th>
                <th>No Telp Stasiun</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $n=1 ?>
              @foreach($data as $a)
              <tr>
                <th>{{ $n }}</th>
                <td>{{ $a->nama_st }}</td>
                <td>{{ $a->kode_st}}</td>
                <td>{{ $a->kota}}</td>
                <td>{{ $a->alamat_st }}</td>
                <td>{{ $a->tlp_st }}</td>
                <td>
                  <div class="columns">
                    <div class="column">
                      <a href="station/{{$a->id}}/edit" class="button is-info">Edit</a>
                    </div>
                    <div class="column">
                      <form action="station/{{$a->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" name="button" class="button is-warning">Delete</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              <?php $n++ ?>
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