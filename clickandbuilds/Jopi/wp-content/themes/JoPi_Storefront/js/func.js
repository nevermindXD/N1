// JavaScript 

document.addEventListener('DOMContentLoaded',function(){
	'use strict';
	var menuBM = bodymovin.loadAnimation({
		container: document.getElementById('menu_btn'), 
		renderer: 'svg', 
		loop:false, 
		autoplay:false, 
		path:'https://jopi.com.mx/json/menu_btn.json'
	});
	
	var flag = false; 
		jQuery('#menu_btn').on('click',function(){
			if (!flag){
				menuBM.setDirection(1);
				menuBM.play();
				menuBM.onComplete = function(){
					menuBM.goToAndStop(24,true);  
				};
				flag = true; 
			} else {
				menuBM.setDirection(-1);
				menuBM.play();
				menuBM.onComplete = function(){
					menuBM.goToAndStop(0,true);  
				};
				flag = false;
			}
			 
			
		});
}); 