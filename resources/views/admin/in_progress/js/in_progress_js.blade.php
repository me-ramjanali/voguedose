<script>
    $(document).ready(function() {
        $('a#complete').on('click', function(){
            if (confirm('Are you sure want to Complete?')) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>