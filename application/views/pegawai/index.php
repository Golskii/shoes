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
          <h2>Add Pegawai <small> </small></h2>
          <ul class="nav navbar-right panel_toolbox">
          <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
          </li>
        </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <!-- start form for validation -->
          <form id="demo-form" data-parsley-validate action="<?php echo base_url('main/adduser')?>" method="post">
          	<div class="col-md-offset-1 col-sm-10 col-xs-10">
          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="nama">Nama :</label>
                <input  type="text" id="nama" name="nama" class="form-control" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="email">Email :</label>
                <input  type="email" id="email" name="email" class="form-control" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="password">Password :</label>
                <input  type="password" id="password" name="password" class="form-control" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="alamat">Alamat :</label>
                <input  type="text" id="alamat" name="alamat" class="form-control" required />
              </div>

	            <br/>

          	  <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="no_telepon">No. Telepon :</label>
                <input  type="text" id="no_telepon" name="no_telepon" class="form-control" required />
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
          <!-- <div class="clearfix"></div>
          <div class="ln_solid"></div>
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
            <button class="btn btn-primary" type="button">Cancel</button>
						<button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div> -->

        </div>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Pegawai <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <!-- <p>List invoice yang belum diberi harga final oleh item manajer</p> -->

              <!-- <p class="text-muted pull-right">Urutkan</p> -->
              <!-- <div class="row">
                <div class="btn-group">
                  <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Shorting <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">No</a>
                      </li>
                      <li><a href="#">Alphabet</a>
                      </li>
                      <li><a href="#">Dropdown link 3</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <br> -->
              <!-- start project list -->
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th style="width: 1%">No</th>
                    <th style="width: 15%">Nama</th>
                    <th style="width: 15%">Email</th>
                    <th style="width: 15%">Alamat</th>
                    <th style="width: 15%">No. Telepon</th>
                    <th style="width: 20%">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php if(count(array($dat_user))): $no=1;?>
                    <?php foreach($dat_user as $user): ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td>
                      <a> <?php echo $user->NAMA; ?> </a>
                    </td>
                    <td>
                      <a> <?php echo $user->EMAIL; ?> </a>
                    </td>
                    <td>
                      <a> <?php echo $user->ALAMAT; ?> </a>
                    </td>
                    <td>
                      <a> <?php echo $user->NO_TELEPON; ?> </a>
                    </td>
                    <td>
                      <a href="<?=base_url('main/')?>formedituser/<?php echo $user->KD_USER?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Update </a>
                      <a href="<?=base_url('main/')?>hapususer/<?php echo $user->KD_USER?>" class="btn btn-danger btn-xs" onclick="return confirm('Ingin hapus data?')"><i class="fa fa-trash"></i> Delete </a>
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
</div>

