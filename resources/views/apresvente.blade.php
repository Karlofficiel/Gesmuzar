<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paiement</title>
</head>
<body>
    
        <div class="container">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paiement en ligne</title>
</head>
<body id="body">
    <div class="contenu">
        <p style="font-size:80px;font-family:gabriola;">Veillez choisir le mode de paiement </p>
        <p style="font-size:36px;font-family:gabriola;" id="bas"> Effectuer vos transactions avec securiter et confiance </p>
     <nav class="nav1">
      
                <div class="option">
                    <img src="{{ asset('img/payement/mtn.png') }}" alt="mtn">
                    <p>mtn mobil-money</p>
                    <button id="mtn_btn" onclick="ouvrirFormmtn()">choisir</button>
                </div>
                <div class="option">
                    <img src="{{ asset('img/payement/orange.png') }}" alt="orange">
                    <p>orange-money</p>
                    <button id="orange-btn" onclick="ouvrirFormorange()">choisir</button>
                </div>
                <div class="option">
                    <img src="{{ asset('img/payement/paypal.png') }}" alt="paypal">
                    <p>paypal</p>
                    <button id="paypal-btn" onclick="ouvrirFormpaypal()">choisir</button>
                </div>

                <div class="option">
                    <img src="{{ asset('img/payement/express union.png') }}" alt="express union">
                    <p>express union</p>
                    <button id="express-union-btn" onclick="ouvrirFormexpress()">choisir</button>
                </div>
                <div class="option">
                    <img src="{{ asset('img/payement/liquide.webp') }}" alt="liquide" class="liq">
                    <p>Payer en Cash</p>
                    <button id="liquide-btn" onclick="ouvrirFormliquide()">choisir</button>
                </div>
            </div>
     </nav> 

    <!-- les formulaires de paiement -->
     
    <div id="formmtn" style="display:none;" class="form">
         <form action="#">
            <h2>veillez entrer les informations corrects </h2>
             <label for="mtn-numero-telephone">numero de telephone</label>
             <input type="number" name="mtn-numero-telephone" id="mtn-numero-telephone">
            <label for="mtn-email">email:</label>
            <input type="email" name="mtn-email" id="mtn-email">
            <label for="mtn-mot-de-passe">mot de passe:</label>
            <input type="password" name="mtn-mot-de-passe" id="mtn-mot-de-passe">
            <button type="submit">valider</button>
			<button type="reset">reinitialiser</button>
			<button id="btn-fermer-formmtn" onclick=" fermerFormmtn()" type="button">Quitter</button>

         </form>
    </div>

    <div id="formorange" style="display: none;" class="form">
         <form action="#">
            <h2>veillez entrer les informations corrects </h2>
             <label for="orange-numero-telephone">numero de telephone</label>
             <input type="number" name="orange-numero-telephone" id="orange-numero-telephone">
            <label for="orange-email">email:</label>
            <input type="email" name="orange-email" id="orange-email">
            <label for="orange-mot-de-passe">mot de passe:</label>
            <input type="password" name="orange-mot-de-passe" id="orange-mot-de-passe">
            <button type="submit">valider</button>
			<button type="reset">reinitialiser</button>
			<button id="btn-fermer-formorange" onclick="fermerFormorange()" type="button">Quitter</button>
       
         </form>
    </div>

    <div id="formpaypal" style="display: none;" class="form">
           <form action="#">
            <h2>veillez entrer les informations corrects </h2>
                <label for="paypal-email">email</label>
                <input type="email" name="paypal-email" id="paypal-email">
                <label for="paypal-mot-de-passe">mot de passe</label>
                <input type="password" name="paypal-mot-de-passe" id="paypal-mot-de-passe">
                <button type="submit">valider</button>
			<button type="reset">reinitialiser</button>
			<button id="btn-fermer-formpaypal" onclick="fermerFormpaypal()" type="button">Quitter</button>
           
           </form>
    </div>

    <div id="formexpress" style="display: none;" class="form">
        <form action="#">
            <h2>veillez entrer les informations corrects </h2>
            <label for="express-union-numero-telephone">numero de telephone</label>
            <input type="number" name="express-union-numero-telephone" id="express-union-numero-telephone">
            <label for="express-union-email">email:</label>
            <input type="email" name="express-union-email" id="express-union-email">
            <label for="express-union-mot-de-passe">mot de passe</label>
            <input type="password" name="express-union-mot-de-passe" id="express-union-mot-de-passe">
            <button type="submit">valider</button>
			<button type="reset">reinitialiser</button>
			<button id="btn-fermer-formexpress" onclick="fermerFormexpress()" type="button">Quitter</button>
          
        </form>
    </div>
    <div id="formliquide" style="display: none;" class="form">
        <form action="#">
            <h2>veillez entrer les informations corrects </h2>
            <label for="liquide">numero de telephone</label>
            <input type="number" name="liquide-numero-telephone" id="liquide-numero-telephone">
            <label for="express-union-email">email:</label>
            <input type="email" name="liquide-email" id="liquide-email">
            <button type="submit">valider</button>
			<button type="reset">reinitialiser</button>
			<button id="btn-fermer-formliquide" onclick="fermerformliquide()" type="button">quitter</button>
        
        </form>
    </div>


    <style>
        #bas{
            position: absolute;
            top:150px;
            margin-left:423px;
        }
        .liq{
            height: 15px;
            width: 12px;
        }
        .contenu{
            display: flex;
           flex-direction: column;
        }
        .contenu h1,p{
            text-align: center;
        }
        .contenu p{
            font-size: 20px;
        }

        .contenu nav{
            margin: 10px;
            display: flex;
        }

        .contenu nav .option{
              margin-left: 20px;
              border: 1px solid black;
              width: 210px;

        }
        .contenu nav .option p{
            text-align: center;
            font-size: 17px;
        }
        .contenu .nav1{
                  margin-left: 150px;
        }
       
        .contenu nav .option img{
            width: 100%;
            height: 50px;
        }
        
        .contenu nav .option button{
            width: 190px;
            height: 40px;
            margin: 10px;
            padding: 10px;
            color: #fff;
            font-size:17px;
            border: none;
            background-color: #3e8e41;
            border-radius: 10px;
            cursor: pointer;
        }
        
        .form {
	display: none;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: #fff;
	padding: 20px;
	border: 1px solid #ddd;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 500px;
   }

.form h2 {
	margin-top: 0;
    text-align: center;
}

.form label {
	display: block;
	margin-bottom: 10px;
}

.form input, .form textarea {
	width: 90%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
    border-radius: 8px;
    outline-color: #3e8e41;
}

.form button {
	background-color: #07960c;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}
.form button[type="reset"]{
    background-color: blue;
    color: #fff;
}
.form button[type="button"]{
    background-color: red;
}
.form button[type="button"]:hover{
    background-color: rgb(231, 28, 28);
}

.form button[type="reset"]:hover{
    background-color: rgb(46, 31, 255);
}

.form button:hover {
	background-color: #1c9420;
}

.form .ouvert {
	display: block;
	opacity: 1;
}

.body-flottant {
	pointer-events: none;
}

    </style>

        	<script >
        

        function ouvrirFormmtn() {
            document.getElementById("formmtn").style.display = "block";
            document.getElementById("formmtn").style.zIndex = "1";
        }
        
        function  fermerFormmtn() {
            document.getElementById("formmtn").style.display = "none";
        }
        
        function ouvrirFormorange() {
            document.getElementById("formorange").style.display = "block";
            document.getElementById("formorange").style.zIndex = "1";
        }
        
        function fermerFormorange() {
            document.getElementById("formorange").style.display = "none";
        }
        
        function ouvrirFormexpress() {
            document.getElementById("formexpress").style.display = "block";
            document.getElementById("formexpress").style.zIndex = "1";
        }
        
        function fermerFormexpress() {
            document.getElementById("formexpress").style.display = "none";
        }
        function ouvrirFormpaypal() {
            document.getElementById("formpaypal").style.display = "block";
            document.getElementById("formpaypal").style.zIndex = "1";
        }
        
        function fermerFormpaypal() {
            document.getElementById("formpaypal").style.display = "none";
        }
        function ouvrirFormliquide() {
            document.getElementById("formliquide").style.display = "block";
            document.getElementById("formliquide").style.zIndex = "1";
        }
        
        function fermerformliquide() {
            document.getElementById("formliquide").style.display = "none";
        }
        
        
        // Fermer les formulaires en cliquant en dehors
        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("form")) {
                event.target.style.display = "none";
            }
            
        
        function ouvrirForm(form) {
            document.body.classList.add("body-flottant");
            form.classList.add("ouvert");
        }
        
        function fermerForm(form) {
            document.body.classList.remove("body-flottant");
            form.classList.remove("ouvert");
        }
        
        
        });
      
    </script>



    
</body>
</html>
        


