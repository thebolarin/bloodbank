@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading text-center" style=" font-size:20px;">
             <b>  Users</b>
        </div>
        <br>
        <div class="panel-body">
                <table class="table table_hover" id="datatable">
                        <thead>
                           
                            <th>
                                Image
                            </th>

                            <th>
                               Name
                            </th>

                            
                           
                            <th>
                               Permission
                            </th>

                            <th>
                               Delete
                            </th>
                        </thead>
                
                        <tbody>
                            @if($users->count()> 0)
                                @foreach($users as $user)
                                    <tr>

                                        <td>
                                            <img src ="{{asset($user->profile->avatar)}}" alt="" width="40px" height="40px" style="border-radius:50%;" > 
                                        </td>

                                        <td>
                                             {{$user->name}}  
                                        </td>

                                       

                                        <td>
                                               @if($user->admin)
                                                 <a href="{{route('user.not.admin' , ['id' => $user->id])}}" class="btn btn-s btn-danger">Restrict access</a>
                                               @else
                                                     <a href="{{route('user.admin' , ['id' => $user->id])}}" class="btn btn-s btn-success">Give access</a>
                                               @endif
                                        </td>

                                        <td>
                                              @if(Auth::id() !== $user->id)
                                              <a href="{{route('user.delete' , ['id' => $user->id])}}" class="btn xs btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                                              @endif
                                                
                                        </td>

                                    </tr>

                                   
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No users found</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                   
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