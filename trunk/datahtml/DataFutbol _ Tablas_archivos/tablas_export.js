$(document).ready(function() {
	
	$('.tabs-posiciones.tabs-tablas .tab-tabla').click(function(){
		if (!$(this).hasClass('selected')) {
			var id_pieces = $(this).attr('id').split('-');
			var id_tab = id_pieces[2];
			$('.posiciones.list').hide();
			$('#tabla-posiciones-'+id_tab).show();
			$('.tabs-posiciones.tabs-tablas .tab-tabla').removeClass('selected');
			$(this).addClass('selected');
		}
	});
	
	$('.tabs-fixture.tabs-tablas .tab-tabla').click(function(){
		if (!$(this).hasClass('selected')) {
			var id_pieces = $(this).attr('id').split('-');
			var id_tab = id_pieces[2];
			$('.fixture.list').hide();
			$('#tabla-fixture-'+id_tab).show();
			$('.tabs-fixture.tabs-tablas .tab-tabla').removeClass('selected');
			$(this).addClass('selected');
		}
	});
	
	$('.fecha-selector').click(function(){
		if (!$(this).hasClass('selected')) {
			var id_pieces = $(this).attr('id').split('-');
			var id_fecha = id_pieces[2];
			var list = $(this).closest('.list');
			$(list).find('.fecha').hide();
			$(list).find('#fecha-'+id_fecha).show();
			$(list).find('.fecha-selector').removeClass('selected');
			$(this).addClass('selected');
		}
	});
	
	$('.section-tabs .item').click(function(){
		if (!$(this).hasClass('selected')) {
			var id_pieces = $(this).attr('id').split('-');
			var name = id_pieces[1];
			$('.section').slideUp();
			$('.'+name+'-wrapper').slideDown();
			$('.section-tabs .item').removeClass('selected');
			$(this).addClass('selected');
		}
	});
	
	$('.tabs-tablas .tab-fairplay').click(function(){
		if (!$(this).hasClass('selected')) {
			var id_pieces = $(this).attr('id').split('-');
			var id_tab = id_pieces[2];
			$('.fairplay.list').hide();
			$('#tabla-fairplay-'+id_tab).show();
			$('.tabs-tablas .tab-fairplay').removeClass('selected');
			$(this).addClass('selected');
		}
	});
	
	$('.view-more.closed').live('click',function(){
		$('.view-more').removeClass('open');
		$('.view-more').addClass('closed');
		$('.more').slideUp();
		$(this).removeClass('closed');
		$(this).addClass('open');
		$(this).closest('.item').find('.more').slideDown();
	});
	$('.view-more.open').live('click',function(){
		$('.more').slideUp();
		$(this).removeClass('open');
		$(this).addClass('closed');
	});
    
});
