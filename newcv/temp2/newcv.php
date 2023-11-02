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
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $detailprofil = $_POST["detailprofil"];
        $facultyofeducation1 = $_POST["facultyofeducation1"];
        $year1 = $_POST["year1"];
        $degree1 = $_POST["degree1"];
        $facultyofeducation2 = $_POST["facultyofeducation2"];
        $year2 = $_POST["year2"];
        $degree2 = $_POST["degree2"];
        $facultyofeducation3 = $_POST["facultyofeducation3"];
        $job_title1 = $_POST["job_title1"];
        $yearjob1 = $_POST["yearjob1"];
        $year3 = $_POST["year3"];
        $degree3 = $_POST["degree3"];
        $company_name1 = $_POST["company_name1"];
        $detailjob1 = $_POST["detailjob1"];
        $job_title2 = $_POST["job_title2"];
        $yearjob2 = $_POST["yearjob2"];
        $company_name2 = $_POST["company_name2"];
        $percent1 = $_POST["percent1"];
        $percent2 = $_POST["percent2"];
        $detailjob2 = $_POST["detailjob2"];
        $skill1 = $_POST["skill1"];
        $skill2 = $_POST["skill2"];
        $job_title3 = $_POST["job_title3"];
        $yearjob3 = $_POST["yearjob3"];
        $company_name3 = $_POST["company_name3"];
        $percent3 = $_POST["percent3"];
        $percent4 = $_POST["percent4"];
        $detailjob3 = $_POST["detailjob3"];
        $skill3 = $_POST["skill3"];
        $skill4 = $_POST["skill4"];
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
        <title>CV Templete - New Template 2</title>
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
            }
            td {
                border: 1px solid #000;
                padding: 5px;
                text-align: left;
            }
            .col1 {
                width: 30px;
                background-color: #FFFFFF;
                border: none;
            }
            .col2 {
                width: 157px;
                background-color: #FFFFFF;
                border: none;
            }
            .col3 {
                width: 157px;
                background-color: #FFFFFF;
                border: none;
            }
            .col4 {
                width: 200px;
                background-color: #FFFFFF;
                border: none;
            }
            .col5 {
                width: 225px;
                background-color: #FFFFFF;
                border: none;
            }
            .horizontal-line {
                background-color: #0085B4; /* Desired color for the horizontal line */
                height: 1px; /* Adjust the line height as needed */
            }
            .jobtitle .col3,.jobtitle .col4,.jobtitle .col5{
                padding: 0px;
            }
            .name{
                color:#305496;
                font-weight: bold;
            }
            .raw3 .col1,.raw3 .col2,.raw3 .col3{
                background-color: #D9D9D9;
            }
            .raw3 .col4,.raw3 .col5,.raw3 .col6{
                background-color: #0085B4;
                color: #FFFFFF;
            }
            .raw4 .col4,.raw4 .col5,.raw4 .col6{
                background-color: #D9D9D9;
            }
            .raw5 .col4,.raw5 .col5,.raw5 .col6{
                background-color: #D9D9D9;
                color: #0085B4;
            }
            .raw5 {
                color: #0085B4;
                font-weight: bold;
            }
            .raw6 .col4,.raw6 .col5,.raw6 .col6{
                background-color: #D9D9D9;
            }
            .raw6 .col2{
                font-weight: bold;
            }
            .round-image {
                max-width: 5.46cm;
                max-height: 5.46cm;
            }
        </style>
    </head>
    <body onload="window.print();" accesskey="p">
        <form>
            <center>
                <table>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="name">
                        <td class="col1"></td>
                        <td class="col2" colspan="4"><?php echo $full_name;?></td>
                    </tr>
                    <tr class="jobtitle">
                        <td class="col1"></td>
                        <td class="col2">&emsp;<?php echo $current_job_title;?></td>
                        <td class="col3">
                            <div class="horizontal-line"></div>
                        </td>
                        <td class="col4">
                            <div class="horizontal-line"></div>
                        </td>
                        <td class="col5">
                            <div class="horizontal-line"></div>
                        </td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col2" rowspan="5" colspan="2">
                            <center>
                                <?php 
                                    if (move_uploaded_file($temp_image, $new_image_path)) {
                                    echo "<img class='round-image' src= '$new_image_path' alt='Profile Image'> <!--input from user-->";
                                    }
                                ?>
                            </center>
                        </td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3"><center>LinkedIn : <?php echo $linkedin;?></center></td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3"><center>Phone : <?php echo $phone;?></center></td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3"><center>Email : <?php echo $email;?></center></td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw5">
                        <td class="col1"></td>
                        <td class="col2" colspan="2">PERSONAL PROFIL</td>
                        <td class="col4" colspan="2">&emsp;EDUCATION</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2" colspan="2" rowspan="5"><?php echo $detailprofil;?></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4" colspan="2">&emsp;<?php echo $facultyofeducation1;?></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4">&emsp;<?php echo $year1;?></td>
                        <td class="col5">&emsp;<?php echo $degree1;?></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <?php
                            if($facultyofeducation2 != ""){
                        ?>
                        <td class="col4" colspan="2">&emsp;<?php echo $facultyofeducation2;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4" colspan="2">&emsp;</td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <?php
                            if($facultyofeducation2 != ""){
                        ?>
                        <td class="col4">&emsp;<?php echo $year2;?></td>
                        <td class="col5">&emsp;<?php echo $degree2;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw5">
                        <td class="col1"></td>
                        <td class="col2" colspan="2">WORK EXPERIENCE</td>
                        <td class="col4" colspan="2"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <?php
                            if($facultyofeducation3 != ""){
                        ?>
                        <td class="col4" colspan="2">&emsp;<?php echo $facultyofeducation3;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4" colspan="2">&emsp;</td>
                        <?php
                            }
                        ?></td>
                    </tr>
                    <tr class="raw6">
                        <td class="col1"></td>
                        <td class="col2"><?php echo $job_title1;?></td>
                        <td class="col3" rowspan="2"><?php echo $yearjob1;?></td>
                        
                        <?php
                            if($facultyofeducation3 != ""){
                        ?>
                        <td class="col4">&emsp;<?php echo $year3;?></td>
                        <td class="col5">&emsp;<?php echo $degree3;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2"><?php echo $company_name1;?></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2" rowspan="4" colspan="2">
                            <center>
                                <?php echo $detailjob1;?>
                            </center>
                        </td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw5">
                        <td class="col1"></td>
                        <td class="col2" colspan="2"></td>
                        <td class="col4" colspan="2">&emsp;PERSONAL SKILLS</td>
                    </tr>
                    <tr class="raw6">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2"><?php echo $job_title2;?></td>
                        <td class="col3" rowspan="2"><?php echo $yearjob2;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td>
                        <td class="col3" rowspan="2"></td>
                        <?php
                            }
                        ?>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2"><?php echo $company_name2;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td>
                        <?php
                            }
                        ?>
                        <td class="col4"><center><?php echo $percent1;?></center></td>
                        <?php
                            if($percent2 != ""){
                        ?>
                        <td class="col5"><center><?php echo $percent2;?></center></td>
                        </td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col5"><center></center></td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <?php
                            if($job_title2 != ""){
                        ?>
                        <td class="col2" rowspan="4" colspan="2">
                            <center><?php echo $detailjob2;?></center>
                        </td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2" rowspan="4" colspan="2">
                            <center></center>
                        </td>
                        <?php
                            }
                        ?>
                        <td class="col4"><center><?php echo $skill1;?></center></td>
                        <?php
                            if($percent2 != ""){
                        ?>
                        <td class="col5"><center><?php echo $skill2;?></center></td>
                        </td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col5"><center></center></td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw6">
                        <td class="col1"></td>
                        <?php
                            if($job_title3 != ""){
                        ?>
                        <td class="col2"><?php echo $job_title3;?></td>
                        <td class="col3" rowspan="2"><?php echo $yearjob3;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td>
                        <td class="col3" rowspan="2"></td>
                        <?php
                            }
                        ?>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <?php
                            if($job_title3 != ""){
                        ?>
                        <td class="col2"><?php echo $company_name3;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td>
                        <?php
                            }
                            if($percent3 != ""){
                        ?>
                        <td class="col4"><center><?php echo $percent3;?></center></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4"><center></center></td>
                        <?php
                            }
                            if($percent4 != ""){
                        ?>
                        <td class="col5"><center><?php echo $percent4;?></center></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col5"><center></center></td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <?php
                        if($job_title3 != ""){
                        ?>
                        <td class="col2" rowspan="4" colspan="2">
                            <center>
                                <?php echo $detailjob3;?>
                            </center>
                        </td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2" rowspan="4" colspan="2"><center></center></td>
                        <?php
                            }
                            if($percent3 != ""){
                        ?>
                        <td class="col4"><center><?php echo $skill3;?></center></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col4"><center></center></td>
                        <?php
                            }
                            if($percent4 != ""){
                        ?>
                        <td class="col5"><center><?php echo $skill4;?></center></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col5"><center></center></td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1">&emsp;</td>
                        <td class="col4">&emsp;</td>
                        <td class="col5">&emsp;</td>
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>