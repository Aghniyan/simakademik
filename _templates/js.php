<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/js/ruang-admin.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/js/demo/chart-area-demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/vendor/select2/dist/js/select2.min.js"></script>

<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Bootstrap Datepicker -->
<script src="<?= base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
  $(document).ready(function() {
    // Select2 Single  with Placeholder
    $('.select2-single-placeholder').select2({
      placeholder: "Pilih Status Akreditasi",
      allowClear: true
    });

    // Bootstrap Date Picker
    $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });
  });
</script>