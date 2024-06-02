<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="stem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="codigo.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="p.png">STEM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Un cañón dispara un proyectil de 2000 g de masa que por su
            boca van a una velocidad de 432 km/h. Considerando que la
            fuerza expansiva mantiene un valor constante mientras la bala
            recorre el cañón y tarda 0,06 segundos en salir</h2>
        <p>Calcula:</p>
        <p>a) Aceleración en el interior del cañón.<br>
        <p>b) Fuerza media en el interior<br>
        <p>c) Impulso que sufre la bala en el interior.<br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="canon.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        a) La bala acelera a = ∆v / t<br>
b) Se trata de un impulso de los gases sobre una masa.<br>
Aplicamos la definición de impulso: F*t = m*∆v<br>
c) Impulso = F*t <br>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        Masa bala=Mb =2000g  1 kg/1000g = 2 kg<br>
        Velocidad bala =Vb = 432 km/h  1000 m/ 1km 1h/3600 s<br>
        Vb=432 /3,6 = 120 m/s <br>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a) a = (120-0) 0,06 = 2.000 m/s2
            (aceleración enorme)
 <br>
 b) F*0,06 = 2*(120-0) ; despejar F.
 <br>
 c) Impulso = 4.000*0.06</p>
        <button onclick="calcula();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <div id="resultadoB"></div>
        <div id="resultadoC"></div>
      </section>
    </section>
    <footer class="pie">
     Bahena Roman Gaddiel Emmanuel
    </footer>
  </section>
</body>
</html>
