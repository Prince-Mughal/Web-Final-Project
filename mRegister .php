<?php
/* Server Name  */
	$DB_HOST = "localhost";
/* Account Name */
        $DB_USER = "root";
/* Password */
        $DB_PASS = "";
/* Database Name */
        $DB_NAME = "Volunteer";
/* Connect to Database */
	$CONNECTION = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
        /* Check Connection */
        if(!$CONNECTION){
           /* Capture Error */
           $errMSG = mysqli_error($CONNECTION);
           /* Display Error */
           echo $errMSG;
           /* Stop Execution */
           die("Try Again...");
        }else{
            /* Connected to Server */
            echo "Connection Established.<br>";}
/* First Name */
	$FNAME          = $_POST['Fname'];
/* Last Name */
	$LNAME          = $_POST['Lname'];
/* Country */
	$COUNTRY        = $_POST['Country'];
/* Province or State */
	$PROVINCE_STATE = $_POST['Prov_State'];
/* City */
	$CITY           = $_POST['City'];
/* Permanent Address */
	$PERMANENT_ADDR = $_POST['Prmnt_Addr'];
/* Gender */
	$GENDER         = $_POST['Gender'];
/* Phone */
	$PHONE          = $_POST['Phone'];
/* Email */
	$E_MAIL         = $_POST['Email'];
/* Qualificatiion */
	$EDUCATION      = $_POST['Edu'];
/* Company or Organization */
	$COMPANY_ORG    = $_POST['CMPNY_ORG'];
/* Language */
	$LANGUAGE       = $_POST['LANG'];
/* INSERT A record into Table */
	$Query  = "INSERT INTO Account (V_FNAME,V_LNAME,V_COUNTRY,V_PROVINCE_STATE,V_CITY,V_PERMANENT_ADDR,";
        $Query .= "V_GENDER,V_PHONE,V_EMAIL,V_EDUCATION,V_COMPANY_ORG,V_LANGUAGE) VALUES";
        $Query .= "('$FNAME','$LNAME','$COUNTRY','$PROVINCE_STATE','$CITY','$PERMANENT_ADDR',";
        $Query .= "'$GENDER','$PHONE','$EMAIL','$EDUCATION','$COMPANY_ORG','$LANGUAGE')";
/* Execute Query */
        $Result = mysqli_query($CONNECTION,$Query);
        /* Check the Query */
        if($Result){
            echo "Successfully Inserted.<br>";
        }else{
            die("Couldn't Execute Query.<br>");}

/* Close Connection */
        mysqli_close($CONNECTION);
 ?>
