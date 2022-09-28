@extends('layouts.main')
@section('content')
<section class="cart container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
        <h4 style="margin-bottom: 10px">User Profile</h4>
        <p style="margin-bottom: 10px">{{Auth::user()->name}}</p>
        <p>{{Auth::user()->email}}</p>

        <form action="{{route('logout')}}" method="POST"> 
            @csrf
            <input type="submit" value="Logout" class="btn btn-danger">

        </form>
        <div class="mt-3" style="margin-bottom: 20px; margin-top:20px">
        <a href="{{route('user_orders')}}" class="btn btn-warning">Your Orders</a>
    </div>

    </div>

</section>

@endsection

