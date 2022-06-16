<!-- page content -->
<div class="right_col" role="main">

<form id="demo-form"  action="<?php echo base_url('index.php/manajer/Ctrl_Application/post_invoice')?>" method="post">
 <div>
	<div class="page-title">
	  <div class="title_left">
		<h3>Add Invoice <small>Work Instruction </small></h3>
	  </div>
	  </div>
	  <div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>General Information <small> </small></h2>
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
			  <input type="text" id="PENAWARAN_KD" class="form-control" name="PENAWARAN_KD"  hidden value="0" />
				<label for="date">Date :</label>
				<div class="input-group date" id="myDatepicker2">
					<input type="text" class="form-control" id="PENAWARAN_TGL" name="PENAWARAN_TGL"/>
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
				<div class="autocomplete-suggestion">
				<?php if($this->session->userdata('role') == 'ADMINISTRATOR'){?>
			  <label for="sales">Sales :</label>
				<input type="text" id="USER_NAMA" class="form-control" name="USER_NAMA" required="required" value="<?php echo $this->session->userdata('username'); ?>"/>
				<?php }else{ ?>
				<label for="sales">Sales :</label>
				<input readonly type="text" id="USER_NAMA" class="form-control" name="USER_NAMA" required="required" value="<?php echo $this->session->userdata('username'); ?>"/>
				<?php	} ?>
			  <label for="customer">Customer * :</label>
			  <input type="text" id="CUSTOMER_NAMA" class="form-control" name="CUSTOMER_NAMA" required="required" />
			  <input type="text" id="CUSTOMER_KD" class="form-control" name="CUSTOMER_KD" hidden="" />
			</div>
			  <label for="equipment">Equipment * :</label>
			  <input type="text" id="MOTOR_NAMA" class="form-control" name="MOTOR_NAMA" required="required" />

		  </div>

		  <div class="col-sm-offset-1 col-sm-5 col-md-5 col-xs-12">
			  <label for="category">Categeory</label>
			<select class="select2_single form-control" tabindex="-1" id="PENAWARAN_KATEGORI" name="PENAWARAN_KATEGORI">
			  <option></option>
			  <option value="01">AC</option>
			  <option value="02">DC</option>
			  <option value="03">Transformers</option>
			  <option value="04">Governor</option>
			  <option value="05">Others</option>
			  </select>

			  <label for="brand">Brand/Manufacture * :</label>
			  <input type="text" id="MOTOR_BRAND" class="form-control" name="MOTOR_BRAND"  required="required" />
		  
		  </div>
			<!-- end form for validations -->
			</div>
			  </div>
			  <div class="x_panel">
		  <div class="x_title">
			<h2>Specification Detail <small> </small></h2>
			<ul class="nav navbar-right panel_toolbox">
				  <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
				  </li>
				</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br />

		  <div class="col-sm-3 col-md-2 col-xs-6">
			  
			  <label for="hp">HP :</label>
			  <input type="text" id="MOTOR_HP" class="form-control" name="MOTOR_HP" />

			  <label for="kw">KW * :</label>
			  <input type="text" class="form-control" data-inputmask="'mask': '9,999'" id="MOTOR_KW" name="MOTOR_KW" required="required" />
				  <span aria-hidden="true"></span>

			  <label for="kva">KVA :</label>
			  <input type="text" id="MOTOR_KVA" class="form-control" name="MOTOR_KVA" />

			  <label for="frame">Frame :</label>
			  <input type="text" id="MOTOR_FRAME" class="form-control" name="MOTOR_FRAME" />

			  <label for="insul">Insul. CL :</label>
			  <input type="text" id="MOTOR_INSUL_CL" class="form-control" name="MOTOR_INSUL_CL" />

		  </div>

		  <div class="col-sm-offset-1 col-sm-3 col-md-2 col-xs-6">
			  <label for="volts1">Volts * :</label>
			<input type="text" class="form-control" data-inputmask="'mask': '999/E999'" id="MOTOR_VOLTS" name="MOTOR_VOLTS" required="required" />
			  <span aria-hidden="true"></span>

			  <label for="volts2">VOLts* :</label>
			  <input type="text" id="MOTOR_VOLTSS" class="form-control" name="MOTOR_VOLTSS" />

			  <label for="volts3">Volts-Ex :</label>
			  <input type="text" id="MOTOR_VOLTS_EX" class="form-control" name="MOTOR_VOLTS_EX" />

			  <label for="model">Model :</label>
			  <input type="text" id="MOTOR_MODEL" class="form-control" name="MOTOR_MODEL" />

			  <label for="bearing-order">Bearing By * :</label><br>
			  <select class="select2_single form-control" tabindex="-1" id="MOTOR_BEARING_BY" name="MOTOR_BEARING_BY">
			  <option value="1">SWTS</option>
			  <option value="2">Customer</option>
			</select>
		  </div>

		  <div class="col-sm-offset-1 col-sm-3 col-md-2 col-xs-6">
			  
			  <label for="amps1">AMPS * :</label>
			  <input type="text" class="form-control" data-inputmask="'mask': '9,99/9,99'" id="MOTOR_AMPS" name="MOTOR_AMPS" required="required" />
				  <span aria-hidden="true"></span>

			  <label for="type">Type * :</label>
			  <input type="text" id="MOTOR_TIPE" class="form-control" name="MOTOR_TIPE" />

			  <label for="de-bearing">DE Bearing :</label>
			  <input type="text" id="MOTOR_BEARING_DE" class="form-control" name="MOTOR_BEARING_DE" />
		  </div>

		  <div class="col-sm-offset-1 col-sm-3 col-md-2 col-xs-6">
			  
			  <label for="ph">PH :</label>
			  <input type="text" id="MOTOR_PH" class="form-control" name="MOTOR_PH" />
			  <label for="hz">HZ * :</label><br>
			  <select class="select2_single form-control" tabindex="-1" id="MOTOR_HZ" name="MOTOR_HZ">
				  <option value="50 DC">50 DC</option>
				  <option value="60 DC">60 DC</option>
			  </select>
			  <label for="rpm">RPM * :</label>
			  <input type="text" id="MOTOR_RPM" class="form-control" name="MOTOR_RPM" required="required"/>
			  <label for="s-no">S/Number * :</label>
			  <input type="text" id="MOTOR_SNO" class="form-control" name="MOTOR_SNO" />
			  <label for="nde-bearing">NDE Bearing :</label>
			  <input type="text" id="MOTOR_BEARING_NDE" class="form-control" name="MOTOR_BEARING_NDE" />
		  </div>

			</div>
			  </div>
		</div>
	  <!-- </div> -->

		<div class="col-md-6 col-xs-12">
		  <div class="x_panel">
		  <div class="x_title">
			<h2>Workscope Conducted <small> </small></h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
			  </li>
			</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br />
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label for="rotor">Rotor :</label>
						<div class="radio">
					  <label>
						<input  type="radio" class="flat" id="PERBAIKAN_NAMA" name="PERBAIKAN_NAMA" value="Rewind-Rotor"> Rewind
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" class="flat" id="PERBAIKAN_NAMA" name="PERBAIKAN_NAMA" value="Overhol-Rotor"> Overhol
					  </label>
					</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label for="stator">Stator :</label>
						<div class="radio">
					  <label>
						<input  type="radio" class="flat" id="PERBAIKAN_NAMA" name="PERBAIKAN_NAMA" value="Rewind-Stator"> Rewind
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" class="flat" id="PERBAIKAN_NAMA" name="PERBAIKAN_NAMA" value="Overhol-Stator"> Overhol
					  </label>
					</div>
					</div>
				</div>
				
			</div>

			<div class="row clearfix"></div>
			<div class="ln_solid"></div>

			<div class="col-sm-6 col-md-6 col-xs-12">
			  <div class="checkbox">
				<ul class="to_do">
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_SITE" name="WORK_SITE" value="1"> &nbsp; Site Work
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_INITIAL" name="WORK_INITIAL" value="1"> &nbsp; Initial Testing
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_DISASSEMBLY" name="WORK_DISASSEMBLY" value="1"> &nbsp; Disassembly
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_REASSEMBLE" name="WORK_REASSEMBLE" value="1"> &nbsp; Reassemble
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_STEAM" name="WORK_STEAM" value="1"> &nbsp; Steam / Chemical Clean
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_BAKE_WINDINGS" name="WORK_BAKE_WINDINGS" value="1"> &nbsp; Bake Windings
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_VARNISH" name="WORK_VARNISH" value="1"> &nbsp; Varnish Treatment
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_BAKE_CURE" name="WORK_BAKE_CURE" value="1"> &nbsp; Bake and Cure
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_FINAL" name="WORK_FINAL" value="1"> &nbsp; Final Test - No Load
						</p>
					</li>
				</ul>
			  </div>
			</div>


			<div class="col-md-6 col-sm-6 col-xs-12">
			  <!-- <div class="checkbox"> -->
				<ul class="to_do">
					<div class="checkbox">
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_DYNAMIC" name="WORK_DYNAMIC" value="Dynamic Balance"> &nbsp; Dynamic Balance
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_SKIN" name="WORK_SKIN" value="Skim and Undercut"> &nbsp; Skim and Under
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_CARBON_BRUSHES" name="WORK_CARBON_BRUSHES" value="Renew Carbon Brushes"> &nbsp; Renew Carbon Brushes
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_REBUSH_HOUSING" name="WORK_REBUSH_HOUSING" value="Rebush Housing"> &nbsp; Rebush Housing
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_REPAIR_JOURNAL" name="WORK_REPAIR_JOURNAL" value="Repair Journal"> &nbsp; Repair Journal
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_REBBIT_SLEEVE" name="WORK_REBBIT_SLEEVE" value="Rebbit Sleeve"> &nbsp; Rebbit Sleeve
						</p>
					</li>
					<li>
						<p>
						  <input type="checkbox" class="flat" id="WORK_LABYRINTH" name="WORK_LABYRINTH" value="Labyrinth Seals"> &nbsp; Labyrinth Seals
						</p>
					</li>
					</div>
				</ul>
			</div>


		  </div>
		  </div>
	  </div>

	<div class="col-md-6 col-xs-12" >
		  <div class="x_panel">
		  <div class="x_title">
			<h2>Additional Workscope <small> </small></h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
			  </li>
			</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
				  <!-- <input type="text" id="terserah" hidden value="1"> -->
			  <div class="form-group col-md-12 col-xs-12">
				<div class="product-item col-md-7 col-sm-7 col-xs-12" >
					<p><input id="idf" value="1" type="hidden" />
					<input id="CUSTOM_NAMA" name="CUSTOM_NAMA[]" type="text" /></p>
					<div id="divHobi"></div>
				</div>          		
			</div>

			  <div class="col-sm-offset-5 col-md-6  col-xs-offset-4 col-xs-12">
				  <br>
				  <input class="btn btn-primary" type="button" name="add_item" value="Add More" onclick="addMore(); return false;" />
			</div>

		  </div>
	  </div>
  </div>
  </div>
  <div class="x_panel">
	  <div class="x_content">
	  <div class="clearfix"></div>
		  <div class="ln_solid"></div>
		  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-xs-offset-2">
			<button class="btn btn-primary" type="button">Cancel</button>
						<button class="btn btn-primary" type="reset">Reset</button>
			<button type="submit" class="btn btn-success">Submit</button>
		  </div>
	  </div>
  </div>
</div>
</form>
</div>

<!-- /page content -->
