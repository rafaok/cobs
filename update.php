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

				$param_photo  = $row['photo'];
				$param_id  = $row['id'];
				$param_name  = $row['name'];
				$param_education  = $row['education'];
				$param_pob  = $row['pob'];
				$param_dob  = $row['dob'];
				$param_gender  = $row['gender'];
				$param_merrital_status  = $row['merrital_status'];
				$param_phone  = $row['phone'];
				$param_e_addr  = $row['e_addr'];
				$param_desa  = $row['desa'];
				$param_subdistrict  = $row['subdistrict'];
				$param_district  = $row['district'];
				$param_province  = $row['province'];
				$param_address  = $row['address'];
				$param_ktp  = $row['ktp'];
				$param_kk  = $row['kk'];
				$param_npwp  = $row['npwp'];
				$param_npwp_addr  = $row['npwp_addr'];
				$param_bpjs_tk_status  = $row['bpjs_tk_status'];
				$param_bpjs_tk  = $row['bpjs_tk'];
				$param_bpjs_tk_desc  = $row['bpjs_tk_desc'];
				$param_bpjs_kes_status  = $row['bpjs_kes_status'];
				$param_bpjs_kes  = $row['bpjs_kes'];
				$param_bpjs_kes_desc  = $row['bpjs_kes_desc'];
				$param_bpjs_pens_status  = $row['bpjs_pens_status'];
				$param_bpjs_pens  = $row['bpjs_pens'];
				$param_bpjs_pens_desc  = $row['bpjs_kes_desc'];
				$param_card_status  = $row['card_status'];
				$param_card_number  = $row['card_number'];

				$param_ac_code  = $row['ac_code'];
				$param_ac_name  = $row['ac_name'];
				$param_bank_name  = $row['bank_name'];
				$param_note  = $row['note'];
				$param_status  = $row['status'];
				$param_position  = $row['position'];
				$param_position_desc  = $row['position_desc'];
				$param_project  = $row['project'];
				$param_work_loc  = $row['work_loc'];
				$param_join_date  = $row['join_date'];
				$param_finish_date  = $row['finish_date'];
				$param_sal_group  = $row['sal_group'];
				$param_month_rate = $row['month_rate'];
				$param_sal_type  = $row['sal_type'];
				$param_transport  = $row['transport'];
				$param_dailyrho  = $row['dailyrho'];
				$param_h_rate  = $row['h_rate'];
				$param_otrh  = $row['otrh'];
				$param_ot_type = $row['ot_type'];
				$param_pda  = $row['pda'];
				$param_dsa  = $row['dsa'];
				$param_sa  = $row['sa'];
				$param_fix_allowance  = $row['fix_allowance'];
				$param_jkk  = $row['jkk'];
				$param_jht1  = $row['jht1'];
				$param_jht2 = $row['jht2'];
				$param_jk  = $row['jk'];
				$param_kes1 = $row['kes1'];
				$param_kes2  = $row['kes2'];
				$param_jp1  = $row['jp1'];
				$param_jp2  = $row['jp2'];
				
				$param_cont_name = $row['cont_name'];
				$param_cont_phone  = $row['cont_phone'];
				$param_relation  = $row['relation'];
				
				$param_cv  = $row['cv'];
				$param_cv_name  = $row['cv_name'];
				$param_cv_upload  = $row['cv_upload'];
				$param_offer_letter  = $row['offer_letter'];
				$param_offer_letter_name  = $row['offer_letter_name'];
				$param_offer_letter_upload  = $row['offer_letter_upload'];
				$param_join_letter  = $row['join_letter'];
				$param_join_letter_name  = $row['join_letter_name'];
				$param_join_letter_upload  = $row['join_letter_upload'];
				$param_cna  = $row['cna'];
				$param_cna_name  = $row['cna_name'];
				$param_cna_upload  = $row['cna_upload'];
				$param_hid = $row['hid'];
				$param_hid_name = $row['hid_name'];
				$param_hid_upload = $row['hid_upload'];
				$param_cp_bpjs_kes  = $row['cp_bpjs_kes'];
				$param_cp_bpjs_kes_name  = $row['cp_bpjs_kes_name'];
				$param_cp_bpjs_kes_upload  = $row['cp_bpjs_kes_upload'];
				$param_cp_bpjs_tk = $row['cp_bpjs_tk'];
				$param_cp_bpjs_tk_name = $row['cp_bpjs_tk_name'];
				$param_cp_bpjs_tk_upload = $row['cp_bpjs_tk_upload'];
				$param_cp_bpjs_pens  = $row['cp_bpjs_pens'];
				$param_cp_bpjs_pens_name  = $row['cp_bpjs_pens_name'];
				$param_cp_bpjs_pens_upload  = $row['cp_bpjs_pens_upload'];
				$param_cp_ktp  = $row['cp_ktp'];
				$param_cp_ktp_name  = $row['cp_ktp_name'];
				$param_cp_ktp_upload  = $row['cp_ktp_upload'];
				$param_cp_kk  = $row['cp_kk'];
				$param_cp_kk_name  = $row['cp_kk_name'];
				$param_cp_kk_upload  = $row['cp_kk_upload'];
				$param_cp_bank_acc  = $row['cp_bank_acc'];
				$param_cp_bank_acc_name  = $row['cp_bank_acc_name'];
				$param_cp_bank_acc_upload  = $row['cp_bank_acc_upload'];
				$param_cp_npwp  = $row['cp_npwp'];
				$param_cp_npwp_name  = $row['cp_npwp_name'];
				$param_cp_npwp_upload  = $row['cp_npwp_upload'];
				$param_cp_akta  = $row['cp_akta'];
				$param_cp_akta_name  = $row['cp_akta_name'];
				$param_cp_akta_upload  = $row['cp_akta_upload'];
				$param_upload_on  = $row['upload_on'];
            } else {
                echo "Error! Please try again later.";
                exit();
            }

        } else {
            echo "Error! Please try again later.";
            exit();
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo "Error! Please try again later.";
    exit();
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['photo']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['education'])
		&& isset($_POST['pob']) && isset($_POST['dob']) && isset($_POST['gender']) 
		&& isset($_POST['merrital_status']) && isset($_POST['phone']) && isset($_POST['e_addr'])
		&& isset($_POST['province']) && isset($_POST['kab']) && isset($_POST['kec']) 
		&& isset($_POST['kel']) && isset($_POST['address']) && isset($_POST['ktp']) 
		&& isset($_POST['kk']) && isset($_POST['npwp']) && isset($_POST['npwp_addr'])
		&& isset($_POST['bpjs_tk_status']) && isset($_POST['bpjs_tk']) && isset($_POST['bpjs_tk_desc'])
		&& isset($_POST['bpjs_kes_status']) && isset($_POST['bpjs_kes']) && isset($_POST['bpjs_kes_desc'])
		&& isset($_POST['bpjs_pens_status']) && isset($_POST['bpjs_pens']) && isset($_POST['bpjs_pens_desc'])        
		&& isset($_POST['card_status']) && isset($_POST['card_number']) && isset($_POST['ac_code'])
		&& isset($_POST['ac_name']) && isset($_POST['ac_num']) && isset($_POST['bank_name']) 
		&& isset($_POST['note']) && isset($_POST['status']) && isset($_POST['position'])
		&& isset($_POST['position_desc']) && isset($_POST['project']) && isset($_POST['work_loc'])
		&& isset($_POST['join_date']) && isset($_POST['finish_date']) && isset($_POST['sal_group'])
		&& isset($_POST['month_rate']) && isset($_POST['sal_type']) && isset($_POST['transport'])
		&& isset($_POST['dailyrho']) && isset($_POST['h_rate']) && isset($_POST['otrh']) 
		&& isset($_POST['ot_type']) && isset($_POST['pda']) && isset($_POST['dsa'])
		&& isset($_POST['sa']) && isset($_POST['fix_allowance']) && isset($_POST['jkk'])
		&& isset($_POST['jht1']) && isset($_POST['jht2']) && isset($_POST['jk'])
		&& isset($_POST['kes1']) && isset($_POST['kes2']) && isset($_POST['jp1'])
		&& isset($_POST['jp2']) && isset($_POST['cont_name']) && isset($_POST['cont_phone']) 
		&& isset($_POST['relation']) && isset($_POST['cv']) && isset($_POST['offer_letter'])
		&& isset($_POST['join_letter']) && isset($_POST['cna']) && isset($_POST['cna_name']) 
		&& isset($_POST['cna_upload']) && isset($_POST['hid'])&& isset($_POST['hid_name'])
		&& isset($_POST['hid_upload']) && isset($_POST['cp_bpjs_kes']) && isset($_POST['cp_bpjs_kes_name']) 
		&& isset($_POST['cp_bpjs_kes_upload']) && isset($_POST['cp_bpjs_tk']) && isset($_POST['cp_bpjs_tk_name']) 
		&& isset($_POST['cp_bpjs_tk_upload']) && isset($_POST['cp_bpjs_pens'])&& isset($_POST['cp_bpjs_pens_name'])
		&& isset($_POST['cp_bpjs_pens_upload']) && isset($_POST['cp_ktp']) && isset($_POST['cp_ktp_name'])
		&& isset($_POST['cp_ktp_upload']) && isset($_POST['cp_kk']) && isset($_POST['cp_kk_name']) 
		&& isset($_POST['cp_kk_upload']) && isset($_POST['cp_bank_acc']) && isset($_POST['cp_bank_acc_name']) 
		&& isset($_POST['cp_bank_acc_upload']) && isset($_POST['cp_npwp']) && isset($_POST['cp_npwp_name'])  
		&& isset($_POST['cp_npwp_upload']) && isset($_POST['cp_akta']) && isset($_POST['cp_akta_name']) 
		&& isset($_POST['cp_akta_upload']) && isset($_POST['upload_on'])) {

        $sql = "UPDATE personal_data SET photo = ?, id = ?,name = ?,education = ?,pob = ?,dob = ?,gender = ?,
				merrital_status = ?,phone = ?,e_addr = ?,province = ?,kab = ?,kec = ?,kel = ?,address = ?,ktp = ?,
				kk = ?,npwp = ?,npwp_addr = ?,bpjs_tk_status = ?,bpjs_tk = ?,bpjs_tk_desc = ?,bpjs_kes_status = ?,
				bpjs_kes = ?,bpjs_kes_desc = ?,bpjs_pens_status = ?,bpjs_pens = ?,bpjs_pens_desc = ?,card_status = ?,
				card_number = ?,ac_code = ?,ac_name = ?,ac_num = ?,bank_name = ?,note = ?,status = ?,position = ?,
				position_desc = ?,project = ?,work_loc = ?,join_date = ?,finish_date = ?,sal_group = ?,month_rate = ?,
				sal_type = ?,transport = ?,dailyrho = ?,h_rate = ?,otrh = ?,ot_type = ?,pda = ?,dsa = ?,sa = ?,
				fix_allowance = ?,jkk = ?,jht1 = ?,jht2 = ?,jk = ?,kes1 = ?,kes2 = ?,jp1 =  ?,jp2 = ?,cont_name = ?,
				cont_phone = ?,relation = ?,cv = ?,cv_name = ?,cv_upload = ?,offer_letter = ?,offer_letter_name = ?,
				offer_letter_upload = ?,join_letter = ?,join_letter_name = ?,join_letter_upload = ?,cna = ?,cna_name = ?,
				cna_upload = ?,hid = ?,hid_name = ?,hid_upload = ?,cp_bpjs_kes = ?,cp_bpjs_kes_name = ?,cp_bpjs_kes_upload = ?,
				cp_bpjs_tk = ?,cp_bpjs_tk_name = ?,cp_bpjs_tk_upload = ?,cp_bpjs_pens = ?,cp_bpjs_pens_name = ?,
				cp_bpjs_pens_upload = ?,cp_ktp = ?,cp_ktp_name = ?,cp_ktp_upload = ?,cp_kk = ?,cp_kk_name = ?,cp_kk_upload = ?,
				cp_bank_acc = ?,cp_bank_acc_name = ?,cp_bank_acc_upload = ?,cp_npwp = ?,cp_npwp_name = ?,cp_npwp_upload = ?,
				cp_akta = ?,cp_akta_name = ?,cp_akta_upload = ?, upload_on = ?";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("ssi",$_POST['photo'],$_POST['id'],$_POST['name'],$_POST['education'],$_POST['pob'],
								$_POST['dob'],$_POST['gender'],$_POST['merrital_status'],$_POST['phone'],
								$_POST['e_addr'],$_POST['province'],$_POST['kab'],$_POST['kec'],
								$_POST['kel'],$_POST['address'],$_POST['ktp'],$_POST['kk'],$_POST['npwp'],
								$_POST['npwp_addr'],$_POST['bpjs_tk_status'],$_POST['bpjs_tk'],$_POST['bpjs_tk_desc'],
								$_POST['bpjs_kes_status'],$_POST['bpjs_kes'],$_POST['bpjs_kes_desc'],
								$_POST['bpjs_pens_status'],$_POST['bpjs_pens'],$_POST['bpjs_pens_desc'],        
								$_POST['card_status'],$_POST['card_number'],$_POST['ac_code'],$_POST['ac_name'],
								$_POST['ac_num'],$_POST['bank_name'],$_POST['note'],$_POST['status'],$_POST['position'],
								$_POST['position_desc'],$_POST['project'],$_POST['work_loc'],$_POST['join_date'],
								$_POST['finish_date'],$_POST['sal_group'],$_POST['month_rate'],$_POST['sal_type'],
								$_POST['transport'],$_POST['dailyrho'],$_POST['h_rate'],$_POST['otrh'],$_POST['ot_type'],
								$_POST['pda'],$_POST['dsa'],$_POST['sa'],$_POST['fix_allowance'],$_POST['jkk'],
								$_POST['jht1'],$_POST['jht2'],$_POST['jk'],$_POST['kes1'],$_POST['kes2'],$_POST['jp1'],
								$_POST['jp2'],$_POST['cont_name'],$_POST['cont_phone'],$_POST['relation'],$_POST['cv'],
								$_POST['cv_name'],$_POST['cv_upload'],$_POST['offer_letter'],$_POST['offer_letter_name'],
								$_POST['offer_letter_upload'],$_POST['join_letter'],$_POST['join_letter_name'],
								$_POST['join_letter_upload'],$_POST['cna'],$_POST['cna_name'],$_POST['cna_upload'],
								$_POST['hid'],$_POST['hid_name'],$_POST['hid_upload'],$_POST['cp_bpjs_kes'],
								$_POST['cp_bpjs_kes_name'],$_POST['cp_bpjs_kes_upload'],$_POST['cp_bpjs_tk'],
								$_POST['cp_bpjs_tk_name'],$_POST['cp_bpjs_tk_upload'],$_POST['cp_bpjs_pens'],
								$_POST['cp_bpjs_pens_name'],$_POST['cp_bpjs_pens_upload'],$_POST['cp_ktp'],
								$_POST['cp_ktp_name'],$_POST['cp_ktp_upload'],$_POST['cp_kk'],$_POST['cp_kk_name'],
								$_POST['cp_kk_upload'],$_POST['cp_bank_acc'],$_POST['cp_bank_acc_name'],
								$_POST['cp_bank_acc_upload'],$_POST['cp_npwp'],$_POST['cp_npwp_name'],
								$_POST['cp_npwp_upload'],$_POST['cp_akta'],$_POST['cp_akta_name'],$_POST['cp_akta_upload'],
								$_POST['upload_on']);
            if ($stmt->execute()) {
                header("location: index.php");
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
                            <form method="POST" action="submit.php" class="form-horizontal" id="personal_details_form" enctype="multipart/form-data">
                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">

                                <div class="form-body">
                                    <div class="form-group ">
                                        <label class="control-label col-md-3">Photo</label>
                                        
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    <img style="height: 100px;" src="#">
                                                </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                    <span class="fileinput-new">
                                                    Select image </span>
                                                    <span class="fileinput-exists">
                                                    Change </span>
                                                    <input type="file" name="image" required>
                                                    </span>
                                                    <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                    <button class="button">
													Remove </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ID<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" value="<?php echo $id;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" value="<?php echo $name;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Education<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="edu" class="form-control" value="<?php echo $education;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Place of Birth<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="pob" class="form-control" value="<?php echo $pob;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth<span class="required">* </span></label>
                                        <div class="col-md-3">
                                            <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <input type="text" class="form-control" name="dob" value="<?php echo $dob;?>"  required>
                                                <span class="input-group-btn">
                                 <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="gender"  required>
                                                <option value="none" selected="true" disabled></option>
                                                <option value="male" <?php if ($_GET['gender'] == male) { echo ' selected="selected"'; } ?>>Male</option>
                                                <option value="female" <?php if ($_GET['gender'] == female) { echo ' selected="selected"'; } ?>>Female</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Merrital Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="merrital_status"  required>
                                                <option value="none"></option>
                                                <option value="single" <?php if ($_GET['merrital_status'] == single) { echo ' selected="selected"'; } ?>>SG</option>
                                                <option value="married0" <?php if ($_GET['merrital_status'] == merried0) { echo ' selected="selected"'; } ?>>M0</option>
                                                <option value="merried1" <?php if ($_GET['merrital_status'] == merried1) { echo ' selected="selected"'; } ?>>M1</option>
                                                <option value="merried2" <?php if ($_GET['merrital_status'] == merried2) { echo ' selected="selected"'; } ?>>M2</option>
                                                <option value="merried3" <?php if ($_GET['merrital_status'] == merried3) { echo ' selected="selected"'; } ?>>M3</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="e_addr" class="form-control" value="<?php echo $e_addr;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Desa<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="desa" class="form-control" value="<?php echo $desa;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Sub-District<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="subdistrict" class="form-control" value="<?php echo $subdistrict;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">District<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="district" class="form-control" value="<?php echo $district;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Province<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="province" class="form-control" value="<?php echo $province;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Address<span class="required">* </span></label>
                                        <div class="col-md-9">
											<textarea name="address" class="form-control" value="<?php echo $address;?>" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">KTP Number<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="ktp" class="form-control" value="<?php echo $ktp;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">KK Number<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="kk" class="form-control" value="<?php echo $kk;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NPWP Number</label>
                                        <div class="col-md-9">
                                            <input type="text" name="npwp" class="form-control" value="<?php echo $npwp;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NPWP Address</label>
                                        <div class="col-md-9">
											<textarea name="npwp_addr" class="form-control" value="<?php echo $npwp_addr;?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="bpjs_tk_status" required>
                                                <option value="none" selected="true" disabled></option>
                                                <option value="Active" <?php if ($_GET['bpjs_tk_status'] == Active) { echo ' selected="selected"'; } ?>>Active</option>
                                                <option value="Requested" <?php if ($_GET['bpjs_tk_status'] == Requested) { echo ' selected="selected"'; } ?>>Requested</option>
                                                <option value="Non-Active" <?php if ($_GET['bpjs_tk_status'] == Non-Active) { echo ' selected="selected"'; } ?>>Non Active</option>
                                                <option value="Other" <?php if ($_GET['bpjs_tk_status'] == Other) { echo ' selected="selected"'; } ?>>Other</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Number<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from BPJS Kesehatan Status*
                                            <input type="text" name="bpjs_tk" class="form-control" value="<?php echo $bpjs_tk;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Ketenagakerjaan Status Description<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from BPJS Kesehatan Status (Other)*
											<textarea name="bpjs_tk_desc" class="form-control" value="<?php echo $bpjs_kes_desc;?>" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="bpjs_kes_status" required>
                                                <option value="none" disabled></option>
                                                <option value="Active" <?php if ($_GET['bpjs_kes_status'] == Active) { echo ' selected="selected"'; } ?>>Active</option>
                                                <option value="Requested" <?php if ($_GET['bpjs_kes_status'] == Requested) { echo ' selected="selected"'; } ?>>Requested</option>
                                                <option value="Non-Active" <?php if ($_GET['bpjs_kes_status'] == Non-Active) { echo ' selected="selected"'; } ?>>Non Active</option>
                                                <option value="Other" <?php if ($_GET['bpjs_kes_status'] == Other) { echo ' selected="selected"'; } ?>>Other</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Number<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from BPJS Kesehatan Status*
                                            <input type="text" name="bpjs_kes" class="form-control" value="<?php echo $bpjs_kes;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Kesehatan Status Description<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from BPJS Kesehatan Status*
											<textarea name="bpjs_kes_desc" class="form-control" value="<?php echo $bpjs_kes_desc;?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Status</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="bpjs_pens_status">
                                                <option value="none" disabled></option>
                                                <option value="Active" <?php if ($_GET['bpjs_pens_status'] == Active) { echo ' selected="selected"'; } ?>>Active</option>
                                                <option value="Requested" <?php if ($_GET['bpjs_pens_status'] == Requested) { echo ' selected="selected"'; } ?>>Requested</option>
                                                <option value="Non-Active" <?php if ($_GET['bpjs_pens_status'] == Non-Active) { echo ' selected="selected"'; } ?>>Non Active</option>
                                                <option value="Other" <?php if ($_GET['bpjs_pens_status'] == Other) { echo ' selected="selected"'; } ?>>Other</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Number</label>
                                        <div class="col-md-9">
                                            <input type="text" name="bpjs_pens" class="form-control" value="<?php echo $bpjs_pens;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">BPJS Pensiun Status Description</label>
                                        <div class="col-md-9">*automatically generate from BPJS Pensiun Status*
											<textarea name="bpjs_pens_desc" class="form-control" value="bpjs_pens_desc"></textarea>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">ID Card Status<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="card_status" required>
                                                <option value="none" disabled></option>
                                                <option value="Active" <?php if ($_GET['card_status'] == Active) { echo ' selected="selected"'; } ?>>Active</option>
                                                <option value="Requested" <?php if ($_GET['card_status'] == Requested) { echo ' selected="selected"'; } ?>>Requested</option>
                                                <option value="Non-Active" <?php if ($_GET['card_status'] == Non-Active) { echo ' selected="selected"'; } ?>>Non Active</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label">ID Card Number<span class="required">* </span></label>
										<div class="col-md-9">
                                            <input type="text" name="card_number" class="form-control" value="<?php echo $card_number;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success "> Save </button>
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
                            <form method="POST" action="" class="form-horizontal" id="bank_details_form">
                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Code<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="ac_code" class="form-control" value="<?php echo $ac_code;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Holder<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="ac_name" class="form-control" value="<?php echo $ac_name;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Account Number<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="ac_num" class="form-control" value="<?php echo $ac_num;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Bank Name<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="bank_name" class="form-control" value="<?php echo $bank_name;?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success "> Save </button>
                                </div>
                                <div id="alert_bank"></div>
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
                            <form method="POST" action="" class="form-horizontal" id="note_form">
                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">
                                <div class="form-body">
				
				
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Note</label>
                                        <div class="col-md-9">
											<textarea name="note" class="form-control" value="<?php echo $note;?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success "> Save </button>
                                </div>
                                <div id="alert_bank"></div>
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
                            <form method="POST" action="" class="form-horizontal" id="company_details_form">

                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">

                                <div id="alert_company">
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Status<span class="required">* </span></label>
                                        <div class="col-md-9"> *automatically generate from finish date*
                                            <select class="form-control" name="status" required>
                                                <option value="Active" <?php if ($_GET['card_status'] == Active) { echo ' selected="selected"'; } ?>>Active</option>
                                                <option value="Non-Active" <?php if ($_GET['card_status'] == Non-Active) { echo ' selected="selected"'; } ?>>Non Active</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Position<span class="required">* </span></label>
                                        <div class="col-md-9"> *automatically generate from position code*
                                            <input type="text" name="position" class="form-control" value="<?php echo $position;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Position Description<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="position_desc" name="position_id" required>
												<option value="1" <?php if ($_GET['position_desc'] == 1) { echo ' selected="selected"'; } ?>>Ahli Teknik Lain</option>
												<option value="2" <?php if ($_GET['position_desc'] == 2) { echo ' selected="selected"'; } ?>>Ahli Teknik Mesin dan Peralatan Industri</option>
												<option value="3" <?php if ($_GET['position_desc'] == 3) { echo ' selected="selected"'; } ?>>Tenaga Perkantoran Umum</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Project<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="project" name="project">
												<option value="1"<?php if ($_GET['position_desc'] == 1) { echo ' selected="selected"'; } ?>>JAGUNCEM</option>
												<option value="2"<?php if ($_GET['position_desc'] == 2) { echo ' selected="selected"'; } ?>>JIND</option>
												<option value="3"<?php if ($_GET['position_desc'] == 3) { echo ' selected="selected"'; } ?>>JIND-PLBC</option>
												<option value="4"<?php if ($_GET['position_desc'] == 4) { echo ' selected="selected"'; } ?>>PELIMPAHAN JIND</option>
												<option value="5"<?php if ($_GET['position_desc'] == 5) { echo ' selected="selected"'; } ?>>PJ CHANDRA ASRI</option>
												<option value="6"<?php if ($_GET['position_desc'] == 6) { echo ' selected="selected"'; } ?>>PJ SARFAS BALONGAN</option>
												<option value="7"<?php if ($_GET['position_desc'] == 7) { echo ' selected="selected"'; } ?>>PJ JTB VERTICAL</option>
												<option value="8"<?php if ($_GET['position_desc'] == 8) { echo ' selected="selected"'; } ?>>PJ KULON PROGO</option>
												<option value="9"<?php if ($_GET['position_desc'] == 9) { echo ' selected="selected"'; } ?>>PJ MONAS 2.0</option>
												<option value="10"<?php if ($_GET['position_desc'] == 10) { echo ' selected="selected"'; } ?>>PJ VOPAK</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Work Location<span class="required">* </spa n></label>
                                        <div class="col-md-9">
                                            <select  class="select2me form-control" name="work_loc" id="work_loc" required>
                                                <option value="none" selected="true" disabled></option>
												<option value="1" <?php if ($_GET['loc'] == 1) { echo ' selected="selected"'; } ?>>JIND</option>
												<option value="2" <?php if ($_GET['loc'] == 1) { echo ' selected="selected"'; } ?>>Site <?php echo $project;?></option>
												<option value="3" <?php if ($_GET['loc'] == 1) { echo ' selected="selected"'; } ?>>REKIND</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Join Date<span class="required">* </span></label>
                                        <div class="col-md-3">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <input type="text" class="form-control" name="join_date" <?php echo $join_date;?> required>
                                                <span class="input-group-btn">
                                 <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Finish Date<span class="required" required>* </span></label>
                                        <div class="col-md-3">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <input type="text" class="form-control" name="finish_date" <?php echo $finish_date;?>/>
                                                <span class="input-group-btn">
                                 <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success "> Save </button>
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
                            <form method="POST" action="" class="form-horizontal" id="salary_details_form">
                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary Group<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="sal_group" name="position_id" required>
                                                <option value="none" selected="true" disabled></option>
												<option value=""></option>
												<option value=""></option>
												<option value=""></option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Monthly Rate<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="month_rate" class="form-control" value="<?php echo $month_rate;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary Type<span class="required">* </span></label>
                                        <div class="col-md-9">
										
                                            <select class="form-control select2me" id="sal_type" name="sal_type" required>
                                                <option value="none" selected="true" disabled></option>
												<option value="1"<?php if ($_GET['sal_type'] == 1) { echo ' selected="selected"'; } ?>>Gross</option>
												<option value="2"<?php if ($_GET['sal_type'] == 2) { echo ' selected="selected"'; } ?>>Nett</option>
												<option value="3"<?php if ($_GET['sal_type'] == 3) { echo ' selected="selected"'; } ?>>Gross Lumpsum</option>
												<option value="4"<?php if ($_GET['sal_type'] == 4) { echo ' selected="selected"'; } ?>>Nett Lumpsum</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Transport</label>
                                        <div class="col-md-9">
                                            <input type="text" name="transport" class="form-control" value="<?php echo $transport;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Daily Rate HO</label>
                                        <div class="col-md-9">
                                            <input type="text" name="dailyrho" class="form-control" value="<?php echo $dailyrho;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Hour Rate</label>
                                        <div class="col-md-9">
                                            <input type="text" name="h_rate" class="form-control" value="<?php echo $h_rate;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">OT Rate/Hour</label>
                                        <div class="col-md-9">
                                            <input type="text" name="otrh" class="form-control" value="<?php echo $otrh;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Overtime Type</label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="ot_type" name="ot_type">
                                                <option value="none" selected="true" disabled></option>
												<option value="1"<?php if ($_GET['sal_type'] == 1) { echo ' selected="selected"'; } ?>>Table</option>
												<option value="2"<?php if ($_GET['sal_type'] == 2) { echo ' selected="selected"'; } ?>>Flat</option>
												<option value="3"<?php if ($_GET['sal_type'] == 3) { echo ' selected="selected"'; } ?>>After 18:00</option>
												<option value="4"<?php if ($_GET['sal_type'] == 4) { echo ' selected="selected"'; } ?>>Premium</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Per Diem Allowance (Unfix)</label>
                                        <div class="col-md-9">
                                            <input type="text" name="pda" class="form-control" value="<?php echo $pda;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Daily Site Allowance</label>
                                        <div class="col-md-9">
                                            <input type="text" name="dsa" class="form-control" value="<?php echo $dsa;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Special Allowance</label>
                                        <div class="col-md-9">
                                            <input type="text" name="sa" class="form-control" value="<?php echo $sa;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Fixed Allowance<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="fix_allowance" class="form-control" value="<?php echo $fix_allowance;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JKK (1.74%)<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="jkk" class="form-control" value="<?php echo $jkk;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JHT (3.7%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="jht1" class="form-control" value="<?php echo $jht1;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JHT (2%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="jht2" class="form-control" value="<?php echo $jht2;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JK (0.3%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="jk" class="form-control" value="<?php echo $jk;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kes (4%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="kes" class="form-control" value="<?php echo $kes1;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kes (1%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="kes" class="form-control" value="<?php echo $kes2;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JP (1%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="jp1" class="form-control" value="<?php echo $jp1;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">JP (2%)<span class="required">* </span></label>
                                        <div class="col-md-9">*automatically generate from monthly rate*
                                            <input type="text" name="jp2" class="form-control" value="<?php echo $jp2;?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success " name="save"> Save </button>
                                </div>
                                <div id="alert_bank"></div>
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
                            <form method="POST" action="server.php" class="form-horizontal" id="cont_name_form">
                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Name<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="cont_name" class="form-control" value="<?php echo $cont_name;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Phone<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="cont_phone" class="form-control" value="<?php echo $cont_phone;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Relation<span class="required">* </span></label>
                                        <div class="col-md-9">
                                            <select class="form-control select2me" id="relation" name="ot_type" required>
                                                <option value="none" selected="true" disabled></option>
												<option value="">Wife/Husband</option>
												<option value="">Siblings</option>
												<option value="">Son/Daughter</option>
												<input type="hidden" name="_token">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success "> Save </button>
                                </div>
                                <div id="alert_bank"></div>
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
                            <form method="POST" action="" class="form-horizontal" id="document_form">
                                <input type="hidden" name="_token">
                                <input type="hidden" name="_method">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Resume<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-new"> Select file </span>
															<span class="fileinput-exists "> Change </span>
                                                              <input type="file" name="resume" value="<?php echo $resume;?>" required>
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
                                        <label class="col-md-3 control-label">Offer letter<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-new"> Select file </span>
															<span class="fileinput-exists "> Change </span>
                                                              <input type="file" name="offer_letter" value="<?php echo $offer_letter;?>" required>
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
                                        <label class="col-md-3 control-label">Join Letter<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-new"> Select file </span>
															<span class="fileinput-exists "> Change </span>
                                                              <input type="file" name="join_letter" value="<?php echo $join_letter;?>" required>
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
                                        <label class="col-md-3 control-label">Contract and Agreement<span class="required">* </span></label>
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
                                        <label class="col-md-3 control-label">ID Proof<span class="required">* </span></label>
                                        <div class="col-md-5">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<span class="input-group-addon btn default btn-file">
														<span class="fileinput-new"> Select file </span>
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
                                <div class="actions">
									<button  data-loading-text="Updating..."  class="demo-loading-btn btn btn-sm btn-success "> Save </button>
									
								</div>
                                <div id="alert_bank"></div>
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
