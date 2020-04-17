<?php require_once APPROOT . '/views/includes/headn.html'; ?>
<?php include 'headnews.html'; ?>
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
                                    <a href="<?php echo URLROOT; ?>News">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">News & Media </li>
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
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-0">
                        <!-- ADD NOTICE -->
                        <div class="addNotice mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
                                Upload News Update
                            </button>
                        </div>
                        <!-- NOTICE BLOCK -->
                        <div class="noticebox">
                            <table class="table table-top-campaign text-center">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Title </th>
                                        <th>Published Date</th>
                                        <th>Portal</th>
                                        <th>Edition</th>
                                        <th>Page No.</th>
                                        <th>Web Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    foreach ($data['table'] as $entity) {
                                        echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->portal . '</td>
                                <td >' . $entity->edition . '</td>
                                <td >' . $entity->page . '</td>
                                <td ><a href="' . $entity->weblink . '"><i class="lar la-file-alt"></i></a></td>
                              
                                <td id="' . $entity->id . '"class="remove text-center"><a href="#">Remove</a></td>
                               
                            </tr>';
                                    } ?>


                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE     -->
                    </div>
                </div>
            </div>



            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">News & Media Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">Upload</div>
                                <div class="card-body card-block">
                                    <form action="news/" method="post" enctype="multipart/form-data">

                                        <div class="row form-group">
                                            <div class="col-8">

                                                <label style="color:black" for="newstitle">Title</label>
                                                <input type="text" id="newstitle" name="title" class="form-control" placeholder="News title" required>
                                            </div>
                                            <div class="col-4">
                                                <label style="color:black" for="newsdate">Date</label>
                                                <input type="date" id="newsdate" name="date" class="form-control" min="2020-01-01" required>

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">

                                                <label style="color:black" for="newsportal">Portal</label>
                                                <input type="text" id="newsportal" name="portal" class="form-control" placeholder="Published In" required>
                                            </div>
                                            <div class="col-4">
                                                
                                            <label style="color:black" for="newsedition">Edition</label>
                                                <input type="text" id="newsedition" name="edition" class="form-control" placeholder="Edition" required>

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">

                                                <label style="color:black" for="newslink">Web Link</label>
                                                <input type="text" id="newslink" name="weblink" class="form-control" placeholder="News web link" required>
                                            </div>
                                            <div class="col-4">
                                                
                                            <label style="color:black" for="newspage">Page Number</label>
                                                <input type="text" id="newspage" name="page" class="form-control" placeholder="Page Number" required>

                                            </div>
                                        </div>

                                        
                                        <div class="form-actions form-group text-center">
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        </d iv>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script> -->


            <script>
                $(document).ready(function() {

                    $('.remove').click(function() {

                        var userid = $(this).attr('id');
                        
                        $.ajax({
                            url: 'News/remove',
                            type: 'post',
                            data: {
                                userid: userid
                            },
                           
                            success: function(response) {
                                console.log(response);
                                window.location = "news";
                            }
                        });
                    });
                });
            </script>


            <?php require_once APPROOT . '/views/includes/footer.php'; ?>