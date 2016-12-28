<!-- GoogleApi jQuery -->
    <!-- Include all at once -->
    <script type="text/javascript" src="{{ URL::asset('js/includeAll.js') }}"></script>
    <!-- Page Level JS -->
    <script type="text/javascript" src="{{ URL::asset('assets/DataTables-1.10.12/media/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/DataTables-1.10.12/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/buttonselect.js') }}"></script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            var dTable = $('.queue-table');
            dTable.DataTable({
                'order': [ 0, 'desc'],
                'aoColumns': [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    {'bSortable': true}
                ]
            });
        });
    </script>
</body>
</html>