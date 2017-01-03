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
        	$('#dose_id').val();
        });
    });
</script>