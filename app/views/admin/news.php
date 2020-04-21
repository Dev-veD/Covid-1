<?php require_once APPROOT . '/views/includes/headn.html'; ?>
<?php include 'headnews.html'; ?>
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
                                <li class="list-inline-item">Publicity </li>
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
                    <div class="addNotice mb-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
                            Upload New Publicity
                        </button>
                    </div>

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
                                            <th>Remove</th>
                                            <th>Edit</th>
                                            <th style="visibility:hidden;"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $temp=array_reverse($data['press']);  
                                        foreach ($temp as $entity) {
                                            echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i><p style="visibility:hidden;" >' . substr($entity->document_path, 34) . '</p></a></td>
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
                                            <th>Remove</th>
                                            <th>Edit</th>
                                            <th style="visibility:hidden;"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $cnt=0;
                                        $temp=array_reverse($data['awarness']);  
                                        foreach ($temp as $entity) {
                                            echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i><p style="visibility:hidden;" >' . substr($entity->document_path, 34) . '</p></a></td>
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
                                            <th>Remove</th>
                                            <th>Edit</th>
                                            <th style="visibility:hidden;"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $cnt = 0;
                                        $temp=array_reverse($data['advisory']);  
                                        foreach ($temp as $entity) {
                                            echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i><p style="visibility:hidden;" >' . substr($entity->document_path, 34) . '</p></a></td>
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
                                            <th>Remove</th>
                                            <th>Edit</th>
                                            <th style="visibility:hidden;"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $cnt = 0;
                                        $temp=array_reverse($data['visuals']);  
                                        foreach ($temp as $entity) {
                                            echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i><p style="visibility:hidden;" >' . substr($entity->document_path, 34) . '</p></a></td>
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
                                            <th>Remove</th>
                                            <th>Edit</th>
                                            <th style="visibility:hidden;"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $cnt = 0;
                                        $temp=array_reverse($data['bulletin']);  
                                        foreach ($temp as $entity) {
                                            echo ' 
                            <tr>
                                <td>' . ++$cnt . '</td>
                                <td >' . $entity->date . '</td>
                                <td >' . $entity->title . '</td>
                                <td >' . $entity->description . '</td>
                                <td ><a href="' . URLROOT . substr($entity->document_path, 14) . '"><i class="lar la-file-alt"></i><p style="visibility:hidden;" >' . substr($entity->document_path, 34) . '</p></a></td>
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
            </div>



            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Publicity</h5>
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
                                            <div class="col-12">
                                                <label style="color:black" for="newsCategory">Category</label>
                                                <select class="form-control" id="newsCategory" name="category">
                                                    <option value="Press release">Press release</option>
                                                    <option value="Covid-19 advisory">Covid-19 advisory</option>
                                                    <option value="Visuals">Visuals</option>
                                                    <option value="Covid-19 Awarness">Covid-19 Awarness</option>
                                                    <option value="Bulletins">Bulletins</option>
                                                </select>
                                            </div>
                                        </div>
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
                                        <!--   <div class="row form-group">
                                            <div class="col-8">

                                                <label style="color:black" for="newsportal">Portal</label>
                                                <input type="text" id="newsportal" name="portal" class="form-control" placeholder="Published In" required>
                                            </div>
                                           <div class="col-4">

                                                <label style="color:black" for="newsedition">Edition</label>
                                                <input type="text" id="newsedition" name="edition" class="form-control" placeholder="Edition" required>

                                            </div>
                                -->
                                        <!--     </div>
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
                                -->

                                        <div class="row form-group">
                                            <div class="col-12">
                                                <label style="color:black" for="newsdescription">Description</label>
                                                <input type="text" id="newsdescription" name="description" class="form-control" placeholder="Description" required>

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12 input-group">
                                                Select associated document to upload :
                                                <input type="file" name="uploaded_file" id="uploaded_file" required><br><br>
                                            </div>
                                        </div>
                                        <!--      <div class="row form group">
                                            <div class="col-5"><hr></div>
                                            <div class="col-2">or</div>
                                            <div class="col-5"><hr></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col">

                                                <label style="color:black" for="newslink">Web Link</label>
                                                <input type="text" id="newslink" name="weblink" class="form-control" placeholder="News web link">
                                            </div>
                                        </div>
                                -->

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


            <div class="modal fade" id="editnews" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabelid">News & Media Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">Edit</div>
                                <div class="card-body card-block">
                                    <form action="news/edit" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="editid" class="form-control" name="id">
                                        <div class="row form-group">
                                            <div class="col-12">
                                                <label style="color:black" for="newsCategory">Category</label>
                                                <select class="form-control" id="editnewsCategory" name="category">
                                                    <option value="Press release">Press release</option>
                                                    <option value="Covid-19 advisory">Covid-19 advisory</option>
                                                    <option value="Visuals">Visuals</option>
                                                    <option value="Covid-19 Awarness">Covid-19 Awarness</option>
                                                    <option value="Bulletins">Bulletins</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-8">

                                                <label style="color:black" for="newstitle">Title</label>
                                                <input type="text" id="editnewstitle" name="title" class="form-control" placeholder="News title" required>
                                            </div>
                                            <div class="col-4">
                                                <label style="color:black" for="newsdate">Date</label>
                                                <input type="date" id="editnewsdate" name="date" class="form-control" min="2020-01-01" required>

                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12">
                                                <label style="color:black" for="editnewsdescription">Description</label>
                                                <input type="text" id="editnewsdescription" name="description" class="form-control" placeholder="Description" required>

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12 input-group">
                                                Current File Uploaded: <p id="editfilename" style="color:black"></p>
                                                <input type="file" name="uploaded_file" id="edituploaded_file"><br><br>
                                            </div>
                                        </div>



                                        <div class="form-actions form-group text-center">
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
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#tableid').on('click', '.editbtn', function() {
                        $('#editnews').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function() {
                            return $(this).text();
                        }).get();

                        console.log(data);
                        $('#editid').val(data[7]);
                        $('#editnewstitle').val(data[2]);
                        $('#editnewsdate').val(data[1]);
                        $('#editnewsdescription').val(data[3]);
            
                        document.getElementById('editfilename').innerHTML = data[4];


                    });
                });
            </script>
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
