<script>
	function suggest(inputString, counter, input){
		if(inputString.length == 0) {
			$('#suggestions_'+counter).fadeOut();
		} else {
			input.addClass('load');
			$.post("{{ url('styler/get_dose_no') }}", {'queryString': JSON.stringify(inputString), 'counter': counter, '_token': "{{ csrf_token() }}"}, function(data){
				if(data.length >0) {
					$('#suggestions_'+counter).fadeIn();
					$('#suggestionsList_'+counter).html(data);
					input.removeClass('load');
				}
			});
		}
	}

	function fill(thisValue, counter) {
		$('input#'+counter).val(thisValue);
		$('.add_product').prop('disabled', false).text('Add');
		setTimeout("$('#suggestions_"+counter+"').fadeOut();", 200);
	}
	$(function() {
		$('.add_to_list').on('click', function(e){
			e.preventDefault();
			$('.add_product').prop('disabled', false);
			$('.auto_sug_input').val('');
			$(this).parent().next().removeClass('hide', function(){
				$(this).addClass('show');
			});
		});

		// rollback from edit mode
		$('.close_btn').on('click', function(){
			id = $(this).attr('id');
			$('#feedbackModal_'+id).find('span.order_no_input').removeClass('show').addClass('hide');
		});

		// for dose no autocomplete
		$('.auto_sug_input').on('keyup', function(){
			id = $(this).attr('id')
			suggest($(this).val(), id, $(this));
		});

		$('.add_product').on('click', function() {
			$(this).prop('disabled', true).text('Loading');
			id = $(this).attr('id');
			value = $('input#'+id).val();
			product_id = $('input#product_id_'+id).val();
			$.post("{{ url('styler/check_order_no') }}", {'order_no': JSON.stringify(value), '_token': "{{ csrf_token() }}"}, function(data){
				if(data == 1) {
					alert('Invalid dose ID!');
					$('.add_product').prop('disabled', false).text('Add');
					$('input#'+id).focus();
					return false;
				}else{
					$.post("{{ url('styler/add_to_list') }}", {'order_no': JSON.stringify(value), 'product_id': product_id, '_token': "{{ csrf_token() }}"}, function(data){
						if(data == 1) {
							alert('Product Added to list');
							location.reload();
						}else{
							alert('Something went wrong please reload the page and try again!');
							$('.add_product').prop('disabled', false).text('Add');
							return false;
						}
					});
				}
			});
		});
	});
</script>