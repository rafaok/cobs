<?php
require_once "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// var_dump($_POST);
	
	
	print_r($_POST);
	print_r($_FILES);
	exit('data yang dipost ada di atas ');
	
    if (isset($_FILES['img']['photo']) &&isset($_FILES['img']['photo_name']) && isset($_FILES['img']['photo_upload']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['education']) && isset($_POST['pob']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['merrital_status']) && isset($_POST['phone']) && isset($_POST['e_addr'])&& isset($_POST['province']) && isset($_POST['kab']) && isset($_POST['kec']) && isset($_POST['kel']) && isset($_POST['address']) && isset($_POST['ktp']) && isset($_POST['kk']) && isset($_POST['npwp']) && isset($_POST['npwp_addr']) && isset($_POST['bpjs_tk_status']) && isset($_POST['bpjs_tk']) && isset($_POST['bpjs_tk_desc']) && isset($_POST['bpjs_kes_status']) && isset($_POST['bpjs_kes']) && isset($_POST['bpjs_kes_desc']) && isset($_POST['bpjs_pens_status']) && isset($_POST['bpjs_pens']) && isset($_POST['bpjs_pens_desc']) && isset($_POST['card_status']) && isset($_POST['card_number']) && isset($_POST['ac_code']) && isset($_POST['ac_name']) && isset($_POST['ac_num']) && isset($_POST['bank_name']) && isset($_POST['note']) && isset($_POST['status']) && isset($_POST['position']) && isset($_POST['position_desc']) && isset($_POST['project']) && isset($_POST['work_loc']) && isset($_POST['join_date']) && isset($_POST['finish_date']) && isset($_POST['sal_group']) && isset($_POST['month_rate']) && isset($_POST['sal_type']) && isset($_POST['transport']) && isset($_POST['dailyrho']) && isset($_POST['h_rate']) && isset($_POST['otrh']) && isset($_POST['ot_type']) && isset($_POST['pda']) && isset($_POST['dsa']) && isset($_POST['sa']) && isset($_POST['fix_allowance']) && isset($_POST['jkk']) && isset($_POST['jht1']) && isset($_POST['jht2']) && isset($_POST['jk']) && isset($_POST['kes1']) && isset($_POST['kes2']) && isset($_POST['jp1']) && isset($_POST['jp2']) && isset($_POST['cont_name']) && isset($_POST['cont_phone']) && isset($_POST['relation']) && isset($_FILES['cv']['cv']) && isset($_FILES['cv']['cv_name']) && isset($_FILES['cv']['cv_upload']) && isset($_FILES['offer_letter']['offer_letter']) && isset($_FILES['offer_letter']['offer_letter_name']) && isset($_FILES['offer_letter']['offer_letter_upload']) && isset($_FILES['join_letter']['join_letter']) && isset($_FILES['join_letter']['join_letter_name']) && isset($_FILES['join_letter']['join_letter_upload']) && isset($_FILES['cna']['cna']) && isset($_FILES['cna']['cna_name']) && isset($_FILES['cna']['cna_upload']) && isset($_FILES['hid']['hid']) && isset($_FILES['hid']['hid_name']) && isset($_FILES['hid']['hid_upload'])  && isset($_FILES['cp_bpjs_kes']['cp_bpjs_kes']) && isset($_FILES['cp_bpjs_kes']['cp_bpjs_kes_name']) && isset($_FILES['cp_bpjs_kes']['cp_bpjs_kes_upload']) && isset($_FILES['cp_bpjs_tk']['cp_bpjs_tk'])  && isset($_FILES['cp_bpjs_tk']['cp_bpjs_tk_name']) && isset($_FILES['cp_bpjs_tk']['cp_bpjs_tk_upload'])  && isset($_FILES['cp_bpjs_pens']['cp_bpjs_pens']) && isset($_FILES['cp_bpjs_pens']['cp_bpjs_pens_name']) && isset($_FILES['cp_bpjs_pens']['cp_bpjs_pens_upload'])&& isset($_FILES['cp_ktp']['cp_ktp']) && isset($_FILES['cp_ktp']['cp_ktp_name']) && isset($_FILES['cp_ktp']['cp_ktp_upload']) && isset($_FILES['cp_kk']['cp_kk']) && isset($_FILES['cp_kk']['cp_kk_name']) && isset($_FILES['cp_kk']['cp_kk_upload']) && isset($_FILES['cp_bank_acc']['cp_bank_acc']) && isset($_FILES['cp_bank_acc']['cp_bank_acc_name']) && isset($_FILES['cp_bank_acc']['cp_bank_acc_upload']) && isset($_FILES['cp_npwp']['cp_npwp'])  && isset($_FILES['cp_npwp']['cp_npwp_name'])  && isset($_FILES['cp_npwp']['cp_npwp_upload']) && isset($_FILES['cp_akta']['cp_akta']) && isset($_FILES['cp_akta']['cp_akta_name']) && isset($_FILES['cp_akta']['cp_akta_upload']) && isset($_POST['upload_on'])) {

        $sql = "INSERT INTO personal_data (photo,photo_name,photo_upload,id,name,education,pob,dob,gender,merrital_status,phone,e_addr,province,kab,kec,kel,address,ktp,kk,npwp,npwp_addr,bpjs_tk_status,bpjs_tk,bpjs_tk_desc,bpjs_kes_status,bpjs_kes,bpjs_kes_desc,bpjs_pens_status,bpjs_pens,bpjs_pens_desc,card_status,card_number,ac_code,ac_name,ac_num,bank_name,note,status,position,position_desc,project,work_loc,join_date,finish_date,sal_group,month_rate,sal_type,transport,dailyrho,h_rate,otrh,ot_type,pda,dsa,sa,fix_allowance,jkk,jht1,jht2,jk,kes1,kes2,jp1,jp2,cont_name,cont_phone,relation,cv,cv_name,cv_upload,offer_letter,offer_letter_name,offer_letter_upload,join_letter,join_letter_name,join_letter_upload,cna,cna_name,cna_upload,hid,hid_name,hid_upload,cp_bpjs_kes,cp_bpjs_kes_name,cp_bpjs_kes_upload,cp_bpjs_tk,cp_bpjs_tk_name,cp_bpjs_tk_upload,cp_bpjs_pens,cp_bpjs_pens_name,cp_bpjs_pens_upload,cp_ktp,cp_ktp_name,cp_ktp_upload,cp_kk,cp_kk_name,cp_kk_upload,cp_bank_acc,cp_bank_acc_name,cp_bank_acc_upload,cp_npwp,cp_npwp_name,cp_npwp_upload,cp_akta,cp_akta_name,cp_akta_upload,upload_on) VALUES (:photo, :photo_name, :photo_upload,:id,:name,:education,:pob,:dob,:gender,:merrital_status,:phone,:e_addr,:province,:kab,:kec,:kel,:address,:ktp,:kk,:npwp,:npwp_addr,:bpjs_tk_status,:bpjs_tk,:bpjs_tk_desc,:bpjs_kes_status,:bpjs_kes,:bpjs_kes_desc,:bpjs_pens_status,:bpjs_pens,:bpjs_pens_desc,:card_status,:card_number,:ac_code,:ac_name,:ac_num,:bank_name,:note,:status,:position,:position_desc,:project,:work_loc,:join_date,:finish_date,:sal_group,:month_rate,:sal_type,:transport,:dailyrho,:h_rate,:otrh,:ot_type,:pda,:dsa,:sa,:fix_allowance,:jkk,:jht1,:jht2,:jk,:kes1,:kes2,:jp1,:jp2,:cont_name,:cont_phone,:relation,:cv,:cv_name,:cv_upload,:offer_letter,:offer_letter_name,:offer_letter_upload,:join_letter,:join_letter_name,:join_letter_upload,:cna,:cna_name,:cna_upload,:hid,:hid_name,:hid_upload,:cp_bpjs_kes,:cp_bpjs_kes_name,:cp_bpjs_kes_upload,:cp_bpjs_tk,:cp_bpjs_tk_name,:cp_bpjs_tk_upload,:cp_bpjs_pens,:cp_bpjs_pens_name,:cp_bpjs_pens_upload,:cp_ktp,:cp_ktp_name,:cp_ktp_upload,:cp_kk,:cp_kk_name,:cp_kk_upload,:cp_bank_acc,:cp_bank_acc_name,:cp_bank_acc_upload,:cp_npwp,:cp_npwp_name,:cp_npwp_upload,:cp_akta,:cp_akta_name,:cp_akta_upload,:upload_on)";
		
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("ssi",$_FILES['img']['photo'],$_FILES['img']['photo_name'],$_FILES['img']['photo_upload'],$_POST['id'],$_POST['name'],$_POST['education'],$_POST['pob'],$_POST['dob'],$_POST['gender'],$_POST['merrital_status'],$_POST['phone'],$_POST['e_addr'],$_POST['province'],$_POST['kab'],$_POST['kec'],$_POST['kel'],$_POST['address'],$_POST['ktp'],$_POST['kk'],$_POST['npwp'],$_POST['npwp_addr'],$_POST['bpjs_tk_status'],$_POST['bpjs_tk'],$_POST['bpjs_tk_desc'],$_POST['bpjs_kes_status'],$_POST['bpjs_kes'],$_POST['bpjs_kes_desc'],$_POST['bpjs_pens_status'],$_POST['bpjs_pens'],$_POST['bpjs_pens_desc'],$_POST['card_status'],$_POST['card_number'],$_POST['ac_code'],$_POST['ac_name'],$_POST['ac_num'],$_POST['bank_name'],$_POST['note'],$_POST['status'],$_POST['position'],$_POST['position_desc'],$_POST['project'],$_POST['work_loc'],$_POST['join_date'],$_POST['finish_date'],$_POST['sal_group'],$_POST['month_rate'],$_POST['sal_type'],$_POST['transport'],$_POST['dailyrho'],$_POST['h_rate'],$_POST['otrh'],$_POST['ot_type'],$_POST['pda'],$_POST['dsa'],$_POST['sa'],$_POST['fix_allowance'],$_POST['jkk'],$_POST['jht1'],$_POST['jht2'],$_POST['jk'],$_POST['kes1'],$_POST['kes2'],$_POST['jp1'],$_POST['jp2'],$_POST['cont_name'],$_POST['cont_phone'],$_POST['relation'],$_FILES['cv']['cv'],$_FILES['cv']['cv_name'],$_FILES['cv']['cv_upload'],$_FILES['offer_letter']['offer_letter'],$_FILES['offer_letter']['offer_letter_name'],$_FILES['offer_letter']['offer_letter_upload'],$_FILES['join_letter']['join_letter'],$_FILES['join_letter']['join_letter_name'],$_FILES['join_letter']['join_letter_upload'],$_FILES['cna']['cna'],$_FILES['cna']['cna_name'],$_FILES['cna']['cna_upload'],$_FILES['hid']['hid'],$_FILES['hid']['hid_name'],$_FILES['hid']['hid_upload'],$_FILES['cp_bpjs_kes']['cp_bpjs_kes'],$_FILES['cp_bpjs_kes']['cp_bpjs_kes_name'],$_FILES['cp_bpjs_kes']['cp_bpjs_kes_upload'],$_FILES['cp_bpjs_tk']['cp_bpjs_tk'],$_FILES['cp_bpjs_tk']['cp_bpjs_tk_name'],$_FILES['cp_bpjs_tk']['cp_bpjs_tk_upload'],$_FILES['cp_bpjs_pens']['cp_bpjs_pens'],$_FILES['cp_bpjs_pens']['cp_bpjs_pens_name'],$_FILES['cp_bpjs_pens']['cp_bpjs_pens_upload'],$_FILES['cp_ktp']['cp_ktp'],$_FILES['cp_ktp']['cp_ktp_name'],$_FILES['cp_ktp']['cp_ktp_upload'],$_FILES['cp_kk']['cp_kk'],$_FILES['cp_kk']['cp_kk_name'],$_FILES['cp_kk']['cp_kk_upload'],$_FILES['cp_bank_acc']['cp_bank_acc'],$_FILES['cp_bank_acc']['cp_bank_acc_name'],$_FILES['cp_bank_acc']['cp_bank_acc_upload'],$_FILES['cp_npwp']['cp_npwp'],$_FILES['cp_npwp']['cp_npwp_name'],$_FILES['cp_npwp']['cp_npwp_upload'],$_FILES['cp_akta']['cp_akta'],$_FILES['cp_akta']['cp_akta_name'],$_FILES['cp_akta']['cp_akta_upload'],$_POST['upload_on']);
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

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="employee.php">
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
		
		  <div>
			<h2>Personal Data</h2>
		  </div>
		
          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

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
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Place of Birth<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="pob" name="pob" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth<span class="required">* </span></label>
                                        <div class="col-md-9">
											<input type="date" class="form-control" id="dob" name="dob" required>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM gender ORDER BY id_gender ASC";
										$res = mysqli_query($link,$sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="gender"  name="gender"  required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php 
													while ($row = mysqli_fetch_array($res)){ 
													// Lha, kenapa kok $_POST ku ganti $row 
													// Karena $_POST itu global variable yang listen ke data yang di POST.
													// 
													?>
														<option value="<?php echo $row['gender_value'] ?>"><?php echo $row['gender_value'] ?></option>
													<?php }
													} ?>
                                            </select>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM merrital_status ORDER BY id_merrital ASC";
										$res = mysqli_query($link,$sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Merrital Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="merrital_status" name="merrital_status"  required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['merrital_status_value'] ?>"><?php echo $row['merrital_status_value'] ?></option>
													<?php } ?>
												<?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="phone" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="e_addr" name="e_addr" class="form-control" required>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM a_id_territory WHERE level=1 ORDER BY NAMA ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Provinsi<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="province" name="province" required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ 
														$HTML="";
														while ($row = mysqli_fetch_array($res)){ ?>
															<option value="<?php echo $row['KODE_WILAYAH'] ?>"><?php echo $row['NAMA'] ?></option>
													<?php }?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kota/Kabupaten<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="kab" name="kab" onchange="pilihkabupaten(this.options[this.selectedIndex].value)"required>
                                            </select>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kecamatan<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="kec" name="kec" onchange="pilihkecamatan(this.options[this.selectedIndex].value)" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Desa/Kelurahan<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="kel" name="kel" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Address<span class="required">* </span></label>
                                        <div class="col-md-9">
											<textarea id="address" name="address" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">KTP Number<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="ktp" name="ktp" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">KK Number<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="kk" name="kk" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NPWP Number</label>
                                        <div class="col-md-9">
                                            <input type="text" id="npwp" name="npwp" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NPWP Address</label>
                                        <div class="col-md-9">
											<textarea id="npwp_addr" name="npwp_addr" class="form-control"></textarea>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM bpjs_tk_status ORDER BY id_bpjs_tk ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="bpjs_tk_status" name="bpjs_tk_status"  onchange="tk()" required>
                                                <option value=""></option>
													<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['id_bpjs_tk'] ?>"><?php echo $row['bpjs_tk_status_value'] ?></option>
													<?php }
													} ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Number</label>
                                        <div class="col-md-9">
                                            <input type="text" id="bpjs_tk" name="bpjs_tk" class="form-control" onchange="this.value" disabled>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Status Description</label>
                                        <div class="col-md-9">
											<textarea id="bpjs_tk_desc" name="bpjs_tk_desc" class="form-control"></textarea>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM bpjs_kes_status ORDER BY id_bpjs_kes ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="bpjs_kes_status" name="bpjs_kes_status" onchange="kes()" required>
                                                <option value=""></option>
													<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['id_bpjs_kes'] ?>"><?php echo $row['bpjs_kes_status_value'] ?></option>
													<?php }
													} ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Number</label>
                                        <div class="col-md-9">
                                            <input type="text" id="bpjs_kes" name="bpjs_kes" class="form-control" onchange="this.value"  disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Status Description</label>
                                        <div class="col-md-9">
											<textarea id="bpjs_kes_desc" name="bpjs_kes_desc" class="form-control"></textarea>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM bpjs_pens_status ORDER BY id_bpjs_pens ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Status</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="bpjs_pens_status" name="bpjs_pens_status" onchange="pens()">
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['id_bpjs_pens'] ?>"><?php echo $row['bpjs_pens_status_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Number</label>
                                        <div class="col-md-9">
                                            <input type="text" id="bpjs_pens" name="bpjs_pens" class="form-control" onchange="this.value" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Status Description</label>
                                        <div class="col-md-9">
											<textarea id="bpjs_pens_desc" name="bpjs_pens_desc" class="form-control"></textarea>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM card_status ORDER BY id_card ASC";
										$res = mysqli_query($link, $sql);
									?>
									<div class="form-group">
                                        <label class="col-md-3 control-label">ID Card Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="card_status" name="card_status" onchange="card()" required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['id_card'] ?>"><?php echo $row['card_status_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">ID Card Number</label>
										<div class="col-md-9">
                                             <input type="text" id="card_number" name="card_number" class="form-control" onchange="this.value" readonly>
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
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Code<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="ac_code" name="ac_code" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Holder<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="ac_name" name="ac_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Number<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="ac_num" name="ac_num" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Bank Name<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="bank_name" name="bank_name" class="form-control" required>
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
								<div class="form-body">
									<div class="form-group">
                                        <label class="col-md-3 control-label">Note</label>
                                        <div class="col-md-9">
											<textarea id="note" name="note" class="form-control"></textarea>
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
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Status<span class="required">* </span></label>
										<div class="col-md-9">
										<input type="text" id="status" name="status" class="form-control" readonly/></div>
                                    </div>
									<?php
										$sql = "SELECT * FROM position ORDER BY position_value ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Position<span class="required">* </span></label>
                                        <div id="select"class="col-md-9">
                                            <select class="form-control select2-single" id="position" name="position"   required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['id_position_desc'] ?>" ><?php echo $row['position_value'] ?></option>
													<?php } ?>
												<?php } ?>
											</select>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM position_desc LIMIT 1 ORDER BY position_desc_value ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Position Description<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="position_desc" name="position_desc" disabled>
											</select>	
										</div>
                                    </div>
									<?php
										$sql = "SELECT * FROM project ORDER BY project_name ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Project<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2-single" id="project" name="project">
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['project_name'] ?>"><?php echo $row['project_name'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM work_loc ORDER BY id_work_loc ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Work Location<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select  class="form-control select2-single" name="work_loc" id="work_loc" required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['work_loc_value'] ?>"><?php echo $row['work_loc_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Join Date<span class="required">* </span></label>
                                        <div class="col-md-9">
											<input type="date" class="form-control" id="join_date" name="join_date"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Finish Date<span class="required" required>* </span></label>
                                        <div class="col-md-9">
											<input type="date" class="form-control" id="finish_date" name="finish_date"/>
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
								<div class="form-body">
									<?php
										$sql = "SELECT * FROM sal_group ORDER BY sal_group_value ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary Group<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="sal_group" name="sal_group" required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['sal_group_value'] ?>"><?php echo $row['sal_group_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Monthly Rate<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="month_rate" name="month_rate" class="form-control" required>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM sal_type ORDER BY id_sal_type ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary Type<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="sal_type" name="sal_type" required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['sal_type_value'] ?>"><?php echo $row['sal_type_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Transport</label>
                                        <div class="col-md-9">
                                            <input type="text" id="transport" name="transport" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Daily Rate HO</label>
                                        <div class="col-md-9">
                                            <input type="text" id="dailyrho" name="dailyrho" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Hour Rate</label>
                                        <div class="col-md-9">
                                            <input type="text" id="h_rate" name="h_rate" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">OT Rate/Hour</label>
                                        <div class="col-md-9">
                                            <input type="text" id="otrh" name="otrh" class="form-control">
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM ot_type ORDER BY id_ot_type ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Overtime Type</label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="ot_type" name="ot_type">
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['ot_type_value'] ?>"><?php echo $row['ot_type_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Per Diem Allowance (Unfix)</label>
                                        <div class="col-md-9">
                                            <input type="text" id="pda" name="pda" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Daily Site Allowance</label>
                                        <div class="col-md-9">
                                            <input type="text" id="dsa" name="dsa" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Special Allowance</label>
                                        <div class="col-md-9">
                                            <input type="text" id="sa" name="sa" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Fixed Allowance<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="fix_allowance" name="fix_allowance" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JKK (1.74%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="jkk" name="jkk" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JHT (3.7%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="jht1" name="jht1" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JHT (2%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="jht2" name="jht2" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JK (0.3%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="jk" name="jk" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kes (4%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="kes1" name="kes1" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kes (1%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="kes2" name="kes2" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JP (1%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="jp1" name="jp1" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JP (2%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="jp2" name="jp2" class="form-control" readonly>
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
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Name<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="cont_name" name="cont_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Phone<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="cont_phone" name="cont_phone" class="form-control" required>
                                        </div>
                                    </div>
									<?php
										$sql = "SELECT * FROM relation ORDER BY id_relation ASC";
										$res = mysqli_query($link, $sql);
									?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Relation<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="relation" name="relation" required>
                                                <option value=""></option>
												<?php if (mysqli_num_rows($res)>0){ ?>
													<?php while ($row = mysqli_fetch_array($res)){ ?>
														<option value="<?php echo $row['relation_value'] ?>"><?php echo $row['relation_value'] ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
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
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Resume<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="resume" accept=".pdf" value="<?php echo $resume;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Offer letter<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
                                                    <input type="file" name="offer_letter" accept=".pdf" value="<?php echo $offer_letter;?>" required>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Join Letter<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="join_letter" accept=".pdf" value="<?php echo $join_letter;?>" required>
												</div>
											</div>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contract and Agreement<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cont_agr" accept=".pdf" value="<?php echo $cna;?>" required>
                                                </div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ID Proof<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="id_proof" accept=".pdf" value="<?php echo $hid;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy BPJS Kesehatan<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_bpjs_kes" accept=".pdf" value="<?php echo $cp_bpjs_kes;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy BPJS Ketenagakerjaan<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_bpjs_tk" accept=".pdf" value="<?php echo $cp_bpjs_tk;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy BPJS Pensiun</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_bpjs_pens" accept=".pdf" value="<?php echo $cp_bpjs_pens;?>">
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy KTP<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_ktp" accept=".pdf" value="<?php echo $cp_ktp;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy KK<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_kk" accept=".pdf" value="<?php echo $cp_kk;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy Bank Account<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_bank_acc" accept=".pdf" value="<?php echo $cp_bank_acc;?>" required>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy NPWP</label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_npwp" accept=".pdf" value="<?php echo $cp_npwp;?>">
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Copy Akta<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<input type="file" name="cp_akta" accept=".pdf" value="<?php echo $cp_akta;?>" required>
												</div>
											</div>
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; </span>
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
          <a class="btn btn-primary" href="login.php">Logout</a>
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
	
	
	
	/*function readURL(input) {  
	   $('.preview').show();
	  $('#blah').hide();
	  $('.preview').after('<img id="blah" src="#" alt="your image" style="display:none;"/>');
	  if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
		  $('#blah')
		  .attr('src', e.target.result)
		  .width(150)
		  .height(200);
		};
		reader.readAsDataURL(input.files[0]);
	  }
	}

	function getPreview(){
	  $('.preview').hide();
	  $('#blah').show();
	}*/

	/*$("#select").select2({
		allowClear: true
	});*/
	
	/*function viewPhoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo').attr('src', e.target.result);
            };
			reader.readAsDataURL(input.files[0]);
        }
    }*/
	$( "#ktp" ).on('input', function() {
		if ($(this).val().length>16) {
			alert('Please enter the correct KTP Number (16 digits)');       
		}
	});
	$( "#kk" ).on('input', function() {
		if ($(this).val().length>16) {
			alert('Please enter the correct KK Number (16 digits)');       
		}
	});
	$( "#npwp" ).on('input', function() {
		if ($(this).val().length>15) {
			alert('Please enter the correct NPWP Number (15 digits)');       
		}
	});
	$( "#bpjs_tk" ).on('input', function() {
		if ($(this).val().length>10) {
			alert('Please enter the correct BPJS TK Number (10 digits)');       
		}
	});
	$( "#bpjs_kes" ).on('input', function() {
		if ($(this).val().length>16) {
			alert('Please enter the correct BPJS Kesehatan Number (16 digits)');       
		}
	});
	$( "#bpjs_pens" ).on('input', function() {
		if ($(this).val().length>11) {
			alert('Please enter the correct BPJS Pensiun Number (10 digits)');       
		}
	});
	$( "#card_number" ).on('input', function() {
		if ($(this).val().length>17) {
			alert('Please enter the correct ID Number (17 digits)');       
		}
	});
	$( "#ac_number" ).on('input', function() {
		if ($(this).val().length>15) {
			alert('Please enter the correct Account Number (15 digits)');       
		}
	});
	
	$("#month_rate").change(function() {
		var rate = parseFloat(($("#month_rate").val())*0.75/100);;
		$('#fix_allowance').val(rate);
		var jkk = parseFloat(($("#month_rate").val())*1.74/100);
		$('#jkk').val(jkk); //shows value
		var jht1 = parseFloat(($("#month_rate").val())*3.7/100);
		$('#jht1').val(jht1);
		var jht2 = parseFloat(($("#month_rate").val())*2/100);
		$('#jht2').val(jht2);
		var jk = parseFloat(($("#month_rate").val())*0.3/100);
		$('#jk').val(jk);
		var kes1 = parseFloat(($("#month_rate").val())*4/100);
		$('#kes1').val(kes1);
		var kes2 = parseFloat(($("#month_rate").val())*1/100);
		$('#kes2').val(kes2);
		var jp1 = parseFloat(($("#month_rate").val())*1/100);
		$('#jp1').val(jp1);
		var jp2 = parseFloat(($("#month_rate").val())*2/100);
		$('#jp2').val(jkk);
	})
	
  
	var curday = function(sp){
	today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //As January is 0.
	var yyyy = today.getFullYear();

	if(dd<10) dd='0'+dd;
	if(mm<10) mm='0'+mm;
	return (yyyy+sp+mm+sp+dd);
	};
	$("#finish_date").change(function() {
		var today = new Date(curday('-'));
		var finish = new Date($("#finish_date").val());
		var status = document.getElementById('status')
		if( today.getTime() > finish.getTime() ){
			status.value = 'Non-Active'
		} else if( today.getTime() < finish.getTime()) {
			status.value = 'Active'
		} else {
			status.value = 'Non-Active'
		}
	})
	
	$("#position").change(function() {
		var selectedPosition = $("#position option:selected").val()
		$.ajax({
			type: "POST",
			url: "/test/loadPosition.php",
			data: { position_desc_code: selectedPosition }
		}).done(function(data) { 
			$("#position_desc").html(data) 
		})
	})
	
  //function pilihprovinsi(KODE_WILAYAH){
  /*
  function pilihprovinsi(){
	$(document).ready(function(){ // Nha kalo jquery, document ready ini sebenernya cukup sekali.
		$("#province").change(function(){
			var selectedProvince = $("#province option:selected").val();
			$.ajax({
				type: "POST", // trus request nya POST, 
				url: "/test/loadLocation.php", // dia kan ke loadLocation.php --- karena ngePOST nya ke situ
				data: {province : selectedProvince} // lha, data yang di POST itu ini. Bentuknya biasanyaa Array
				// kan di situ ada array dengan key 'province'
			}).done(function (data){
				$("#kab").html(data);
			});
		});
	});
   };
   */
   
   // Onchange Javascript
	$("#province").change(function(){
		var selectedProvince = $("#province option:selected").val() 
		
		$.ajax({
			type: "POST",
			url: "/test/loadLocation.php",
			data: { parent: selectedProvince }
		}).done(function(data) {
			$("#kab").html(data)
		})
	})
   
	  function pilihkabupaten(selectedValue){
		$.ajax({
			type: "POST",
			url: "/test/loadLocation.php",
			data: {parent: selectedValue}
		}).done(function (data){
			$("#kec").html(data);
		})
	   }
	   
	function pilihkecamatan(selectedValue){
		$.ajax({
			type: "POST",
			url: "/test/loadLocation.php",
			data: {parent: selectedValue}
		}).done(function (data){
			$("#kel").html(data);
		})
	}

	function card(){
		$("#card_number").change(function() {
			if ($("#card_status").val() == '1') {
				$("#card_number").prop("disabled", false);
			} else {
				$("#card_number").prop("disabled", true);
			}
		}).trigger('change');
	}
	
	function tk(){
		$("#bpjs_tk").change(function() {
			if ($("#bpjs_tk_status").val() == '1') {
				$("#bpjs_tk").prop("disabled", false);
			} else {
				$("#bpjs_tk").prop("disabled", true);
			}
		}).trigger('change');
	}
	  
	function kes(){
		$("#bpjs_kes").change(function() {
			if ($("#bpjs_kes_status").val() == '1') {
				$("#bpjs_kes").prop("disabled", false);
			} else {
				$("#bpjs_kes").prop("disabled", true);
			};
		}).trigger('change');
	}
	  
	function pens(){
		$("#bpjs_pens").change(function() {
			if ($("#bpjs_pens_status").val() == '1') {
				$("#bpjs_pens").prop("disabled", false);
			} else {
				$("#bpjs_pens").prop("disabled", true);
			};
		}).trigger('change');
	}
  
</script>
</html>
