<script>
    $(document).ready(function() {
        $('a#assign').on('click', function(){
            if (confirm('Are you sure want to assign?')) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>