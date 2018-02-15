@extends('layouts.app')

@section('content')
  <div class="column">
    <div class="card">
      <div class="card-content">
        <table class="table" id="trains">
          <thead>
            <tr>
              <th><abbr title="Position">Pos</abbr></th>
              <th>Team</th>
              <th><abbr title="Played">Pld</abbr></th>
              <th><abbr title="Won">W</abbr></th>
              <th><abbr title="Drawn">D</abbr></th>
              <th><abbr title="Lost">L</abbr></th>
              <th><abbr title="Goals for">GF</abbr></th>
              <th><abbr title="Goals against">GA</abbr></th>
              <th><abbr title="Goal difference">GD</abbr></th>
              <th><abbr title="Points">Pts</abbr></th>
              <th>Qualification or relegation</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th><abbr title="Position">Pos</abbr></th>
              <th>Team</th>
              <th><abbr title="Played">Pld</abbr></th>
              <th><abbr title="Won">W</abbr></th>
              <th><abbr title="Drawn">D</abbr></th>
              <th><abbr title="Lost">L</abbr></th>
              <th><abbr title="Goals for">GF</abbr></th>
              <th><abbr title="Goals against">GA</abbr></th>
              <th><abbr title="Goal difference">GD</abbr></th>
              <th><abbr title="Points">Pts</abbr></th>
              <th>Qualification or relegation</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $n = 0; ?>
            @foreach ($data as $a)
              <tr>
                <th>{{ $n }}</th>
                <td><a href="https://en.wikipedia.org/wiki/A.F.C._Bournemouth" title="A.F.C. Bournemouth">AFC Bournemouth</a></td>
                <td>38</td>
                <td>11</td>
                <td>9</td>
                <td>18</td>
                <td>45</td>
                <td>67</td>
                <td>−22</td>
                <td>42</td>
                <td></td>
              </tr>
              <?php $n++ ?>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  $('#trains').DataTable();
</script>
@endpush
