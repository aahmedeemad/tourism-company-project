@extends('layouts.app')
@section('content')


<div  style=" width:95%; margin:auto">
  <h3 class="text-center">Safe</h3>
  <hr>
  <div class="row text-center">
    <div  class="col-lg-6">
      <table id="tablePreview" class="table table-bordered">
        <thead>
          <tr class="white-text" style="background-color:#378B92;">
            <th colspan="5" class="col-12">Expenses</th>
          </tr>
          <tr class="black white-text">
            <th class="w-10">#</th>
            <th class="w-15">Rakm ezn al sarf</th>
            <th class="w-20">Price</th>
            <th class="w-40">Decription</th>
            <th class="w-15">Destination</th>
          </tr>
        </thead>
        <tbody>
          @foreach($safes as $safe)
          <tr>
            <th scope="row">{{ $safe->id }}</th>
            <td>{{ $safe->safeid }}</td>
            <td>{{ $safe->receiptno }}</td>
            <td>{{ $safe->total }}</td>
            <td>{{ $safe->total }}</td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" class="col-12">
              <input type="button" name="" class="btn btn-primary" value="Add new">
            </td>
          </tr>
        </tfoot>
      </table>
      </div>
    <div class="col-lg-6">
      <table  id="tablePreview" class="table table-bordered">
        <thead>
          <tr class="white-text" style="background-color:#378B92;">
            <th colspan="5" class="col-12">Revenue</th>
          </tr>
          <tr class="black white-text">
            <th class="w-10">#</th>
            <th class="w-15">Rakm ezn al sarf</th>
            <th class="w-20">Price</th>
            <th class="w-40">Decription</th>
            <th class="w-15">Destination</th>
          </tr>
        </thead>
        <tbody>
          @foreach($safes as $safe)
          <tr>
            <th scope="row">{{ $safe->id }}</th>
            <td>{{ $safe->safeid }}</td>
            <td>{{ $safe->receiptno }}</td>
            <td>{{ $safe->total }}</td>
            <td>{{ $safe->total }}</td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" class="col-12">
              <input type="button" class="btn btn-primary" name="" value="Add new">
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection
