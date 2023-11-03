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
            input[type="submit"]{
                margin-bottom:15px;
                height:40px;
                box-sizing: border-box;
                padding:10px;
                cursor: pointer;
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
            .last{
                border-bottom: 1px solid black;
            }
            .round-image {
                width: 2.73cm;
                height: 2.73cm;
                border: 1px solid black;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <form action="newcv.php" method="post" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4" rowspan="4">
                            <center>
                                <img id="profile-image" class="round-image" src="your_image_url.jpg" alt="Profile Image">
                                <input type="file" name="profile_image" onchange="displayImage(this)" required>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="full_name" placeholder="Full Name" required>
                        </td>
                        <td class="col3"></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="current_job_title" placeholder="Current Job Title" required>
                        </td>
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
                        <td class="col4">
                            <input type="text" name="linkedin" placeholder="Linkedin" required>
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" id="boldtxt">
                            <input type="text" name="job_title1" placeholder="Job Title" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="email" name="email" placeholder="Email" required>
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="company_name1" placeholder="Company Name" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="yearjob1" placeholder="Year (Duration)" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="site" placeholder="Website">
                        </td>
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
                            <textarea id="detailjob1" name="detailjob1" rows="10" cols="42" placeholder="Detail" required maxlength="400" wrap="soft"></textarea>
                        </td>
                        <td class="col3"></td>
                        <td class="col4">Relevent Skills</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="skill1" placeholder="Skill 1" required>
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="skill2" placeholder="Skill 2">
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="skill3" placeholder="Skill 3">
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="skill4" placeholder="Skill 4">
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="skill5" placeholder="Skill 5">
                        </td>
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
                        <td class="col2" id="boldtxt">
                            <input type="text" name="job_title2" placeholder="Job Title" >
                        </td>
                        <td class="col3"></td>
                        <td class="col4">Volunteer Works Aand Interests</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="company_name2" placeholder="Company Name" >
                        </td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="v1" placeholder="V1" required>
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="yearjob2" placeholder="Year (Duration)">
                        </td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="v2" placeholder="V2" >
                        </td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" rowspan="6">
                            <textarea id="detailjob2" name="detailjob2" rows="10" cols="42" placeholder="Detail" maxlength="400" wrap="soft"></textarea>
                        </td>
                        <td class="col3"></td>
                        <td class="col4">
                            <input type="text" name="v3" placeholder="V3" >
                        </td>
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
                        <td class="col2" id="boldtxt">
                            <input type="text" name="degree" placeholder="Degree in ???" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="facultyofeducation" placeholder="Faculty of Education" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="yearofgrad" placeholder="Year Of Grad" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" rowspan="3">
                            <textarea id="detailedu" name="detailedu" rows="5" cols="42" placeholder="Detail" maxlength="200" wrap="soft" required></textarea>
                        </td>
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
                    <tr id="leftborder" class="last">
                        <td class="col1"></td>
                        <td class="col2">&ensp;</td>
                        <td class="col3">&ensp;</td>
                        <td class="col4"></td>
                    </tr>
                    <tr>
                        <td class="col1" colspan="4">
                            <center>
                                <input type="submit" value="Create CV">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
        <script>
            // JavaScript function to display the user-uploaded image
            function displayImage(input) {
                var profileImage = document.getElementById('profile-image');
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        profileImage.src = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </body>
</html>
