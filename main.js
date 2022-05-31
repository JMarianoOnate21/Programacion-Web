$(document).ready(function(){

	document.querySelector('.menu-btn').addEventListener('click',() => {
	    document.querySelector('.nav-menu').classList.toggle('show');
	});
	
	/*menu pegajoso*/
    var altura = $('.nav-main').offset().top;
    
    $(window).on('scroll',function(){
        if ($(window).scrollTop() > altura){
            $('.nav-main').addClass('menu-fixed');
        }else{
            $('.nav-main').removeClass('menu-fixed');
        }
    });


    /*programa*/
    $('ul.tabs li a:first').addClass('active');
	$('.secciones article').hide();
	$('.secciones article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});

	/*multi-idiomas */
    var check = document.querySelector(".check");


      var checked = function() {
            var n = $( "input:checked" );
            console.log (n.length);
            if (n.length == 1) {
            	window.location.replace("es/index.html");
            	console.log("baba");
            }else if (n.length == 0){
            	window.location.replace("../index.html");
            }

       };
       $( "input[type=checkbox]" ).on( "click", checked );

});

/* secciones

$(document).ready(function () {
	var bottom = $(window).height() - $('.nav-main').height();

	$(window).on('scroll',function(){
        if ($(window).scrollTop() > bottom){
            $('.banner-one').addClass('active');
        }else{
            $('.nav-main').removeClass('menu-fixed');
        }
    });
});
*/



/*consumiendo servicio web*/
fetch('http://localhost/congresos/php/datos.php')
	.then((respuesta)=>{
		return respuesta.json();
	}).then((respuesta)=> {
		console.log(respuesta["hey"].length);
		
		for (var i = 0; i <= respuesta["hey"].length - 1; i++) {
			document.getElementById('hora'+i).value = respuesta["hey"][i].Hora;
			document.getElementById('fecha'+i).value = respuesta["hey"][i].Fecha;
			document.getElementById('ponente'+i).value = respuesta["hey"][i].Ponente;
			document.getElementById('contacto'+i).value = respuesta["hey"][i].Contacto;
			document.getElementById('actividad'+i).value = respuesta["hey"][i].Actividad;
		}

		
	}).catch(err=>console.log(err));


ScrollReveal().reveal('.showcase',{delay:500});
ScrollReveal().reveal('.banner-one',{delay:500});
ScrollReveal().reveal('.topics',{delay:500});
ScrollReveal().reveal('.banner-two',{delay:500});



