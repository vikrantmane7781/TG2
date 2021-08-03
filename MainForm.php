<?php 
	include 'layout/header.php';  

	include 'functions/ui_function.php';  
	
	include 'downloadVariablet.php';
	include('dbcon.php');
	
	error_reporting(0);
	date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d', time());
    $time = date('H:i:s', time());
	$datetime =$date." ".$time;
	getHeader(" ", $datetime, "fa-book");
	

	
	function fetcher($orderno,$trs1_dpseat,$Trs1_HIPFWD,$Trs1_LWFRT,$Trs1_PLCROT,$Trs1_RISEBK,$combiner,$Trs1_WAIST,$Trs1_SEAT,$Trs1_THIGH,$Trs1_KNEE,$Trs1_BTM,$Trs1_OTSEAM,$Trs1_TRURISE,$Trs1_FRTRISE,$Trs1_BKRISE,$Trs1_URISE,$INSEAM,$measurements)
{

		$delter="TRUNCATE TABLE `frommeasuret`";
		mysqli_query($measurements,$delter);

		$delmodel="TRUNCATE TABLE `modeloptionst`";
		mysqli_query($measurements,$delmodel);

		$in="insert into `frommeasuret` (`all_cols`)SELECT `low_fron` FROM `low_fron` ";
		mysqli_query($measurements,$in);

		//deep_seat_minus
		$selin99="SELECT `id`,`$trs1_dpseat` as deap FROM `deep_seat_minus` ";
		$fire99=mysqli_query($measurements,$selin99);
		while($row=mysqli_fetch_array($fire99)){
			 $onelen=$row['deap'];
			 $id=$row['id'];
			 $upin9="update `frommeasuret` set deep_seat_minus='$onelen' where id='$id'";
		 	 mysqli_query($measurements,$upin9);
		}

		//LowFRt
		$selin91="SELECT `id`,`$Trs1_LWFRT` as lowfron FROM `low_fron` ";
		$fire91=mysqli_query($measurements,$selin91);
		while($row=mysqli_fetch_array($fire91)){
			 $onefron=$row['lowfron'];
			 $id=$row['id'];
			 $upin91="update `frommeasuret` set low_fron='$onefron' where id='$id'";
		 	 mysqli_query($measurements,$upin91);
		}
		
		//default
		$cheFirst="SELECT `id`,`$combiner` as comb from `mtm_us_trs(r)`";
		$fire912=mysqli_query($measurements,$cheFirst);
		while($row=mysqli_fetch_array($fire912)){
			 $onecomb=$row['comb'];
			 $id=$row['id'];
			 $upin912="update `frommeasuret` set main_size='$onecomb' where id='$id'";
		 	 mysqli_query($measurements,$upin912);
		}

		// /hip_forw_plus
		$selin="SELECT `id`,`$Trs1_HIPFWD` as frow FROM `hip_forw_plus` ";
		$fire=mysqli_query($measurements,$selin);
		while($row=mysqli_fetch_array($fire)){
			 $onefr=$row['frow'];
			 $id=$row['id'];
			 $upin90="update `frommeasuret` set hip_forw_plus='$onefr' where id='$id'";
		 	 mysqli_query($measurements,$upin90);
		}
		

		//low_fron
		$selin2="SELECT `$Trs1_PLCROT` as plu,`id` FROM `plu_crot_plus` ";
		$fire2=mysqli_query($measurements,$selin2);
		while($row=mysqli_fetch_array($fire2)){
			 $oneplu=$row['plu'];
			 $id=$row['id'];
			 $upin2="update `frommeasuret` set plu_crot='$oneplu' where id='$id'";
		 	 mysqli_query($measurements,$upin2);
		}

		//raise_bk_plus_minus
		$selin3="SELECT `$Trs1_RISEBK` as raise,`id` FROM `raise_bk_plus_minus` ";
		$fire3=mysqli_query($measurements,$selin3);
		while($row=mysqli_fetch_array($fire3)){
			 $oneraise=$row['raise'];
			 $id=$row['id'];
			 $upin3="update `frommeasuret` set raise_bk_plus_minus='$oneraise' where id='$id'";
		 	 mysqli_query($measurements,$upin3);
		}

		$selin4="SELECT `0.25` as fron,`id` FROM `low_fron` ";
		$fire4=mysqli_query($measurements,$selin4);
		while($row=mysqli_fetch_array($fire4)){
			 $onefron=$row['fron'];
			 $id=$row['id'];
			 $upin4="update `frommeasuret` set low_fron='$onefron' where id='$id'";
		 	 mysqli_query($measurements,$upin4);
		}
		
		$sect="SELECT id,(`main_size`+ `deep_seat_minus`+`hip_frow_plus`+`low_fron`+`plu_crot`+`raise_bk_plus_minus`) as total FROM `frommeasuret`";
		$fire=mysqli_query($measurements,$sect);
		while($roy=mysqli_fetch_array($fire)){
			 $total=$roy['total'];
			 $id=$roy['id'];
		
		  $in8="update `frommeasuret` set sum='$total' where id='$id'";
		  mysqli_query($measurements,$in8);
		
	}

		
		$ud1="update frommeasuret set user_values='$Trs1_WAIST' where id='1' ";
		mysqli_query($measurements,$ud1);

		$ud3="update frommeasuret set user_values='$Trs1_SEAT' where id='3' ";
		mysqli_query($measurements,$ud3);

		$ud4="update frommeasuret set user_values='$Trs1_THIGH' where id='4' ";
		mysqli_query($measurements,$ud4);

		$ud5="update frommeasuret set user_values='$Trs1_KNEE' where id='5' ";
		mysqli_query($measurements,$ud5);

		$ud6="update frommeasuret set user_values='$Trs1_BTM' where id='6' ";
		mysqli_query($measurements,$ud6);

		$ud7="update frommeasuret set user_values='$INSEAM' where id='7' ";
		mysqli_query($measurements,$ud7);

		$ud8="update frommeasuret set user_values='$Trs1_OTSEAM' where id='8' ";
		mysqli_query($measurements,$ud8);

		$ud9="update frommeasuret set user_values='$Trs1_TRURISE' where id='9' ";
		mysqli_query($measurements,$ud9);

		$ud10="update frommeasuret set user_values='$Trs1_FRTRISE' where id='10' ";
		mysqli_query($measurements,$ud10);

		$ud11="update frommeasuret set user_values='$Trs1_BKRISE' where id='11' ";
		mysqli_query($measurements,$ud11);

		$ud12="update frommeasuret set user_values='$Trs1_URISE' where id='12' ";
		mysqli_query($measurements,$ud12);

		$finrt="SELECT `id`,`user_values`,`sum` from frommeasuret";
		$ft=mysqli_query($measurements,$finrt);
		while($row=mysqli_fetch_array($ft)){
			$id=$row['id'];
			$u_val=$row['user_values'];
			$sum=$row['sum'];
			$diff=$u_val-$sum;
			if($u_val!=0){
				$upert="UPDATE frommeasuret SET lst_diff='$diff' where id='$id'";
				mysqli_query($measurements,$upert);
			}
		}


		$modelInserter="SELECT `Trs1_C-PKT`,`Trs1_CFHKLG`,`Trs1_C-HKLG`,`Trs1_CPFKLG`,`Trs1_S-PKT`,`Trs1_SFHKLG`,`Trs1_S-HKLG`,`Trs1_SPFKLG`,`Trs1_FB-PKT`,`Trs1_FFHKLG`,`Trs1_F-HKLG`,`Trs1_FPFKLG`,`Trs1_P-EXTN`,`Trs1_NOLOOP`,`Trs1_TNLLOP`,`Trs1_BKFLAP`,`Trs1_WATCHP`,`Trs1_WAFLAP`,`Trs1_ADJTAB`,`Trs1_EXITAB`,`Trs1_TABFLY`,`Trs1_COINPK`,`Trs1_RENFLG`,`Trs1_RENFSH`,`Trs1_D-RING`,`Trs1_PSQUFL`,`Trs1_ADBUCK`,`Trs1_WBSKIR`,`Trs1_STAYBA`,`Trs1_W-PKT`,`Trs1_WFHKLG`,`Trs1_W-HKLG`,`Trs1_WPFKLG` FROM dummy where orderno=(SELECT DISTINCT orderno from frommeasure)";
		$modelQue=mysqli_query($measurements,$modelInserter);
		while($row=mysqli_fetch_array($modelQue)){
					$Trs1_C_PKT = $row['Trs1_C-PKT'];
					$Trs1_CFHKLG = $row['Trs1_CFHKLG'];
					$Trs1_C_HKLG = $row['Trs1_C-HKLG'];
					$Trs1_CPFKLG = $row['Trs1_CPFKLG'];
					$Trs1_S_PKT = $row['Trs1_S-PKT'];
					$Trs1_SFHKLG = $row['Trs1_SFHKLG'];
					$Trs1_S_HKLG = $row['Trs1_S-HKLG'];
					$Trs1_SPFKLG = $row['Trs1_SPFKLG'];
					$Trs1_FB_PKT = $row['Trs1_FB-PKT'];
					$Trs1_FFHKLG = $row['Trs1_FFHKLG'];
					$Trs1_F_HKLG = $row['Trs1_F-HKLG'];
					$Trs1_FPFKLG = $row['Trs1_FPFKLG'];
					$Trs1_P_EXTN = $row['Trs1_P-EXTN'];
					$Trs1_NOLOOP = $row['Trs1_NOLOOP'];
					$Trs1_TNLLOP = $row['Trs1_TNLLOP'];
					$Trs1_BKFLAP = $row['Trs1_BKFLAP'];
					$Trs1_WATCHP = $row['Trs1_WATCHP'];
					$Trs1_WAFLAP = $row['Trs1_WAFLAP'];
					$Trs1_ADJTAB = $row['Trs1_ADJTAB'];
					$Trs1_EXITAB = $row['Trs1_EXITAB'];
					$Trs1_TABFLY = $row['Trs1_TABFLY'];
					$Trs1_COINPK = $row['Trs1_COINPK'];
					$Trs1_RENFLG = $row['Trs1_RENFLG'];
					$Trs1_RENFSH = $row['Trs1_RENFSH'];
					$Trs1_D_RING = $row['Trs1_D-RING'];
					$Trs1_PSQUFL = $row['Trs1_PSQUFL'];
					$Trs1_ADBUCK = $row['Trs1_ADBUCK'];
					$Trs1_WBSKIR = $row['Trs1_WBSKIR'];
					$Trs1_STAYBA = $row['Trs1_STAYBA'];
					$Trs1_W_PKT = $row['Trs1_W-PKT'];
					$Trs1_WFHKLG = $row['Trs1_WFHKLG'];
					$Trs1_W_HKLG = $row['Trs1_W-HKLG'];
					$Trs1_WPFKLG = $row['Trs1_WPFKLG'];
		}
		//$faultDalter="DELETE FROM modeloptionst";
		//mysqli_query($measurements,$faultDalter);
		 $insertModelOption="INSERT INTO `modeloptionst`(`name`, `val`) VALUES ('C-PKT','$Trs1_C_PKT'),('CFHKLG','$Trs1_CFHKLG'),('C-HKLG','$Trs1_C_HKLG'),('CPFKLG','$Trs1_CPFKLG'),('S-PKT','$Trs1_S_PKT'),('SFHKLG','$Trs1_SFHKLG'),('S-HKLG','$Trs1_S_HKLG'),('SPFKLG','$Trs1_SPFKLG'),('FB-PKT','$Trs1_FB_PKT'),('FFHKLG','$Trs1_FFHKLG'),('F-HKLG','$Trs1_F_HKLG'),('FPFKLG','$Trs1_FPFKLG'),('P-EXTN','$Trs1_P_EXTN'),('NOLOOP','$Trs1_NOLOOP'),('TNLLOP','$Trs1_TNLLOP'),('BKFLAP','$Trs1_BKFLAP'),('WATCHP','$Trs1_WATCHP'),('WAFLAP','$Trs1_WAFLAP'),('ADJTAB','$Trs1_ADJTAB'),('EXITAB','$Trs1_EXITAB'),('TABFLY','$Trs1_TABFLY'),('COINPK','$Trs1_COINPK'),('RENFLG','$Trs1_RENFLG'),('RENFSH','$Trs1_RENFSH'),('D-RING','$Trs1_D_RING'),('PSQUFL','$Trs1_PSQUFL'),('ADBUCK','$Trs1_ADBUCK'),('WBSKIR','$Trs1_WBSKIR'),('STAYBA','$Trs1_STAYBA'),('W-PKT','$Trs1_W_PKT'),('WFHKLG','$Trs1_WFHKLG'),('W-HKLG','$Trs1_W_HKLG'),('WPFKLG','$Trs1_WPFKLG')";
		 mysqli_query($measurements,$insertModelOption);

		 //nextfifty
					
		 $fiftySelector="SELECT `Trs1_DPSEAT`,`Trs1_HIPFWD`,`Trs1_LWFRT`,`Trs1_PLCROT`,`Trs1_RISEBK`,`Trs1_DEP1PLE`,`Trs1_DEP2PLE`,`Trs1_BPKTD`,`Trs1_CUFF`,`Trs1_SLTHM`,`Trs1_SQEXT`,`Trs1_TRNPLT`,`Trs1_WBHT`,`Trs1_MINUSPEG`,`Trs1_FRTPKTD`,`Trs1_EXTENT`,`Trs1_33TNLLOOP`,`Trs1_34FRTPKTOPEN`,`Trs1_35FRTDART`,`Trs1_DEPTURN1`,`Trs1_DEPTURN2`,`Trs2_DEPTURN1`,`Trs2_DEPTURN2`,`Trs1_18PKT`,`Trs2_18PKT` from dummy where orderno=(SELECT DISTINCT orderno from frommeasure)";
		 $finalQuats=mysqli_query($measurements,$fiftySelector);
		 while($row=mysqli_fetch_array($finalQuats)){
			$Trs1_DPSEAT= $row['Trs1_DPSEAT'];
			$Trs1_HIPFWD= $row['Trs1_HIPFWD'];
			$Trs1_LWFRT= $row['Trs1_LWFRT'];
			$Trs1_PLCROT= $row['Trs1_PLCROT'];
			$Trs1_RISEBK= $row['Trs1_RISEBK'];
			$Trs1_DEP1PLE= $row['Trs1_DEP1PLE'];
			$Trs1_DEP2PLE= $row['Trs1_DEP2PLE'];
			$Trs1_BPKTD= $row['Trs1_BPKTD'];
			$Trs1_CUFF= $row['Trs1_CUFF'];
			$Trs1_SLTHM= $row['Trs1_SLTHM'];
			$Trs1_SQEXT= $row['Trs1_SQEXT'];
			$Trs1_TRNPLT= $row['Trs1_TRNPLT'];
			$Trs1_WBHT= $row['Trs1_WBHT'];
			$Trs1_MINUSPEG= $row['Trs1_MINUSPEG'];
			$Trs1_FRTPKTD= $row['Trs1_FRTPKTD'];
			$Trs1_EXTENT= $row['Trs1_EXTENT'];
			$Trs1_33TNLLOOP= $row['Trs1_33TNLLOOP'];
			$Trs1_34FRTPKTOPEN= $row['Trs1_34FRTPKTOPEN'];
			$Trs1_35FRTDART= $row['Trs1_35FRTDART'];
			$Trs1_DEPTURN1= $row['Trs1_DEPTURN1'];
			$Trs1_DEPTURN2= $row['Trs1_DEPTURN2'];
			
			$Trs1_18PKT= $row['Trs1_18PKT'];
			
		 }
		 $delFifter1="DELETE FROM `nextfiftyseven2`";
		 mysqli_query($measurements,$delFifter1);
		 $nextfiftyInserter="INSERT INTO `nextfiftyseven2`(`val`, `name`) VALUES('$Trs1_DPSEAT','DPSEAT'),('$Trs1_HIPFWD','HIPFWD'),('$Trs1_LWFRT','LWFRT'),('$Trs1_PLCROT','PLCROT'),('$Trs1_RISEBK','RISEBK'),('$Trs1_DEP1PLE','DEP1PLE'),('$Trs1_DEP2PLE','DEP2PLE'),('$Trs1_BPKTD','BPKTD'),('$Trs1_CUFF','CUFF'),('$Trs1_SLTHM','SLTHM'),('$Trs1_SQEXT','SQEXT'),('$Trs1_TRNPLT','TRNPLT'),('$Trs1_WBHT','WBHT'),('$Trs1_MINUSPEG','MINUSPEG'),('$Trs1_FRTPKTD','FRTPKTD'),('$Trs1_EXTENT','EXTENT'),('$Trs1_33TNLLOOP','33TNLLOOP'),('$Trs1_34FRTPKTOPEN','34FRTPKTOPEN'),('$Trs1_35FRTDART','35FRTDART'),('$Trs1_DEPTURN1','DEPTURN1'),('$Trs1_DEPTURN2','DEPTURN2'),('$Trs1_18PKT','18PKT')";
		 	mysqli_query($measurements,$nextfiftyInserter);
	}

	
	if(isset($_POST['trouser'])){

		$che="select distinct orderno from frommeasure limit 1";
		$re=mysqli_query($measurements,$che);
		 while($row=mysqli_fetch_array($re)){
		 $ordertrs=$row['orderno'];
		}
	
		
		
		$che="select * from dummy where orderno='$ordertrs'";
		  $res=mysqli_query($measurements,$che);
		 while($row=mysqli_fetch_array($res)){
			$orderno=$row["orderno"];
			$cust_name=$row["Customer_Name"];  
			$model=$row["Jkt_FITMODEL"];
			$cloth_article=$row["Cloth_Article"];
			$cloth=$row["Cloth"];
			$fabric_width=$row["Fabric_Width"];
			$plaid=$row["Plaid"];
			$marker=$row["Marker"];
		 //
		 $trs1_dpseat=$row['Trs1_DPSEAT'];
		 $Trs1_HIPFWD=$row['Trs1_HIPFWD'];
		 $Trs1_LWFRT=$row['Trs1_LWFRT'];
		 $Trs1_PLCROT=$row['Trs1_PLCROT'];
		 $Trs1_RISEBK=$row['Trs1_RISEBK'];

		 //user_val
		 $Trs1_WAIST=$row['Trs1_WAIST'];
		 $Trs1_SEAT=$row['Trs1_SEAT'];
		 $Trs1_THIGH=$row['Trs1_THIGH'];
		 $Trs1_KNEE=$row['Trs1_KNEE'];
		 $Trs1_BTM=$row['Trs1_BTM'];
		 $Trs1_OTSEAM=$row['Trs1_OTSEAM'];
		 $Trs1_TRURISE=$row['Trs1_TRURISE'];
		 $Trs1_FRTRISE=$row['Trs1_FRTRISE'];
		 $Trs1_BKRISE=$row['Trs1_BKRISE'];
		 $Trs1_URISE=$row['Trs1_URISE'];
		 $Trs1_INSEAM_RIGHT=$row['Trs1_INSEAM_RIGHT'];
		 $Trs1_INSEAM_LEFT=$row['Trs1_INSEAM_LEFT'];

		 //
		 $Trs1_US_1PLEAT_TRS_1DART=$row['Trs1_US-1PLEAT-TRS-1DART'];
		 $Trs1_US_1PLEAT_TRS_2DART=$row['Trs1_US-1PLEAT-TRS-2DART'];
		 $Trs1_US_2PLEAT_TRS_1DART=$row['Trs1_US-2PLEAT-TRS-1DART'];
		 $Trs1_US_2PLEAT_TRS_2DART=$row['Trs1_US-2PLEAT-TRS-2DART'];
		 $Trs1_US_3PLEAT_TRS_1DART=$row['Trs1_US-3PLEAT-TRS-1DART'];
		 $Trs1_US_3PLEAT_TRS_2DART=$row['Trs1_US-3PLEAT-TRS-2DART'];
		 $Trs1_US_4PLEAT_TRS_1DART=$row['Trs1_US-4PLEAT-TRS-1DART'];
		 $Trs1_US_4PLEAT_TRS_2DART=$row['Trs1_US-4PLEAT-TRS-2DART'];
		 $Trs1_US_11_FF_TRS_1DART=$row['Trs1_US-11-FF-TRS-1DART'];
		 $Trs1_US_11_FF_TRS_2DART=$row['Trs1_US-11-FF-TRS-2DART'];
		 //
		 $Trs2_US_1PLEAT_TRS_1DART=$row['Trs2_US-1PLEAT-TRS-1DART'];
		 $Trs2_US_1PLEAT_TRS_2DART=$row['Trs2_US-1PLEAT-TRS-2DART'];
		 $Trs2_US_2PLEAT_TRS_1DART=$row['Trs2_US-2PLEAT-TRS-1DART'];
		 $Trs2_US_2PLEAT_TRS_2DART=$row['Trs2_US-2PLEAT-TRS-2DART'];
		 $Trs2_US_3PLEAT_TRS_1DART=$row['Trs2_US-3PLEAT-TRS-1DART'];
		 $Trs2_US_3PLEAT_TRS_2DAR=$row['Trs2_US-3PLEAT-TRS-2DART'];
		 $Trs2_US_4PLEAT_TRS_1DART=$row['Trs2_US-4PLEAT-TRS-1DART'];
		 $Trs2_US_4PLEAT_TRS_2DART=$row['Trs2_US-4PLEAT-TRS-2DART'];
		 $Trs2_US_11_FF_TRS_1DART=$row['Trs2_US-11-FF-TRS-1DART'];
		 $Trs2_US_11_FF_TRS_2DART=$row['Trs2_US-11-FF-TRS-2DART'];
		 $Trs1_TG_US_FF_TRS_1DART=$row['Trs1_TG-US-FF-TRS-1DART'];
		 $Trs1_TG_US_FF_TRS_2DART=$row['Trs1_TG-US-FF-TRS-2DART'];
		 $Trs2_TG_US_FF_TRS_1DART=$row['Trs2_TG-US-FF-TRS-1DART'];
		 $Trs2_TG_US_FF_TRS_2DART=$row['Trs2_TG-US-FF-TRS-2DART'];
		}

		if($Trs1_OTSEAM!=0){
			$INSEAM=$Trs1_OTSEAM;
		}else{
			($Trs1_INSEAM_RIGHT>$Trs1_INSEAM_LEFT)?($INSEAM=$Trs1_INSEAM_RIGHT):($INSEAM=$Trs1_INSEAM_LEFT);
		}
	$chtr='';
	$actual='';
	if($Trs1_US_1PLEAT_TRS_1DART!=0){
		$chtr='S';
		$actual=$Trs1_US_1PLEAT_TRS_1DART;
	}
	elseif($Trs1_US_1PLEAT_TRS_2DART!=0){
		$chtr='S';
		$actual=$Trs1_US_1PLEAT_TRS_2DART;
	}
	elseif($Trs1_US_2PLEAT_TRS_1DART){
		$chtr='M';
		$actual=$Trs1_US_2PLEAT_TRS_1DART;
	}
	elseif($Trs1_US_2PLEAT_TRS_2DART!=0){
		$chtr='M';
		$actual=$Trs1_US_2PLEAT_TRS_2DART;
	}
	elseif($Trs1_US_3PLEAT_TRS_1DART!=0){
		$chtr='M';
		$actual=$Trs1_US_3PLEAT_TRS_1DART;
	}
	elseif( $Trs1_US_3PLEAT_TRS_2DART!=0){
		$chtr='M';
		$actual= $Trs1_US_3PLEAT_TRS_2DART;
	}
	elseif($Trs1_US_4PLEAT_TRS_1DART!=0){
		$chtr='M';
		$actual=$Trs1_US_4PLEAT_TRS_1DART;
	}
	elseif($Trs1_US_4PLEAT_TRS_2DART!=0){
		$chtr='M';
		$actual=$Trs1_US_4PLEAT_TRS_2DART;
	}
	elseif($Trs1_US_11_FF_TRS_1DART!=0){
		$chtr='F';
		$actual=$Trs1_US_11_FF_TRS_1DART;
	}
	elseif($Trs1_US_11_FF_TRS_2DART!=0){
		$chtr='F';
		$actual=$Trs1_US_11_FF_TRS_2DART;
	}
	elseif($Trs2_US_1PLEAT_TRS_1DART!=0){
		$chtr='S';
		$actual=$Trs2_US_1PLEAT_TRS_1DART;
	}
	elseif($Trs2_US_1PLEAT_TRS_2DART!=0){
		$chtr='S';
		$actual=$Trs2_US_1PLEAT_TRS_2DART;
	}
	elseif($Trs2_US_2PLEAT_TRS_1DART!=0){
		$chtr='M';
		$actual=$Trs2_US_2PLEAT_TRS_1DART;
	}
	elseif($Trs2_US_2PLEAT_TRS_2DART!=0){
		$chtr='M';
		$actual=$Trs2_US_2PLEAT_TRS_2DART;
	}
	elseif($Trs2_US_3PLEAT_TRS_1DART!=0){
		$chtr='M';
		$actual=$Trs2_US_3PLEAT_TRS_1DART;
	}
	elseif($Trs2_US_3PLEAT_TRS_2DAR!=0){
		$chtr='M';
		$actual=$Trs2_US_3PLEAT_TRS_2DAR;
	}
	elseif($Trs2_US_4PLEAT_TRS_1DART!=0){
		$chtr='M';
		$actual=$Trs2_US_4PLEAT_TRS_1DART;
	}
	elseif($Trs2_US_4PLEAT_TRS_2DART!=0){
		$chtr='M';
		$actual=$Trs2_US_4PLEAT_TRS_2DART;
	}
	elseif($Trs2_US_11_FF_TRS_1DART!=0){
		$chtr='F';
		$actual=$Trs2_US_11_FF_TRS_1DART;
	}
	elseif($Trs1_TG_US_FF_TRS_1DART!=0){
		$chtr='T';
		$actual=$Trs1_TG_US_FF_TRS_1DART;
	}
	elseif($Trs1_TG_US_FF_TRS_2DART!=0){
		$chtr='T';
		$actual=$Trs1_TG_US_FF_TRS_2DART;
	}
	elseif( $Trs2_TG_US_FF_TRS_1DART!=0){
		$chtr='T';
		$actual= $Trs2_TG_US_FF_TRS_1DART;
	}
	elseif($Trs2_TG_US_FF_TRS_2DART!=0){
		$chtr='T';
		$actual=$Trs2_TG_US_FF_TRS_2DART;
	}
	elseif($Trs2_US_11_FF_TRS_2DART!=0){
		$chtr='F';
		$actual=$Trs2_US_11_FF_TRS_2DART;
	}
	else{
		$chtr='INVALID ';
		$actual='ORDER';
	}
	$combiner=$actual.$chtr;
		fetcher($orderno,$trs1_dpseat,$Trs1_HIPFWD,$Trs1_LWFRT,$Trs1_PLCROT,$Trs1_RISEBK,$combiner,$Trs1_WAIST,$Trs1_SEAT,$Trs1_THIGH,$Trs1_KNEE,$Trs1_BTM,$Trs1_OTSEAM,$Trs1_TRURISE,$Trs1_FRTRISE,$Trs1_BKRISE,$Trs1_URISE,$INSEAM,$measurements);
		}
		
		
		$nameCombiner="SELECT Customer_Name,Marker,Jkt_CHE from dummy where orderno=(SELECT DISTINCT orderno from frommeasure)";
	$firenameCombiner=mysqli_query($measurements,$nameCombiner);
	while($row=mysqli_fetch_array($firenameCombiner)){
		$c_name=$row['Customer_Name'];
		$mark=$row['Marker'];
		$jakt_che=$row['Jkt_CHE'];
	}
?>

	
	<style>
		
		.bootstrap-table{
			padding : 15px;
		}
		.fixed-table-body{
			width: 100%;
			overflow: scroll;
		}
		.pull-right {
			margin-bottom: 12px;
			margin-top: 0px;
		}
		td {
    white-space: nowrap;
	font-size: 11px;
}

th{
	font-size: 10px;
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #000000;
}

.glyphicon {
    
    line-height: 2;
}
input{
	max-width: 150px;
	
}
.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background: #ffffff;
}
table {
    border: 1px solid black;
	 margin-top: 5px;
    padding: 4px 8px;
}


	</style>
	   

 <script src="dist/js/sweetalert.min.js"></script>
         <!--<div class="content-wrapper" >-->
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">
          <h1>
            New User
            <small><?php date_default_timezone_set("Asia/Calcutta");
					$date = date('Y-m-d', time());
					$time = date('H:i:s', time());
					
						$datetime =$date." ".$time;
					echo " Last Updated: $datetime"; ?>
			</small>
          </h1>
          <ol class="breadcrumb">
            <li id="bradcrumb0011"><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">New User</li>
          </ol>
        </section>-->

        <!-- Main content -->
        <section class="content" >
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
			
                <!-- Input addon -->
					
				<div class="row">
				    
					<div class="col-xs-7 tabler" style="padding: 15px;">
					
					<form method="POST" action=""  id="formData"  style="line-height:0.428571;border-radius: 16%;">
				
						<div class="box panel-primary" style="background-color: #e6e9ea;font-size:12px;padding: 2px 5px;">
						<div class="box-header" style=" background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);">
						  <h3 class="box-title" style="font-weight:600">TRS Form</h3>
						  <img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/>
						</div>
						<div class="box-body ">
						<div class="row">
						
						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Order No</label>
										<input type="text" id="oi" name="OrderNo" class="form-control" value="" placeholder=" Order No" style="box-shadow: 2px 2px 0px 0px #afafaf;" required>
									 </div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Fit Model</label>
										<input type="text" id="faw" name="faw" class="form-control" value="<?php echo $model; ?>" placeholder="Fit Model" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
									 </div>
								</div>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-12">
									  <div class="form-group">
										   <label>Marker</label>
										<input type="text" id="coname" name="coname" class="form-control" value="<?php echo $marker; ?>" placeholder="Marker" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
										
										</div>
									</div>
								</div>
							  <br/>
								<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									 <label>Cutomer Name</label> 
									<input type="text" id="blf" name="blf" class="form-control" value="<?php echo $cust_name; ?>" placeholder=" Cutomer Name" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
			
								</div>
								</div>
								</div>
						</div>
						<div class="col-xs-3">
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Cloth Article </label>
										<input type="text" id="mdn" name="mdn" class="form-control" value="<?php echo $cloth_article;?>" placeholder="Cloth Article" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
									 </div>
								</div>
								</div>
								 <br/>
								  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Cloth</label>
										<input type="text" id="lat" name="lat" class="form-control" value="<?php echo $cloth; ?>" placeholder="Cloth" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
									 </div>
								</div>
								</div>
							</div>
							
							<div class="col-xs-3">
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Fabric Width</label>
										<input type="text" id="gat" name="gat" class="form-control" value="<?php echo $fabric_width; ?>" placeholder="Fabric Width" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
								</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
									  <div class="form-group">
										   <label>Plaid</label>
										<input type="text" id="coname" name="coname" class="form-control" value="<?php echo $plaid; ?>" placeholder="Plaid" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
										
										</div>
									</div>
								</div>
						</div>
						<div class="row">
								    <div class="col-xs-3"></div>
									<div class="col-xs-3">
										<a><button href="MainForm1.php" id="myButton"  name="submiter" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="submit" class="btn btn-primary btn-sm" style="background-color: #dadada;">Process</button></a>
								
										
									</div>
									<div class="col-xs-3">
									
									</div>
								</div>
						</div>
						<br>
						
						  </div>
						  
						</div><!-- /.box-body -->
					  </div><!-- /.box -->
					  </form>
					  
					</div>
					
					
				</div>	

            </section><!-- /.Left col -->
            <section class="col-lg-12">
					<div class="row" style="align-item:center">
					<div class="col-xs-3" style="display:flex;flex-direction:row;float:center">
					<form method="POST" action="MainForm1.php"  id="formData">
						<a><button href="MainForm1.php" id="jacket"  name="jacket" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="" class="btn btn-info" >✔️ Jacket</button></a>
					</form>			
										
					&nbsp;&nbsp;
					<form method="POST" action="MainForm2.php"  id="formData2">
						<button href="MainForm2.php" id="vestcoat"  name="vestcoat" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="submit" class="btn btn-info" >✔️ VESTCOAT</button>
						</div>
						</form>
						<div class="container">
						<h4>Select file format for download:</h4>
						<form action="#" method="POST">
						   
							<input type="hidden" name="id" value="<?php echo $ider; ?>" />
							<label class="radio-inline">
							<input type="radio" name="opt" value="text">Text
							</label>
							<label class="radio-inline">
							<input type="radio" name="opt" value="csv">CSV
							</label>
							<label class="radio-inline">
							<input type="radio" name="opt" value="xlsx">XLSX
							</label>
							
							<label class="radio-inline">
							<button class="btn btn-primary" type="submit" id="downloader">Click to download
							</label>
							
					</form>
						</div>
					</div>
					
					<div class="col-xs-4" style="padding: 15px 13px;margin-top: 5px;padding: 4px 8px;border:1px solid black;max-height:auto;overflowy::scroll">

			<table  class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
			style="border-top:1px solid black;">
			
			<legend class="open" style="background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);">Diff. Table <img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/></legend>
					
                                        <thead>
                                            <tr>
												<th nowrap><?php date_default_timezone_set('Asia/Kolkata');
													echo "Date:" .date("m-d");?></th>
                                               
												<th style="background-color:#b2cfea">Names</th>
                                            <th style="background-color: #b2cfea;margin-top:-10;"><?php echo $combiner; ?></th>
                                            <th style="background-color: #b2cfea;margin-top:-10;">USER VALUES</th>
											
											<th style="background-color: #efef00;margin-top:-10;">Diff</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }

                                            $sqlSelect = "SELECT * from frommeasuret";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php
												
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td style="background-color:white"><?php echo ++$counter; ?></td>
														<td style="font-weight:bold;background-color:#c3c3c0"><?php echo $row['all_cols']; ?></td>
                                                        <td style="background-color:white;"><?php echo $row['main_size']; ?></td>
                                                        <td style="background-color:#82b8ea;"><?php echo $row['user_values']; ?></td>
														<td style="background-color:white;"><?php echo $row['lst_diff']; ?></td>
														
                                                    </tr>
                                                
                                            <?php
												}
										} ?>
                                        </tbody>
                                    </table>

								
			</div>
			<!-- next fifty  -->
			<div class="col-xs-4" style="padding: 15px 13px;overflow-x:scroll;margin-top: 5px;padding: 4px 8px;max-height:590px;overflowy::scroll;margin-left:1%;border:1px solid black;">
			
			<legend class="open" style="background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);"> Table <img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/></legend>
			<table  class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
			style="border-top:1px solid black;max-width:auto;max-height:500px;overflowY::scroll">
                                        <thead>
										<th style="width:20px" nowrap></th>
                                               
											<th  style="background-color:#b2cfea"><?php echo $c_name." ".$mark; ?></th>
                                                <th nowrap style="background-color:#b2cfea"><?php  ?></th>
												<th nowrap >Entered value for size</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">Diff</th>  
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }

                                            $sqlSelect = "SELECT * from nextfiftyseven2";
                                            $counter = 15;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php
												
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td style="width:20px"><?php echo ++$counter; ?></td>
														<td style="font-weight:bold;background-color:#c3c3c0;"><?php echo $row['name']; ?></td>
                                                        <td></td>
														<td style="background-color:#b2cfea"></td>
														<td style="background-color: white;"><?php echo $row['val']; ?></td>
                                                    </tr>
                                                
                                            <?php
												}
										} ?>
                                        </tbody>
                                    </table>
			</div>
				<div class="col-xs-3"  style="padding: 15px 13px;overflow-x:scroll;margin-top: 5px;padding: 4px 8px;max-height:590px;overflowy::scroll;border:1px solid black;margin-left:1%">
				<table  class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
			style="border-top:1px solid black;">
			                <legend class="open" style="background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);"> Model Option<img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/></legend>
                                       
                                    <thead>
                                    <tr>
									<th nowrap style="font-weight:bold;background-color:#c3c3c0">Model Options</th>
									<th nowrap style="background-color: #fhfhfh;margin-top:-10;">Value</th>
									</tr>
									</thead>
										<tbody>
											<?php 
											$sel = "SELECT * from modeloptionst";
											$re = mysqli_query($measurements, $sel);
											while ($row = mysqli_fetch_array($re)) {
											?>	
											<tr>
														<td style="font-weight:bold;background-color:#c3c3c0"><?php echo $row['name']; ?></td>
                                                        <td style="background-color:#b2cfea"><?php echo $row['val']; ?></td>
											</tr>
												<?php
											}
												?>
										</tbody>
			</table>
			</div>

			</section>
			
			  
			
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
		<br>
		<br>
      <!-- /.content-wrapper -->
	  <!--</div>-->
	  
	    


  
<?php include 'layout/footer.php'; ?>