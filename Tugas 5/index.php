<?php
include('conn.php');
?>

<html>

<head>
    <title>CV</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/himafa.png">

    <style>
        .bar {
            width: 100px;
            background-color: #D9D9D9;
            font-size: 10px;
            color: white;
        }

        <?php $result_skill = mysqli_query(connection(), "SELECT * FROM skills;"); ?><?php $i = 1;
                                                                                        while ($data_skill = mysqli_fetch_assoc($result_skill)) : ?>.bar<?= $i; ?> {
            background-color: white;
            width: <?= $data_skill["persentase"] ?>%;
        }

        <?php $i++;
                                                                                        endwhile; ?>
    </style>

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
                        <?php
                        $query_skill = "SELECT * FROM skills";
                        $result_skill = mysqli_query(connection(), $query_skill);
                        ?>

                        <?php $s = 1;
                        while ($data_skill = mysqli_fetch_array($result_skill)) : ?>
                            <tr>
                                <td>
                                    <ul>
                                        <li> <?php echo $data_skill['skill']; ?> </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="bar">
                                        <div class="bar<?= $s ?>">%</div>
                                    </div>
                                </td>
                            </tr>
                        <?php $s++;
                        endwhile; ?>
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

                    <?php
                    $query_prof = "SELECT * FROM profil";
                    $result_prof = mysqli_query(connection(), $query_prof);
                    ?>

                    <table class="profile">
                        <?php while ($data_prof = mysqli_fetch_array($result_prof)) : ?>
                            <tr>
                                <td>Place, Date of Birth</td>
                                <td>: <?php echo $data_prof['ttl']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender </td>
                                <td>: <?php echo $data_prof['gender']; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>: <?php echo $data_prof['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>: <?php echo $data_prof['religion']; ?></td>
                            </tr>
                            <tr>
                                <td>Citizen</td>
                                <td>: <?php echo $data_prof['citizen']; ?></td>
                            </tr>
                        <?php endwhile ?>
                    </table>
                </div>

                <div class="main">
                    <p>Education</p>
                    <hr>

                    <?php
                    $query_edu = "SELECT * FROM education";
                    $result_edu = mysqli_query(connection(), $query_edu);
                    ?>

                    <table class="education">
                        <?php while ($data_edu = mysqli_fetch_array($result_edu)) : ?>
                            <tr>
                                <td>
                                    <ul>
                                        <li> <?php echo $data_edu['sekolah']; ?> </li>
                                    </ul>
                                </td>
                                <td>: <?php echo $data_edu['tahun']; ?></td>
                            </tr>
                        <?php endwhile ?>
                    </table>
                </div>

                <div class="main">
                    <p>Organization</p>
                    <hr>

                    <?php
                    $query_org = "SELECT * FROM organization";
                    $result_org = mysqli_query(connection(), $query_org);
                    ?>

                    <table class="organization">
                        <?php while ($data_org = mysqli_fetch_array($result_org)) : ?>
                            <tr>
                                <td>
                                    <ul>
                                        <li> <?php echo $data_org['nama_org']; ?> </li>
                                    </ul>
                                </td>
                                <td>: <?php echo $data_org['th_org']; ?></td>
                            </tr>
                        <?php endwhile ?>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>