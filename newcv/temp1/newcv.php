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
        $first_name = strtoupper($_POST["first_name"]);
        $last_name = strtoupper($_POST["last_name"]);
        $job_title = $_POST["job_title"];
        $about_me = $_POST["aboutme"];
        $company_name1 = $_POST["company_name1"];
        $location1 = $_POST["location1"];
        $year1 = $_POST["year1"];
        $detail1 = $_POST["detail1"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $company_name2 = $_POST["company_name2"];
        $location2 = $_POST["location2"];
        $year2 = $_POST["year2"];
        $detail2 = $_POST["detail2"];
        $company_name3 = $_POST["company_name3"];
        $lang1 = $_POST["lang1"];
        $lang2 = $_POST["lang2"];
        $lang3 = $_POST["lang3"];
        $location3 = $_POST["location3"];
        $year3 = $_POST["year3"];
        $detail3 = $_POST["detail3"];
        $expertise1 = $_POST["expertise1"];
        $expertise2 = $_POST["expertise2"];
        $expertise3 = $_POST["expertise3"];
        $expertise4 = $_POST["expertise4"];
        $expertise5 = $_POST["expertise5"];
        $facultyofeducation1 = $_POST["facultyofeducation1"];
        $degree1 = $_POST["degree1"];
        $yearedu1 = $_POST["yearedu1"];
        $facultyofeducation2 = $_POST["facultyofeducation2"];
        $degree2 = $_POST["degree2"];
        $yearedu2 = $_POST["yearedu2"];
        $skill1 = $_POST["skill1"];
        $percent1 = $_POST["percent1"];
        $skill2 = $_POST["skill2"];
        $percent2 = $_POST["percent2"];
        $skill3 = $_POST["skill3"];
        $percent3 = $_POST["percent3"];
        $skill4 = $_POST["skill4"];
        $percent4 = $_POST["percent4"];
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
        <title>CV Template - New Template 1</title>
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
                padding: 4px;
                text-align: left;
            }
            .col1 {
                width: 30px;
                background-color: #FFFFFF;
                border: none;
            }
            .col2 {
                width: 126px;
                background-color: #404040;
                border: none;
                color: white;
            }
            .col3 {
                width: 50px;
                background-color: #FFFFFF;
                border: none;
            }
            .col4 {
                width: 50px;
                background-color: #FFFFFF;
                border: none;
            }
            .col5, .col6, .col7, .col8, .col9, .col10 {
                width: 50px;
                background-color: #FFFFFF;
                border: none;
            }
            .raw2, .raw3, .raw4 {
                background-color: #305496;
                border: none;
                color: white;
            }
            .line .col3, .line .col4, .line .col5, .line .col6,
            .line .col7, .line .col8, .line .col9, .line .col10 {
                border-bottom: 1px solid #305496;
            }
            .round-image {
                width: 3.39cm;
                height: 3.39cm;
                border: 1px solid black;
                border-radius: 50%;
            }
            .experience-box {
                background-color: #305496;
                color: white;
                border: 2px solid #305496;
                padding: 8px;
            }
            .lang-box {
                color: white;
                border: 2px solid #305496;
                padding: 8px;
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
                        <td class="col6"></td>
                        <td class="col7"></td>
                        <td class="col8"></td>
                        <td class="col9"></td>
                        <td class="col10"></td>
                    </tr>
                    <tr class="raw2">
                        <td class="raw2"></td>
                        <td class="raw2" rowspan="3">
                            <?php 
                                if (move_uploaded_file($temp_image, $new_image_path)) {
                                echo "<img class='round-image' src= '$new_image_path' alt='Profile Image'> <!--input from user-->";
                                }
                            ?>
                        </td>
                        <td class="raw2" colspan="9"><?php echo $first_name;?></td> <!--input from user-->
                    </tr>
                    <tr class="raw3">
                        <td class="raw3"></td>
                        <td class="raw3" colspan="9">&ensp;&ensp;<?php echo $last_name;?></td> <!--input from user-->
                    </tr>
                    <tr class="raw4">
                        <td class="raw4"></td>
                        <td class="raw4" colspan="9">&ensp;&ensp;&ensp;&ensp;<?php echo $job_title;?></td> <!--input from user-->
                    </tr>
                    <tr class="line">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                        <td class="col6"></td>
                        <td class="col7"></td>
                        <td class="col8"></td>
                        <td class="col9"></td>
                        <td class="col10"></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">About Me</td>
                        <td class="col3" colspan="9">
                            <div class="experience-box">Experience</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2" rowspan="4"><?php echo $about_me;?></td> <!--input from user-->
                        <td class="col3" colspan="9"><?php echo $company_name1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col3" colspan="9"><?php echo $location1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col3" colspan="9"><?php echo $year1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col3" colspan="9"><?php echo $detail1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><img src= '../../src/phone.png' alt='Phone :'>&ensp;<?php echo $phone;?></td> <!--input from user-->
                        <?php
                            if($company_name2 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $company_name2;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><img src= '../../src/email.png' alt='Email :'>&ensp;<?php echo $email;?></td> <!--input from user-->
                        <?php
                            if($company_name2 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $location2;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><img src= '../../src/address.png' alt='Address :'>&ensp;<?php echo $address;?></td> <!--input from user-->
                        <?php
                            if($company_name2 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $year2;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <?php
                            if($company_name2 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $detail2;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <div class="lang-box">Language</div> <!--input from user-->
                        </td>
                        <?php
                            if($company_name3 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $company_name3;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><?php echo $lang1;?></td>
                        <?php
                            if($company_name3 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $location3;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <?php
                            if($lang2 !=""){
                        ?>
                        <td class="col2"><?php echo $lang2;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td>
                        <?php
                            }
                            if($company_name3 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $year3;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <?php
                            if($lang3 !=""){
                        ?>
                        <td class="col2"><?php echo $lang3;?></td>
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td>
                        <?php
                            }
                            if($company_name3 !=""){
                        ?>
                        <td class="col3" colspan="9"><?php echo $detail3;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <div class="lang-box">Expertise</div>
                        </td>
                        <td class="col3" colspan="9">
                            <div class="experience-box">Education</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"><?php echo $expertise1;?></td> <!--input from user-->
                        <td class="col3" colspan="9"><?php echo $facultyofeducation1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <?php
                            if($expertise2 != ""){
                        ?>
                        <td class="col2"><?php echo $expertise2;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                        <td class="col3" colspan="9"><?php echo $yearedu1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <?php
                            if($expertise3 != ""){
                        ?>
                        <td class="col2"><?php echo $expertise3;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                        <td class="col3" colspan="9"><?php echo $degree1;?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <?php
                            if($expertise4 != ""){
                        ?>
                        <td class="col2"><?php echo $expertise4;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <?php
                            if($expertise5 != ""){
                        ?>
                        <td class="col2"><?php echo $expertise5;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col2"></td> <!--input from user-->
                        <?php
                            }
                            if($facultyofeducation2 != "")
                            {
                        ?>
                        <td class="col3" colspan="9"><?php echo $facultyofeducation2;?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <?php
                            if($facultyofeducation2 != "")
                            {
                        ?>
                        <td class="col3" colspan="9"><?php echo $degree2;?></td> <!--input from user-->
                        <?php 
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php 
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <?php
                            if($facultyofeducation2 != "")
                            {
                        ?>
                        <td class="col3" colspan="9"><?php echo $yearedu2;?></td> <!--input from user-->
                        <?php 
                            }
                            else{
                        ?>
                        <td class="col3" colspan="9"></td> <!--input from user-->
                        <?php 
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3" colspan="9">
                            <div class="experience-box">Skill Sumary</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"><?php echo $skill1;?></td> <!--input from user-->
                        
                        <td class="col4">
                            <progress id="progress1" value="<?php echo $percent1;?>" max="100"></progress>
                        </td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"><?php echo $percent1."%";?></td> <!--input from user-->
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <?php
                            if($skill2 != ""){
                        ?>
                        <td class="col3"><?php echo $skill2;?></td> <!--input from user-->
                        
                        <td class="col4">
                            <progress id="progress2" value="<?php echo $percent2;?>" max="100"></progress>
                        </td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"><?php echo $percent2."%";?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3"></td> <!--input from user-->
                        <td class="col4"></td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <?php
                            if($skill3 != ""){
                        ?>
                        <td class="col3"><?php echo $skill3;?></td> <!--input from user-->
                        
                        <td class="col4">
                            <progress id="progress3" value="<?php echo $percent3;?>" max="100"></progress>
                        </td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"><?php echo $percent3."%";?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3"></td> <!--input from user-->
                        <td class="col4"></td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <?php
                            if($skill4 != ""){
                        ?>
                        <td class="col3"><?php echo $skill4;?></td> <!--input from user-->
                        <td class="col4">
                            <progress id="progress4" value="<?php echo $percent4;?>" max="100"></progress>
                        </td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"><?php echo $percent4."%";?></td> <!--input from user-->
                        <?php
                            }
                            else{
                        ?>
                        <td class="col3"></td> <!--input from user-->
                        <td class="col4"></td> <!--create bar berdasarkan pecent-->
                        <td class="col5" colspan="8"></td> <!--input from user-->
                        <?php
                            }
                        ?>
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>