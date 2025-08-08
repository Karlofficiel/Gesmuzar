@include('admin.headeradmin')
<div  class="gauche">
<p style="font-size:80px;color:white !important;font-family:gabriola;"> Messagerie de l'application </p>
@if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
        @endif 


        
<table id="mytable" class="table table-bordered table-striped">
                   
                   <thead>
                            
                            <th></th>
         
                            <th>Id_Message</th>
                            <th>id_Utilisateur</th>
                            <th>Message  Utilisateur</th>
                            <th>Reponse Admin</th>
                            <th>Nom_Récepteur</th>
                            <th>Action</th>                       
         
                 </thead>
         
    
                 <tbody>
            
        @foreach ( $message as $receiver )
              <tr>
                
                <td><input type="checkbox" class="checkthis"/></td>

                <td>{{ $receiver -> id }}</td>
                <td>{{ $receiver -> sender_id }}</td>

                <td>
                  <textarea >{{ $receiver -> message }}</textarea>
                </td>

                <form action="replyToMessage" method="post">
                @csrf
                

                <td>
                <textarea name="reply_to" id="reply_to"  placeholder="Laisser un Message" ></textarea>
                </td>

                <td>
                  <input type="text" name="receiver_name" style="background-color:gray !important;">
                </td>
               

                <td>
                  <input type="submit" value="Envoyer">
                </td>
     
              </tr>
        @endforeach 
              
</table>         
</form>   

</div> 
     <style>
      .gauche  {
            position: absolute;
            background-color:transparent;
            top:100px;
            left: 250px;
            height: 400px;
            width:1000px;    
                }
                #bouton{
                color:white;
               }
               textarea{
                border-radius:8px;
                border:none;
                outline:none;
               }
               input{
                background-color: #159328;
                margin-top:5px;
                height: 40px;
               border:none;
               border-radius:8px;
               color:#fff;
               fon
               }
     </style>   
