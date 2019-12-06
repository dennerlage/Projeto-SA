window.onload = function() {
visor = document.getElementById("reloj"); //localizar pantalla del reloj
//asociar eventos a botones: al pulsar el botón se activa su función.

document.cron.comecar.onclick = empezar;
document.cron.para.onclick = parar;
document.cron.continua.onclick = continuar;
document.cron.reinicia.onclick = reiniciar;
document.cron.proximo.onclick = capturar;

getTomadaTempo(1);
getElementos(1);

}


//variables de inicio:
var marcha=0; //control del temporizador
var cro=0; //estado inicial del cronómetro.
//cronometro en marcha. Empezar en 0:
function empezar() {
         if (marcha==0) { //solo si el cronómetro esta parado
            emp=new Date() //fecha actual
            elcrono=setInterval(tiempo,10); //función del temporizador.
            marcha=1 //indicamos que se ha puesto en marcha.
            }
         }
function tiempo() { //función del temporizador
         actual=new Date() //fecha en el instante
         cro=actual-emp //tiempo transcurrido en milisegundos
         cr=new Date() //fecha donde guardamos el tiempo transcurrido
         cr.setTime(cro) 
         cs=cr.getMilliseconds() //milisegundos del cronómetro
         cs=cs/10; //paso a centésimas de segundo.
         cs=Math.round(cs)
         sg=cr.getSeconds(); //segundos del cronómetro
         mn=cr.getMinutes(); //minutos del cronómetro
         ho=cr.getHours()-1; //horas del cronómetro
         if (cs<10) {cs="0"+cs;}  //poner siempre 2 cifras en los números
         if (sg<10) {sg="0"+sg;} 
         if (mn<10) {mn="0"+mn;} 
         visor.innerHTML= mn+" : "+sg+" : "+cs; //pasar a pantalla.
         }
//parar el cronómetro
function parar() { 
         if (marcha==1) { //sólo si está en funcionamiento
            clearInterval(elcrono); //parar el crono
            marcha=0; //indicar que está parado.
            }		
         }		 
//Continuar una cuenta empezada y parada.
function continuar() {
         if (marcha==0) { //sólo si el crono está parado
            emp2=new Date(); //fecha actual
            emp2=emp2.getTime(); //pasar a tiempo Unix
            emp3=emp2-cro; //restar tiempo anterior
            emp=new Date(); //nueva fecha inicial para pasar al temporizador 
            emp.setTime(emp3); //datos para nueva fecha inicial.
            elcrono=setInterval(tiempo,10); //activar temporizador
            marcha=1;
            }		
         }
//Volver al estado inicial
function reiniciar() {
         if (marcha==1) { //si el cronómetro está en marcha:
            clearInterval(elcrono); //parar el crono
            marcha=0;	//indicar que está parado
         }
         cro=0; //tiempo transcurrido a cero
         visor.innerHTML = "00 : 00 : 00"; //visor a cero
}
var contador = 0
var contadorElemento = 0;
function capturar() {
    
    if (contadorElemento == elementos.length)
    {
        contadorElemento = 0;
    }
    parar();
    tempoCapturado = $('#reloj').html();
    contador ++;
    reiniciar();
    empezar(); 
    
    elemento = elementos[contadorElemento];
    linha = "<tr>\n\
            <td>"+contador+"</td>\n\
            <td>"+elemento.EleNom+"</td>\n\
            <td>"+tempoCapturado+"</td>\n\
            </tr>";
    $('#corpoTabela').append(linha);
    
    console.log("Cronometro " + contador + " tempo: " + tempoCapturado);
    registrarTempo(contador, tomadaTempo.TomCod, elemento.EleCod, tempoCapturado)
    contadorElemento++;
    
    console.log('Cronômetro ' + contador + " : " + tempoCapturado);
    
    // para cronometro
    if(contador >= (elementos.length * tomadaTempo.TomNumLei )){
        parar();
        $('#proximo').attr('disabled','true');
    }

}

function registrarTempo(NumLeitura, CodTomada, CodElemento, Tempo){
    $.ajax({
    method: 'get',
            url: 'cronometragem/guardar',
            data: 'TomNumLei=' + NumLeitura + '&TomCod=' + CodTomada + '&TomEle=' + CodElemento + '&CroTem=' + Tempo,
            dataType: 'json',
            success: function (data){
                console.log('Número da Leitura: ' + NumLeitura)
            },
            error: function (argument){
            alert('Erro!');
            }
    });
    
}


var tomadaTempo = null;
function getTomadaTempo(codTomadaTempo){
    $.ajax({
    method: 'get',
            url: 'cronometragem/get-tomada-tempo',
            data: 'cod='+codTomadaTempo,
            dataType: 'json',
            success: function (data){
                tomadaTempo = data;
            },
            error: function (argument){
            alert('Falha ao Obter Dados!');
            }
    });
}

var elementos = [];
function getElementos(codOperacao){
    $.ajax({
    method: 'get',
            url: 'cronometragem/get-elementos',
            data: 'cod='+codOperacao,
            dataType: 'json',
            success: function (data){
                elementos = data;
            },
            error: function (argument){
            alert('Falha ao Obter Dados!');
            }
    });
}
