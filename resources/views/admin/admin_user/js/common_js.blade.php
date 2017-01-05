<script>
	$(function() {
		$(document).on('click', '.delete_user', function(){
			if (confirm('Are you sure want to delete?')) {
                return true;
            } else {
                return false;
            }
		});
	});
</script>