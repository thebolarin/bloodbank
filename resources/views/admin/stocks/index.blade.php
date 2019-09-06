@extends('layouts.app')


@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection


@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
            <div class="panel-heading  text-center" style=" font-size:20px;">
                    <b>Blood Stocks</b>  
                   </div>
                   <a href="{{route('stock.create')}}" class="btn bt"> Add new blood stock</a>
                   <br><br>
   
        <div class="panel-body ">
                <table class="table table_bordered" id="datatable">
                        <thead >
                            <th>
                                Donor name
                            </th>
                            <th>
                               Blood group
                            </th>
                
                            <th>
                                Actions
                            </th>
                           
                           
                        </thead>
                
                        <tbody>
                            @if($stock->count()> 0)
                                @foreach($stock as $stock)
                                <tr>
                                       
                                         <td>
                                                {{$stock->donor_name}}
                                        </td>

                                         <td>
                                                {{$stock->blood->blood_group}}
                                        </td>


                                        <td>
                                            <a href="{{route('stock.edit' , ['id'=>$stock->id])}}" class="btn btn btn-info">
                                                <i class="far fa-edit"></i>
                                            </a>   
                                       

                                       
                                            <a href="{{route('stock.delete' , ['id'=>$stock->id])}}" class="btn btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                            </a>   

                                               
                                        </td>
                                </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No blood stocks yet</th>
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