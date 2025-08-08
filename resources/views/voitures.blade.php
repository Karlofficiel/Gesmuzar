<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="{{ asset('css/voitures.css') }}" >
</head>
<body>
     <section class="product" id="product">
     <p style="font-size:60px;color:white !important;font-family:gabriola;" class="p">Toutes  les marques de voiture disponibles </p>
    <div class="box-container" >
    
       <nav >
       <div class="box">
            <span class="discount">-10%</span>
            <img src="{{ asset('img\nissan\Rivering g.jpg') }}" width="500" height="70" alt="">
            <h3 id="marque" >NISSAN</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="/nissan" class="btn" onclick="enregistrement()">Voir Plus</a>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <img src="{{ asset('img\hundai\hyundai-lantra-2000-c.jpg') }}"  width="300" height="70" alt="">
            <h3>HYUNDAI</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
     
            <a href="/hyndai" class="btn">Voir Plus</a>
        </div>

        <div class="box"> 
            <span class="discount">-10%</span>
            <img src="{{ asset('img/mercedes/GLC.jpg') }}" alt="">
            <h3>MERCEDES</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
           
            </div>
      
            <a href="/mercedes" class="btn">Voir Plus</a>
        </div>
       </nav>

     <nav>
     <div class="box">
            <span class="discount">-30%</span>
            <img src="{{ asset('img/toyota/Toyota-Yaris-2020-Large.webp') }}" alt="">
            <h3>TOYOTA</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="/toyota" class="btn">Voir Plus</a>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <img src="{{ asset('img/suziki/suziki swift.png') }}" width="300"  alt="">
            <h3>SUZUKI</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
       
            <a href="/suzuki" class="btn">Voir Plus</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
            <img src="{{ asset('img/peugeot/65f08f1497545591640b870b_Peugeot 3008 1.webp') }}" alt="">
            <h3>PEUGEOT</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="/peugeot" class="btn">Voir Plus</a>
        </div>
     </nav>

</section>

    
</body>
</html>