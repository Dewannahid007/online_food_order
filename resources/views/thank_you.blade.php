@extends('layouts.main')
@section('content')

<section class="container mt-2 my-3 py-3">
<div class="container mt-2 text-center">
    <h4>Thank You</h4>
    @if(Session::has('order_id') && Session::get('order_id') != null)

    <h4 style="color:blue; margin-top:30px; margin-bottom:30px;"> Order Id: {{Session::get('order_id')}} </h4>

    <p style="margin-top: 10px; margin-bottom:30px">Please Keep order id in safe place for future reference</p>
    <p style=" margin-top:10px; margin-bottom:30px">We will deliver your order within 30-45 minutes</p>
    @endif
</div>
</section>
@endsection