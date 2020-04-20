<?php require_once APPROOT . '/views/includes/header.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mystyle.css" rel="stylesheet">
<div class="card border-primary" style="margin:50px">
    <div class="card-body">
        <h2 class="card-title">Covid-19 Analysis Report</h2>
        <hr>
        
        <?php $data=array_reverse($data); $length = count($data);
        $cnt = 0;
        for ($i = 0; $i < (int) ($length / 2); $i++) {
        ?>
            <div class="card-deck">
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <?php if($data[$cnt]->document_path[1]=="v"){
                                ?>
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe  class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                            </div>
                            <?php }else{ ?>
                                <div class=" flourish-embed flourish-bar-chart-race" data-src="<?=substr($data[$cnt]->document_path,19,34);?>" data-url="<?=$data[$cnt]->document_path?>"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
                            <?php } ?>
                            <h4 class="card-title"><?= $data[$cnt]->description ?></h4>
                            <h5 class="card-title">Type: <?= $data[$cnt]->type ?></h5>
                            <p class="card-text">Published On: <?= $data[$cnt]->created_at ?></p>

                        </div>
                    </div>
                </div>
                <?php $cnt = $cnt + 1 ?>
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                        <?php if($data[$cnt]->document_path[1]=="v"){
                                ?>
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe  class="embed-responsive-item" src="<?= URLROOT . substr($data[$cnt]->document_path, 14) ?>" allowfullscreen></iframe>
                            </div>
                            <?php }else{ ?>
                                <div class=" flourish-embed flourish-bar-chart-race" data-src="<?=substr($data[$cnt]->document_path,19,34);?>" data-url="<?=$data[$cnt]->document_path?>"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
                            <?php } ?>
                            <h4 class="card-title"><?= $data[$cnt]->description ?></h4>
                            <h5 class="card-title">Type: <?= $data[$cnt]->type ?></h5>
                            <p class="card-text">Published On: <?= $data[$cnt]->created_at ?></p>
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
                        <?php if($data[$cnt]->document_path[1]=="v"){
                                ?>
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe  class="embed-responsive-item" src="<?= URLROOT . substr($data[$length - 1]->document_path, 14) ?>" allowfullscreen></iframe>
                            </div>
                            <?php }else{ ?>
                                <div class=" flourish-embed flourish-bar-chart-race" data-src="<?=substr($data[$length - 1]->document_path,19,34);?>" data-url="<?=$data[$length - 1]->document_path?>"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
                            <?php } ?>
                            <h4 class="card-title"><?= $data[$length - 1]->description ?></h4>
                            <h5 class="card-title">Type: <?= $data[$length - 1]->type ?></h5>
                            <p class="card-text">Published On: <?= $data[$length - 1]->created_at ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>
