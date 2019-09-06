@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading text-center"  style=" font-size:20px;">
              <b>All Donors</b> 
        </div>
       
        
                <a href="{{route('donor.create')}}" class="btn   bt"><i class="fas fa-pencil-alt"></i></i> Create donor</a>
               <br><br>
        <div class="panel-body">
                <table class="table table_hover"  id="datatable">
                        <thead>
                           
                            <th>
                              Avatar
                            </th>

                            <th>
                              Name
                            </th>
                           
                            <th>
                              Email
                            </th>

                              <th>
                              Blood type
                            </th>

                              <th>
                             Donor status
                            </th>

                             <th>
                                Donor permissions
                            </th>

                             <th>
                              Edit
                            </th>
                            <th>
                                Delete
                                </th>
                        </thead>
                
                        <tbody>
                            @if($donors->count()>0)
                                @foreach($donors as $donor)
                                    <tr>
                                            <td>
                                            <img src ="{{asset($donor->profile->avatar)}}" alt="{{$donor->name}}" width="40px" height="40px" style="border-radius:50%;" > 
                                            </td>

                                           
                                            <td>
                                                {{$donor->name}} 
                                            </td>

                                            <td>
                                                {{$donor->email}} 
                                            </td>

                                             <td>
                                                {{$donor->profile->blood_id}} 
                                            </td>

                                             <td>
                                                {{$donor->profile->status_id}} 
                                            </td>

                                           <td>
                                               @if($donor->donor)
                                                 <a href="{{route('user.not.donor' , ['id' => $donor->id])}}" class="btn btn-s btn-danger">Restrict access</a>
                                               @else
                                                     <a href="{{route('user.donor' , ['id' => $donor->id])}}" class="btn btn-s btn-success">Give access</a>
                                               @endif
                                        </td>

                                            <td>
                                                    <a href="{{route('donor.edit' , ['id'=>$donor->id])}}" class="btn xs btn-success">
                                                        <i class="flaticon-medical-history"></i>
                                                    </a> 
                                                
                                            </td>



                                            <td>
                                                

                                                <a href="{{route('donor.delete' , ['id'=>$donor->id])}}" class="btn btn-danger">
                                                    <i class="flaticon-garbage-1"></i>
                                                </a> 
                                            </td>
                                    </tr>

                                    
                                    
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No donor</th>
                                </tr>
                            @endif

                           
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <br>
                    <a href="{{route('donor.download')}}" class="btn btn-s btn-success text-center" style="margin-left:40%; margin-top:5%;">Download as excel</a>
                    
        </div>
    </div>

@stop

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
@endsection