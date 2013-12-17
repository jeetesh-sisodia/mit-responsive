<?php
	// $save = $_POST["txt_save"];
	// if(isset($save)&&($save)=='YES')
	// {
    $con=mysql_connect("gkmit.co","c0gkm","gkm@123");
		//$con=mysql_connect("localhost","root","");

		if (!$con)
  		{		
  			echo "Failed to connect to MySQL: " . mysql_error();
  		}
  		else
  		{
  			$profile_type=$_POST['profile_type'];
        $name = $_POST["txt_name"];
  			$dob = $_POST["txt_dob"];
  			$mail = $_POST["txt_mail"];
  			$phone = $_POST["txt_phone"];
  			$university = $_POST["txt_university"];
  			$college = $_POST["txt_college"];
  			$major = $_POST["txt_major"];
  			$school = $_POST["txt_school"];
  			$member = $_POST["opt_member"];
			  $gpa = $_POST["txt_gpa"];
  			$software = $_POST["txt_software"];
  			$hardware = $_POST["txt_hardware"];
  			$arts ="";// $_POST["txt_arts"];
  			$mgt = $_POST["txt_mgt"];
  			$awards ="";// $_POST["txt_awards"];
  			$activities = $_POST["txt_activities"];
  			$other ="";// $_POST["txt_other"];
  			$access = $_POST["opt_access"];
  			$relevant = $_POST["txt_relevant"];
  			$project = $_POST["txt_desc_project"];
  			$img_exp=0;
  			if(isset($_POST["img_exp"]))
        {
            $img_exp=$_POST["img_exp"];
        }
  			$icic_fut=0;
        if(isset($_POST["icic_fut"]))
        {
            $icic_fut=$_POST["icic_fut"];
        }
        $liv_mob=0;
        if(isset($_POST["liv_mob"]))
        {
            $liv_mob=$_POST["liv_mob"];
        }
        $designing_interaction=0;
        if(isset($_POST["designing_interaction"]))
        {
            $designing_interaction=$_POST["designing_interaction"];
        }
        $designing_creative_learning=0;
        if(isset($_POST["designing_creative_learning"]))
        {
            $designing_creative_learning=$_POST["designing_creative_learning"];
        }
        $grassroot_engineering=0;
        if(isset($_POST["grassroot_engineering"]))
        {
            $grassroot_engineering=$_POST["grassroot_engineering"];
        }
        $performance_capture=0;
        if(isset($_POST["performance_capture"]))
        {
            $performance_capture=$_POST["performance_capture"];
        }
        $design_sustainability=0;
        if(isset($_POST["design_sustainability"]))
        {
            $design_sustainability=$_POST["design_sustainability"];
        }
        $magical_interfaces=0;
        if(isset($_POST["magical_interfaces"]))
        {
            $magical_interfaces=$_POST["magical_interfaces"];
        }
        $fabrication_lab=0;
        if(isset($_POST["fabrication_lab"]))
        {
            $fabrication_lab=$_POST["fabrication_lab"];
        }
  			$workshop = $_POST["txt_workshop"];
  			if(isset($_POST['check_tech'])) {
  			$tech = "YES";
  			}
  			else
  			{
  				$tech = "NO";
  			}
  			$ref1_name = $_POST["txt_ref1_name"];
  			$ref1_email = $_POST["txt_ref1_email"];
  			$ref1_position = $_POST["txt_ref1_position"];
  			$ref1_relation = $_POST["txt_ref1_relation"];
  			$ref2_name = $_POST["txt_ref2_name"];
  			$ref2_email = $_POST["txt_ref2_email"];
  			$ref2_position = $_POST["txt_ref2_position"];
  			$ref2_relation = $_POST["txt_ref2_relation"];
        if(isset($_POST['check_tc1'])) {
        $tc1 = "YES";
        }
        else
        {
          $tc1 = "NO";
        }
        if(isset($_POST['check_tc2'])) {
        $tc2 = "YES";
        }
        else
        {
          $tc2 = "NO";
        }
        $sign=$_POST['txt_sign'];
			  mysql_select_db('c0gkm');
			  $sql="INSERT INTO `gitp_form` VALUES('','$name','$dob','$mail','$phone','$university','$college','$major','$school','$member','$gpa','$software','$hardware','$arts','$mgt','$awards','$activities','$other','$access','$relevant','$project','$img_exp','$icic_fut','$liv_mob','$designing_interaction','$designing_creative_learning','$grassroot_engineering','$performance_capture','$design_sustainability','$magical_interfaces','$fabrication_lab','$workshop','$tech','$ref1_name','$ref1_email','$ref1_position','$ref1_relation','$ref2_name','$ref2_email','$ref2_position','$ref2_relation','$tc1','$tc2','$sign','$profile_type')";
			  $retval = mysql_query( $sql, $con );
				if(! $retval )
				{
				  die('Could not enter data: ' . mysql_error());
				}
				mysql_close($con);
				header("Location:di14.php?ret");
   		}
	
?>


