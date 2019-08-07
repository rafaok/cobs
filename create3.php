<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //print_r($_POST);
	//print_r($_FILES);
	//exit('data yang dipost ada di atas ');
	
    if (isset($_FILES['img']['photo']) &&isset($_FILES['img']['photo_name']) && isset($_FILES['img']['photo_upload']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['education'])) {

        $sql = "INSERT INTO personal_data (photo,photo_name,photo_upload,id,name,education VALUES (:photo, :photo_name, :photo_upload,:id,:name,:education)";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("ssi", $_FILES['img']['photo'],$_FILES['img']['photo_name'],$_FILES['img']['photo_upload'],$_POST['id'],$_POST['name'],$_POST['education']);
            if ($stmt->execute()) {
                header("location: employees.php");
                exit();
            } else {
                echo "Error! Please try again later.";
            }
            $stmt->close();
        }
    }

    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="shortcut icon" type="image/png" href=""/>

  <title>Add New Employee</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
  
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
		
		  <div>
			<h2>Personal Data</h2>
		  </div>
		

        <!-- Begin Page Content -->
		<form method="POST" class="form-horizontal" id="personal_data_form" enctype="multipart/form-data">
			<div class="container-fluid">
			  <div class="row ">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet box purple-wisteria">
                        <div class="portlet-title">
                            <div class="caption">
								<h4><strong>Personal Details</strong></h4>
                            </div>
						</div>
                        <div class="portlet-body">
                                <div class="form-body">
                                    <div class="form-group ">
                                        <label class="control-label col-md-3">Photo<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    <span class="btn default btn-file">
                                                    <input type="file" id="img" name="img" required/></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ID<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="id" name="id" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Education<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="education" name="education" class="form-control" required>
                                        </div>
                                    </div>
									
									<div class="form-actions">
										<div class="_POST">
											<div class="col-md-6">
												<div class="_POST">
													<div class="col-md-offset-3 col-md-9">
														<input type="submit" class="btn btn-primary" value="Submit">
														<a href="employees.php" class="btn btn-default">Cancel</a>
													</div>
												</div>
											</div>
											<div class="col-md-6">
											</div>
										</div>
									</div>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
			</div>
      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
<script type="text/javascript">

	$("#uploadForm").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
			url: "uploadd.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data){
				$("#targetLayer").html(data);
			},
			error: function(){} 	        
		});
	}));
	
	
</script>
</html>