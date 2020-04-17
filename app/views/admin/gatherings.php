<?php require_once APPROOT . '/views/includes/headn.html'; ?>
<?php include 'headd.html'; ?>
<section class="au-breadcrumb m-t-0">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="<?php echo URLROOT;?>Patient">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Gatherings</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="page-content--bgf7 ">
        <div class="card-body card-block">
            <form action="" method="post" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-12">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                            <input type="text" id="input1-group2" name="input1-group2" placeholder="Search for gatherings" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="tab">
                        <button class="tablinks" id="defaultOpen" onclick="openTab(event, 'Gathering')">Latest gatherings</button>
                        <button class="tablinks" onclick="openTab(event, 'AllGathering')">All gatherings</button>
                    </div>
                    <!-- gathering -->

                    <div id="Gathering" class="tabcontent">
                        <div class="table-responsive m-b-0">
                            <table class="table table-top-campaign text-center">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Person Id</th>
                                        <th>Reported Address </th>
                                        <th>Remarks</th>
                                        <th>Photograph</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cnt = 0;



                                    foreach ($data['table'] as $entity) {
                                        $time = strtotime($entity->reported_at);
                                        $currentTime = time();
                                        if ($currentTime - $time < 86400) {
                                            echo ' 
                                        <tr>
                                            <td>' . ++$cnt . '</td>
                                            <td >' . $entity->user_id . '</td>
                                            <td >' . $entity->address . '</td>
                                            <td >' . $entity->remarks . '</td>
                                            <td ><a href="' . URLROOT . substr($entity->photographs, 14) . '"><i class="lar la-file-alt"></i></a></td>
                                        
                                            <td id="' . $entity->id . '"class="show text-center"><a href="#">Show Details</a></td>
                                        
                                        </tr>';
                                        }
                                    } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div id="AllGathering" class="tabcontent">
                        <div class="table-responsive m-b-0">
                            <table class="table table-top-campaign text-center">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Person Id</th>
                                        <th>Reported Address </th>
                                        <th>Remarks</th>
                                        <th>Photograph</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $cnt = 0;
                                    foreach ($data['table'] as $entity) {
                                        echo ' 
                                        <tr>
                                            <td>' . ++$cnt . '</td>
                                            <td >' . $entity->user_id . '</td>
                                            <td >' . $entity->address . '</td>
                                            <td >' . $entity->remarks . '</td>
                                            <td ><a href="' . URLROOT . substr($entity->photographs, 14) . '"><i class="lar la-file-alt"></i></a></td>
                                        
                                            <td id="' . $entity->id . '"class="show text-center"><a href="#">Show Details</a></td>
                                        
                                        </tr>';
                                    } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>


                </div>
            </div>
            <script>
                document.getElementById("defaultOpen").click();

                function openTab(evt, tabName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(tabName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>
            <?php require_once APPROOT . '/views/includes/footer.php'; ?>
