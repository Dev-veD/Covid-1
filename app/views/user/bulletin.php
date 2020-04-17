<?php require_once APPROOT . '/views/includes/header.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mystyle.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<form id="regForm" style="padding :10px;">

    <h1>Covid-19 Health Bulletin Updates</h1>
    <hr>
    <div class="text-center">

        <div class="table-responsive m-b-30">
            <table id="tabledata" class="table table-borderless">
                <thead>
                    <tr>
                        <th class="text-center">Serial No.</th></a>
                        <th class="text-center">Title</th>
                        <th class="text-center">Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $cnt = 1;
                    $reverse = array_reverse($data);
                    ?>
                    <?php foreach ($reverse as $entity) :
                        ?>

                        <tr>
                            <td scope="row"><?php echo $cnt++; ?></td>
                            <td class="text-center"><a href="<?= URLROOT . substr($entity->document_path, 14)?>"><?php echo $entity->name; ?></a></td>
                            <td class="text-center"><?php echo $entity->timestamp; ?></td>
            
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</form>
<script type="text/javascript">
    $(document).ready(function() {
        $('.table').DataTable({
            'paging': true,
            "iDisplayLength": 100,
            'responsive': true,
            'language': {
                search: "_INPUT_",
                searchPlaceholder: "Search Records"
            },
            'columnDefs': [{
                "targets": [2],
                "searchable": false
            }]
        });
    });
</script>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>