<?php require_once APPROOT . '/views/includes/headn.html'; ?>
<?php include 'headanalysis.html'; ?>
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
                                    <a href="<?php echo URLROOT; ?>Analysis">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Covid-19 Analysis </li>
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
                        <div class="addNotice mb-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
                                Upload analysis
                            </button>
                        </div>
                        <!-- NOTICE BLOCK -->
                        <div class="noticebox">

                            <table id="tableid" class="table table-top-campaign text-center">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Created_at</th>
                                        <th>File Uploaded/Website Url</th>
                                        <th>Remove</th>
                                        <th>Edit</th>
                                        <th style="visibility:hidden;"></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    foreach ($data as $entity) {
                                        echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->description . '</td>
                                <td >' . $entity->type . '</td>
                                <td >' . $entity->created_at . '</td>
                                <td ><a href="' . $entity->document_path . '"><i class="lar la-file-alt"></i><p style="visibility:hidden;" >' . $entity->document_path . '</p></a></td>
                              
                                <td id="' . $entity->id . '"class="remove text-center"><a href="#">Remove</a></td>
                                <td><button type="button" class="btn btn-success editbtn"><i class="fa fa-edit"></i></button></td>
                                <td style="visibility:hidden;" class="bg-dark">' . $entity->id . '</td>

                               
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
                            <h5 class="modal-title" id="largeModalLabel">Analysis Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">Upload</div>
                                <div class="card-body card-block">
                                    <form action="analysis/" method="post" enctype="multipart/form-data">
                                        <div class="row form-group">
                                            <div class="col-6">

                                                <label style="color:black" for="analysistitle">Description</label>
                                                <input type="text" id="analysis" name="description" class="form-control" placeholder="Description" required>
                                            </div>
                                            <div class="col-6">

                                                <label style="color:black" for="analysistype">Type</label>
                                                <input type="text" id="analysistype" name="type" class="form-control" placeholder="Edition" required>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label style="color:black" for="analysisWebsite">Website Url</label>
                                            <input type="text" id="analysisWebsite" name="website" class="form-control" placeholder="Website Url">
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="row">
                                                <div class="col-5">
                                                    <hr>
                                                </div>
                                                <div class="col-2">or</div>
                                                <div class="col-5">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    Select associated document to upload :
                                                    <input type="file" name="uploaded_file" id="uploaded_file"><br><br>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editanalysismodal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Analysis Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-header">Edit</div>
                            <div class="card-body card-block">
                                <form action="analysis/edit" method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="editid" class="form-control" name="id">

                                    <div class="row form-group">
                                        <div class="col-6">

                                            <label style="color:black" for="analysistitle">Description</label>
                                            <input type="text" id="editanalysis" name="description" class="form-control" placeholder="Description" required>
                                        </div>
                                        <div class="col-6">

                                            <label style="color:black" for="analysistype">Type</label>
                                            <input type="text" id="editanalysistype" name="type" class="form-control" placeholder="Edition" required>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="color:black" for="analysisWebsite">Website Url</label>
                                            <input type="text" id="editanalysisWebsite" name="website" class="form-control" placeholder="Website Url">
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="row">
                                                <div class="col-5">
                                                    <hr>
                                                </div>
                                                <div class="col-2">or</div>
                                                <div class="col-5">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            Current Uploaded file: <p style="color:black;font-weight:bold" id="filename" name="filename"></p>

                                            <input type="file" name="uploaded_file" id="edituploaded_file">

                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-primary">Edit</button>
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
                        url: 'Analysis/remove',
                        type: 'post',
                        data: {
                            userid: userid
                        },
                        success: function(response) {
                            console.log(response);
                            window.location = "analysis";
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tableid').on('click', '.editbtn', function() {
                    $('#editanalysismodal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    console.log(data);
                    $('#editid').val(data[7]);
                    $('#editanalysis').val(data[1]);
                    $('#editanalysistype').val(data[2]);
                    
                    if(data[4][0]=="h")
                    {
                        $('#editanalysisWebsite').val(data[4]);
                        document.getElementById('filename').innerHTML = " Warning:Don't Upload file. Analysis Contains website url";
                    }
                    else{
                    document.getElementById('filename').innerHTML = data[4];
                    }
                });
            });
        </script>


        <?php require_once APPROOT . '/views/includes/footer.php'; ?>
