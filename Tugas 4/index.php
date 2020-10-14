<html>

<head>
    <title>CV</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/himafa.png">
    <link rel="stylesheet" type="text/css" href="css/960.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    $nama = "Yunus Oktavianto Ismail";
    $nohp = "085850660031";
    $email = "yunusismail99@gmail.com";
    $ig = "yunusismail_";
    $line = "yunus799";
    $github = "YunusOktaviantoIsmail";
    $youtube = "Yunus Ismail";
    $ttl = "Surabaya, 07 Oktober 1999";
    $gender = "Laki-laki";
    $address = "Jl. Jambangan 1A/15 Surabaya";
    $religion = "Islam";
    $citizen = "Indonesia";
    $sd = "SDN JAMBANGAN I/413 SURABAYA";
    $th_sd = "2006-2012";
    $smp = "SMP NEGERI 21 SURABAYA";
    $th_smp = "2012-2015";
    $sma = "SMA HANG TUAH 4 SURABAYA";
    $th_sma = "2015-2018";
    $kuliah = "UPN 'VETERAN' JAWA TIMUR";
    $th_kuliah = "2018-NOW";
    $organisasi1 = "UKM FOTOGRAFI 'Akriwahatra'";
    $organisasi2 = "UKM BADMINTON";
    $organisasi3 = "INFORMATIC LEARNING COMMUNITY";
    $organisasi4 = "MOBILE DEVELOPER";
    $th_or1 = "2019";
    $th_or2 = "2020";
    ?>

    <div class="container_12">
        <div class="grid_5">
            <div class="left-side">
                <img class="foto" src="img/FOTO.jpg" />
                <div class="left-content">
                    <p>Contact Person</p>
                    <hr class="left-line">
                    <table>
                        <tr>
                            <td><img src="img/call.png" /></td>
                            <td><?php echo $nohp ?></td>
                        </tr>
                        <tr>
                            <td><img src="img/gmail.png" /></td>
                            <td><?php echo $email ?></td>
                        </tr>
                    </table>
                </div>

                <div class="left-content">
                    <p>Social Media</p>
                    <hr class="left-line">
                    <table>
                        <tr>
                            <td><img src="img/instagram.png" /></td>
                            <td><?php echo $ig ?></td>
                        </tr>
                        <tr>
                            <td><img src="img/line.png" /></td>
                            <td><?php echo $line ?></td>
                        </tr>
                        <tr>
                            <td><img src="img/github.png" /></td>
                            <td><?php echo $github ?></td>
                        </tr>
                        <tr>
                            <td><img src="img/youtube-logo.png" /></td>
                            <td><?php echo $youtube ?></td>
                        </tr>
                    </table>
                </div>

                <div class="left-content">
                    <p>Skills</p>
                    <hr class="left-line">
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li>Web Design</li>
                                </ul>
                            </td>
                            <td>
                                <div class="bar">
                                    <div class="web">80%</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <ul>
                                    <li>Mechanic</li>
                                </ul>
                            </td>
                            <td>
                                <div class="bar">
                                    <div class="mechanic">85%</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <ul>
                                    <li>English Speak</li>
                                </ul>
                            </td>
                            <td>
                                <div class="bar">
                                    <div class="english">75%</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="left-content">
                    <p>Software Skills</p>
                    <hr class="left-line">
                    <table>
                        <tr>
                            <td><img class="software" src="img/lr.png" /></td>
                            <td><img class="software" src="img/xd.png" /></td>
                            <td><img class="software" src="img/vn.png" /></td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="hobbys">
                <p>Hobby's</p>
                <hr>
                <table>
                    <tr>
                        <td><img class="my-hobby" src="img/cycling.png" /></td>
                        <td><img class="my-hobby" src="img/running.png" /></td>
                        <td><img class="my-hobby" src="img/swimmer.png" /></td>
                    </tr>
                    <tr>
                        <td><img class="my-hobby" src="img/man-playing-badminton.png" /></td>
                        <td><img class="my-hobby" src="img/steering-wheel.png" /></td>
                        <td><img class="my-hobby" src="img/photo.png" /></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="grid_7">
            <div class="side-right">
                <div class="nama">
                    <p><?php echo $nama ?></p>
                    <hr>
                    <p>Web Designer</p>
                </div>

                <div class="main">
                    <p>Profile</p>
                    <hr>
                    <table class="profile">
                        <tr>
                            <td>Place, Date of Birth</td>
                            <td>: <?php echo $ttl ?></td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td>: <?php echo $gender ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>: <?php echo $address ?></td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>: <?php echo $religion ?></td>
                        </tr>
                        <tr>
                            <td>Citizen</td>
                            <td>: <?php echo $citizen ?></td>
                        </tr>
                    </table>
                </div>

                <div class="main">
                    <p>Education</p>
                    <hr>
                    <table class="education">
                        <tr>
                            <td>
                                <ul>
                                    <li><?php echo $sd ?></li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_sd ?></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li><?php echo $smp ?></li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_smp ?></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li><?php echo $sma ?></li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_sma ?></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li><?php echo $kuliah ?></li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_kuliah ?></td>
                        </tr>
                    </table>
                </div>

                <div class="main">
                    <p>Organization</p>
                    <hr>
                    <table class="organization">
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <?php echo $organisasi1 ?>
                                    </li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_or1 ?></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <?php echo $organisasi2 ?>
                                    </li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_or1 ?></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <?php echo $organisasi3 ?>
                                    </li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_or2 ?></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <?php echo $organisasi4 ?>
                                    </li>
                                </ul>
                            </td>
                            <td>: <?php echo $th_or2 ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>