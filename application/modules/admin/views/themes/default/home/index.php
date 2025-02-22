<main class="main">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item"><a href="#">Admin</a></li>
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<div class="container">

		<div class="animated fadeIn">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="card text-white bg-primary">
						<div class="card-body pb-0">
							<div class="btn-group float-right">
								<button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-settings"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
							<h4 class="mb-0">9.823</h4>
							<p>Members online</p>
						</div>
						<div class="chart-wrapper px-3" style="height:70px;">
							<canvas id="card-chart1" class="chart" height="70"></canvas>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">
					<div class="card text-white bg-info">
						<div class="card-body pb-0">
							<button type="button" class="btn btn-transparent p-0 float-right">
								<i class="icon-location-pin"></i>
							</button>
							<h4 class="mb-0">9.823</h4>
							<p>Members online</p>
						</div>
						<div class="chart-wrapper px-3" style="height:70px;">
							<canvas id="card-chart2" class="chart" height="70"></canvas>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">
					<div class="card text-white bg-warning">
						<div class="card-body pb-0">
							<div class="btn-group float-right">
								<button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-settings"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
							<h4 class="mb-0">9.823</h4>
							<p>Members online</p>
						</div>
						<div class="chart-wrapper" style="height:70px;">
							<canvas id="card-chart3" class="chart" height="70"></canvas>
						</div>
					</div>
				</div>
				<!--/.col-->

				<div class="col-sm-6 col-lg-3">
					<div class="card text-white bg-danger">
						<div class="card-body pb-0">
							<div class="btn-group float-right">
								<button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-settings"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
							<h4 class="mb-0">9.823</h4>
							<p>Members online</p>
						</div>
						<div class="chart-wrapper px-3" style="height:70px;">
							<canvas id="card-chart4" class="chart" height="70"></canvas>
						</div>
					</div>
				</div>
				<!--/.col-->
			</div>

			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-5">
							<h4 class="card-title mb-0">Traffic</h4>
							<div class="small text-muted">November 2017</div>
						</div>
						<div class="col-sm-7 d-none d-md-block">
							<button type="button" class="btn btn-primary float-right"><i class="icon-cloud-download"></i></button>
							<div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option1" autocomplete="off"> Day
								</label>
								<label class="btn btn-outline-secondary active">
									<input type="radio" name="options" id="option2" autocomplete="off" checked=""> Month
								</label>
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option3" autocomplete="off"> Year
								</label>
							</div>
						</div>
					</div>
					<div class="chart-wrapper" style="height:300px;margin-top:40px;">
						<canvas id="main-chart" class="chart" height="300"></canvas>
					</div>
				</div>
				<div class="card-footer">
					<ul>
						<li>
							<div class="text-muted">Visits</div>
							<strong>29.703 Users (40%)</strong>
							<div class="progress progress-xs mt-2">
								<div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</li>
						<li class="d-none d-md-table-cell">
							<div class="text-muted">Unique</div>
							<strong>24.093 Users (20%)</strong>
							<div class="progress progress-xs mt-2">
								<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</li>
						<li>
							<div class="text-muted">Pageviews</div>
							<strong>78.706 Views (60%)</strong>
							<div class="progress progress-xs mt-2">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</li>
						<li class="d-none d-md-table-cell">
							<div class="text-muted">New Users</div>
							<strong>22.123 Users (80%)</strong>
							<div class="progress progress-xs mt-2">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</li>
						<li class="d-none d-md-table-cell">
							<div class="text-muted">Bounce Rate</div>
							<strong>40.15%</strong>
							<div class="progress progress-xs mt-2">
								<div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="social-box facebook">
						<i class="fa fa-facebook"></i>
						<div class="chart-wrapper">
							<canvas id="social-box-chart-1" height="90"></canvas>
						</div>
						<ul>
							<li>
								<strong>89k</strong>
								<span>friends</span>
							</li>
							<li>
								<strong>459</strong>
								<span>feeds</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="social-box twitter">
						<i class="fa fa-twitter"></i>
						<div class="chart-wrapper">
							<canvas id="social-box-chart-2" height="90"></canvas>
						</div>
						<ul>
							<li>
								<strong>973k</strong>
								<span>followers</span>
							</li>
							<li>
								<strong>1.792</strong>
								<span>tweets</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">

					<div class="social-box linkedin">
						<i class="fa fa-linkedin"></i>
						<div class="chart-wrapper">
							<canvas id="social-box-chart-3" height="90"></canvas>
						</div>
						<ul>
							<li>
								<strong>500+</strong>
								<span>contacts</span>
							</li>
							<li>
								<strong>292</strong>
								<span>feeds</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">
					<div class="social-box google-plus">
						<i class="fa fa-google-plus"></i>
						<div class="chart-wrapper">
							<canvas id="social-box-chart-4" height="90"></canvas>
						</div>
						<ul>
							<li>
								<strong>894</strong>
								<span>followers</span>
							</li>
							<li>
								<strong>92</strong>
								<span>circles</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							Traffic &amp; Sales
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12 col-lg-4">
									<div class="row">
										<div class="col-sm-6">
											<div class="callout callout-info">
												<small class="text-muted">New Clients</small>
												<br>
												<strong class="h4">9,123</strong>
												<div class="chart-wrapper">
													<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="callout callout-danger">
												<small class="text-muted">Recuring Clients</small>
												<br>
												<strong class="h4">22,643</strong>
												<div class="chart-wrapper">
													<canvas id="sparkline-chart-2" width="100" height="30"></canvas>
												</div>
											</div>
										</div>
									</div>
									<hr class="mt-0">
									<ul class="horizontal-bars">
										<li>
											<div class="title">
												Monday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<div class="title">
												Tuesday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<div class="title">
												Wednesday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<div class="title">
												Thursday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<div class="title">
												Friday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<div class="title">
												Saturday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<div class="title">
												Sunday
											</div>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li class="legend">
											<span class="badge badge-pill badge-info"></span>
											<small>New clients</small> &nbsp;
											<span class="badge badge-pill badge-danger"></span>
											<small>Recurring clients</small>
										</li>
									</ul>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="row">
										<div class="col-sm-6">
											<div class="callout callout-warning">
												<small class="text-muted">Pageviews</small>
												<br>
												<strong class="h4">78,623</strong>
												<div class="chart-wrapper">
													<canvas id="sparkline-chart-3" width="100" height="30"></canvas>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="callout callout-success">
												<small class="text-muted">Organic</small>
												<br>
												<strong class="h4">49,123</strong>
												<div class="chart-wrapper">
													<canvas id="sparkline-chart-4" width="100" height="30"></canvas>
												</div>
											</div>
										</div>
									</div>
									<hr class="mt-0">
									<ul class="horizontal-bars type-2">
										<li>
											<i class="icon-user"></i>
											<span class="title">Male</span>
											<span class="value">43%</span>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<i class="icon-user-female"></i>
											<span class="title">Female</span>
											<span class="value">37%</span>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li class="divider"></li>
										<li>
											<i class="icon-globe"></i>
											<span class="title">Organic Search</span>
											<span class="value">191,235
												<span class="text-muted small">(56%)</span>
											</span>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<i class="icon-social-facebook"></i>
											<span class="title">Facebook</span>
											<span class="value">51,223
												<span class="text-muted small">(15%)</span>
											</span>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<i class="icon-social-twitter"></i>
											<span class="title">Twitter</span>
											<span class="value">37,564
												<span class="text-muted small">(11%)</span>
											</span>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li>
											<i class="icon-social-linkedin"></i>
											<span class="title">LinkedIn</span>
											<span class="value">27,319
												<span class="text-muted small">(8%)</span>
											</span>
											<div class="bars">
												<div class="progress progress-xs">
													<div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</li>
										<li class="divider text-center">
											<button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="show more"><i class="icon-options"></i></button>
										</li>
									</ul>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="row">
										<div class="col-sm-6">
											<div class="callout">
												<small class="text-muted">CTR</small>
												<br>
												<strong class="h4">23%</strong>
												<div class="chart-wrapper">
													<canvas id="sparkline-chart-5" width="100" height="30"></canvas>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="callout callout-primary">
												<small class="text-muted">Bounce Rate</small>
												<br>
												<strong class="h4">5%</strong>
												<div class="chart-wrapper">
													<canvas id="sparkline-chart-6" width="100" height="30"></canvas>
												</div>
											</div>
										</div>
									</div>
									<hr class="mt-0">
									<ul class="icons-list">
										<li>
											<i class="icon-screen-desktop bg-primary"></i>
											<div class="desc">
												<div class="title">Sony Xperia Z2</div>
												<small>No Sony, No Party</small>
											</div>
											<div class="value">
												<div class="small text-muted">Sold this week</div>
												<strong>1.924</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li>
											<i class="icon-screen-smartphone bg-info"></i>
											<div class="desc">
												<div class="title">Sony Xperia Z5</div>
												<small>Kece Badai!!!</small>
											</div>
											<div class="value">
												<div class="small text-muted">Sold this week</div>
												<strong>1.224</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li>
											<i class="icon-screen-smartphone bg-warning"></i>
											<div class="desc">
												<div class="title">iPhone 6S</div>
												<small>Lorem ipsum dolor sit amet</small>
											</div>
											<div class="value">
												<div class="small text-muted">Sold this week</div>
												<strong>1.163</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li>
											<i class="icon-user bg-danger"></i>
											<div class="desc">
												<div class="title">Premium accounts</div>
												<small>Lorem ipsum dolor sit amet</small>
											</div>
											<div class="value">
												<div class="small text-muted">Sold this week</div>
												<strong>928</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li>
											<i class="icon-social-spotify bg-success"></i>
											<div class="desc">
												<div class="title">Spotify Subscriptions</div>
												<small>Lorem ipsum dolor sit amet</small>
											</div>
											<div class="value">
												<div class="small text-muted">Sold this week</div>
												<strong>893</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li>
											<i class="icon-cloud-download bg-danger"></i>
											<div class="desc">
												<div class="title">Ebook</div>
												<small>Lorem ipsum dolor sit amet</small>
											</div>
											<div class="value">
												<div class="small text-muted">Downloads</div>
												<strong>121.924</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li>
											<i class="icon-camera bg-warning"></i>
											<div class="desc">
												<div class="title">Photos</div>
												<small>Lorem ipsum dolor sit amet</small>
											</div>
											<div class="value">
												<div class="small text-muted">Uploaded</div>
												<strong>12.125</strong>
											</div>
											<div class="actions">
												<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
											</div>
										</li>
										<li class="divider text-center">
											<button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="show more"><i class="icon-options"></i></button>
										</li>
									</ul>
								</div>
							</div>
							<br>
							<table class="table table-responsive-sm table-hover table-outline mb-0">
								<thead class="thead-light">
									<tr>
										<th class="text-center"><i class="icon-people"></i></th>
										<th>User</th>
										<th class="text-center">Country</th>
										<th>Usage</th>
										<th class="text-center">Payment Method</th>
										<th>Activity</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">
											<div class="avatar">
												<!-- <img src="img/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
												<span class="avatar-status badge-success"></span>
											</div>
										</td>
										<td>
											<div>Antonio, S.Kom</div>
											<div class="small text-muted">
												<span>New</span> | Registered: Jan 1, 2015
											</div>
										</td>
										<td class="text-center">
											<i class="flag-icon flag-icon-us h4 mb-0" title="us" id="us"></i>
										</td>
										<td>
											<div class="clearfix">
												<div class="float-left">
													<strong>50%</strong>
												</div>
												<div class="float-right">
													<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
												</div>
											</div>
											<div class="progress progress-xs">
												<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td class="text-center">
											<i class="fa fa-cc-mastercard" style="font-size:24px"></i>
										</td>
										<td>
											<div class="small text-muted">Last login</div>
											<strong>10 sec ago</strong>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<div class="avatar">
												<!-- <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
												<span class="avatar-status badge-danger"></span>
											</div>
										</td>
										<td>
											<div>Avram Tarasios</div>
											<div class="small text-muted">

												<span>Recurring</span> | Registered: Jan 1, 2015
											</div>
										</td>
										<td class="text-center">
											<i class="flag-icon flag-icon-br h4 mb-0" title="br" id="br"></i>
										</td>
										<td>
											<div class="clearfix">
												<div class="float-left">
													<strong>10%</strong>
												</div>
												<div class="float-right">
													<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
												</div>
											</div>
											<div class="progress progress-xs">
												<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td class="text-center">
											<i class="fa fa-cc-visa" style="font-size:24px"></i>
										</td>
										<td>
											<div class="small text-muted">Last login</div>
											<strong>5 minutes ago</strong>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<div class="avatar">
												<!-- <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
												<span class="avatar-status badge-warning"></span>
											</div>
										</td>
										<td>
											<div>Quintin Ed</div>
											<div class="small text-muted">
												<span>New</span> | Registered: Jan 1, 2015
											</div>
										</td>
										<td class="text-center">
											<i class="flag-icon flag-icon-in h4 mb-0" title="in" id="in"></i>
										</td>
										<td>
											<div class="clearfix">
												<div class="float-left">
													<strong>74%</strong>
												</div>
												<div class="float-right">
													<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
												</div>
											</div>
											<div class="progress progress-xs">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td class="text-center">
											<i class="fa fa-cc-stripe" style="font-size:24px"></i>
										</td>
										<td>
											<div class="small text-muted">Last login</div>
											<strong>1 hour ago</strong>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<div class="avatar">
												<!-- <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
												<span class="avatar-status badge-secondary"></span>
											</div>
										</td>
										<td>
											<div>Enéas Kwadwo</div>
											<div class="small text-muted">
												<span>New</span> | Registered: Jan 1, 2015
											</div>
										</td>
										<td class="text-center">
											<i class="flag-icon flag-icon-fr h4 mb-0" title="fr" id="fr"></i>
										</td>
										<td>
											<div class="clearfix">
												<div class="float-left">
													<strong>98%</strong>
												</div>
												<div class="float-right">
													<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
												</div>
											</div>
											<div class="progress progress-xs">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td class="text-center">
											<i class="fa fa-paypal" style="font-size:24px"></i>
										</td>
										<td>
											<div class="small text-muted">Last login</div>
											<strong>Last month</strong>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<div class="avatar">
												<!-- <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
												<span class="avatar-status badge-success"></span>
											</div>
										</td>
										<td>
											<div>Agapetus Tadeáš</div>
											<div class="small text-muted">
												<span>New</span> | Registered: Jan 1, 2015
											</div>
										</td>
										<td class="text-center">
											<i class="flag-icon flag-icon-es h4 mb-0" title="es" id="es"></i>
										</td>
										<td>
											<div class="clearfix">
												<div class="float-left">
													<strong>22%</strong>
												</div>
												<div class="float-right">
													<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
												</div>
											</div>
											<div class="progress progress-xs">
												<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td class="text-center">
											<i class="fa fa-google-wallet" style="font-size:24px"></i>
										</td>
										<td>
											<div class="small text-muted">Last login</div>
											<strong>Last week</strong>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<div class="avatar">
												<!-- <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
												<span class="avatar-status badge-danger"></span>
											</div>
										</td>
										<td>
											<div>Friderik Dávid</div>
											<div class="small text-muted">
												<span>New</span> | Registered: Jan 1, 2015
											</div>
										</td>
										<td class="text-center">
											<i class="flag-icon flag-icon-pl h4 mb-0" title="pl" id="pl"></i>
										</td>
										<td>
											<div class="clearfix">
												<div class="float-left">
													<strong>43%</strong>
												</div>
												<div class="float-right">
													<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
												</div>
											</div>
											<div class="progress progress-xs">
												<div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td class="text-center">
											<i class="fa fa-cc-amex" style="font-size:24px"></i>
										</td>
										<td>
											<div class="small text-muted">Last login</div>
											<strong>Yesterday</strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>