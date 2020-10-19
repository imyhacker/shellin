@include('layouts/a/head')
<body class="nav-fixed">
	@include('layouts/a/nav')
	<div id="layoutSidenav">
		@include('layouts/a/side')
		<div id="layoutSidenav_content">
			<main>
				@include('layouts/a/header_home')
				<!-- Main page content-->
				<div class="container mt-n10">
					<div class="row">
						@include('layouts/a/wall')

					</div>
					<!-- Example Colored Cards for Dadataboard Demo-->
					@include('layouts/a/demo')
					<!-- Example DataTable for Dadataboard Demo-->
					<div class="card mb-4">
						<div class="card-header">
							<div class="row">

								<div class="mt-1 col-md-12">
									Edit User
								</div>
							</div>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
									<label>Acccount Name</label>
									<input type="text" name="name" value="{{$data->name}}" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Account Email</label>
									<input type="email" name="email" value="{{$data->email}}" class="form-control" readonly>
								</div>
								<div class="form-group">
									<a href="/home/{{$data->id}}/account/editacc" class="btn btn-block btn-warning"> Edit Account</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	@include('layouts/a/asset')