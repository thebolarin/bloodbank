<table class="table table_hover">
    <thead>
       
      

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

        
    </thead>

    <tbody>
       
            @foreach($donors as $donor)
                <tr>
                       

                       
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

                      
                </tr>

                
                
            
            @endforeach
       

       
    </tbody>
</table>