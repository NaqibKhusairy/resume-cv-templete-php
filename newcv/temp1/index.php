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
                padding: 6px;
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
            input[type="submit"]{
                margin-bottom:15px;
                height:40px;
                box-sizing: border-box;
                padding:10px;
                cursor: pointer;
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
                            <img id="profile-image" class="round-image" src="your_image_url.jpg" alt="Profile Image">
                            <input type="file" name="profile_image" onchange="displayImage(this)" required>
                        </td>
                        <td class="raw2" colspan="9">
                            <input type="text" name="first_name" placeholder="First Name" required>
                        </td>
                    </tr>
                    <tr class="raw3">
                        <td class="raw3"></td>
                        <td class="raw3" colspan="9">
                            <input type="text" name="last_name" placeholder="Last Name" required>
                        </td>
                    </tr>
                    <tr class="raw4">
                        <td class="raw4"></td>
                        <td class="raw4" colspan="9">
                            <input type="text" name="job_title" placeholder="Job Title" required>
                        </td>
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
                        <td class="col2" rowspan="4">
                            <textarea id="aboutme" name="aboutme" rows="3" cols="24" placeholder="Text About Me (Max 60 characters)" required maxlength="60" wrap="soft"></textarea>
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="company_name1" placeholder="Company Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col3" colspan="9">
                            <input type="text" name="location1" placeholder="Location" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col3" colspan="9">
                            <input type="text" name="year1" placeholder="Year" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col3" colspan="9">
                            <textarea id="detail1" name="detail1" rows="1" cols="42" placeholder="Detail" required maxlength="60" wrap="soft"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="company_name2" placeholder="Company Name">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="email" name="email" placeholder="Email" required>
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="location2" placeholder="Location">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="address" placeholder="Address" required>
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="year2" placeholder="Year">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3" colspan="9">
                            <textarea id="detail2" name="detail2" rows="1" cols="42" placeholder="Detail" maxlength="60" wrap="soft"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <div class="lang-box">Language</div>
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="company_name3" placeholder="Company Name">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="lang1" placeholder="Language1" required>
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="location3" placeholder="Location">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="lang2" placeholder="Language2">
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="year3" placeholder="Year">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="lang3" placeholder="Language3">
                        </td>
                        <td class="col3" colspan="9">
                            <textarea id="detail3" name="detail3" rows="1" cols="42" placeholder="Detail" maxlength="60" wrap="soft"></textarea>
                        </td>
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
                        <td class="col2">
                            <input type="text" name="expertise1" placeholder="Expertise1" required>
                        </td>
                        <td class="col3" colspan="9"></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="expertise2" placeholder="Expertise2">
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="facultyofeducation1" placeholder="Faculty of Education" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="expertise3" placeholder="Expertise3">
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="degree1" placeholder="Degree" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="expertise4" placeholder="Expertise4">
                        </td>
                        <td class="col3" colspan="9">
                            <input type="text" name="yearedu1" placeholder="Year" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">
                            <input type="text" name="expertise5" placeholder="Expertise5">
                        </td>
                        <td class="col3" colspan="9"></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3" colspan="9">
                            <input type="text" name="facultyofeducation2" placeholder="Faculty of Education">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3" colspan="9">
                            <input type="text" name="degree2" placeholder="Degree">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3" colspan="9">
                            <input type="text" name="yearedu2" placeholder="Year">
                        </td>
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
                        <td class="col3">
                            <input type="text" name="skill1" placeholder="Skill1" required>
                        </td>
                        <td class="col4">
                            <progress id="progress1" value="0" max="100"></progress>
                        </td>
                        <td class="col5" colspan="8">
                            <input type="number" name="percent1" id="percent1" placeholder="71%" max="100" min="0" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3">
                            <input type="text" name="skill2" placeholder="Skill2">
                        </td>
                        <td class="col4">
                            <progress id="progress2" value="0" max="100"></progress>
                        </td>
                        <td class="col5" colspan="8">
                            <input type="number" name="percent2" id="percent2" placeholder="81%" max="100" min="0">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3">
                            <input type="text" name="skill3" placeholder="Skill3">
                        </td>
                        <td class="col4">
                            <progress id="progress3" value="0" max="100"></progress>
                        </td>
                        <td class="col5" colspan="8">
                            <input type="number" name="percent3" id="percent3" placeholder="92%" max="100" min="0">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2"></td>
                        <td class="col3">
                            <input type="text" name="skill4" placeholder="Skill4">
                        </td>
                        <td class="col4">
                            <progress id="progress4" value="0" max="100"></progress>
                        </td>
                        <td class="col5" colspan="8">
                            <input type="number" name="percent4" id="percent4" placeholder="23%" max="100" min="0">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1" colspan="10">
                            <center>
                                <input type="submit" value="Create CV">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
        <script>
            // JavaScript function to update progress based on percent input
            function updateProgressBar(inputId, progressId, percentId) {
                const percentInput = document.getElementById(percentId);
                const progressBar = document.getElementById(progressId);

                percentInput.addEventListener('input', function() {
                    const percent = parseInt(percentInput.value, 10);
                    if (!isNaN(percent) && percent >= 0 && percent <= 100) {
                        progressBar.value = percent;
                    }
                });
            }

            updateProgressBar('percent1', 'progress1', 'percent1');
            updateProgressBar('percent2', 'progress2', 'percent2');
            updateProgressBar('percent3', 'progress3', 'percent3');
            updateProgressBar('percent4', 'progress4', 'percent4');
            // Add more calls for other skills if needed
        </script>
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