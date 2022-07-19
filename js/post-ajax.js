jQuery(function($){
	$('#ajax_loadmore_resources').on('click', function(event) {
		event.preventDefault();
		var maxPages = $(this).data('max-pages');
		var postType = $(this).data('post-type');
		var taxonomy = $(this).data('taxonomy');
		var taxonomyTerm = $(this).data('tax-term');
		var postPerPage = $(this).data('per-page');
		var orderSort = $(this).data('sort');
		var currentPage = $(this).data('current-page');


		$.ajax({
			url : ajax_loadmore_resources.ajaxurl, // AJAX handler
			data : {
				'action': 'loadmoreresources', // the parameter for admin-ajax.php
				'page' : ajax_loadmore_resources.current_page, // current page
				'post-type' : postType, 
				'taxonomy' : taxonomy,
				'tax-term-id' : taxonomyTerm, 
				'post-per-page' : postPerPage, 
				'sort' : orderSort, 
				'current-page' : currentPage, 
			},
			type : 'POST',
			beforeSend : function ( xhr ) {
				$('#ajax_loadmore_resources').find('.secondary-btn__text').text('Loading...'); // some type of preloader
			},
			success : function( posts ){
				if( posts ) {
					$('#ajax_loadmore_resources').find('.secondary-btn__text').text( 'Load More' );
					$('#ajax_posts_wrap').append( posts ); // insert new posts

					var newPagePosition = currentPage + 1;

					$('#ajax_loadmore_resources').data('current-page', newPagePosition );

					// lazy load
					// $('.resources-list img').each(function(){
					// 	var _lazy = $(this).attr('data-src');
					// 	$(this).attr('src', _lazy).addClass('loaded'); 
					// })

					ajax_loadmore_resources.current_page++; 
 
					if ( ajax_loadmore_resources.current_page >= maxPages ) 
						$('#ajax_loadmore_resources').hide(); // if last page, HIDE the button
 

				} else {
					console.log('nothing to load');
					$('#ajax_loadmore_resources').hide(); // if no data, HIDE the button as well
				}
			}
		});
	});


	// OLNY one checkbox filter can be active
	$(".category-checkbox").click(function() {
		if ($( this ).is( ":checked" )) {
			$(".category-checkbox").prop("checked", false);
			$(this).prop("checked", true);
		} 
	});

	

	$('#filter').on('change', '.form-element', function(event) {
		var filter = $('#filter');
		var sortOrder = $('.date-order-select').val();
		var categoryNameArr = [];

		

		var taxName = $(this).data('tax-name');
		var taxId = $(this).data('tax-id');


		
		$('.category-checkbox:checked').each(function(index, el) {
			categoryNameArr.push($(this).val());
		});
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			dataType : 'json',
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				// filter.find('button').text('Filtering...'); // changing the button label
				$('.work-list').addClass('filtering');

			},
			success:function(data){
				// console.log(data);
				// when filter applied:
				// set the current page to 1
				ajax_loadmore_params.current_page = 1;
				ajax_loadmore_resources.current_page = 1;

				// set the new query parameters
				ajax_loadmore_params.posts = data.posts;

				// set the new max page parameter
				ajax_loadmore_params.max_page = data.max_page;


				$('#ajax_posts_wrap').html(data.content); // insert data
				// $('#ajax_loadmore_resources').data('sort', sortOrder);
				$('#ajax_loadmore_resources').attr('data-current-page', ajax_loadmore_params.current_page);
				$('#ajax_loadmore_resources').attr('data-max-pages', ajax_loadmore_params.max_page);
				$('#ajax_loadmore_resources').attr('data-taxonomy', taxName);
				$('#ajax_loadmore_resources').attr('data-tax-term', '['+taxId+']');
				// $('#ajax_loadmore_resources').addClass(taxName);
				$('#ajax_loadmore_resources').attr('data-tax-term', categoryNameArr);

				$('#ajax_loadmore_resources').find('.secondary-btn__text').text( 'Load More' );

				$('.work-list').removeClass('filtering');

				// hide load more button, if there are not enough posts for the second page
				if ( data.max_page < 2 ) {
					$('#ajax_loadmore_resources').hide();
				} else {
					$('#ajax_loadmore_resources').show();
				}
			}
		});

		return false;
	});



});