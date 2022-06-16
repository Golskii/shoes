<?php
  foreach($data as $item):
  endforeach;
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Pegawai <small> </small></h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Edit Pegawai <small> </small></h2>
          <ul class="nav navbar-right panel_toolbox">
          <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
          </li>
        </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <!-- start form for validation -->
          <form id="demo-form" data-parsley-validate action="<?php echo base_url('main/edituser')?>" method="post">
            <div class="col-md-offset-1 col-sm-10 col-xs-10">
              <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="custname">Nama :</label>
                <input type="text" id="kd_user" name="kd_user" class="form-control" hidden value="<?= $data[0]->KD_USER ?>"/>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data[0]->NAMA ?>" required/>
              </div>

              	<br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="email">Email :</label>
                <input  type="email" id="email" name="email" class="form-control" value="<?php echo $data[0]->EMAIL ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="password">Password :</label>
                <input  type="password" id="password" name="password" class="form-control" value="<?php echo $data[0]->PASSWORD ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Alamat :</label>
                <input  type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $data[0]->ALAMAT ?>" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="no_telepon">No. Telepon :</label>
                <input  type="text" id="no_telepon" name="no_telepon" class="form-control" value="<?php echo $data[0]->NO_TELEPON ?>" required />
              </div>

	            <br/>

            </div>
            <div class="clearfix"></div>
            <div class="ln_solid"></div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-xs-offset-2">
              <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

