<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">

<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Certificate Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Id:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Student Id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Discription:</label>
                                <textarea class="form-control" id="motherAddressTxt" rows="3" placeholder="Enter Discription"></textarea>
                            </div>
                            <div class="box-footer">
                                <input type="file" id="exampleInputFile" class="btn btn-primary">
                                <!-- <button type="submit" class="btn btn-primary">Add certificate</button> -->
                                <!-- <button type="submit" class="btn btn-primary">Send</button> -->
                            </div>
                            <div class="box-footer">
                                <!-- <input type="file" id="exampleInputFile" class="btn btn-primary"> -->
                                <!-- <button type="submit" class="btn btn-primary">Add certificate</button> -->
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once('../admincommon/footer.php'); ?>