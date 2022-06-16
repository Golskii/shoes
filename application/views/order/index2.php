<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Order <small> </small></h3>
    </div>
	</div>
	<div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Add Order <small> </small></h2>
          <ul class="nav navbar-right panel_toolbox">
          <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
          </li>
        </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <!-- start form for validation -->
          <form id="demo-form" data-parsley-validate action="<?php echo base_url('index.php/main/addorder')?>" method="post">
          	<div class="col-md-offset-1 col-sm-10 col-xs-10">
          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="nama">Nama :</label>
                <input  type="text" id="nama" name="nama" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="email">Email :</label>
                <input  type="email" id="email" name="email" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="no_telepon">No. Telepon :</label>
                <input  type="text" id="no_telepon" name="no_telepon" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Jenis Order :</label>
                <select class="select2_single form-control" tabindex="-1" id="jenis_order" name="jenis_order">
                  <option></option>
                  <option value="Normal">Normal</option>
                  <option value="Promo">Promo</option>
                  <option value="Endorse">Endorse</option>
              	</select>
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Alamat Pickup :</label>
                <input  type="text" id="alamat_pickup" name="alamat_pickup" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Tanggal Pickup :</label>
                <input  type="date" id="tanggal_pickup" name="tanggal_pickup" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Alamat Delivery :</label>
                <input  type="text" id="alamat_delivery" name="alamat_delivery" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Tanggal Delivery :</label>
                <input  type="date" id="tanggal_delivery" name="tanggal_delivery" class="form-control" />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Status :</label>
                <select class="select2_single form-control" tabindex="-1" id="status" name="status">
                  <option></option>
                  <option value="Pickup">Pickup</option>
                  <option value="Antri">Antri</option>
                  <option value="Proses Treatment">Proses Treatment</option>
                  <option value="Antri">Delivery</option>
                  <option value="Antri">Close</option>
              	</select>
              </div>

	            <br/>

	          </div>
	          <div class="clearfix"></div>
	          <div class="ln_solid"></div>
	          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-xs-offset-2">
							<button class="btn btn-primary" type="reset">Reset</button>
	            <button type="submit" class="btn btn-success">Submit</button>
	          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

