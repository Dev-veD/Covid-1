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
        color: white;
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

            <?php $temp = $data;
            $data = array_reverse($data['press']);
            $length = count($data);
            $cnt = 0;
            for ($i = 0; $i < (int) ($length / 2); $i++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>

                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                </div>
            <?php } ?>
            <?php

            for ($x = 0; $x < $length % 2; $x++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$length - 1]->title ?></h4>
                                <h5 class="card-title"><?= $data[$length - 1]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$length - 1]->date_get_last_errors ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div id="Paris" class="tabcontent">
            <?php $data = array_reverse($temp['awarness']);
            $length = count($data);
            $cnt = 0;
            for ($i = 0; $i < (int) ($length / 2); $i++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>

                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                </div>
            <?php } ?>
            <?php

            for ($x = 0; $x < $length % 2; $x++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$length - 1]->title ?></h4>
                                <h5 class="card-title"><?= $data[$length - 1]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$length - 1]->date_get_last_errors ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div id="Tokyo" class="tabcontent">
            <?php $data = array_reverse($temp['advisory']);
            $length = count($data);
            $cnt = 0;
            for ($i = 0; $i < (int) ($length / 2); $i++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>

                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                </div>
            <?php } ?>
            <?php

            for ($x = 0; $x < $length % 2; $x++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$length - 1]->title ?></h4>
                                <h5 class="card-title"><?= $data[$length - 1]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$length - 1]->date_get_last_errors ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div id="Oslo" class="tabcontent">
            <?php $data = array_reverse($temp['visuals']);
            $length = count($data);
            $cnt = 0;
            for ($i = 0; $i < (int) ($length / 2); $i++) {
            ?>
               <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>

                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                </div>
            <?php } ?>
            <?php

            for ($x = 0; $x < $length % 2; $x++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>
                                <h4 class="card-title"><?= $data[$length - 1]->title ?></h4>
                                <h5 class="card-title"><?= $data[$length - 1]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$length - 1]->date_get_last_errors ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div id="Bulletins" class="tabcontent">
            <?php $data = array_reverse($temp['bulletin']);
            $length = count($data);
            $cnt = 0;
            for ($i = 0; $i < (int) ($length / 2); $i++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>
                                
                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>

                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$cnt]->title ?></h4>
                                <h5 class="card-title"> <?= $data[$cnt]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$cnt]->date ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $cnt = $cnt + 1 ?>
                </div>
            <?php } ?>
            <?php

            for ($x = 0; $x < $length % 2; $x++) {
            ?>
                <div class="card-deck">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-1">
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>">Open</a></div>
                                    <div class="col"><a class="btn btn-primary" href="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" download>Download</a></div>
                                </div>

                                <h4 class="card-title"><?= $data[$length - 1]->title ?></h4>
                                <h5 class="card-title"><?= $data[$length - 1]->description ?></h5>
                                <p class="card-text">Published On: <?= $data[$length - 1]->date_get_last_errors ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
