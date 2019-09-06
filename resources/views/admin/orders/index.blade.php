@extends('layouts.app')


@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection


@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
            <div class="panel-heading  text-center" style=" font-size:20px;">
                    <b>Blood Orders</b>  
                   </div>
                   <a href="{{route('order.create')}}" class="btn bt">Place an order</a>
                   <br><br>
   
        <div class="panel-body ">
                <table class="table table_bordered"   id="datatable">
                        <thead >
                            <th>
                                 Name
                            </th>

                            <th>
                                    Hospital Name
                               </th>
                            <th>
                               Donor email
                            </th>

                            <th>
                                  Mobile  
                                 </th>

                             <th>
                              Blood type
                            </th>
                            <th>
                              Quantity
                            </th>

                          
                
                            <th>
                                Actions
                            </th>
                           
                           
                        </thead>
                
                        <tbody>
                            @if($order->count()> 0)
                                @foreach($order as $order)
                                <tr>
                                       
                                         <td>
                                                {{$order->name}}
                                        </td>

                                           <td>
                                                {{$order->hospital}}
                                        </td>

                                         <td>
                                                {{$order->email}}
                                        </td>

                                         <td>
                                                {{$order->mobile}}
                                        </td>

                                         <td>
                                                  {{$order->blood->blood_group}}
                                        </td>

                                         <td>
                                                {{$order->quantity}}
                                        </td>

                                      

                                        


                                        <td>
                                            <a href="{{route('order.edit' , ['id'=>$order->id])}}" class="btn btn btn-info">
                                                <i class="far fa-edit"></i>
                                            </a>   
                                       

                                       
                                            <a href="{{route('order.delete' , ['id'=>$order->id])}}" class="btn btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                            </a>   

                                               
                                        </td>
                                </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No order yet</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
@endsection