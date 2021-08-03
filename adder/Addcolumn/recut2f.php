
<?php //include ('auto-redirect.php');
include('C:/xampp/htdocs/dbcon.php');
include('C:/xampp/htdocs/session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
$unn =$row['username'];

 ?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="plugins\bootstrap\css\bootstrap.min.css">
<!--<link rel="icon" type="image/ico" href="newinventory/dist/img/logo/logosn.png" />-->
<link rel="icon" type="image/ico" href="log.png" />
  <title>Recutting</title>
  <title><?php echo date('Y-m-d', time()); ?></title>
<style>

body {background-image:url('img/1d.jpg');font-family: Arial, Helvetica, sans-serif;background-size: auto;
background-repeat: no-repeat;background-size: cover;

}


/* Full-width input fields */
input[type=text], input[type=password], input[type=date], button {
  width: 100%;
  padding: 12px;
  margin: 18px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:10px;
  box-sizing: border-box;
}


#barcoder:hover{box-shadow: inset 0px 0px 10px rgba(0,0,0,0.5);}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 10px 0 10px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 10px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 10px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.modal-content {
    background-color: #fefefe;
    margin: 6% auto 5% auto;
}
h2.de {
    font-size: 21px;
    font-weight: 700;
}
.h2, h2 {
    font-size: 13px;
}
table.table-bordered.dataTable {
    background-color: #fbfeff;
    border-collapse: separate !important;
}
h2, .h2 {
    font-size: 13px;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
    margin-top: 10px;
}
.container {
    margin-top: -28px;
}
div#qq {
    margin-top: 30px;
}
button.btn.dropdown-toggle.btn-default {
    display: none;
}
select#name1 {
    height: 34px;
    border: 1px solid black;
	border-radius: 11px;
}
select#name2 {
    height: 34px;
    border: 1px solid black;
	border-radius: 11px;
}
select#name3 {
    height: 34px;
    border: 1px solid black;
	border-radius: 11px;
}
select#name4 {
    height: 34px;
    border: 1px solid black;
	border-radius: 11px;
}
.container {
    width: 50%;
}
div#DataTables_Table_0_info {
    color: white;
}
input#name2 {
    border: 1px solid black;
}
input#name1 {
    border: 1px solid black;
}
table#DataTables_Table_0 {
    font-size: 13px;
}
button.btn.btn-primary {
    margin-left: -34px;
}
button.btn.btn-danger {
    margin-left: -34px;
}
button.btn.btn-info {
    margin-left: -34px;
}
button.btn.btn-danger {
    margin-left: -64px;
}
button.btn.btn-info {
    margin-left: -105px;
}

table#DataTables_Table_0 {
	 overflow-x: auto;
    overflow-y: auto;
   	
}
select#name14 {
    width: 139px;
    border-radius: 8px;
    height: 33px;
  
}
select#name15 {
	 width: 139px;
    border-radius: 8px;
    height: 33px;
}
.modal-content.animate {
    width: min-content;
}
</style>
<?php
if(isset($_GET['success'])){
	?><script>
	$('#alerter0017').html('data updated successfully');
	</script>
	
	<?php
}
?>
<script src="plugins\jquery\jquery.js"></script>
</head>
<body >
<h2 class="de" align="center" style="color:black">RECUTTING SCANNING POINT<h2>
<div class="container">
 
<div class="row">
	<div class="col-md-2"></div>
	<div style="background:white;width:70%"class="col-md-9 rounded border">
				<div  class="row ">
				
				<div class="col-md-4">	
					<form action="" name="myForm" method="GET">		
					<input type="text" autofocus name="fetcher" value="" id="barcoder" placeholder="Order ID">
					</form> 
				</div>
				<div class="col-md-2">
					   <button class="btn btn-success" onclick="myFunction()" style="width:60%;font-size: 12px;">Submit</button>
				</div>
				<div class="col-md-2">
					<button class="btn btn-primary" onclick="" style="width:60%;font-size: 12px;">Reset</button>
				</div>
				
				<div class="col-md-2">
					<button class="btn btn-danger" onclick="location.href='index.php';" href="index.php" style="width:60%;font-size: 12px;">Logout</button>
				</div>
				<div class="col-md-2">
					<a><button class="btn btn-info" onclick="location.href='scantrail.php';"  href="scantrail.php" style="width:100%;font-size: 12px;">HOME</button></a>
				</div>
			</div>
			
			



			<div id="id01" class="modal">
			
			  <div class="modal-content animate">
			  <div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none';$('#barcoder').focus();" class="close" title="Close Modal">&times;</span>
			</div>
				<div class="container">
					<div class="row" id="qq">
					  <div class="col-md-2">
							<label for="barcode"><b>Barcode</b></label>
							<input id="barcode1" type="text" placeholder="Enter Barcode" name="barcode" disabled>
					  </div>
					<div class="col-md-3">
							<label for="barcode"><b>OrderId</b></label>
							<input id="name10" type="text" placeholder="OrderId" name="aorderid" disabled>
					  </div>
					  <div class="col-md-2">
						  <label for="uname"><b>Buyer</b></label>
						  <input id="name1" type="text" placeholder="Buyer" name="buyer" disabled required>
						  
					  </div>
					 </div> 
					 <div class="row" id="qq">
					  <div class="col-md-2">
						  <label for="uname"><b>Garment Type</b></label>
						 <input id="name2" name="section" type="text" placeholder="Garment Type" name="type" disabled required>
					  </div>
					  
					  <div class="col-md-3">
						  <label for="uname"><b>Reason</b></label>
						 <select name="reason"  id="name3" required>
								    <option value="">Select Reason</option>
									<option  value="Cad Error">Cad Error</option>
									<option  value="Fabric Defect">Fabric Defect</option>
									<option  value="Lining Defect">Lining Defect</option>
									<option  value="Auto Cutter Damage 1">Auto Cutter Damage 1</option>
									<option  value="Auto Cutter Damage 2">Auto Cutter Damage 2</option>
									<option  value="Auto Cutter Damage 3">Auto Cutter Damage 3</option>
									<option  value="Auto Cutter Damage 4">Auto Cutter Damage 4</option>
									<option  value="Rest Of Cutting damage">Rest Of Cutting damage</option>
									<option  value="Sewing Manufacturing damage">Sewing Manufacturing damage</option>
									<option  value="Pressing Manufacturing damage">Pressing Manufacturing damage</option>
									<option  value="Wrong Cut">Wrong Cut</option>
									<option  value="Cancelled Order">Cancelled Order</option>
									<option  value="Cutting return due to fabric defect" style="display:none;">Cutting return due to fabric defect</option>
									<option  value="Piping/ Triangle Flap">Piping/ Triangle Flap</option>
									<option  value="Samples">Samples</option>
									<option  value="Shrinkage">Shrinkage</option>
									<option  value="Shade Variation">Shade Variation</option>
									
									
						</select>
					  </div>
					  <div class="col-md-2">
						 <label for="uname"><b>Section</b></label>
						 <select name="section" id="name4" required>
								    <option value="">Select Section</option>
									<option  value="Cutting">Cutting</option>
									<option  value="Front">Front</option>
									<option  value="Rest Of Sewing">Rest Of Sewing</option>
									<option  value="Rest Of Production">Rest Of Production</option>

									
						</select>
					  </div>
					  <div class="col col-md-4">
							     
								  <input type="checkbox" id="ctrdf" name="olength"   value="Cutting Return Due To Fabric Defect">
                                    <label for="Cutting Return Due To Fabric Defect">Cutting Return Due To Fabric Defect</label><br>
							</div>
					 <div class="col-md-2">
						 <label for="uname"><b></b></label>
						 <input id="name5" name="type"  type="hidden" placeholder="Type" name="article">
					  </div>
					  
					
					</div>
					<div class="row">
						    <div class="form-check">
							<div class="col-md-2">
									<input type="checkbox" name="patterntype" value="shell" class="form-check-input" id="shell">
									<label class="form-check-label" for="shell">Shell</label>
							</div>
							<div class="sl col-md-3">
							      <label class="form-check-label">Cloth Article</label>
								  <input id="cname5" name="cloth" class="fz" type="text" placeholder="Cloth Article" name="article">
							</div>
							<div class="sl col-md-2">
							      <label class="form-check-label">Shell Length In Meter</label>
								  <input id="slength" name="slen" class="fz" type="text" placeholder="Shell Length" name="slen">
							</div>
							 <div class="sl col-md-3">
						          <label for="uname"><b style="display:none;">unit</b></label>
								   <br/>
									 <select name="unit" style="display:none;" id="name14">
												<option value="">Select unit</option>
												<option  value="Meter">Meter</option>
												<option  value="Centimeter">Centimeter</option>
												<option  value="Inches">Inches</option>
												<option  value="Yards">Yards</option>
									</select>
							</div>
					</div>
					</div>
					<div class="row">
						    <div class="form-check">
							<div class="col-md-2">
									<input type="checkbox" name="patterntype" value="others" class="form-check-input" id="others">
									<label class="form-check-label" for="others">Lining</label>
							</div>
							<div class="ol col-md-3">
							      <label class="form-check-label">Enter Article</label>
								  <input id="oname1" type="text" class="fz" placeholder="Enter Here" name="enr">
							</div>
							<div class="ol col-md-2">
							      <label class="form-check-label">Lining Length In Meter</label>
								  <input id="olength" type="text" class="fz" placeholder="Enter Here" name="olength">
							</div>
							 <div class="ol col-md-3">
						           <label for="uname"><b style="display:none;">unit</b></label>
								   <br/>
									 <select name="unit12" style="display:none;" id="name15">
												<option value="">Select unit</option>
												<option  value="Meter">Meter</option>
												<option  value="Centimeter">Centimeter</option>
												<option  value="Inches">Inches</option>
												<option  value="Yards">Yards</option>
									</select>
							</div>
							
							</div>
					</div>
					 <br/>
					<div class="form-group">
                          <label class="control-label col-sm-2" for="Remark">Remark:</label>
						  <div class="col-sm-9 rounded-border">
							<input type="Remark" class="form-control" id="name6" placeholder="Enter Remark" name="Remark">
						  </div>
                    </div>
					
					
					
					
					    <br>
					    <br>
					    <br>
						<div class="col-lg-3 col-md-3"></div>
						
					  <button class="col-lg-6 col-md-6 btn btn-info" style="align:center;" id="db" onclick="showHint()">Submit</button>
					    <div class="col-lg-3 col-md-3"></div>
				</div>
			  </div>
			  </form>
			</div>
			
		</div>
	</div>
	<div class="col-md-3"></div>

<div style="font-size:16px;padding-left:60px;fonr-weight:bold;" id="alerter0017"></div>
<br/>
<script>
// Get the modal
var modal = document.getElementById('id01');
var patterntyper="";

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		$("barcoder").focus();
    }
	
}

function myFunction(){
document.getElementById('name1').value = "";  
document.getElementById('name2').value = "";  
document.getElementById('name3').value = "";  
document.getElementById('name4').value = "";  
document.getElementById('name5').value = "";  
document.getElementById('name6').value = "";  
document.getElementById('name10').value = "";  
document.getElementById('name14').value = "";  
document.getElementById('name15').value = "";  
document.getElementById('ctrdf').value = ""; 

var barcode = document.getElementById('barcoder');
var barcode1 = document.getElementById('barcode1');	
var kk1 = barcode.value;
barcode1.value = kk1.replace(/\*/g,"");
var k = barcode1.value; 

 var x = document.forms["myForm"]["barcoder"].value;
 
  if (x != "") {
	  
	   var xmlhttp = new XMLHttpRequest();
	   var myObj;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				myObj = JSON.parse(this.responseText);
				if(myObj.error == 'noerror' && myObj.error123 == 'noerror1'){
				 document.getElementById('id01').style.display='block';
                document.getElementById('name1').value = myObj.buyer;  
                document.getElementById('name2').value = myObj.gtype;
                document.getElementById('name3').value = myObj.reason;
                document.getElementById('name4').value = myObj.section;
                document.getElementById('name5').value = myObj.g1type;
                document.getElementById('cname5').value = myObj.sart;
                document.getElementById('oname1').value = myObj.sart1;
                document.getElementById('slength').value = myObj.slen;
                document.getElementById('olength').value = myObj.slen1;
                document.getElementById('name6').value = myObj.rmrk;
				document.getElementById('ctrdf').value = myObj.srson;
				if(myObj.aoid==''){
					document.getElementById('name10').value= k;
				}else{
                document.getElementById('name10').value = myObj.aoid;
				}
                document.getElementById('name14').value = myObj.unit;
                document.getElementById('name15').value = myObj.unit12;
                		
                   if(myObj.sart == 'shell'){
					$('.sl').show();
					$('#cname5').val(myObj.sart);
					
				}	
                   if(myObj.sart1 == 'others'){
					$('.ol').show();
					$('#oname1').val(myObj.sart1);
					
				}
             
               
				 
				
				 					 
				 					
           				
            }
			else if(myObj.error == 'error'){
				alert("Sorry....No such OrderID");
				document.getElementById('id01').style.display='none';
			}
			else if(myObj.error123 == 'error1'){
				alert("Sorry....already existed");
				document.getElementById('id01').style.display='none';
			}
			}
        };
		
			
				
		str1 = "recutproduct123.php?fetcher="+k;
        xmlhttp.open("GET", str1, true);
        xmlhttp.send();
  }
 
}
   
	            $(document).on("click","#ctrdf",function() {
            if($(this).prop("checked") == true){
				//alert(1);
                $("#name3").val("Cutting return due to fabric defect");
				$('.fz').attr('disabled', (this.checked))
            }
            else if($(this).prop("checked") == false){
				//alert(2);
                $("#name3").val("");
				$(".fz").prop('disabled', false);
            }
        });
		
function showHint() {
	  
        

		var bar001='';
		var name001='';
		var name002='';
		var name003='';
		var name004='';
		var name005='';
		var name006='';
		var name0010='';
		var name0014='';
		var name0015='';
		var name001512='';
		
		
		var sart='';
		var sart1='';
		var slen='';
		var slen1='';
		
		var date001='';
		var id='';
		var str1='';
		var pattern001='';
		var len001='';
			
			bar001 = document.getElementById('barcode1').value;
			
			name001 = document.getElementById('name1').value;
			name002 = document.getElementById('name2').value;
			name003 = document.getElementById('name3').value;
			name004 = document.getElementById('name4').value;
			name005 = document.getElementById('name5').value;
			name0010 = document.getElementById('name10').value;
			name0014 = document.getElementById('name14').value;
			name0015 = document.getElementById('name15').value;
			name001512 = document.getElementById('ctrdf').value;
			
			sart = document.getElementById('cname5').value;
			sart1 = document.getElementById('oname1').value;
			name006 = document.getElementById('name6').value;
			slen = document.getElementById('slength').value;
			slen1 = document.getElementById('olength').value;
			
			var ischecked= $("#shell").is(':checked');if(!ischecked){sart='';}
			 if(name003 == ''){
					alert ("please select reason");
					 xmlhttp.open("GET", str1, true);
				}	
				 	
			if(name004 == ''){
					alert ("please select section");
					 xmlhttp.open("GET", str1, true);
				}
				
				if (!$("#ctrdf").is(':checked')){
if(sart == '' && sart1 == '' ){
					alert ("please Enter Any Article");
					 xmlhttp.open("GET", str1, true);
				}
				  
				
					
				if(sart != '' && slen=='')
				{
					alert ("please Enter Shell Length");
					 xmlhttp.open("GET", str1, true);
				}
             if(sart1 != '' && slen1=='')
				{
					alert ("please Enter Other Length");
					 xmlhttp.open("GET", str1, true);
				}				
           if(slen !=  '' && sart == '')
               {
					alert ("please Enter Shell Article");
					 xmlhttp.open("GET", str1, true);
				}
			if(slen1 !=  '' && sart1 == '')
               {
					alert ("please Enter Other Article");
					 xmlhttp.open("GET", str1, true);
				}

}
				
			str1 = 'OrderId='+bar001+'&buyer='+name001+'&gtype='+name002+'&reason='+name003+'&section='+name004+'&g1type='+name005+'&sart='+sart+'&sart1='+sart1+'&slen='+slen+'&slen1='+slen1+'&rmrk='+name006+'&aoid='+name0010+'&unit='+name0014+'&unit12='+name0015+'&ctrdf='+name001512;
			
			
			
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
			window.location.replace("recut2.php?success");
			
				modal.style.display = "none";
				$("barcoder").focus();
			<!--	alert('data updated success');   -->
						
            }
        };
		
        xmlhttp.open("GET", "recutproduct123.php?"+str1, true);
        xmlhttp.send();
		$(document).on("click","#db",function() {
				$('#db').attr('disabled',true)
            });
}

$(document).ready(function() {
        $('.sl').hide();
        $('.ol').hide();
       
});
$('#shell').change(function() {
    if(this.checked) {
        $('.sl').show();
		patterntyper = "shell";
    }
});
$('#others').change(function() {
    if(this.checked) {
        $('.ol').show();
		patterntyper = "others";
    }
});


$("#shell").change(function() {
    var ischecked= $(this).is(':checked');
    if(!ischecked)
     $('.sl').hide();
     
}); 
$("#others").change(function() {
    var ischecked= $(this).is(':checked');
    if(!ischecked)
     $('.ol').hide();
}); 

</script>
<!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

 <!--<input class="abc" id="t4" placeholder="Balance" type="text" value="<?php echo "abcxyz"; ?>" style="height:30px; width:170px" readonly>---->

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="css/themes/all-themes.css" rel="stylesheet" />

<script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
	<src="vendor/jquery-3.2.1.min.js"></script>
	
	<style>
	label {
    font-size: 15px;
}
input{
    font-size: 13px;
}
h2, .h2 {
    font-size: 15px;
}
input[type=text], input[type=password], input[type=date], button {
    width: 100%;
    padding: 9px;
    margin: 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}
a {
    color: #080808;
    text-decoration: none;
    padding-left: 10px;
}
div#DataTables_Table_0_info {
    color: black;
}
th.sorting {
    white-space: nowrap;
}
.dt-buttons {
    font-size: 14px;
    font-family: arial;
    margin-left: 263px;
   
}
span {
    border: 1px solid #d5edf9;
    background-color: white;
    margin-left: -4px;
    
    border-radius: 3px;
    padding: 4px;
	font-size: 12px;
    color: #7f7f7f;
}

a.dt-button.buttons-copy.buttons-html5 {
    margin-left: -266px;
    margin-top: 31px;
    padding-top: -65px;
    margin-bottom: 28px;
}
table#DataTables_Table_0 {
    scroll-behavior: auto;
}
</style>
<?php date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d', time());
    $time = date('H:i:s', time());
	
		$datetime =$date." ".$time;
	echo " "; ?>
<div class="row">
	<div class="col-md-1"></div>
<div class="col-md-10">
 <div class="table-responsive">
<table class="table table-bordered  table-hover dataTable js-exportable table-responsive" style="width:100%;">
                  <thead style='background-color:#0b2b47;color:#edeff2'>
                    <tr>
                      <th>SNO</th>
                      <th>OrderID</th>
					   <th nowrap>Buyer</th>
					   <th nowrap>Garment Type</th>
					   <th nowrap>Shell Fabric Article</th>
					   <th nowrap>Shell Length</th>
					   <th nowrap>Lining</th>
					    <th nowrap>LiningLength</th>
                      <th nowrap>Reason</th>
                      <th>Section</th>
                      <th>Remark</th>
                      <th>Time & Date</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>SNO</th>
                      <th>OrderID</th>
					   <th nowrap>Buyer</th>
					   <th nowrap>Garment Type</th>
					    <th nowrap>Shell Fabric Article</th>
					    <th nowrap>Shell Length</th>
					    <th nowrap>Lining</th>
					    <th nowrap>LiningLength</th>
                      <th nowrap>Reason</th>
                      <th>Section</th>
                      <th>Remark</th>
                      <th>Time & Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
						$link = mysqli_connect("localhost","root","","login");
						  $sqlg = "SELECT * FROM recut where Date= '$date' ORDER BY Time DESC";  
						  $resg = mysqli_query($link,$sqlg);
						  $count=1;
						  while ($row = mysqli_fetch_array($resg)){ ?>
							<tr>
							  <td nowrap><?php  echo $count++; ?></td>
							  <td nowrap><?php  echo $row['AOrderID']; ?></td>
							 
							  <td nowrap><?php  echo $row['Buyer']; ?></td>
							  
							  
							  <td nowrap><?php  echo $row['GarmentType']; ?></td>
							  <td nowrap><?php  echo $row['Shell']; ?></td>
							  <td nowrap><?php  echo $row['IssuedFabric']; ?></td>
							  <td nowrap><?php  echo $row['Others']; ?></td>
							  <td nowrap><?php  echo $row['OthersIssued']; ?></td>
							   <td nowrap><?php  echo $row['Reason']; ?></td>
							  <td nowrap><?php  echo $row['Section']; ?></td>
							  <td nowrap><?php  echo $row['Remarks']; ?></td>
							  <td nowrap><?php  echo $row['TIme']; ?></td>
							 
							</tr>
				     <?php	} ?>
					</tbody>
				  </table>
</div>			  
			  
				  
	</div>
<div class="col-md-4"></div>
	
	</div>			  
				  
</div>			  
				  
				  

<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

$conn = mysqli_connect("localhost","root","","login");


   if(isset($_GET['fetcher'])){
	  
	   $c = trim($_GET['fetcher'],"**");
	   
	   $sql1= "SELECT * FROM `overall` WHERE `OrderId`='$c'";
	   $result4 = mysqli_query($conn,$sql1);
	   if(mysqli_num_rows($result4)>0)
        {
			while($row=mysqli_fetch_array($result4))
			{
				$aoid2=$row['AOrderID'];
			}
		}
		
		 $sql2= "SELECT * FROM `overall` WHERE `OrderId`='$aoid2'";
	     $result45 = mysqli_query($conn,$sql2);
	   if(mysqli_num_rows($result45)>0)
        {
			while($row=mysqli_fetch_array($result45))
			{
				$aoid22[]=$row['OrderId'];
			}
		}
		
		
		
		
	    $sql3= "SELECT * FROM `recut` WHERE `OrderId`='$aoid2'";
	   $result44 = mysqli_query($conn,$sql3);
	   $k123=0;
	   if(mysqli_num_rows($result44)>0)
        {
			while($row123=mysqli_fetch_array($result44))
			{
				if(in_array($row123['AOrderID'], $aoid22)){
					$k123=1;
				}
			}
			if($k123==1){
				$myObj->error123 = "noerror1";
			}
			else
			{
				$myObj->error123 = "noerror1";
			}
				
		}else{
			$myObj->error123 = "noerror1";
		}
	       $myObj->error = "noerror";
	   
		
		$sql = "SELECT * FROM overall WHERE OrderID='$c'";
		
		$result3 = mysqli_query($conn,$sql);
		$str = "";
		if(mysqli_num_rows($result3)>0)
        {
			
               while($row=mysqli_fetch_array($result3))
               {
				   
				    $myObj->buyer =  $row['Buyer'];
				    $myObj->aoid =  $row['AOrderID'];
		            $myObj->gtype = $row['AGarmentType']; 
		            $myObj->g1type = $row['GarmentType']; 
		            $myObj->sart = $row['Cloth_Article']; 
		            $myObj->sart1 = $row['lining_article']; 
		            $myObj->rmrk = $row['Remarks']; 
		            $myObj->slen = $row['IssuedFabric']; 
		            $myObj->slen1 = $row['OthersIssued']; 
					 //$other =$row['Others'];
//$myObj->carticle = $row['Cloth_Article']; 
	           }
			   $myObj->error = "noerror";
		}
	else{
	   $myObj->error = "error";
   }
		
		$myJSON = json_encode($myObj);
        
			   ?>
			   
			   
					 <script>
					 
						document.getElementById('barcode1').value = '<?php echo $c; ?>';
 
					 
					 var myObj = JSON.parse('<?php echo $myJSON; ?>');
				if(myObj.error == 'noerror' && myObj.error123 == 'noerror1'){
				 document.getElementById('id01').style.display='block';
                document.getElementById('name1').value = myObj.buyer;  
                document.getElementById('name2').value = myObj.gtype;
                document.getElementById('name3').value = myObj.reason;
                document.getElementById('name4').value = myObj.section;
                document.getElementById('name5').value = myObj.g1type;
                document.getElementById('cname5').value = myObj.sart;
                document.getElementById('oname1').value = myObj.sart1;
                document.getElementById('slength').value = myObj.slen;
                document.getElementById('olength').value = myObj.slen1;
                document.getElementById('name6').value = myObj.rmrk;
               if(myObj.aoid==''){
					document.getElementById('name10').value= '<?php echo $c; ?>';
				}else{
                document.getElementById('name10').value = myObj.aoid;
				}
                		
                   if(myObj.sart == 'shell'){
					$('.sl').show();
					$('#cname5').val(myObj.sart);
					
				}	
                   if(myObj.sart1 == 'others'){
					$('.ol').show();
					$('#oname1').val(myObj.sart1);
					
				}					
				 					
           				
            }
			else if(myObj.error == 'error'){
				alert("Sorry....No such OrderID");
				document.getElementById('id01').style.display='none';
			}
			else if(myObj.error123 == 'error1'){
				alert("Sorry....already existed");
				document.getElementById('id01').style.display='none';
			}
					 </script>
					 <?php
			
		
   
   }

?>
 

<?php
if(isset($_GET['success'])){
	?>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	  <script>
	      $(document).ready(function(){
			   $('#alerter0017').css('color', 'green');
			  
			   $('#alerter0017').html('OrderID Inserted Successfully..!');
			   setTimeout(function(){ $('#alerter0017').html('');window.location.replace("recut2.php"); }, 3000);
			});
	  </script>
	<?php
}
?>
</body>



</html>
