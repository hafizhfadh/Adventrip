@extends('layouts.app')
@section('content')

    <div class="column">
        <div class="card">
            <div class="card-header">
            <div class="coloumns">
            <div class="column">
            <p class="card-header-title">
        Customer
        </p>    
        </div>
        </div>
        </div>

        <div class="card-content">
        <div class="columns">
        <a href="{{ route('customer.create') }}"class="button is-light fa fa-plus"></a>
        </div>
        <table class="table">
  <thead>
    <tr>
      <th><abbr title="Position">No</abbr></th>
      <th><abbr title="no_id">No Identitas</abbr></th>
      <th><abbr title="titel">Titel</abbr></th>
      <th><abbr title="nama_customer">Nama Customer</abbr></th>
      <th><abbr title="telp_customer">No Telphone</abbr></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td> 234567890 </td>
      <td>Nyonya</td>
      <td>mawar</td>
      <td>08976499955</td>
       <td>
            <a href="{{ url('customer/1/edit') }}"  class="tag is-warning">Edit</a>
            <a class="tag is-danger">Delete</a>

       </td>
     
    </tr>
    
    
  </tbody>
</table>

        </div>
        </div>
        </div>
@endsection