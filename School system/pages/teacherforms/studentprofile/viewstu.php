<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

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
                                            <div >
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
                                                <label class="text-muted"  >Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="studentNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentGenderLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentBdyLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentReligionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentEmailLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAdtLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentClassLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentSectionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAddressLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentPhoneLbl">-</label>
                                    </div>

                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
            <div class="col-md-6">
                <!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Report</h3>
                    </div><!-- /.box-header -->
                    <br>

                        <form role="form">
                            <div class="box-body">
                                <!--Lable field-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">

                                        </div>


                                        <div class="col-md-6">
                        <!--Lable names-->
                        <div class="form-group">

            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Admission Number:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Term Test:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Year:</label>
            </div>

            <div class="form-group">
                <label class="text-muted" >Position:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject1:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject2:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject3:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject4::</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject5::</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject6:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject7::</label>
            </div>

            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject8:</label>
            </div>
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">Subject9:</label>
                </div>


            </div>
                                    </div>

                                    <div class="col-md-6">

                    <div class="form-group">
                        <label id="studentAdmissionNoLbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentTermTestNoLbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentYearLbl">-</label>
                    </div>

                    <div class="form-group">
                        <label id="studentPositionLbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject1Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject2Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject3Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject4Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject5Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject6Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject7Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject8Lbl">-</label>
                    </div>
                    <div class="form-group">
                        <label id="studentSubject9Lbl">-</label>
                    </div>
                                    </div>


                                </div>
                            </div>


        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        </form>
        </div><!-- /.box -->



        </div>
    </section>


    <section >



<script>
    var studentNameLbl
    var studentGenderLbl
    var studentBdyLbl
    var studentReligionLbl
    var studentEmailLbl
    var studentAdtLbl
    var studentClassLbl
    var studentSectionLbl
    var studentAddressLbl
    var studentPhoneLbl

    var parentOccupationLbl
    var parentEmailLbl
    var parentPhoneLbl





    document.getElementById('studentNameLbl').innerHTML = studentNameLbl;
    document.getElementById('studentGenderLbl').innerHTML = studentGenderLbl;
    document.getElementById('studentBdyLbl').innerHTML = studentBdyLbl;
    document.getElementById('studentReligionLbl').innerHTML = studentReligionLbl;
    document.getElementById('studentEmailLbl').innerHTML = studentEmailLbl;
    document.getElementById('studentAdtLbl').innerHTML = studentAdtLbl;
    document.getElementById('studentClassLbl').innerHTML = studentClassLbl;
    document.getElementById('studentSectionLbl').innerHTML = studentSectionLbl;
    document.getElementById('studentAddressLbl').innerHTML = studentAddressLbl;
    document.getElementById('studentPhoneLbl').innerHTML = studentPhoneLbl;
    document.getElementById('parentNameLbl').innerHTML = parentNameLbl;
    document.getElementById('parentOccupationLbl').innerHTML = parentOccupationLbl;
    document.getElementById('parentEmailLbl').innerHTML = parentEmailLbl;
    document.getElementById('parentPhoneLbl').innerHTML = parentPhoneLbl;

    </script>
    <script>


    var studentAdmissionNoLbl
    var studentTermTestNoLbl
    var studentYearLbl

    var studentPositionLbl
    var studentSubject1Lbl
    var studentSubject2Lbl
    var studentSubject3Lbl
    var studentSubject4Lbl
    var studentSubject5Lbl
    var studentSubject6Lbl
    var studentSubject7Lbl
    var studentSubject8Lbl
    var studentSubject9Lbl


    document.getElementById('studentAdmissionNoLbl').innerHTML=studentAdmissionNoLbl;
    document.getElementById('studentTermTestNoLbl').innerHTML=studentTermTestNoLbl;
    document.getElementById('studentYearLbl').innerHTML=studentYearLbl;
    document.getElementById('studentPositionLbl').innerHTML=studentPositionLbl;
    document.getElementById('studentSubject1Lbl').innerHTML=studentSubject1Lbl;
    document.getElementById('studentSubject2Lbl').innerHTML=studentSubject2Lbl;
    document.getElementById('studentSubject3Lbl').innerHTML=studentSubject3Lbl;
    document.getElementById('studentSubject4Lbl').innerHTML=studentSubject4Lbl;
    document.getElementById('studentSubject5Lbl').innerHTML=studentSubject5Lbl;
    document.getElementById('studentSubject6Lbl').innerHTML=studentSubject6Lbl;
    document.getElementById('studentSubject7Lbl').innerHTML=studentSubject7Lbl;
    document.getElementById('studentSubject8Lbl').innerHTML=studentSubject8Lbl;
    document.getElementById('studentSubject9Lbl').innerHTML=studentSubject9Lbl;

</script>
<?php include_once('../teachercommon/footer.php'); ?>

