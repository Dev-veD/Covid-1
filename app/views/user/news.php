<?php require_once APPROOT . '/views/includes/header.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mystyle.css" rel="stylesheet">
<style>
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 25%;
    }

    /* Change background color of buttons on hover */
    .tablink:hover {
        background-color: #777;
    }

    /* Set default styles for tab content */
    .tabcontent {
        color: black;
        display: none;
        border: none;
        text-align: center;
    }

    /* Style each tab content individually */
    #London {
        background-color: white;
    }

    #Paris {
        background-color: white;
    }

    #Tokyo {
        background-color: white;
    }

    #Oslo {
        background-color: white;
    }

    #Bulletins {
        background-color: white;
    }
</style>
<div class="card border-primary" style="margin:40px">
    <div class="card-body">
        <div class="row">
            <button class="tablink col" onclick="openCity('London', this, 'blue')" id="defaultOpen">Press Release</button>
            <button class="tablink col" onclick="openCity('Paris', this, 'blue')">Covid-19 Awarness</button>
            <button class="tablink col" onclick="openCity('Tokyo', this, 'blue')">Covid-19 Advisory</button>
            <button class="tablink col" onclick="openCity('Oslo', this, 'blue')">Visuals</button>
            <button class="tablink col" onclick="openCity('Bulletins', this, 'blue')">Bulletins</button>
        </div>
        <div id="London" class="tabcontent">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-0">
                <!-- ADD NOTICE -->

                <!-- NOTICE BLOCK -->
                <div class="noticebox">
                    <table id="tableid" class="table table-top-campaign text-center">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Published Date</th>
                                <th>Title </th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Open</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $temp = array_reverse($data['press']);
                            foreach ($temp as $entity) {
                                echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i></a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '">Open</a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '" download>Download</a></td>

                            </tr>';
                            } ?>


                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE     -->
            </div>
        </div>
        <div id="Paris" class="tabcontent">
            <div class="table-responsive m-b-0">
                <!-- ADD NOTICE -->

                <!-- NOTICE BLOCK -->
                <div class="noticebox">
                    <table id="tableid" class="table table-top-campaign text-center">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Published Date</th>
                                <th>Title </th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Open</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $cnt = 0;
                            $temp = array_reverse($data['awarness']);
                            foreach ($temp as $entity) {
                                echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i></a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '">Open</a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '" download>Download</a></td>
                            </tr>';
                            } ?>


                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE     -->
            </div>
        </div>
        <div id="Tokyo" class="tabcontent">
            <div class="table-responsive m-b-0">
                <!-- ADD NOTICE -->

                <!-- NOTICE BLOCK -->
                <div class="noticebox">
                    <table id="tableid" class="table table-top-campaign text-center">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Published Date</th>
                                <th>Title </th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Open</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $cnt = 0;
                            $temp = array_reverse($data['advisory']);
                            foreach ($temp as $entity) {
                                echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i></a></td>

                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '">Open</a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '" download>Download</a></td>
                            </tr>';
                            } ?>


                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE     -->
            </div>
        </div>
        <div id="Oslo" class="tabcontent">
            <div class="table-responsive m-b-0">
                <!-- ADD NOTICE -->

                <!-- NOTICE BLOCK -->
                <div class="noticebox">
                    <table id="tableid" class="table table-top-campaign text-center">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Published Date</th>
                                <th>Title </th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Open</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $cnt = 0;
                            $temp = array_reverse($data['visuals']);
                            foreach ($temp as $entity) {
                                echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i></a></td>

                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '">Open</a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '" download>Download</a></td>
                            </tr>';
                            } ?>


                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE     -->
            </div>
        </div>
        <div id="Bulletins" class="tabcontent">
            <div class="table-responsive m-b-0">
                <!-- ADD NOTICE -->

                <!-- NOTICE BLOCK -->
                <div class="noticebox">
                    <table id="tableid" class="table table-top-campaign text-center">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Published Date</th>
                                <th>Title </th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Open</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $cnt = 0;
                            $temp = array_reverse($data['bulletin']);
                            foreach ($temp as $entity) {
                                echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i></a></td>

                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '">Open</a></td>
                                <td><a class="btn btn-primary" href="' . URLROOT . substr($entity->document_path, 14) . '" download>Download</a></td>
                            </tr>';
                            } ?>


                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE     -->
            </div>
        </div>
    </div>
</div>
<script>
    function openCity(cityName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }

        // Show the specific tab content
        document.getElementById(cityName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
