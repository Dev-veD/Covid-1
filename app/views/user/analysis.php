<?php require_once APPROOT . '/views/includes/header.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mystyle.css" rel="stylesheet">

<div class="card border-primary" style="margin:50px">
    <div class="card-body">
        <h2 class="card-title">Covid-19 Analysis Report</h2>
        <hr>
       

        <div class="row">
            <div class="col-sm-12">
                <?php $length = count($data) ?>
                <?php for ($i = 0; $i < $length; $i++) { ?>
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title"><?= $data[$i]->description ?></h4>
                                    <h5 class="card-title">Type: <?= $data[$i]->type ?></h5>
                                    <p class="card-text">Published On: <?= $data[$i]->created_at ?></p>
                                </div>
                                <div class="col text-center">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?= URLROOT . substr($data[$i]->document_path, 14) ?>" allowfullscreen></iframe>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </div>




</div>



<?php require_once APPROOT . '/views/includes/footer.php'; ?>
