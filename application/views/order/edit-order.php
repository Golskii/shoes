<!-- page content -->
<div class="right_col" role="main">

<form id="demo-form"  action="<?php echo base_url('main/editorder')?>" method="post">
 <div>
	<div class="page-title">
	  <div class="title_left">
		<h3>Edit Order </h3>
	  </div>
	  </div>
	  <div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Customer Information <small> </small></h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
			  </li>
			</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br />
			<!-- start form for validation -->
			<div class="col-sm-5 col-md-5 col-xs-12">
				<input type="hidden" value="<?= $data->KD_CUSTOMER ?>" name="kd_customer" id="kd_customer" />
				<div class="autocomplete-suggestion">				
					<label for="sales">Pegawai :</label>
					<input readonly type="text" id="USER_NAMA" class="form-control" name="USER_NAMA" required="required" value="<?php echo $this->session->userdata('email'); ?>"/>
				</div>
				<div class="form-group col-md-12 col-sm-12 col-xs-12" >
					<label for="nama">Nama :</label>
					<input  type="text" id="nama" name="nama" class="form-control" value="<?= $data->NAMA ?>" required />
				</div>

					<br/>

				<div class="form-group col-md-12 col-sm-12 col-xs-12" >
					<label for="harga">Harga :</label>
					<input  type="harga" id="harga" name="harga" class="form-control" value="<?= $data->HARGA ?>" required />
				</div>

					<br/>

				<div class="form-group col-md-12 col-sm-12 col-xs-12" >
					<label for="no_telepon">No. Telepon :</label>
					<input  type="text" id="no_telepon" name="no_telepon" class="form-control" value="<?= $data->NO_TELEPON ?>" required />
				</div>

					<br/>

				<div class="form-group col-md-12 col-sm-12 col-xs-12" >
					<label for="alamat">Jenis Order :</label>
					<select class="select2_single form-control" tabindex="-1" id="jenis_order" name="jenis_order">
					<option value="Normal" <?= $data->JENIS_ORDER === "Normal" ? 'selected':'' ?>>Normal</option>
					<option value="Promo" <?= $data->JENIS_ORDER === "Promo" ? 'selected':'' ?>>Promo</option>
					<option value="Endorse" <?= $data->JENIS_ORDER === "Endorse" ? 'selected':'' ?>>Endorse</option>
					</select>
				</div>

					<br/>
			</div>

		  	<div class="col-sm-offset-1 col-sm-5 col-md-5 col-xs-12">
			  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Alamat Pickup :</label>
                <input  type="text" id="alamat_pickup" name="alamat_pickup" class="form-control" value="<?= $data->ALAMAT_PICKUP ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Tanggal Pickup :</label>
                <input  type="date" id="tanggal_pickup" name="tanggal_pickup" class="form-control" value="<?= $data->TANGGAL_PICKUP ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Alamat Delivery :</label>
                <input  type="text" id="alamat_delivery" name="alamat_delivery" class="form-control" value="<?= $data->ALAMAT_DELIVERY ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Tanggal Delivery :</label>
                <input  type="date" id="tanggal_delivery" name="tanggal_delivery" class="form-control" value="<?= $data->TANGGAL_DELIVERY ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Status :</label>
                <select class="select2_single form-control" tabindex="-1" id="status" name="status">
                  <option value="Pickup" <?= $data->STATUS === "Pickup" ? 'selected':'' ?>>Pickup</option>
                  <option value="Antri" <?= $data->STATUS === "Antri" ? 'selected':'' ?>>Antri</option>
                  <option value="Proses Treatment" <?= $data->STATUS === "Proses Treatment" ? 'selected':'' ?>>Proses Treatment</option>
                  <option value="Delivery" <?= $data->STATUS === "Delivery" ? 'selected':'' ?>>Delivery</option>
                  <option value="Close" <?= $data->STATUS === "Close" ? 'selected':'' ?>>Close</option>
              	</select>
              </div>

	            <br/>

		  	</div>
			<!-- end form for validations -->
		  </div>
		</div>
	  </div>
	  <!-- </div> -->
	  <div id="panel-group">
		  <?php foreach($dat_order as $order): ?>	
			<div class="col-md-6 col-xs-12" >
				<div class="x_panel">
					<div class="x_title">
						<h2>Order Item <small></small></h2>
						<ul class="nav navbar-right panel_toolbox">
						<li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
						</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
							<!-- <input type="text" id="terserah" hidden value="1"> -->
						<input type="hidden" value="<?= $order->KD_ORDER ?>" name="kd_order[]" id="kd_order" />
						<div class="form-group col-md-12 col-xs-12">
							<label for="jenis_item">Jenis Item :</label>				
							<select class="select2_single form-control" tabindex="-1" id="jenis_item" name="jenis_item[]">
								<?php foreach($dat_item as $item){
									if($order->KD_ITEM === $item->KD_ITEM){
										echo '<option value="'.$item->KD_ITEM.'" selected>'.$item->JENIS_ITEM.'</option>';
									}else{
										echo '<option value="'.$item->KD_ITEM.'">'.$item->JENIS_ITEM.'</option>';
									}
								} ?>
							</select>
						</div>

						<br/>

						<div class="form-group col-md-12 col-xs-12">
							<label for="jenis_treatment">Jenis Treatment :</label>				
							<select class="select2_single form-control" tabindex="-1" id="jenis_treatment" name="jenis_treatment[]">
								<?php foreach($dat_treatment as $treatment){
									if($order->KD_TREATMENT === $treatment->KD_TREATMENT){
										echo '<option value="'.$treatment->KD_TREATMENT.'" selected>'.$treatment->JENIS_TREATMENT.'</option>';
									}else{
										echo '<option value="'.$treatment->KD_TREATMENT.'">'.$treatment->JENIS_TREATMENT.'</option>';
									}
								} ?>
							</select>
						</div>

						<br/>

						<div class="form-group col-md-12 col-xs-12">
							<label for="keterangan">Keterangan :</label>	
							<input  type="text" id="keterangan" name="keterangan[]" value="<?= $order->KETERANGAN; ?>" class="form-control" required />		
							
						</div>
						<br/>
						<div></div>

					</div>
				</div>
			</div>
		  <?php endforeach; ?>
	  </div>
 </div>
 <div class="x_panel">
	  <div class="x_content">
	  <div class="clearfix"></div>
		  <div class="ln_solid"></div>
		  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-xs-offset-2">
		  	<input id="countItem" value="1" type="hidden" />
		  </div>
		  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-xs-offset-2">
			<a href="<?=base_url('main/')?>order/"><button class="btn btn-primary" type="button">Cancel</button></a>
			<!-- <button class="btn btn-primary" type="reset">Reset</button> -->
			<input class="btn btn-primary" type="button" name="add_item" value="Add Item" onclick="addItem(); return false;" />
			<button type="submit" class="btn btn-success">Submit</button>
		  </div>
	  </div>
  </div>
</div>
</form>
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Order <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th style="width: 1%">No</th>
                    <th style="width: 15%">Jenis Item</th>
                    <th style="width: 15%">Jenis Treatment</th>
                    <th style="width: 15%">Keterangan</th>
                    <th style="width: 20%">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php if(count(array($dat_order))): $no=1;?>
                    <?php foreach($dat_order as $order): ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td>
                      <a> <?php echo $order->JENIS_ITEM; ?> </a>
                    </td>
                    <td>
                      <a> <?php echo $order->JENIS_TREATMENT; ?> </a>
                    </td>
                    <td>
                      <a> <?php echo $order->KETERANGAN; ?> </a>
                    </td>
                    <td>
                      <a href="<?=base_url('main/')?>hapusitemorder/<?php echo $order->KD_ORDER?>" class="btn btn-danger btn-xs" onclick="return confirm('Ingin hapus data?')"><i class="fa fa-trash"></i> Delete </a>
                    </td>
                  </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                  <tr>
                    <td> No Records Found </td>
                  </tr>
                <?php endif; ?>
                </tbody>
              </table>
              <!-- end project list -->

            </div>
          </div>
        </div>
</div>

<!-- /page content -->
