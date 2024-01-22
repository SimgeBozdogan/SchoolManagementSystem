<!-- CSS Kütüphaneleri -->
<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="assets/js/select2/select2.css">

<!-- JS Kütüphaneleri -->
<!-- GSAP (GreenSock Animation Platform) -->
<script src="assets/js/gsap/main-gsap.js"></script>

<!-- jQuery UI -->
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.js"></script>

<!-- Joinable -->
<script src="assets/js/joinable.js"></script>

<!-- Resizeable -->
<script src="assets/js/resizeable.js"></script>

<!-- Neon API -->
<script src="assets/js/neon-api.js"></script>

<!-- Toastr -->
<script src="assets/js/toastr.js"></script>

<!-- jQuery Validation -->
<script src="assets/js/jquery.validate.min.js"></script>

<!-- FullCalendar -->
<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>

<!-- Bootstrap Datepicker -->
<script src="assets/js/bootstrap-datepicker.js"></script>

<!-- FileInput -->
<script src="assets/js/fileinput.js"></script>

<!-- DataTables -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/datatables/TableTools.min.js"></script>
<script src="assets/js/dataTables.bootstrap.js"></script>
<script src="assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
<script src="assets/js/datatables/lodash.min.js"></script>
<script src="assets/js/datatables/responsive/js/datatables.responsive.js"></script>

<!-- Select2 -->
<script src="assets/js/select2/select2.min.js"></script>

<!-- Neon Calendar -->
<script src="assets/js/neon-calendar.js"></script>

<!-- Neon Chat -->
<script src="assets/js/neon-chat.js"></script>

<!-- Neon Custom -->
<script src="assets/js/neon-custom.js"></script>

<!-- Neon Demo -->
<script src="assets/js/neon-demo.js"></script>

<!-- Toastr Bildirim Gösterme -->
<?php if ($this->session->flashdata('flash_message') != ""):?>
    <script type="text/javascript">
        toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
    </script>
<?php endif;?>

<!----- DATA TABLE EXPORT CONFIGURATIONS ----->
<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();
        
        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });
    });
</script>
