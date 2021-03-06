<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>List of Product</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="col-md-12">
					<h1>Product
						<small>List</small>
						<div class="float-right">
							<a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal"
								data-target="#Modal_Add">
								Add New
							</a>
						</div>
					</h1>
				</div>
				<table class="table table-stripped" id="mydata">
					<thead>
						<tr>
							<th>Product Code</th>
							<th>Product Name</th>
							<th>Price</th>
							<th style="text-align: right;">Action</th>
						</tr>
					</thead>
					<tbody id="show_data">

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Modal Add -->
	<form>
		<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">
							Add New Product
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 col-form-label">
								Product Code
							</label>
							<div class="col-md-10">
								<input type="text" name="product_code" id="product_code" class="form-control"
									placeholder="Product Code">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">
								Product Name
							</label>
							<div class="col-md-10">
								<input type="text" name="product_name" id="product_name" class="form-control"
									placeholder="Product Name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">
								Price
							</label>
							<div class="col-md-10">
								<input type="text" name="price" id="price" class="form-control"
									placeholder="Product Price">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">
							Close
						</button>
						<button type="submit" id="btn_save" class="btn btn-primary">
							Save
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- End of Modal Add -->

	<!-- Modal Delete -->
	<form>
		<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">
							Edit Product
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 col-form-label">
								Product Code
							</label>
							<div class="col-md-10">
								<input type="text" name="product_code_edit" id="product_code_edit" class="form-control"
									placeholder="Product Code" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">
								Product Name
							</label>
							<div class="col-md-10">
								<input type="text" name="product_name_edit" id="product_name_edit" class="form-control"
									placeholder="Product Name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">
								Price
							</label>
							<div class="col-md-10">
								<input type="text" name="price_edit" id="price_edit" class="form-control"
									placeholder="Product Price">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">
							Close
						</button>
						<button type="submit" id="btn_save" class="btn btn-primary">
							Update
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- End of Modal Edit -->

	<!-- Modal Delete -->
	<form>
		<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">
							Add New Product
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<strong>Are you sure to delete data?</strong>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">
							No
						</button>
						<button type="submit" id="btn_delete" class="btn btn-primary">
							Yes
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- End of Modal Delete -->

	<!-- Script -->
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
	<!-- End of Script -->
</body>

</html>
