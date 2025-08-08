<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Purchase Form</title>
    <link rel="stylesheet"href="{{asset('css/achat.css') }}" >
</head>
<body>
    <div class="form-container">
        <h1>Fomulaire d'achat </h1>
        <form method="post" action="post" >
            <div class="form-group">
                <label for="full-name">Nom</label>
                <input type="text" id="full-name" name="full-name" placeholder="Entrer le nom de l'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="contact-info">Age</label>
                <input type="email" id="contact-info" name="contact-info" placeholder="Entrer l'age du l'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="car-model">Marque Voiture</label>
                <input type="text" id="marque" name="car-model"  required>
            </div>
            <div class="form-group">
                <label for="car-model">Nom Voiture</label>
                <input type="text" id="voiture" name="name-model"  required>
            </div>
            <div class="form-group">
                <label for="preferred-color">Prix</label>
                <input type="text" id="prix" name="preferred-color"  required>
            </div>
            
            <div class="form-group">
                <label for="payment-method">Méthode Payement</label>
                <select id="payment-method" name="payment_method" required>
                    <option value="" disabled selected>Selectionner la methode de payement</option>
                    <option value="cash">Liquide</option>
                    <option value="credit-card">Orange Money</option>
                    <option value="bank-loan">MTN Mobile Money</option>
                    <option value="bank-loan">Orange Money</option>
                    <option value="bank-loan">Express union</option>
                </select>
            </div>
            <button type="submit" class="submit-button">Submit</button>
            <button onclick="rempliauto()">remplir</button>
        </form>
    </div>

    <script>
               function rempliauto(){
                
                   let voiture=localStorage.getItem("voiture");
                   let prix=localStorage.getItem("prix");
                   let marque=localStorage.getItem("marque");
               

                   if(voiture) document.getElementById("voiture").value=voiture;
                   if(prix) document.getElementById("prix").value=prix;
                   if(marque) document.getElementById("marque").value=marque;
                   

               }
    </script>
</body>
</html>
