(function( $ ) {
	jQuery(document).on("click", "#pdfcatcher", function(){
		var pdf = wp.media({
			title: "upload pdf",
			library: {type: 'application/pdf'},
			multiple: true
		}).open();
		 
	});

	

	var ajaxurl = bitwiseadmin.ajaxurl;
	// jQuery("#form-add-to-pdf-manager").validate({
	// 	submitHandler: function(){
	// 		var postdata = jQuery("#form-add-to-pdf-manager").serialize();
	// 		postdata += "&action=admin_ajax_request&param=create_new_request";
	// 		jQuery.post(ajaxurl, postdata, function(response){
	// 		console.log(response);
	// 	});
	// 	}
	// });
	
	jQuery(document).on("click", "#btn-submit-ajax", function(){
		var postdata = "action=admin_ajax_request&param=ajax_request";
		jQuery.post(ajaxurl, postdata, function(response){
			console.log(response);
		});
	});





})( jQuery );
