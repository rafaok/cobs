<?php
include 'connection.php';

$loadType=$_POST['loadType'];
$loadId=$_POST['loadId'];

if($loadType=="kabupaten"){
	$sql="SELECT * FROM a_id_territory WHERE LEVEL=2 AND MST_KODE_WILAYAH='.$loadId.'ORDER BY NAMA ASC";
}else if($loadType=="kecamatan"){
	$sql="SELECT * FROM a_id_territory WHERE LEVEL=3 AND MST_KODE_WILAYAH='.$loadId.'ORDER BY NAMA ASC";
}else{
	$sql="SELECT * FROM a_id_territory WHERE LEVEL=4 AND MST_KODE_WILAYAH='.$loadId.'ORDER BY NAMA ASC";
} windows.alert();
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0){
    $HTML="";
    while($row=mysqli_fetch_array($res)){
        $HTML.="<option value='".$_POST['KODE_WILAYAH']."'>".$_POST['NAMA']."</option>";
    }
    echo $HTML;
}
?>
