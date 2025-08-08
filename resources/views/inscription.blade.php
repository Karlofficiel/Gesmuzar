<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   
</script>
    
    <title>Inscription</title>
</head>
<body>
          
<div class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
          <div class="bg-white p-4 p-md-5 rounded shadow-sm">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">S'inscrire</h2>
                </div>
              </div>
            </div>
            <form action="store" method="POST" >
        @csrf
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="nom complet" required>
                </div>
                <div class="col-12">
                  <label for="number" class="form-label">Numéro <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="numero" id="numero" placeholder=" Numéro Téléphonique" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="name@gmail.com" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Code Secret <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder=".........." value="" required>
                </div>

              

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                    <label class="form-check-label text-secondary" for="iAgree">
                      Accepter les  <a href="#!" class="link-primary text-decoration-none">termes et conditions de confidentialités</a>
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary" type="submit">S'enregistrer</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="col-12">
                  <p class="m-0 text-secondary text-center">J'ai deja un compte? <a href="/connexion" class="link-primary text-decoration-none">Connectez-vous</a></p>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>