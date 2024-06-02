function calcula(){
    var incisoA= (120-0)/0.06;
    var incisoB= 2*(120-0)/0.06;
    var incisoC= 4000*0.06;
    var da=document.getElementById("resultadoA");
    da.innerHTML='aceleracion: ' + incisoA + 'm/s^2';
    var db=document.getElementById("resultadoB");
    db.innerHTML='fuerza: ' + incisoB + 'N';
    var dc=document.getElementById("resultadoC");
    dc.innerHTML='impulso: ' + incisoC + 'Nm';   
    }

