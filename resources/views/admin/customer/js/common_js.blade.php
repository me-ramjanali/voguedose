<script>
	$(function() {
		$(document).on('click', '.block', function(){
			if (confirm('Are you sure want to block?')) {
                return true;
            } else {
                return false;
            }
		});

		$(document).on('click', '.unblock', function(){
			if (confirm('Are you sure want to Unblock?')) {
                return true;
            } else {
                return false;
            }
		});
	});
</script>