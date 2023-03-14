<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );

    ClassicEditor.create( document.querySelector('#body')).catch( error => {console.error( error );});

    setTimeout(() => {
        $('#error-message').hide();

        $('#n-success-message').hide();

        $('#d-success-message').hide()
        
    }, 5000)



</script>
</body>
</html>

<?php
if(isset($_SESSION['errors'])){
    unset($_SESSION['errors']);
}

if(isset($_SESSION['normalSuccess'])){
    unset($_SESSION['normalSuccess']);
}

if(isset($_SESSION['darkSuccess'])){
    unset($_SESSION['darkSuccess']);
}
?>