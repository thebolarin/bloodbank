@extends('layouts.donor-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if(Auth::guard('donor')->user()->donor)
                <h1>Welcome,</h1><h4>{{Auth::guard('donor')->user()->name}}</h4>
                @else
                <h1>Hello,</h1><h4>{{Auth::guard('donor')->user()->name}}.</h4><b>Please go to the bloodcare center to finish your registration,Thanks.</b>
                      <p><b> For more information, <a href="{{route('donation-donation')}}" style="color:#245e71;">Donation process</a></b></p>
                @endif

                
       
            </div>
        </div>
    </div>
</div>
@endsection
