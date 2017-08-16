/**=====================================
INICIO       
======================================**/

//Identificando Item del menú de la carta al que se le dio click para posteriormente cargar los platos de la DB

$("#inicio").children("ul").children("li").children("a").click(function(){

	a = $(this).parent().attr("id");
	console.log("esto es", a);

});
