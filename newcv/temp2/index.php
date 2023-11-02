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
                padding: 6px;
                text-align: left;
            }
            input[type="submit"]{
                margin-bottom:15px;
                height:40px;
                box-sizing: border-box;
                padding:10px;
                cursor: pointer;
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
    <body>a
        <form action="newcv.php" method="post" enctype="multipart/form-data">
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
                        <td class="col2">
                            <input type="text" name="full_name" placeholder="Full Name" required>
                        </td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="jobtitle">
                        <td class="col1"></td>
                        <td class="col2">&emsp;
                            <input type="text" name="current_job_title" placeholder="Current Job Title" required>
                        </td>
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
                        <td class="col2" rowspan="5" colspan="2"><center>
                            <img id="profile-image" class="round-image" src="your_image_url.jpg" alt="Profile Image">
                            <input type="file" name="profile_image" onchange="displayImage(this)" required>
                        </center></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3">
                            <center>
                                <input type="text" name="linkedin" placeholder="Linkedin" required>
                            </center>
                        </td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3">
                            <center>
                                <input type="text" name="phone" placeholder="Phone" required>
                            </center>
                        </td>
                    </tr>
                    <tr class="raw3">
                        <td class="col1"></td>
                        <td class="col4" colspan="3">
                            <center>
                                <input type="email" name="email" placeholder="Email" required>
                            </center>
                        </td>
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
                        <td class="col2" colspan="2" rowspan="5">
                            <textarea id="detailprofil" name="detailprofil" rows="6" cols="42" placeholder="Detail" required maxlength="100" wrap="soft"></textarea>
                        </td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4" colspan="2">&emsp;
                            <input type="text" name="facultyofeducation1" placeholder="Faculty of Education" required>
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4">&emsp;
                            <input type="text" name="year1" placeholder="Year" required>
                        </td>
                        <td class="col5">&emsp;
                            <input type="text" name="degree1" placeholder="Degree" required>
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col4" colspan="2">&emsp;
                            <input type="text" name="facultyofeducation2" placeholder="Faculty of Education" >
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3"></td>
                        <td class="col4">&emsp;
                            <input type="text" name="year2" placeholder="Year" >
                        </td>
                        <td class="col5">&emsp;
                            <input type="text" name="degree2" placeholder="Degree" >
                        </td>
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
                        <td class="col4" colspan="2">&emsp;
                            <input type="text" name="facultyofeducation3" placeholder="Faculty of Education" >
                        </td>
                    </tr>
                    <tr class="raw6">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="job_title1" placeholder="Job Title" required>
                        </td>
                        <td class="col3" rowspan="2">
                            <input type="text" name="yearjob1" placeholder="Year" required>
                        </td>
                        <td class="col4">&emsp;
                            <input type="text" name="year3" placeholder="Year" >
                        </td>
                        <td class="col5">&emsp;
                            <input type="text" name="degree3" placeholder="Degree" >
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="company_name1" placeholder="Company Name" required>
                        </td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2" rowspan="4" colspan="2">
                            <center>
                                <textarea id="detailjob1" name="detailjob1" rows="6" cols="42" placeholder="Detail" required maxlength="100" wrap="soft"></textarea>
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
                        <td class="col2">
                            <input type="text" name="job_title2" placeholder="Job Title">
                        </td>
                        <td class="col3" rowspan="2">
                            <input type="text" name="yearjob2" placeholder="Year">
                        </td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="company_name2" placeholder="Company Name" >
                        </td>
                        <td class="col4">
                            <center>
                                <input type="number" name="percent1" id="percent1" placeholder="71%" max="100" min="0" required>
                            </center>
                        </td>
                        <td class="col5">
                            <center>
                                <input type="number" name="percent2" id="percent2" placeholder="81%" max="100" min="0">
                            </center>
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2" rowspan="4" colspan="2">
                            <center>
                                <textarea id="detailjob1" name="detailjob2" rows="6" cols="42" placeholder="Detail" maxlength="100" wrap="soft"></textarea>
                            </center>
                        </td>
                        <td class="col4">
                            <center>
                            <input type="text" name="skill1" placeholder="Skill1" required>
                            </center>
                        </td>
                        <td class="col5">
                            <center>
                            <input type="text" name="skill2" placeholder="Skill2">
                            </center>
                        </td>
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
                        <td class="col2">
                            <input type="text" name="job_title3" placeholder="Job Title" >
                        </td>
                        <td class="col3" rowspan="2">
                            <input type="text" name="yearjob3" placeholder="Year">
                        </td>
                        <td class="col4"></td>
                        <td class="col5"></td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="company_name3" placeholder="Company Name">
                        </td>
                        <td class="col4">
                            <center>
                                <input type="number" name="percent3" id="percent3" placeholder="20%" max="100" min="0">
                            </center>
                        </td>
                        <td class="col5">
                            <center>
                                <input type="number" name="percent4" id="percent4" placeholder="25%" max="100" min="0">
                            </center>
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="col1"></td>
                        <td class="col2" rowspan="4" colspan="2">
                            <center>
                                <textarea id="detailjob1" name="detailjob3" rows="6" cols="42" placeholder="Detail" maxlength="100" wrap="soft"></textarea>
                            </center>
                        </td>
                        <td class="col4">
                            <center>
                            <input type="text" name="skill3" placeholder="Skill3">
                            </center>
                        </td>
                        <td class="col5">
                            <center>
                            <input type="text" name="skill4" placeholder="Skill4">
                            </center>
                        </td>
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
                    <tr>
                        <td class="col1" colspan="5">
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