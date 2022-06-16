<!-- page content --> 
<div class="right_col" role="main">
  <form id="demo-form" data-parsley-validate action="<?php echo base_url('index.php/manajer/Ctrl_Application/savenvc')?>" method="post">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Add Invoice <small>Work Instruction </small></h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="x_panel">
            <!-- <div class="x_title">
              <h2>General Information <small> </small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div> -->
            <div class="x_content">
              <section class="content invoice">
                <!-- title row -->
                <div class="row">
                  <div class="col-xs-12 invoice-header">
                    <h1>
                       <i class="fa fa-globe"></i> Invoice.
                        <!-- <small class="pull-right">Date: 
                          <?php
                          $tahun = substr($penawaran->PENAWARAN_TGL,0,4);
                          $bulan = substr($penawaran->PENAWARAN_TGL,5,2);
                          $tgl = substr($penawaran->PENAWARAN_TGL,8,2);
                          if($bulan == 1){
                            $bulan = "Januari";
                          }else if($bulan == 2){
                            $bulan = "Februari";
                          }else if($bulan == 3){
                            $bulan = "Maret";
                          }else if($bulan == 4){
                            $bulan = "April";
                          }else if($bulan == 5){
                            $bulan = "Mei";
                          }else if($bulan == 6){
                            $bulan = "Juni";
                          }else if($bulan == 7){
                            $bulan = "Juli";
                          }else if($bulan == 8){
                            $bulan = "Agustus";
                          }else if($bulan == 9){
                            $bulan = "September";
                          }else if($bulan == 10){
                            $bulan = "Oktober";
                          }else if($bulan == 11){
                            $bulan = "November";
                          }else if($bulan == 12){
                            $bulan = "Desember";
                          }
                          $date = $tgl . " " . $bulan . " " . $tahun;
                          echo $date;
                        ?>
                        </small> -->

                    </h1>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    <strong>Customer Information</strong>
                    <address>
						<table>
							<tbody>
								<tr>
									<td>Kode Order </td>
									<td> : <?= $data->KD_CUSTOMER ?></td>
								</tr>
								<tr>
									<td>Nama Customer </td>
									<td> : <?= $data->NAMA ?></td>
								</tr>
								<tr>
									<td>Nomor Telepon </td>
									<td> : <?= $data->NO_TELEPON ?></td>
								</tr>
							</tbody>
						</table>
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <strong>Pickup & Delivery</strong>
                    <address>
						<table>
							<tbody>
								<tr>
									<td>Tanggal Pickup </td>
									<td> : <?= $data->TANGGAL_PICKUP ?></td>
								</tr>
								<tr>
									<td>Alamat Pickup </td>
									<td> : <?= $data->ALAMAT_PICKUP ?></td>
								</tr>
								<tr>
									<td>Tanggal Delivery </td>
									<td> : <?= $data->TANGGAL_DELIVERY ?></td>
								</tr>
								<tr>
									<td>Alamat Delivery </td>
									<td> : <?= $data->ALAMAT_DELIVERY ?></td>
								</tr>
							</tbody>
						</table>
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <strong>Order Details</strong>
					<address>
						<table>
							<tbody>
								<tr>
									<td>Jenis Order </td>
									<td> : <?= $data->JENIS_ORDER ?></td>
								</tr>
								<tr>
									<td>Status </td>
									<td> : <?= $data->STATUS ?></td>
								</tr>
							</tbody>
						</table>
					</address>
                  </div>
                  <!-- /.col -->
                </div>
                <div class="ln_solid"></div>                

                <div class="row">
                  
                  <div class="col-xs-12">
                    <br>
                    <p class="lead">Item List:</p>
                    <table id="dt-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <!-- <table id="datatable-buttons" class="table table-striped table-bordered"> -->
                      <thead>
                        <th width="1%" style="text-align: center;">
                          Item
                        </th>
                        <th width="10%">
                          Treatment
                        </th>
                        <th width="20%" style="text-align: center;">
                          Keterangan
                        </th>
                      </thead>
                      <tbody>
					  	<?php foreach($dat_order as $order): ?>
							<tr>
								<td><?= $order->JENIS_ITEM ? $order->JENIS_ITEM:'-' ?></td>
								<td><?= $order->JENIS_TREATMENT ? $order->JENIS_TREATMENT:'-' ?></td>
								<td><?= $order->KETERANGAN ? $order->KETERANGAN:'-' ?></td>
							</tr>
						<?php endforeach ?>
						<tr>
							<td colspan="2" class="text-center">Total</td>
							<td colspan="1"><?= $data->HARGA ?></td>
						</tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="ln_solid"></div>
                <!-- this row will not appear when printing -->
                <!-- <div class="row no-print"> -->
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</button>
                    <!-- <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
                 <!-- </div> -->
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- /page content
