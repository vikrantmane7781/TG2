<html>

<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
		}

		.box {
			width: 1270px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 25px;
		}
	</style>
</head>

<body>
	<div class="container box">
		<h1 align="center"></h1>
		<br />
		<div class="table-responsive">
			<br />
			<div align="center">
				<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add New Coloumn</button>
			</div>
			<br /><br />

		</div>
	</div>
</body>

</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="POST" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Column</h4>
				</div>
				<div class="modal-body">
					<label>Enter Table Name</label>
					<input type="text" name="table_name" id="table_name" class="form-control" />
					<br />
					<label>Enter Column Name</label>
					<input type="text" name="first_column" id="first_column" class="form-control" />
					<br />

					<label>Select Datatype</label>
					<select class="form-control" id="tpd" name="tpd">
						<option value="VARCHAR">VARCHAR</option>
						<option value="INT">INT</option>
						<option value="TIMESTAMP">TIMESTAMP</option>
						<option value="TIME">TIME</option>
						<option value="DATE">DATE</option>
					</select>
					<br />

					<label>Enter Value</label>
					<input type="text" name="lenv" id="lenv" class="form-control" />
					<br />

				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$('#add_button').click(function() {
			$('#user_form')[0].reset();
			$('.modal-title').text("Add New Column");
			$('#action').val("Add");
			$('#operation').val("Add");
			$('#user_uploaded_image').html('');
		});

		//var dataTable = $('#user_data').DataTable({
		//	"processing": true,
		//	"serverSide": true,
		//	"order": [],
		//	"ajax": {
		//		url: "fetch.php",
		//		type: "POST"
		//	},
		//	"columnDefs": [{
		//		"targets": [0, 2, 3],
		//		"orderable": false,
		//	}, ],
		//
		//});

		$(document).on('submit', '#user_form', function(event) {
			event.preventDefault();
			var first_column = $('#first_column').val();
			var table_name = $('#table_name').val();
			var tpd = $('#tpd').val();
			var len = $('#lenv').val();
			if (first_column != '' && table_name != '') {

				$.ajax({
					url: "insert.php",
					method: 'POST',
					data: {
						table: table_name,
						first: first_column,
						tpd: tpd,
						len: len
					},

					success: function(data) {
						alert(data)
						$('#user_form')[0].reset();
						$('#userModal').modal('hide');
						dataTable.ajax.reload();
					}
				});
			}
			//	$.ajax({
			//		url: "insert.php",
			//		method: 'POST',
			//		data: new FormData(this),
			//		contentType: false,
			//		processData: false,
			//		success: function(data) {
			//			alert(data);
			//			$('#user_form')[0].reset();
			//			$('#userModal').modal('hide');
			//			dataTable.ajax.reload();
			//		}
			//	});
			//	alert(data)
			//} else {
			//	alert("Both Fields are Required");
			//}
		});



	});
</script>