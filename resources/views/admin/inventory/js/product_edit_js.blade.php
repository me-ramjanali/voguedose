<script>
	$(document).ready(function() {
		// changing view when click edit
		$('.edit_link').on('click', function(e){
			e.preventDefault();
			id = $(this).attr('id');
			$('#'+id).parent().next().find('span.text').removeClass('show').addClass('hide');
			$('#'+id).parent().next().find('span.edit_field').removeClass('hide').addClass('show');
			$('#'+id).parent().next().find('span.file_field').removeClass('hide').addClass('show');
			$('#'+id).closest('.modal-content').find('span.to_list_button').removeClass('show').addClass('hide');
			$('#'+id).closest('.modal-content').find('span.submit_button').removeClass('hide').addClass('show');
			$('#'+id).closest('.modal-content').find('span.order_no_input').removeClass('show').addClass('hide');
		});
		// rollback from edit mode
		$('.close_btn').on('click', function(){
			id = $(this).attr('id');
			$('#feedbackModal_'+id).find('span.text').removeClass('hide').addClass('show');
			$('#feedbackModal_'+id).find('span.edit_field').removeClass('show').addClass('hide');
			$('#feedbackModal_'+id).find('span.file_field').removeClass('show').addClass('hide');
			$('#feedbackModal_'+id).find('span.to_list_button').removeClass('hide').addClass('show');
			$('#feedbackModal_'+id).find('span.submit_button').removeClass('show').addClass('hide');
			$('#feedbackModal_'+id).find('span.order_no_input').removeClass('show').addClass('hide');
		});

		// update product
		$('.update_button').on('click', function(){
			id = $(this).attr('id');
			form = $('form#form_'+id);
			product_id = $('form#form_'+id).find('#product_id').val();
			// values 
			type = $('form#form_'+id).find('#type').val();
			if(type == ''){
				alert('Please input Type');
				$('form#form_'+id).find('#type').focus();
				return false;
			}
			color = $('form#form_'+id).find('#color').val();
			if(color == ''){
				alert('Please input Color');
				$('form#form_'+id).find('#color').focus();
				return false;
			}
			fit = $('form#form_'+id).find('#fit').val();
			if(fit == ''){
				alert('Please input Fit');
				$('form#form_'+id).find('#fit').focus();
				return false;
			}
			size = $('form#form_'+id).find('#size').val();
			if(size == ''){
				alert('Please input Size');
				$('form#form_'+id).find('#size').focus();
				return false;
			}
			price = $('form#form_'+id).find('#price').val();
			if(price == ''){
				alert('Please input Price');
				$('form#form_'+id).find('#price').focus();
				return false;
			}
			var formData = new FormData(form[0]);
			$.ajaxSetup({
	            headers:
	            {
	                'X-CSRF-Token': $('input[name="_token"]').val()
	            }
	        });
        	$.ajax({
		        type:"POST",
		        cache:false,
				contentType: false,
    			processData: false,
    			dataType : 'json',
		        url: "{!! URL::to('admin/update_product/"+product_id+"') !!}",
		        data: formData,
		        success: function () {
		        	alert("Product Update successfully.");
		        	$('#feedbackModal_'+id).modal().hide(function(){
		        		location.reload();
		        	});
		        }
	      	});
		});
	});
</script>