@extends('layouts.app')

<style>
/*form {
  width: 300px;
  margin: 0 auto;
  text-align: center;
  padding-top: 50px;
}*/

.value-button {
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 20px;
  text-align: center;
  vertical-align: middle;
  padding: 11px 0;
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


.value-button:hover {
  cursor: pointer;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #decrease p{

}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

input#number {
  text-align: center;
  border: none;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 40px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>

@section('content')

       @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
         <b> Update blood order:      {{ $order->name }}</b>  
        </div>
   
        <div class="panel-body ">
            <form action="{{route('order.update' , ['id' => $order->id])}}" method="post" >
                {{ csrf_field() }}

              


                 <div class="form-group">
                    <label for="donor">Patient name</label>
                    <input type="text" name="name" value="{{ $order->name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="group">Email</label>
                    <input type="email" name="email" value="{{ $order->email }}" class="form-control">
                </div>

               
               <div class="form-group">
                        <label for="blood">Select blood type </label>
                        <select name="blood_id" id="blood" class="form-control">
                            @foreach($blood as $blood)
                                 <option value="{{$blood->id}}"
                                    
                                       

                                        @if($blood->id == $blood->id)
                                            selected
                                        @endif
                                        
                                        
                                    
                                    >{{$blood->blood_group}}</option>
                            @endforeach
                        </select>
                </div>

             <!--   <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" value="{{ $order->quantity }}" class="form-control">
                </div>-->

                 <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"> <p>-</p> </div>
                <input type="number" id="number" name="quantity"value="{{ $order->quantity }}" />
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>

                 

               


                   <div class="form-group">
                      <label for="donor">Hospital name</label>
                      <input type="text" name="hospital" value="{{ $order->hospital }}">
                  </div>
  
                  <div class="form-group">
                      <label for="group">Mobile no</label>
                     <input type="text" name="mobile" value="{{ $order->mobile }}">
                  </div>

                

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Update Order</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>

     <script>
         function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }

            function decreaseValue() {
                var value = parseInt(document.getElementById('number').value, 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                document.getElementById('number').value = value;
            }

    </script>
@endsection