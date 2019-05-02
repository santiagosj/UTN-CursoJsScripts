// JavaScript Document

jQuery.fn.slider = function(opciones) {
//opciones por default
var configuracion = {
efecto:['fadeIn'],
velocidadEfecto: 1000,
pausaEfecto: 3000
}

jQuery.extend(configuracion, opciones);


this.each(function(){
$('#imagenes div:gt(0)').hide();

setInterval(function(){
$('#imagenes div:first-child').fadeOut(0)
.next('div')[configuracion.efecto](configuracion.velocidadEfecto)
.end().appendTo('#imagenes');} ,configuracion.pausaEfecto);
});

return this;
};

//opcion con condicional 

/*jQuery.fn.slider = function(efecto, velocidadEfecto, pausaEfecto) {
  //opciones por default
 var configuracion = {
   efecto:['fadeIn'],
   velocidadEfecto: 1000,
   pausaEfecto: 3000
 }

 jQuery.extend(configuracion, efecto );

    if ((efecto== '')||(velocidadEfecto== '')||(pausaEfecto=='' )) {

     this.each(function(){
     $('#imagenes div:gt(0)').hide();

     setInterval(function(){
     $('#imagenes div:first-child').fadeOut(0)
       .next('div').fadeIn(1000)
       .end().appendTo('#imagenes');} , 3000);
  });
} else {
     this.each(function(){
     $('#imagenes div:gt(0)').hide();

     setInterval(function(){
     $('#imagenes div:first-child').fadeOut(0)
     .next('div')[configuracion.efecto](configuracion.velocidadEfecto)
     .end().appendTo('#imagenes');} ,configuracion.pausaEfecto);
 });
}

	return this;
};


Como funciona:

$('#slider div:gt(0)').hide();
Con gt(x) seleccionamos todos los div a partir del número x. En este caso 0 es el primero, así que lo que hacemos con esta línea es esconder
(hide) todas las cajas excepto la primera, que será la imagen inicialmente visible.

setInterval(function(){ [lo que haremos] }, 3000);
Necesitamos reiterar una serie de cosas cada cierto tiempo y eso lo hacemos con setInterval, indicando el tiempo de retardo entre cada serie.

$('#slider div:first-child').fadeOut(0)
Dentro de cada uno de esos intervalos hacemos desaparecer (fadeOut) la primera caja (div:first-child) que haya en la relación de imágenes...

.next('div').fadeIn(1000)
... y hacemos que la siguiente caja (next) aparezca poco a poco (fadeIn).

.end().appendTo('#slider');
Por último tomamos la que hasta ese momento es la primera imagen y la situamos al final (appendTo) de la "lista".

end() resetea el contador de elementos que hicimos avanzar con next(). De esa manera, el primer hijo que antes hicimos desaparecer es el que
enviamos al final de la pila y no la imagen que ahora tenemos visible. Para el siguiente ciclo la que hasta este momento era visible
(que era la segunda) será la primera y por tanto la que haremos desaparecer.

Referencias sobre las funciones usadas:

    :gt()
    .hide()
    setInterval()
    :first-child
    .fadeOut()
    .fadeIn()
    .end()
    .appendTo()

*/
