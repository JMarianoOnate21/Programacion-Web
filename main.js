

/*menu pegajoso*/
$(document).ready(function(){

    var altura = $('.nav-main').offset().top;
    
    $(window).on('scroll',function(){
        if ($(window).scrollTop() > altura){
            $('.nav-main').addClass('menu-fixed');
        }else{
            $('.nav-main').removeClass('menu-fixed');
        }
    });


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

       };
       $( "input[type=checkbox]" ).on( "click", checked );

    //function idioma(){
    //    console.log(check.Checked);

    /* https://www.youtube.com/watch?v=0xYoGZtCq0I*/
    //}
    //check.addEventListener('click',idioma);

   /*
    var bottom = $(window).height() - $('.nav-main').height();

	$(window).on('scroll',function(){
        if ($(window).scrollTop() > bottom){
            $('.banner-one').addClass('active');
        }else{
            $('.nav-main').removeClass('menu-fixed');
        }
    });
    */


});





