<?php
require_once "connection.php";
$sql = "SELECT * FROM personal_data";
$result = $link->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Employee List</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
      </a>
	  
	  <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Employee List -->
      <li class="nav-item">
        <a class="nav-link" href="employees.php">
          <span>Employee List</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

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

		  <h1 class="nav-item">
			Personal Database 
		  </h1>
		  
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
			
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span> 
                <img class="img-profile rounded-circle" src="img/admin.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h4 class="h4 mb-2 text-gray-800">Employee List</h4>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
				<a href="create.php" id="btnAddEmployee" class="btn"style="background-color: #0000FF; color: white; font-size: 14px;">Add New Employee</a>
				<button id="btnDownload" class="btn"style="background-color: #2E8B57; color: white; font-size: 14px;">Download</button>
                <button id="btnCheckAll" class="btn" style="background-color: #800080; color: white; font-size: 14px;" onclick="checkAll(id)">Check All</button>
                <button id="btnUncheckAll" class=" btn" style="background-color: #800080; color: white; font-size: 14px;" onclick="uncheckAll()">Uncheck All</button>
            </div>
			<?php
			if($result->num_rows > 0){
					echo "<div class='card-body'>";
					echo "<div class='table-responsive'>";
					echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
					echo "<thead><tr>";
					echo "<th>ID</th>";
					echo "<th>Name</th>";
					echo "<th>Position</th>";
					echo "<th>Project</th>";
					echo "<th>Status</th>";
					echo "<th>Phone</th>";
					echo "<th>Action</th>";
					echo "<th></th>";
					echo "</tr></thead><tbody>";
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['position']."</td>";
						echo "<td>".$row['project']."</td>";
						echo "<td>".$row['status']."</td>";
						echo "<td>".$row['phone']."</td>";
						echo "<td>";
						?><a class='btn black' href='details.php?id=?'><i class='fa fa-eye'></i></a>
						<a class='btn purple' href='update.php?id='><i class='fa fa-edit'></i></a>
						</td><td>
						<input type='checkbox' id='check' name='check[]' value='<?php echo $id; ?> onclick="onCheck()"'/>
						<?php 
						echo "</td></tr>";
					}
					echo "</tbody>";
					echo "</table></div></div>";
					;
					$result->free();
				}else {
					echo "<p class='lead'><em>No records were found.</em></p>";
				}
			$link->close();
			?>
		  </div>
		</div>
	  </div>


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;  2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

<script type="text/javascript">


 function onCheck() {
   var checkboxes = $("#check").val();
 
   if (id.checked) {
	 alert("checked");
     for (var i = 0; i < checkboxes.length; i++) { 
       checkboxes[i].checked = true;
     }
   } else {
     for (var i = 0; i < checkboxes.length; i++) {
       checkboxes[i].checked = false;
     }
   }
  }
 
</script>
</html>
