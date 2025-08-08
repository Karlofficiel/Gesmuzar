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
        <form method="post" action="">
        
            <div class="form-group">
                <label for="car-model">Marque Voiture</label>
                <input type="text" id="marquevoiture" name="marquevoiture"  required>
            </div>
            <div class="form-group">
                <label for="car-model">Nom Voiture</label>
                <input type="text" id="nomvoiture" name="nomvoiture"  required>
            </div>
            <div class="form-group">
                <label for="preferred-color"> Nombres de Pièces</label>
                <input type="text" id="pieces" name="pieces"  required>
            </div>
                       
            <button type="submit" class="submit-button">Ajouter</button>
           
        </form>
    </div>

</body>
</html>
