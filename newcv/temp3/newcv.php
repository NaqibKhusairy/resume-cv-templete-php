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
                        <td class="col4" rowspan="4"><center>Image</center></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">FULL NAME</td>
                        <td class="col3"></td>
                    </tr>
                    <tr>
                        <td class="col1"></td>
                        <td class="col2">Job Title</td>
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
                        <td class="col4">LinkedIn Link</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" id="boldtxt">Job Title</td>
                        <td class="col3"></td>
                        <td class="col4">email</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Company Name</td>
                        <td class="col3"></td>
                        <td class="col4">Phone</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Year (Duration)</td>
                        <td class="col3"></td>
                        <td class="col4">Website</td>
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
                        <td class="col2" rowspan="6">Detail</td>
                        <td class="col3"></td>
                        <td class="col4">Relevent Skills</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">Skill 1</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">Skill 2</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">Skill 3</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">Skill 4</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col3"></td>
                        <td class="col4">Skill 5</td>
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
                        <td class="col2" id="boldtxt">Job Title</td>
                        <td class="col3"></td>
                        <td class="col4">Volunteer Works Aand Interests</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Company Name</td>
                        <td class="col3"></td>
                        <td class="col4">V1</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Year (Duration)</td>
                        <td class="col3"></td>
                        <td class="col4">V2</td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" rowspan="6">Detail</td>
                        <td class="col3"></td>
                        <td class="col4">V3</td>
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
                        <td class="col2" id="boldtxt">Degree in ???</td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Faculty of Education</td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2">Year of grad</td>
                        <td class="col3"></td>
                        <td class="col4"></td>
                    </tr>
                    <tr id="leftborder">
                        <td class="col1"></td>
                        <td class="col2" rowspan="3">Detail</td>
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