<?php require_once APPROOT . '/views/includes/header.php';
$statsData = $data["StatsTable"]; ?>

<div class="page-wrapper">



    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7 text-center">
        <div class="container">

            <div class="row h-100 ml-1">
                <div class="col my-auto col-md-3 col-sm-12 col-lg-3">
                    <section class="statistic statistic2">
                        <div class="container">
                            <div class="column">
                                <hr>
                                <div class=" col-sm-3 col-md-6 col-lg-6">

                                    <span class="desc text-left text-dark"><strong>Total Cases</strong></span>
                                    <h2 class=" number mt-1"><?= $statsData->confirmed + $statsData->recovered + $statsData->deceased ?></h2>
                                    <div class="icon">

                                    </div>
                                </div>
                                <hr>
                                <div class=" col-sm-3 col-md-6 col-lg-6">
                                    <span class="desc text-center text-dark"><strong>Active</strong></span>
                                    <h2 class="number mt-1"><?= $statsData->confirmed ?></h2>

                                    <div class="icon">

                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6  col-sm-3 col-lg-6">
                                    <span class="desc text-dark text-center"><strong>Recovered</strong></span>
                                    <h2 class="number  mt-1"><?= $statsData->recovered ?></h2>

                                    <div class="icon">

                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-3 col-md-6 col-lg-6">

                                    <span class="desc text-center text-dark"><strong>Death</strong></span>
                                    <h2 class="number   mt-1"><?= $statsData->deceased ?></h2>
                                    <div class="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 my-auto">
                    <?php include 'map.php';
                    ?>
                </div>

                <div class="col-sm-12 col-md-3 text-center col-lg-3 my-auto">
                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                        <div class="au-card-inner">
                            <div class="table-responsive" style="height: 300px; overflow: auto;">
                                <table class="table table-top-countries">
                                    <b>
                                        <p style="color:azure">Updates and Notification</p>
                                    </b>
                                    <hr>
                                    <tbody>
                                        <?php
                                        $reverse = array_reverse($data['notices']);
                                        foreach ($reverse as $val) {
                                            echo '<tr>
                                        <td><a href="' . URLROOT . substr($val->document_path, 14) . '"><span style="color:azure">>  ' . $val->name . '</span></a><?php if(1){echo "sd";}?></td></tr>';
                                        } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>




        <?php include "tableM.html"; ?>




        <?php require_once APPROOT . '/views/includes/footer.php'; ?>