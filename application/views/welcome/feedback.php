<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Feedback</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Feedback</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- Main content -->

			<section class="content">
				<div class="container-fluid">
					<div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title">How do you feel about the support you received?</h3>
							<br>
							<?= $this->session->flashdata('message'); ?>
						</div>
						<div class="card-body">
							<form action="<?= base_url('user/feedback'); ?>" method="post">
								<div class="row">
									<!-- ./col -->
									<div class="col-lg-4 col-6">
										<!-- small box -->
										<div class="small-box bg-success">
											<div class="inner">
												<p>Choise me,</p>

												<h4>If, it was great!</h4>
											</div>
											<div class="icon">
												<i class="far fa-grin-hearts"></i>
											</div>
											<div class="form-check form-check-inline ml-2">
												<input type="radio" name="options" id="great" autocomplete="off" checked="" value="Great"> Great!
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-6">
										<!-- small box -->
										<div class="small-box bg-warning">
											<div class="inner">
												<p>Choise me,</p>

												<h4>If, it did the job!</h4>
											</div>
											<div class="icon">
												<i class="far fa-meh"></i>
											</div>
											<div class="form-check form-check-inline ml-2">
												<input type="radio" name="options" id="indifferent" autocomplete="off" value="Indifferent"> Indifferent!
											</div>
										</div>
									</div>
									<!-- ./col -->
									<div class="col-lg-4 col-6">
										<!-- small box -->
										<div class="small-box bg-danger">
											<div class="inner">
												<p>Choise me,</p>

												<h4>If, you're disappointed!</h4>
											</div>
											<div class="icon">
												<i class="far fa-frown"></i>
											</div>
											<div class="form-check form-check-inline ml-2">
												<input type="radio" name="options" id="unhappy" autocomplete="off" value="Unhappy"> Unhappy!
											</div>
										</div>
									</div>
									<!-- ./col -->
								</div>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?= $user['email']; ?>" readonly>
								</div>
								<div class="form-group">
									<label for="feedback">Your Feedback</label>
									<textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
									<?= form_error('feedback', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info float-right"></i>Kirim</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

		</div>
	</div>
</body>