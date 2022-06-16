<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SuperShoes | </title>

    <!-- iCheck -->
    <link href="<?=base_url()?>layouts/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?=base_url()?>layouts/backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?=base_url()?>layouts/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?=base_url()?>layouts/backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?=base_url()?>layouts/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>layouts/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>layouts/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url()?>layouts/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>layouts/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?=base_url()?>layouts/backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?=base_url()?>layouts/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?=base_url()?>layouts/backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?=base_url()?>layouts/backend/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?=base_url()?>layouts/backend/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?=base_url()?>layouts/backend/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?=base_url()?>layouts/backend/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?=base_url()?>layouts/backend/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?=base_url()?>layouts/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>layouts/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>layouts/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>layouts/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>layouts/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>layouts/backend/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

<?php
if (!empty($navbar->left)) {
	$this->load->view($navbar->left);
    // if($this->session->userdata('role') == 'ADMINISTRATOR'){
    //     $this->load->view($navbar->left);
    // }else if($this->session->userdata('role') == 'SALES MANAGER'){
    //     $this->load->view($navbar->left_smr);
    // }else if($this->session->userdata('role') == 'SALES'){
    //     $this->load->view($navbar->left_sls);
    // }else if($this->session->userdata('role') == 'PURCHASER'){
    //     $this->load->view($navbar->left_prc);
    // }
}
if (!empty($navbar->top)) {
        $this->load->view($navbar->top);
}?>
<?php
    $this->load->view($page, $data);
?>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SuperShoes - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url()?>layouts/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url()?>layouts/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>layouts/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url()?>layouts/backend/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url()?>layouts/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?=base_url()?>layouts/backend/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?=base_url()?>layouts/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url()?>layouts/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url()?>layouts/backend/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url()?>layouts/backend/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?=base_url()?>layouts/backend/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url()?>layouts/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?=base_url()?>layouts/backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- Select2 -->
    <script src="<?=base_url()?>layouts/backend/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>layouts/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url()?>layouts/backend/build/js/custom.min.js"></script>

    <!-- jquery.inputmask -->
    <script src="<?=base_url()?>layouts/backend/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url()?>layouts/backend/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Initialize datetimepicker -->
    <script>

        $('#myDatepicker2').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        
        function addMore() {
            var idf = document.getElementById("idf").value;
            var stre;
            stre="<p id='srow" + idf + "'><input id='CUSTOM_NAMA' name='CUSTOM_NAMA[]' type='text' /> <a href='#' style=\"color:#3399FD;\" onclick='deleteRow(\"#srow" + idf + "\"); return false;'>Hapus</a></p>";
            $("#divHobi").append(stre);
            idf = (idf-1) + 2;
            document.getElementById("idf").value = idf;
        }

		function addItem() {
			var countItem = document.getElementById("countItem").value;
			$("#panel-group").append(
				'<div class="col-md-6 col-xs-12" id="panel'+countItem+'"><div class="x_panel"><div class="x_title"><h2>Order Item <small></small></h2><ul class="nav navbar-right panel_toolbox"><li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li></ul><div class="clearfix"></div></div><div class="x_content"><div class="form-group col-md-12 col-xs-12"><label for="jenis_item">Jenis Item :</label><select class="select2_single form-control" tabindex="-1" id="jenis_item" name="jenis_item[]"><?php foreach($dat_item as $item){echo '<option value="'.$item->KD_ITEM.'">'.$item->JENIS_ITEM.'</option>';} ?></select></div><br/><div class="form-group col-md-12 col-xs-12"><label for="jenis_treatment">Jenis Treatment :</label><select class="select2_single form-control" tabindex="-1" id="jenis_treatment" name="jenis_treatment[]"><?php foreach($dat_treatment as $treatment){echo '<option value="'.$treatment->KD_TREATMENT.'">'.$treatment->JENIS_TREATMENT.'</option>';} ?></select></div><br/><div class="form-group col-md-12 col-xs-12"><label for="keterangan">Keterangan :</label><input  type="text" id="keterangan" name="keterangan[]" class="form-control" /></div></div><div class="col-sm-offset-5 col-md-6  col-xs-offset-4 col-xs-12"><input class="btn btn-danger" type="button" name="remove_item" value="Delete" onclick="deletePanel(\'#panel'+countItem+'\'); return false;" /></div></div></div>'
			)
			countItem = (countItem-1) + 2;
			document.getElementById("countItem").value = countItem;
		}

		function deletePanel(panelId) {
			$(panelId).remove();
		}

        function deleteRow(idf) {
            $(idf).remove();
        }

        function sum(){
            if (document.getElementById('jumlah') != null) {
                    var jumlah = parseInt(document.getElementById('jumlah').value) - 1;
            }
            var material_subtotal_pr = 0;
            var jasa_subtotal_pr = 0;
            var material_subtotal_sm = 0;
            var jasa_subtotal_sm = 0;
            for(i=1; i <= jumlah; i++){

                if (document.getElementById('material_sm'+i) != null) {
                    var material_sm = document.getElementById('material_sm'+i);
                }
                if (document.getElementById('material_pr'+i) != null) {
                    var material_pr = document.getElementById('material_pr'+i);
                }
                if (document.getElementById('jasa_sm'+i) != null) {
                    var jasa_sm = document.getElementById('jasa_sm'+i);
                }
                if (document.getElementById('jasa_pr'+i) != null) {
                    var jasa_pr = document.getElementById('jasa_pr'+i);
                }
                if (material_pr != null) {
                    material_subtotal_pr = material_subtotal_pr + parseInt(material_pr.value);   
                }
                if (material_sm != null) {
                    material_subtotal_sm = material_subtotal_sm + parseInt(material_sm.value);
                }
                if (jasa_pr != null) {
                    jasa_subtotal_pr = jasa_subtotal_pr + parseInt(jasa_pr.value);
                }
                if (jasa_sm != null) {
                    jasa_subtotal_sm = jasa_subtotal_sm + parseInt(jasa_sm.value);
                }
                
                
            }

            if(!isNaN(material_subtotal_sm) && document.getElementById('material_sm') != null){
                document.getElementById('material_sm').value=material_subtotal_sm;
            }
            if(!isNaN(material_subtotal_pr) && document.getElementById('material_pr') != null){
                document.getElementById('material_pr').value=material_subtotal_pr;
            }
            if(!isNaN(jasa_subtotal_sm) && document.getElementById('jasa_sm') != null){
                document.getElementById('jasa_sm').value=jasa_subtotal_sm;
            }
            if(!isNaN(jasa_subtotal_pr) && document.getElementById('jasa_pr') != null){
                document.getElementById('jasa_pr').value=jasa_subtotal_pr;
            }

            if (!isNaN(material_subtotal_sm) && !isNaN(jasa_subtotal_sm) && document.getElementById('total_sm') != null) {
                document.getElementById('total_sm').value=jasa_subtotal_sm + material_subtotal_sm;
                console.log(jasa_subtotal_sm);
            }
            if(!isNaN(material_subtotal_pr) && !isNaN(jasa_subtotal_pr) && document.getElementById('total_pr') != null){
                document.getElementById('total_pr').value=jasa_subtotal_pr + material_subtotal_pr;
                console.log(jasa_subtotal_pr);
            }
        }

        $(document).ready(function(){
            // if (document.getElementById('jumlah') != null) {
            //         var jumlah = parseInt(document.getElementById('jumlah').value) + 1;
            // }
            // var material_subtotal_sm = 0;
            // var jasa_subtotal_sm = 0;
            // for(i=1; i <= jumlah; i++){
            //     if (document.getElementById('material_sm'+i) != null) {
            //         var material_sm = document.getElementById('material_sm'+i);
            //     }
            //     if (document.getElementById('jasa_sm'+i) != null) {
            //         var jasa_sm = document.getElementById('jasa_sm'+i);
            //     }
            //     if (material_sm != null) {
            //         material_subtotal_sm = material_subtotal_sm + parseInt(material_sm.value);
            //     }

            //     if (jasa_sm != null) {
            //         jasa_subtotal_sm = jasa_subtotal_sm + parseInt(jasa_sm.value);
            //     }
                
                
            // }

            // if(!isNaN(material_subtotal_sm) && document.getElementById('material_sm') != null){
            //     document.getElementById('material_sm').value=material_subtotal_sm;
            // }
            // if(!isNaN(jasa_subtotal_sm) && document.getElementById('jasa_sm') != null){
            //     document.getElementById('jasa_sm').value=jasa_subtotal_sm;
            // }
            // var total_sm = document.getElementById('total_sm');
            // if (!isNaN(material_subtotal_sm) && !isNaN(jasa_subtotal_sm)) {
            //     // console.log(material_subtotal_sm);
            //     if (total_sm != null) {
            //         document.getElementById('total_sm').value=jasa_subtotal_sm + material_subtotal_sm;
            //     }
            // }
        });


    </script>
  </body>
</html>
