<?php
  foreach($data as $item):
  endforeach;
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Item <small> </small></h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Edit Item <small> </small></h2>
          <ul class="nav navbar-right panel_toolbox">
          <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
          </li>
        </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <!-- start form for validation -->
          <form id="demo-form" data-parsley-validate action="<?php echo base_url('main/edititem')?>" method="post">
            <div class="col-md-offset-1 col-sm-10 col-xs-10">
              <div class="form-group col-md-12 col-sm-12 col-xs-12" >
                <label for="custname">Jenis Item :</label>
                <input type="text" id="kd_item" name="kd_item" class="form-control" hidden value="<?php echo $item->KD_ITEM ?>"/>
                <input type="text" id="jenis_item" name="jenis_item" class="form-control" value="<?php echo $item->JENIS_ITEM ?>" required />
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
   <!-- <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Item <small></small></h2>
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
              <!--<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th style="width: 1%">No</th>
                    <th style="width: 15%">Item Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th style="width: 20%">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <a>Gilang Gilang</a>
                      <br />
                      <small>Created 01-01-2015</small>
                    </td>
                    <td>
                      <a>gilang@gmailcom</a>
                    </td>
                    <td>
                      <a>08779899789</a>
                    </td>
                    <td>
                      <a href="<?=base_url()?>viewsls/" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                      <a href="<?=base_url()?>editsls/" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- end project list -->

            </div>
          </div>
        </div>
  </div>
</div>

