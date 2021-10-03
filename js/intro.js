$(function(){
	'use strict';	
	// инициализация плагина
	$.jqCart({
			buttons: '.add_item',
			handler: './php/handler.php',
			cartLabel: '.cart',
			visibleLabel: true,
			openByAdding: false,
			currency: '&euro;'
	});	
	// Пример с дополнительными методами
	$('#open').click(function(){
		$.jqCart('openCart'); // открыть корзину
	});
	$('#clear').click(function(){
		$.jqCart('clearCart'); // очистить корзину
	});	
});
