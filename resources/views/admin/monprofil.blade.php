<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="{{asset('css/style1.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/w3.css') }}">
  <link rel="stylesheet" href="{{asset('css/main.css') }}">
  <link rel="stylesheet"href="{{asset('css/mesinfos.css') }}" >
  <link rel="stylesheet"href="{{asset('css/profil.css') }}" >
  <link rel="stylesheet"href="{{asset('css/mescommandes.css') }}" >
  

</head>
<body>

<!-- liens  -->

<div class="app-container">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="app-icon">
        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg>
      </div>
    </div>

    <ul class="sidebar-list" style="display:flex; flex-direction:column;gap:10px;">
      <li class="sidebar-list-item">
        <a href="/Admin-index">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span>Tableau de Bord</span>
        </a>
      </li>

      
      <li class="sidebar-list-item">
        <a href="/monprofil">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          <span>Mon Profil</span>
        </a>
      </li>
        
      <li class="sidebar-list-item ">
        <a href="/Ajout-voiture">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          <span>Ajouter Voiture</span>
        </a>
      </li>


      <li class="sidebar-list-item ">
        <a href="/Allreservations">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span>Consulter tous les Reservations</span>
        </a>
      </li>


      <li class="sidebar-list-item">
        <a href="/Allutilisateurs">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          <span> Consulter tous les Utilisateurs</span>
        </a>
      </li>

      <li class="sidebar-list-item ">
        <a href="/Allvoitures">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span>Consulter tous les voitures</span>
        </a>
      </li>

      <li class="sidebar-list-item ">
        <a href="/message">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span>Messagerie</span>
        </a>
      </li>


      


      <li class="sidebar-list-item">
      <a href="/deconnexion">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 17L15 12L10 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15 12H3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M20 21H12C10.8954 21 10 20.1046 10 19V5C10 3.89543 10.8954 3 12 3H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <span>Déconnexion</span>
        </a>
      </li>

    </ul>


<!-- fin lien -->


<!-- session user -->

    <div class="account-info">
      <!-- <div class="account-info-picture">
        <img src="#" alt="Account">
      </div>
      <div class="account-info-name">  </div>
      <button class="account-info-more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      </button> -->
    </div>
  </div>

<!-- end session -->


  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText"></h1>
   
      <!-- <button class="app-content-headerButton">Ajouter un Produit</button> -->
    </div>
  
<form action="searchp" method="get">
    <div class="app-content-actions">
      <!-- <input class="search-bar" placeholder="Rechercher..." name="search" type="text"> -->
      <div class="app-content-actions-wrapper">
</form>        
        <div class="filter-button-wrapper">
          <!-- <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
          <div class="filter-menu">
            <label>Choisir une langue</label>
            <select>
              <option>Français</option>
              <option>Anglais</option>
            </select>
            </div> -->
          </div>
        </div>
        <!-- <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button> -->
      </div>
    </div>
    <script  src="{{asset('js/script.js')}}"></script>
  <script  src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script  src="{{asset('js/bootstrap.bundle.min.js.map')}}"></script>


  <!-- <script>
    $(document).ready(function(){
    $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });
    
            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
</script>

<script>

document.querySelectorAll('.dropdown-toggle').forEach(function(toggle) {
  toggle.addEventListener('click', function(e) {
    e.preventDefault();
    const dropdownMenu = this.nextElementSibling;
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
  });
});

</script> -->
<style>
.gauche  {
            position: absolute;
            background-color:transparent;
           bottom:0;
            left: 150px;
            height: 400px;
            width:1000px;   
        }
                .business-card{
                    margin-left:-10px;
                
                }    
     </style>   

    <div class="business-card">
        <div class="card-content">
            
            <p><h1> Admin </h1></p>
           
            <div class="contact-info" >
                
                <p><strong>Nom</strong>:  <i> {{ $user-> name }}</i></p>
                <p><strong>Phone</strong>:  <i> {{ $user-> numero }}</i></p>
                <p><strong>E-Mail</strong>:  <i> {{ $user-> email }}</i></p>

            </div>
        </div>
    </div>


<div class="gauche">
                
<!-- form profil -->

    <div class="contact-form">
        <h2>Modifier mon Profil</h2><br>
        
        <form action="ProfilUser" method="post">
            @csrf

            <label for="name">Nom utilisateur:</label>
            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" required >
           
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" required>
           
            <label for="password">Ancien Code Secret:</label>
            <input type="password" id="old_password" name="old_password" required>
           
            <label for="mot_de_passe">Nouveau Code Secret :</label>
            <input type="password" id="new_password" name="new_password" required>

            <label for=" confirmer_mot_de_passe">Confirmer Code Secret :</label>
            <input type="password" id="confirm_new_password" name="confirm_new_password" required >

            <nav>
                <input type="submit" value="Mettre à jour le profil"> 
                <input type="reset" class="input" value="effacer"> 
            </nav>
             
        </form>
    </div>

<!-- end profil -->
</div>
