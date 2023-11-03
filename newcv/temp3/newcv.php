<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
       // Handle the uploaded profile image
       if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] === UPLOAD_ERR_OK) {
            $upload_dir = "uploads/"; // Set the directory where you want to store the uploaded images
            $temp_image = $_FILES["profile_image"]["tmp_name"];
            $image_name = $_FILES["profile_image"]["name"];

            // Ensure the directory exists, or create it if needed
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // Move the uploaded image to the specified directory
            $new_image_path = $upload_dir . $image_name;
        }
        else{
            echo "<script>alert('No image uploaded. Please select an image before submitting.');</script>";
            echo "<script>window.location = 'index.php';</script>";
            exit; // Stop processing if no image is uploaded
        }
        $full_name = strtoupper($_POST["full_name"]);
        $current_job_title = $_POST["current_job_title"];
        $linkedin = $_POST["linkedin"];
        $job_title1 = $_POST["job_title1"];
        $email = $_POST["email"];
        $company_name1 = $_POST["company_name1"];
        $phone = $_POST["phone"];
        $yearjob1 = $_POST["yearjob1"];
        $site = $_POST["site"];
        $detailjob1 = $_POST["detailjob1"];
        $skill1 = $_POST["skill1"];
        $skill2 = $_POST["skill2"];
        $skill3 = $_POST["skill3"];
        $skill4 = $_POST["skill4"];
        $skill5 = $_POST["skill5"];
        $job_title2 = $_POST["job_title2"];
        $company_name2 = $_POST["company_name2"];
        $v1 = $_POST["v1"];
        $yearjob2 = $_POST["yearjob2"];
        $v2 = $_POST["v2"];
        $detailjob2 = $_POST["detailjob2"];
        $v3 = $_POST["v3"];
        $degree = $_POST["degree"];
        $facultyofeducation = $_POST["facultyofeducation"];
        $yearofgrad = $_POST["yearofgrad"];
        $detailedu = $_POST["detailedu"];
    }
    else{
        echo "<script>alert('Invalid request. Please fill out the form before submitting.');</script>";
        echo "<script>window.location = 'index.php';</script>";
        exit; // Stop processing if the request method is not POST
    }
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>CV Templete - New Template 3</title>
        <link rel="icon" href="../../src/icon.png" type="image/png">
        <style>
            @media print {
                body {
                    -webkit-print-color-adjust: exact; /* Chrome, Safari */
                    color-adjust: exact; /* Firefox */
                }
            }
            table {
                border-collapse: collapse;
                background-color: #FFE5FF;
            }
            td {
                border: 1px solid #000;
                padding: 5px;
                text-align: left;
            }
            .col1{
                width: 50px;
                border : none;
            }
            .col2{
                width: 325px;
                border : none;
            }
            .col3{
                width: 30px;
                border : none;
            }
            .col4{
                width: 369px;
                border : none;
            }
            .botborder{
                border-bottom: 1px solid black;
            }
            .rowbold{
                font-weight: bold;
                color : #A22A2A;
            }
            #leftborder .col3{
                border-left: 1px solid black;
            }
            #boldtxt{
                font-weight: bold;
            }
            .bot4border .col4,.bot4border .col3{
                border-bottom: 1px solid black;
            }
            .bld .col4{
                font-weight: bold;
                color : #A22A2A;
            }
            #leftbotborder .col1,#leftbotborder .col2{
                border-bottom: 1px solid black;
            }
            #leftbotborder .col3{
                border-left: 1px solid black;
            }
            .bldtxt .col2{
                font-weight: bold;
                color : #A22A2A;
            }
            .round-image {
                width: 2.73cm;
                height: 2.73cm;
                border-radius: 50%;
            }
        </style>
    </head>
    <body onload="window.print();" accesskey="p">
        <form action="newcv.php" method="post" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4" rowspan="4">
                            <center>
                                <?php 
                                    if (move_uploaded_file($temp_image, $new_image_path)) {
                                    echo "<img class='round-image' src= '$new_image_path' alt='Profile Image'> <!--input from user-->";
                                    }
                                ?>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><?php echo $full_name;?></td>
                        <td class="col3"></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><?php echo $current_job_title;?></td>
                        <td class="col3"></td>
                    </tr>
                    <tr class="botborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr class="rowbold" id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Work Experience</td>
                        <td class="col3"></td>
                        <td class="col4">LinkedIn Profil : </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"><img src= '../../src/linkedin.png' alt='LinkedIn :'>&ensp;<?php echo $linkedin;?></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" id="boldtxt"><?php echo $job_title1;?></td>
                        <td class="col3"></td>
                        <td class="col4"><img src= '../../src/email2.png' alt='email :'>&ensp;<?php echo $email;?></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"><?php echo $company_name1;?></td>
                        <td class="col3"></td>
                        <td class="col4"><img src= '../../src/phone2.png' alt='Phone :'>&ensp;<?php echo $phone;?></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"><?php echo $yearjob1;?></td>
                        <td class="col3"></td>
                        <?php
                            if($site != ""){
                        ?>
                        <td class="col4"><img src= '../../src/site.png' alt='Website :'>&ensp;<?php echo $site;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4"></td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="bot4border" id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder" class="bld">
                        <td class="col1"></td>
                        <td class="col2" rowspan="6">
                            <center>
                                <?php echo $detailjob1;?>
                            </center>
                        </td>
                        <td class="col3"></td>
                        <td class="col4">Relevent Skills</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4"><?php echo $skill1;?></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <?php
                            if($skill2 != ""){
                        ?>
                        <td class="col4"><?php echo $skill2;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col4'></td>";
                            }
                        ?>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <?php
                            if($skill3 != ""){
                        ?>
                        <td class="col4"><?php echo $skill3;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col4'></td>";
                            }
                        ?>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <?php
                            if($skill4 != ""){
                        ?>
                        <td class="col4"><?php echo $skill4;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col4'></td>";
                            }
                        ?>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <?php
                            if($skill5 != ""){
                        ?>
                        <td class="col4"><?php echo $skill5;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col4'></td>";
                            }
                        ?>
                    </tr>
                    <tr class="bot4border" id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder" class="bld">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2" id="boldtxt"><?php echo $job_title2;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col2' id='boldtxt'></td>";
                            }
                        ?>
                        <td class="col3"></td>
                        <td class="col4">Volunteer Works Aand Interests</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2" id="boldtxt"><?php echo $company_name2;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col2' id='boldtxt'></td>";
                            }
                        ?>
                        <td class="col3"></td>
                        <td class="col4"><?php echo $v1;?></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2" id="boldtxt"><?php echo $yearjob2;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col2' id='boldtxt'></td>";
                            }
                        ?>
                        <td class="col3"></td>
                        <?php
                            if($v2 != ""){
                        ?>
                        <td class="col4"><?php echo $v2;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col4'></td>";
                            }
                        ?>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2" rowspan="6"><?php echo $detailjob2;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col2' rowspan='6'></td>";
                            }
                        ?>
                        <td class="col3"></td>
                        <?php
                            if($v3 != ""){
                        ?>
                        <td class="col4"><?php echo $v3;?></td>
                        <?php
                            }
                            else{
                                echo"
                                <td class='col4'></td>";
                            }
                        ?>
                    </tr>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftbotborder">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">&ensp;</td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder" class="bldtxt">
                        <td class="col1"></td>
                        <td class="col2">Education History</td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">&ensp;</td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" id="boldtxt"><?php echo $degree;?></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"><?php echo $facultyofeducation;?></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2"><?php echo $yearofgrad;?></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" rowspan="3"><?php echo $detailedu;?></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">&ensp;</td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>
