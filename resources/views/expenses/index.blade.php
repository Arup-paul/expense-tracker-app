@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
  <h2 class="text-center">Expenses List </h2>
<table class="table">
   <thead>
   <tr>
       <th>#</th>
       <th>Description</th>
       <th>Amount</th>
       <th>Category</th>
       <th>Payment Method</th>
       <th>Date</th>
   </tr>
   </thead>
    <tbody>
    @foreach($expenses as $e)
        <tr>
            <td>{{$e->id}}</td>
            <td>{{$e->description}}</td>
            <td>{{$e->amount}}</td>
            <td>{{$e->category}}</td>
            <td>{{$e->payment_method}}</td>
            <td>{{$e->date}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$expenses->render()}}

            </div>
        </div>
    </div>
@endsection
