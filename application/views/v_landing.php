<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shoes Clinic</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/build/favicon.ico') ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/build/css/styles.css') ?>" rel="stylesheet" type="text/css" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
		<div class="bg-container" style="height: 100%;">	
			<div class="masthead" style="margin-right: 0px;">
				<div class="masthead-content text-white">
					<div class="container-fluid px-4 px-lg-0">
						<h1 class="fst-italic lh-1 mb-4"><img src="<?=base_url()?>assets/images/logo2.png" alt="..." style="width: 100px;padding-top: 0px;"><span><img src="<?=base_url()?>assets/images/logo3.png" alt="..." style="width: 360px;"></h1>
						<p class="mb-5" style="font-family: Lucida Handwriting;font-size: 25px;">Your shoes treatment solution.</p>
						<form id="contactForm" method="post" action="<?php echo base_url('landing/getCustomer#trackingPage') ?>">
							<!-- Email address input-->
							<div class="row input-group-newsletter">
								<div class="col">
									<input class="form-control" id="kode" type="text" name="kode" placeholder="Masukkan kode mu disini" aria-label="Enter tracking code..." required />
									<?php if(isset($error)): ?><span style="color: red;"><?= $error ?></span> <?php endif ?>
								</div>
								<div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit">Start Tracking Now</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="social-icons">
				<div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
					<a class="btn btn-dark m-3" target="_blank" href="http://wa.me/+6281330208577"><i class="fab fa-whatsapp"></i></a>
					<a class="btn btn-dark m-3" target="_blank" href="http://www.instagram.com/super.shoesclinic"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<?php if(isset($status)): ?>
			<div class="bg-white flex pt-5" id="trackingPage" style="height: 100%;background-color: white;">
				<div class="m-auto flex" style="background-color: black;height: 60px;width:80%;border-radius: 6px 6px 0 0;">
					<p class="pt-3 text-center text-white align-middle">Tracking Order No. : <?= $data ? $data->KD_CUSTOMER ? $data->KD_CUSTOMER:'-':'-' ?> </p>
				</div>
				<div class="m-auto flex" style="background-color: #dcdede;height: 60px;width:80%;">
					<p class="pt-3 text-center text-black align-middle"><?= $data ? $data->NAMA ? $data->NAMA:'-':'-' ?></p>
				</div>
				<div class="m-auto flex pt-4" style="width: 80%;">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" style="width: <?= $status ?>" aria-valuemin="25" aria-valuemax="100"></div>
					</div>
					<div class="d-flex flex-row" style="width: 100%;">
						<p style="width: 25%;" class="<?= $status === '0%' ? 'font-weight-bold':'' ?>">PICKUP</p>
						<p style="width: 25%;" class="<?= $status === '25%' ? 'font-weight-bold':'' ?>">ANTRI</p>
						<p style="width: 25%;" class="<?= $status === '50%' ? 'font-weight-bold':'' ?>">PROSES</p>
						<p style="width: 25%;" class="<?= $status === '75%' ? 'font-weight-bold':'' ?>">DELIVERY</p>
						<p class="text-right" class="<?= $status === '100%' ? 'font-weight-bold':'' ?>">CLOSE</p>
					</div>
				</div>
				<div class="m-auto flex" style="width: 80%;">
					<p Class="mt-3 font-weight-bold">ITEM LIST<p>
					<table class="table table-hover">
						<thead class="thead-light">
							<tr>
								<th cl>Item</th>
								<th>Treatment</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($dat_order as $order): ?>
								<tr>
									<td><?= $order->JENIS_ITEM ? $order->JENIS_ITEM:'-' ?></td>
									<td><?= $order->JENIS_TREATMENT ? $order->JENIS_TREATMENT:'-' ?></td>
									<td><?= $order->KETERANGAN ? $order->KETERANGAN:'-' ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		<?php endif ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/build/js/scripts.js') ?>"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
