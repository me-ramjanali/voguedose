<script>
    $(document).ready(function() {
        $(document).on('click', 'a.assign', function(){
        	order_id = $(this).data("order_id");
        	$('#dose_id').val(order_id);
        });
        $(document).on('click', '.team-person', function(){
        	$('.team-block').find('.team-person').each(function(){
        		if( $(this).hasClass("selected") )
        			$(this).removeClass('selected')
        	});
        	$(this).addClass('selected');
        });
        $(document).on('click', '#styler_modal_close', function(){
        	$('.team-block').find('.team-person').each(function(){
        		if( $(this).hasClass("selected") )
        			$(this).removeClass('selected')
        	});
        	$('#dose_id').val('');
        });
        $(document).on('click', '#assign_to_styler', function(){
        	$('.team-block').find('.team-person').each(function(){
        		if( $(this).hasClass("selected") ){
        			styler_id = $('.team-block').find('.selected').find('#styler_id').val();
		        	order_id = $('#dose_id').val();
		        	$.ajaxSetup({
			            headers:
			            {
			                'X-CSRF-Token': "{{ csrf_token() }}"
			            }
			        });

			        $.ajax({
				        type:"POST",
		    			dataType : 'json',
				        url: "{{ URL::to('admin/assign_dose') }}",
				        data: {styler_id: styler_id, order_id: order_id},
				        success: function () {
				        	alert('Dose successfuly assigned to styler you\'ve selected!');
				        	location.reload();
				        }
			      	});
        		}else{
        			alert('Please select a Styler');
        		}
        	});
        	
        });
    });
</script>