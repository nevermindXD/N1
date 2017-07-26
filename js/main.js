$(document).ready(function(){
	'use strict'; 
	
	
	
	
	//scrollReveal inicializar 
	scrollReveal ('.m-fip','fadeInUp'); 
	scrollReveal ('.m-fir','fadeInRight'); 
	scrollReveal ('.m-fil','fadeInLeft'); 
	
	//scrollto 
	document.getElementById('scroll_rcv').addEventListener('click', function(e){
		e.preventDefault();	document.querySelector('.a_caracteristicas').scrollIntoView({behavior:'smooth'}); 
		
	}); 
	document.getElementById('scroll_vntj').addEventListener('click', function(e){
		e.preventDefault();	document.querySelector('.a_ventajas').scrollIntoView({behavior:'smooth'}); 
		
	}); 
	document.getElementById('scroll_sbq').addEventListener('click', function(e){
		e.preventDefault();	document.querySelector('.a_datos').scrollIntoView({behavior:'smooth'}); 
		
	}); 
	document.getElementById('scroll').addEventListener('click', function(e){
		e.preventDefault();	document.querySelector('.a_presentacion').scrollIntoView({behavior:'smooth'}); 
		
	}); 
		
	
	//cotizador 
	
	var listado = {};
	
	$('.btn_cotizador').click(function(e){
		e.preventDefault(); 
		$('.forma-cotizar').addClass('inplace'); 
		$('.seccion,.hero').addClass('blurred'); 
		var result = ''; 
		
		
		$.ajax({
			dataType:'json',
			url:'http://demo.jopi.com.mx/json/lista_equipos.json', 
			error:function(){
				$('#marcas_select').html('<option>'+'Hubo un error, inténtalo otra vez'+'</option>');
			}
		}).done(function(data){
			setTimeout(function(){$('[name="cargando_marcas"]').remove();},1500); 
			
			listado = JSON.parse(JSON.stringify(data));
			$.each(data,function(i,o){
			
			if (o.MARCA !== result || result==='')	{
				$('#marcas_select').append(
				'<option value=' +
				o.MARCA + 
				'>'	+ 
				o.MARCA +
				'</option>'
				);
				result = o.MARCA; 
			}
			
			});
		}).always(function(){
		 
	}); 
	}); 
	
	//marcas y equipos 
	//cargar modelos
	var valor;
	$('#marcas_select').change(function(){
		 valor = $(this).val(); 
		$('#modelos_select').html('');
		$.each(listado, function(i,o){
				if (o.MARCA.replace(/\s/g,'') === valor ){
					
					$('#modelos_select').append(
					'<option value=' +
					o.MODELO + 
					'>'	+ 
					o.MODELO +
					'</option>'
					);
				}	else {
					console.log('"'+o.MARCA+'"' +'/'+"'"+valor+"'"); 
				}	
		}); 
		
	});
	
	$('.forma-cotizar .close').click(function(){
		$('.forma-cotizar').removeClass('inplace'); 
		$('.seccion,.hero').removeClass('blurred'); 
	}); 
	
	
	//Validar nombre 
	
	$('input[name="forma_index_nombre"]').blur(function(){
		var nom = $(this).val(); 
		$('#nombre_index').text(nom + ', Gracias por considerar Jopi'); 
	});
	
	
	//envio ajax
	
	
	
	
	
	//overlay 
	$('.qnSms').click(function(e){
		e.preventDefault(); 
		$('.overlay-content').addClass('inplace'); 
		$('.seccion,.hero').addClass('blurred'); 
		$.ajax({
			dataType:'json', 
			url:'http://apptest.jopi.com.mx/wp-json/wp/v2/pages/4/'
		}).done(function(data){
			$('.content-header').html(data.title.rendered);
			$('.content-body').html(data.content.rendered); 
		}); 
	}); 
	
	$('.overlay-content .close').click(function(){
		$('.overlay-content').removeClass('inplace'); 
		$('.seccion,.hero').removeClass('blurred'); 
	}); 
	
	//overlay FAQ
		$('#faq').click(function(e){
		e.preventDefault(); 
		$('.overlay-content').addClass('inplace'); 
		$('.seccion,.hero').addClass('blurred'); 
		$.ajax({
			dataType:'json', 
			url:'http://app.jopi.com.mx/wp-json/wp/v2/pages/20/'
		}).done(function(data){
			$('.content-header').html(data.title.rendered);
			$('.content-body').html(data.content.rendered); 
		}); 
	}); 
	
	$('.overlay-content .close').click(function(){
		$('.overlay-content').removeClass('inplace'); 
		$('.seccion,.hero').removeClass('blurred'); 
	}); 
	
	
	//overlay video
	$('.video_pres').click(function(e){
		e.preventDefault(); 
		$('.content-video').addClass('inplace'); 
		$('.seccion,.hero').addClass('blurred'); document.querySelector('#vid_main').scrollIntoView({behavior:'smooth'}); 
		var v = document.getElementById('vid_main'); 	
		v.src = 'video/anim_logo_jopi.mp4'; 
		v.oncanplaythrough = function() {
			setTimeout(function(){
				v.play(); 
			},500); 
		}; 
		
	}); 
	
	$('.content.video .close').click(function(){
		$('.content-video').removeClass('inplace'); 
		$('.seccion,.hero').removeClass('blurred'); 
	}); 
	

	
	
	
	
	
	
	
	//chart.js
	
	
	//Cambiar el delay de la animación 
	Chart.defaults.global.plugins.deferred = {
		xOffset: 200,
		yOffset: 0,
		delay: 4000
	} ;
	
	Chart.defaults.global.animation.duration = 2000; 
	
	//Gráfica celulares protegidos
	var ctx = document.getElementById("Chart_cel_asegurados").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["% Celulares asegurados","% Celulares desprotegidos"],
        datasets: [{
            label: 'Celulares protegidos en México',
            data: [5,95],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});
	
	
	

	
	//gráfica robos en méxico diarios
	
	
	var ctx2 = document.getElementById("Chart_cel_robo").getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ["Robos de celular diarios en México"],
        datasets: [{
            label: 'celulares robados',
            data: [1670],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
			
               
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
	
	
	
var ctx3 = document.getElementById("Chart_asalto").getContext('2d');
var myChart3 = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ["Asaltos por hora en México"],
        datasets: [{
            label: 'Asaltos por hora',
            data: [30],
            backgroundColor: [
              
                'rgba(75, 192, 192, 0.2)'
               
            ],
            borderColor: [                
                'rgba(75, 192, 192, 1)'
               
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

	
	
	
	
}); 



