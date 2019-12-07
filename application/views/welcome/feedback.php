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
						</div>
						<div class="card-body">
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
											<!-- <input class="form-check-input ml-2" type="radio" name="great" id="great" value="great">
												<label class="small-box-footer ml-0" for="great">Great!</label> -->
											<input type="radio" name="options" id="great" autocomplete="off" checked=""> Great!
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
											<!-- <input class="form-check-input ml-2" type="radio" name="indifferent" id="indifferent" value="indifferent">
												<label class="small-box-footer ml-0" for="indifferent">Indifferent!</label> -->
											<input type="radio" name="options" id="indifferent" autocomplete="off"> Indifferent!
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
											<!-- <input class="form-check-input ml-2" type="radio" name="unhappy" id="unhappy" value="unhappy">
												<label class="small-box-footer ml-0" for="unhappy">Unhappy!</label> -->
											<input type="radio" name="options" id="unhappy" autocomplete="off"> Unhappy!
										</div>
									</div>
								</div>
								<!-- ./col -->
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" placeholder="name@example.com" value="<?= $user['email']; ?>" readonly>
							</div>
							<div class="form-group">
								<label for="feedback">Your Feedback</label>
								<textarea class="form-control" id="feedback" rows="3"></textarea>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-info float-right"></i>Kirim</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</section>

		</div>
	</div>
</body>