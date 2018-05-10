<script>
    function printContent(element)
    {
        $('#tittle').show();
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(element).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
        $('#tittle').hide();
    }
</script>