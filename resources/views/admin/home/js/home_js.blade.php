<script>
    $(document).ready(function() {
        $('a#accept').on('click', function(){
            if (confirm('Are you sure want to accept?')) {
                return true;
            } else {
                return false;
            }
        });
        $('a#reject').on('click', function(){
            if (confirm('Are you sure want to decline?')) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>