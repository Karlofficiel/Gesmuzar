@include('admin.headeradmin')
<div  class="gauche">
<p style="font-size:80px;color:white !important;font-family:gabriola;">Tous les Utilisateurs de l'application </p>
@if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
        @endif 
<table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                            
                            <th><input type="checkbox" id="checkall" /></th>
         
                            <th>id</th>
                            <th>Nom</th>
                            <th>Numero</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Supprimer</th>
                            <th>Bloquer</th>
                            <th>Debloquer</th>
         
                 </thead>
         
             <tbody>
            
             @foreach ($user as $item )
             <tr>
         
         <td><input type="checkbox" class="checkthis"/></td>
   
              <td>{{ $item-> id }}</td>
              <td>{{ $item-> name }}</td>
              <td>{{ $item-> numero }}</td>
              <td>{{ $item-> email }}</td>
              <td>{{ $item-> password }}</td>
              
              <td>

                <p data-placement="top" data-toggle="tooltip" title="Delete">
                <button class="btn btn-danger btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete" onclick="return confirm('Voulez-vous vraiment supprimer cette Utilisateur ?')">
                    <a href="/Allutilisateurs/{{ $item->id }}" id="bouton">Supprimer</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6l-2 14H7L5 6"></path>
                <path d="M10 11v6"></path>
                <path d="M14 11v6"></path>
                <path d="M1 6h22"></path>
                <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                </svg>
                    </button></p>

              </td>

                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Bloquer">
                    <button class="btn btn-danger btn-sm" data-title="Bloquer" data-toggle="modal" data-target="#delete" onclick="return confirm('Voulez-vous vraiment bloquer cette Utilisateur ?')">
                        <a href="/Allutilisateurs/{{ $item->id }}/block" id="bouton">Bloquer</a>
                        <svg width="60" height="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="black">
                            <path d="M12 2C9.24 2 7 4.24 7 7V10H6C4.9 10 4 10.9 4 12V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V12C20 10.9 19.1 10 18 10H17V7C17 4.24 14.76 2 12 2ZM9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7V10H9V7ZM12 17C10.9 17 10 16.1 10 15C10 13.9 10.9 13 12 13C13.1 13 14 13.9 14 15C14 16.1 13.1 17 12 17Z"/>
                         </svg>
                        </button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Debloquer">
                    <button class="btn btn-danger btn-sm" data-title="Debloquer" data-toggle="modal" data-target="#delete" onclick="return confirm('Voulez-vous vraiment débloquer cette Utilisateur ?')">
                        <a href="/Allutilisateurs/{{ $item->id }}/deblock" id="bouton">Debloquer</a>
                        <svg width="60" height="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="black">
                            <path d="M17 8V7C17 4.24 14.76 2 12 2C9.24 2 7 4.24 7 7H9C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7V8H6C4.9 8 4 8.9 4 10V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V10C20 8.9 19.1 8 18 8H17ZM12 17C10.9 17 10 16.1 10 15C10 13.9 10.9 13 12 13C13.1 13 14 13.9 14 15C14 16.1 13.1 17 12 17Z"/>
                        </svg>
                        </button></p>
                </td>

       </tr>
             @endforeach
              
</table>         
           
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

     </style>   
