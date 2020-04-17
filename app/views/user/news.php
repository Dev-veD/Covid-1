<?php require_once APPROOT . '/views/includes/header.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mystyle.css" rel="stylesheet">

<div class="card border-primary" style="margin:40px">
    <div class="card-body">
        <h2 class="card-title">Covid-19 Latest News</h2>
        <hr>
        <?php $length = count($data['table']);
        $cnt=0;
        for ($i = 0; $i < (int) ($length / 2); $i++) {

        ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <h4 class="card-title"><?= $data['table'][$cnt]->title ?></h4>
                            <h5 class="card-title"><?= $data['table'][$cnt]->portal ?></h5>
                            <p class="card-text">Published Date: <?= $data['table'][$cnt]->date ?> Edition:<?= $data['table'][$cnt]->edition ?> Page: <?= $data['table'][$cnt]->page ?></p>
                            <a href="<?= $data['table'][$cnt]->weblink ?>"><?= $data['table'][$cnt]->weblink ?></a>
                        </div>
                    </div>
                </div>
                <?php $cnt=$cnt+1?>
                <div class="col-sm-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                            <h4 class="card-title"><?= $data['table'][$cnt]->title ?></h4>
                            <h5 class="card-title"><?= $data['table'][$cnt]->portal ?></h5>
                            <p class="card-text">Published Date: <?= $data['table'][$cnt]->date ?> Edition:<?= $data['table'][$cnt]->edition ?> Page: <?= $data['table'][$cnt]->page ?></p>
                            <a href="<?= $data['table'][$cnt]->weblink ?>"><?= $data['table'][$cnt]->weblink ?></a>
                        </div>
                    </div>
                </div>
                <?php $cnt=$cnt+1?>
            </div>
        <?php } ?>
        <?php

        for ($x = 0; $x < $length % 2; $x++) {
        ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <h4 class="card-title"><?= $data['table'][$length - 1]->title ?></h4>
                            <h5 class="card-title"><?= $data['table'][$length - 1]->portal ?></h5>
                            <p class="card-text">Published Date: <?= $data['table'][$length - 1]->date ?> Edition:<?= $data['table'][$length - 1]->edition ?> Page: <?= $data['table'][$length - 1]->page ?></p>
                            <a href="<?= $data['table'][$length - 1]->weblink ?>"><?= $data['table'][$length - 1]->weblink ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>



    </div>
</div>


<?php require_once APPROOT . '/views/includes/footer.php'; ?>