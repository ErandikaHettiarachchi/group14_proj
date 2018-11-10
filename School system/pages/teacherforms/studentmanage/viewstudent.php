<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">

<!--            left side panel-->
            <div class="col-md-6">
<!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-8">
                            <!-- search form -->
                            <form action="#" method="get" class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                        </div>
                    </div>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <!-- Profile picture -->
                                                <div class="small-box bg-blue">
                                                    <img src="../../../dist/img/user_100x128.png" alt="User Image">
                                                </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-edit"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa  fa-print"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-download"></i></a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!--Lable names-->
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Y.Dinuka Kasun Medis</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Male</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">1995/09/20</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Srilankan</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">dinuka.kasunds@gmail.com</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">2015/02/02</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">m1</label>
                                    </div>
                                    <div class="form-group">
                                        <label>12</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">73,Dampe,Madapatha</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">0717275722</label>
                                    </div>
                                    <div class="form-group">;</div>
                                    <div class="form-group">
                                        <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Edit details</a>
                                    </div><!-- /.box-footer -->
                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>




<!--            right side panel-->
            <div class="col-md-6 ">

<!--                Guardian's detail form  -->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Guardian's Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label >Guardian type:</label>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent"  id="father" class="form-check-input" value="Father" > Father
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent" id="mother" class="form-check-input" value="Mother">  Mother
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent" id="guardian" class="form-check-input" value="Guardian">  Guardian
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="exampleInputEmail1">Occupation:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="exampleInputEmail1">Email:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="exampleInputEmail1">Phone:</label>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Test Test</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Test</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Test @ gmail.com</label>
                                        </div>
                                        <div class="form-group">
                                            <label>0717275722</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div><!-- /.box -->
            </div>

            <!--                Exam results-->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Exam Results</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Date</th>
                                <th>Subject</th>
                                <th>Grade Point</th>
                                <th>Precentage Point</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-warning">57</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-danger">10</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-info">70</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-success">85</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Exams</a>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->

        </div>
    </section>


    <section >

            <!--                Exam results-->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Certificates</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Date</th>
                                <th>Subject</th>
                                <th>Grade Point</th>
                                <th>Precentage Point</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-warning">57</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-danger">10</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-info">70</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                <td>2012/02/02</td>
                                <td>Math</td>
                                <td>4</td>
                                <td><span class="label label-success">85</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Exams</a>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->

    </section>
</section>

<?php include_once('../admincommon/footer.php'); ?>