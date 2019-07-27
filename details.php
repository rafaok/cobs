<?php
require_once "connection.php";

if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $sql = "SELECT * FROM personal_data WHERE id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

				$photo = $row['photo'];
				$id  = $row['id'];
				$name  = $row['name'];
				$education  = $row['education'];
				$pob  = $row['pob'];
				$dob  = $row['dob'];
				$gender  = $row['gender'];
				$merrital_status  = $row['merrital_status'];
				$phone  = $row['phone'];
				$e_addr  = $row['e_addr'];
				$province  = $row['province'];
				$kab  = $row['kab'];
				$kec  = $row['kec'];
				$kel  = $row['kel'];
				$address  = $row['address'];
				$ktp  = $row['ktp'];
				$kk  = $row['kk'];
				$npwp  = $row['npwp'];
				$npwp_addr  = $row['npwp_addr'];
				$bpjs_tk_status  = $row['bpjs_tk_status'];
				$bpjs_tk  = $row['bpjs_tk'];
				$bpjs_tk_desc  = $row['bpjs_tk_desc'];
				$bpjs_kes_status  = $row['bpjs_kes_status'];
				$bpjs_kes  = $row['bpjs_kes'];
				$bpjs_kes_desc  = $row['bpjs_kes_desc'];
				$bpjs_pens_status  = $row['bpjs_pens_status'];
				$bpjs_pens  = $row['bpjs_pens'];
				$bpjs_pens_desc  = $row['bpjs_kes_desc'];
				$card_status  = $row['card_status'];
				$card_number  = $row['card_number'];
				
				$ac_code = $row['ac_code'];
				$ac_name = $row['ac_name'];
				$ac_num = $row['ac_num'];
				$bank_name = $row['bank_name'];
				
				$note = $row['note'];
				
				$status = $row['status'];
				$position = $row['position'];
				$project = $row['project'];
				$work_loc = $row['work_loc'];
				$join_date = $row['join_date'];
				$finish_date = $row['finish_date'];
				
				$sal_group = $row['sal_group'];
				$month_rate = $row['month_rate'];
				$sal_type = $row['sal_type'];
				$transport = $row['transport'];
				$dailyrho = $row['dailyrho'];
				$h_rate = $row['h_rate'];
				$otrh = $row['otrh'];
				$ot_type = $row['ot_type'];
				$pda = $row['pda'];
				$dsa = $row['dsa'];
				$sa = $row['sa'];
				$fix_allowance = $row['fix_allowance'];
				$jkk = $row['jkk'];
				$jht1 = $row['jht1'];
				$jht2 = $row['jht2'];
				$jk = $row['jk'];
				$kes1 = $row['kes1'];
				$kes2 = $row['kes2'];
				$jp1 = $row['jp1'];
				$jp2 = $row['jp2'];
				
				$cont_name = $row['cont_name'];
				$cont_phone = $row['cont_phone'];
				$relation = $row['relation'];

				$cv = $row['cv'];
				$cv_name = $row['cv_name'];
				$cv_upload = $row['cv_upload'];
				$offer_letter = $row['offer_letter'];
				$offer_letter_name = $row['offer_letter_name'];
				$offer_letter_upload = $row['offer_letter_upload'];
				$join_letter = $row['join_letter'];
				$join_letter_name = $row['join_letter_name'];
				$join_letter_upload = $row['join_letter_upload'];
				$cna = $row['cna'];
				$cna_name = $row['cna_name'];
				$cna_upload = $row['cna_upload'];
				$hid = $row['hid'];
				$hid_name = $row['hid_name'];
				$hid_upload = $row['hid_upload'];
				$cp_bpjs_kes = $row['cp_bpjs_kes'];
				$cp_bpjs_kes_name = $row['cp_bpjs_kes_name'];
				$cp_bpjs_tk = $row['cp_bpjs_tk'];
				$cp_bpjs_tk_name = $row['cp_bpjs_tk_name'];
				$cp_bpjs_tk_upload = $row['cp_bpjs_tk_upload'];
				$cp_bpjs_pens = $row['cp_bpjs_pens'];
				$cp_bpjs_pens_name = $row['cp_bpjs_pens_name'];
				$cp_bpjs_pens_upload = $row['cp_bpjs_pens_upload'];
				$cp_ktp = $row['cp_ktp'];
				$cp_ktp_name = $row['cp_ktp_name'];
				$cp_ktp_upload = $row['cp_ktp_upload'];
				$cp_kk = $row['cp_kk'];
				$cp_kk_name = $row['cp_kk_name'];
				$cp_kk_upload = $row['cp_kk_upload'];
				$cp_bank_acc = $row['cp_bank_acc'];
				$cp_bank_acc_name = $row['cp_bank_acc_name'];
				$cp_bank_acc_upload = $row['cp_bank_acc_upload'];
				$cp_npwp = $row['cp_npwp'];
				$cp_npwp_name = $row['cp_npwp_name'];
				$cp_npwp_upload = $row['cp_npwp_upload'];
				$cp_akta = $row['cp_akta'];
				$cp_akta_name = $row['cp_akta_name'];
				$cp_akta_upload = $row['cp_akta_upload'];
				$upload_on = $row['upload_on'];
            } else {
                echo "Error1! Please try again later.";
                exit();
            }

        } else {
            echo "Error2! Please try again later.";
            exit();
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo "Error3! Please try again later.";
    exit();
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
      <li class="nav-item active">
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

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
			<div class="row ">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet box purple-wisteria">
                        <div class="portlet-title">
                            <div class="caption">
								<h4><strong>Personal Details</strong></h4>
                            </div>
						</div>
                        <div class="portlet-body">
                            <form  class="form-horizontal" id="personal_details_form" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="form-group ">
                                        <label class="control-label col-md-3">Photo</label>
                                        <div class="col-md-9">
											<span><img src='images/".$data['photo']."' width='100' height='100'></span>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ID</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"><?php echo $id;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"><?php echo $name;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Education</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"><?php echo $education;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Place of Birth</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"><?php echo $pob;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"><?php echo $dob;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender</label>
										<div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $gender;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Merrital Status</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $merrital_status;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $phone;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $e_addr;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Provinsi</label>
                                        <div class="col-md-9">                                                 
											<p class="form-control-static"><?php echo $province;?></p>                                               
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kota/Kabupaten</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $kab;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kecamatan</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $kec;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kelurahan</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $kel;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Address</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $address;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">KTP Number</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $ktp;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">KK Number</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $kk;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NPWP Number</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $npwp;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NPWP Address</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $npwp_addr;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Status</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $bpjs_tk_status;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Number</label>
                                        <div class="col-md-9">                                             
											<p class="form-control-static"><?php echo $bpjs_tk;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Description</label>
                                        <div class="col-md-9">                                        
											<p class="form-control-static"><?php echo $bpjs_tk_desc;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Status</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $bpjs_kes_status;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Number</label>
                                        <div class="col-md-9">                                               
											<p class="form-control-static"><?php echo $bpjs_kes;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Description</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $bpjs_kes_desc;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Status</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $bpjs_pens_status;?></p>
										</div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Number</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $bpjs_pens;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Status Description</label>
                                        <div class="col-md-9">                                               
											<p class="form-control-static"><?php echo $bpjs_pens_desc;?></p>
										</div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">ID Card Status</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $card_status;?></p>
										</div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">ID Card Number</label>
										<div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $card_number;?></p>
										</div>
                                    </div>
                                </div>
							</form>
                        </div>
					</div>
					
					
					<hr>
                    <div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
								<br><h4><strong>Bank Account Details</strong></h4>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" id="bank_details_form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Code</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $ac_code;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Holder</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $ac_name;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Number</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $ac_num;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Bank Name</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $bank_name;?></p>
										</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
								<br><h4><strong>Note</strong></h4>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" id="note_form">
                                <div class="form-body">
									<div class="form-group">
                                        <label class="col-md-3 control-label">Note</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $note;?></p>
										</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
                <div class="col-md-6 col-sm-6">
                    <div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
								<h4><strong>Company Details</strong></h4>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" id="company_details_form">
								<div id="alert_company"></div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $status;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Position</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $position;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Position Description</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $position_desc;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Project</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $project;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Work Location</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $work_loc;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Join Date</label>
                                        <div class="col-md-9">
											<p class="form-control-static"><?php echo $join_date;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Finish Date</label>
                                        <div class="col-md-9">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <p class="form-control-static"><?php echo $finish_date;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
					<hr>
                    <div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
								<br><h4><strong>Salary Details</strong></h4>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" id="salary_details_form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary Group</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $sal_group;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Monthly Rate</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static">Rp. <?php echo $month_rate;?></p></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary Type</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static">Rp. <?php echo $sal_type;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Transport</label>
                                        <div class="col-md-9">
											<p class="form-control-static">Rp. <?php echo $transport;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Daily Rate HO</label>
                                        <div class="col-md-9">
											<p class="form-control-static">Rp. <?php echo $dailyrho;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Hour Rate</label>
                                        <div class="col-md-9">
											<p class="form-control-static">Rp. <?php echo $h_rate;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">OT Rate/Hour</label>
                                        <div class="col-md-9">
											<p class="form-control-static">Rp. <?php echo $otrh;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Overtime Type</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $ot_type;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Per Diem Allowance (Unfix)</label>
                                        <div class="col-md-9">
											<p class="form-control-static">Rp. <?php echo $pda;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Daily Site Allowance</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static">Rp. <?php echo $dsa;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Special Allowance</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static">Rp. <?php echo $sa;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Fixed Allowance</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static">Rp. <?php echo $fix_allowance;?></p></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JKK (1.74%)</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static">Rp. <?php echo $jkk;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JHT (3.7%)</label>
                                        <div class="col-md-9">                                             
											<p class="form-control-static">Rp. <?php echo $jht1;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JHT (2%)</label>
                                        <div class="col-md-9">                                              
											<p class="form-control-static">Rp. <?php echo $jht2;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JK (0.3%)</label>
                                        <div class="col-md-9">                                              
											<p class="form-control-static">Rp. <?php echo $jk;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kes (4%)</label>
                                        <div class="col-md-9">                                              
											<p class="form-control-static">Rp. <?php echo $kes1;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kes (1%)</label>
                                        <div class="col-md-9">                                               
											<p class="form-control-static">Rp. <?php echo $kes2;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JP (1%)</label>
                                        <div class="col-md-9">
											<p class="form-control-static">Rp. <?php echo $j;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JP (2%)</label>
                                        <div class="col-md-9">                                            
											<p class="form-control-static">Rp. <?php echo $jp2;?></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
					<hr>
                    <div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
								<br><h4><strong>Emergency Contact</strong></h4>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" id="cont_name_form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Name</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $cont_name;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Phone</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $cont_phone;?></p>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Relation</label>
                                        <div class="col-md-9">                                                
											<p class="form-control-static"><?php echo $relation;?></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
					<hr>
					<div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
								<br><h4><strong>Documents</strong></h4>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" id="document_form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Resume</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-exists ">Change</span>
                                                              <input type="file" name="resume" value="<?php echo $resume;?>" >
													</span>
													<a href="#" class="input-group-addon fileinput-exists" data-dismiss="fileinput"><button class="button">Remove</button></a>
                                                        <div class="col-md-3">
															<a href="#" target="_blank" class="btn purple"><button class="button">View</button></a>
                                                        </div>
                                                </div>
											</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Offer letter</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-exists "> Change </span>
                                                            <input type="file" name="offer_letter" value="<?php echo $offer_letter;?>" required>
													</span>
													<a href="#" class="input-group-addon fileinput-exists" data-dismiss="fileinput"><button class="button">Remove </button></a>
														<div class="col-md-3">
															<a href="#" target="_blank" class="btn purple"><button class="button">View </button></a>
														</div>
                                                </div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Join Letter</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
															<span class="fileinput-exists ">Change</span>
                                                              <input type="file" name="join_letter" value="<?php echo $join_letter;?>" required>
														</span>
														<a href="#" class="input-group-addon fileinput-exists" data-dismiss="fileinput"><button class="button">Remove </button></a>
                                                            <div class="col-md-3">
                                                                <a href="#" target="_blank" class="btn purple"><button class="button">View</button></a>
                                                            </div>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contract and Agreement</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-new"> Select file </span>
															<span class="fileinput-exists "> Change </span>
                                                              <input type="file" name="cont_agr" value="<?php echo $cont_agr;?>" required>
													</span>
														<a href="#" class="input-group-addon fileinput-exists" data-dismiss="fileinput"><button class="button">Remove </button></a>
                                                            <div class="col-md-3">
                                                                <a href="#" target="_blank" class="btn purple"><button class="button">
                                                                View </button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ID Proof</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
															<span class="fileinput-exists "> Change </span>
                                                              <input type="file" name="id_proof" value=<?php echo $id_proof;?>" required>
														</span>
														<a href="#" class="input-group-addon fileinput-exists" data-dismiss="fileinput"><button class="button">Remove </button></a>
                                                            <div class="col-md-3">
                                                                <a href="#" target="_blank" class="btn purple"><button class="button">
                                                                View </button></a>
                                                            </div>
												</div>
											</div>
										</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
				

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PT. Jasa Guna Cemerlang 2019</span>
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
        <div class="modal-body">Don't forget to select "Logout" to end your current session.</div>
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
</html>
