@include('layouts/admin/head')

<body id="page-top">
    <!-- container section start -->
    <div id="wrapper">
        <!--sidebar start-->
        @include('layouts/admin/sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <!--header start-->
            @include('layouts/admin/header')

            <!--main content start-->
            <div class="container-fluid">
                <section id="main-content">
                    <section class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="page-header"><i class="fa fa-table"></i> หน้าหัวเว็บ</h3>
                                <!-- <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-table"></i>Table</li>
                                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                                </ol> -->
                                <hr>
                            </div>
                        </div>
                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Responsive tables
                                    </header>
                                    <div class="breadcrumb">
                                        <a href="{{route('add_header')}}" class="btn btn-primary">เพิ่มข้อมูล</a>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>เนื้อหา</th>
                                                        <th>รูป</th>
                                                        <th>ผู้ที่สรางบทความ</th>
                                                        <th>แก้ไขข้อมูล</th>
                                                        <th>ลบข้อมูล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <!-- <td><a href="form_edit_header.php" class="btn btn-warning">แก้ไขข้อมูล</a></td> -->
                                                        <td><a href="{{route('edit_header')}}" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
                                                        <!-- <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td> -->
                                                        <td><button type="submit" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button></td>
                                                    {{-- </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <!-- <td><a href="form_edit_header.php" class="btn btn-warning">แก้ไขข้อมูล</a></td> -->
                                                        <td><a href="form_edit_header.php" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
                                                        <!-- <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td> -->
                                                        <td><button type="submit" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <!-- <td><a href="form_edit_header.php" class="btn btn-warning">แก้ไขข้อมูล</a></td> -->
                                                        <td><a href="form_edit_header.php" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
                                                        <!-- <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td> -->
                                                        <td><button type="submit" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button></td>
                                                    </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- page end-->
                    </section>
                </section>
            </div>
            <!--main content end-->
        </div>
    </div>

   @include('layouts/admin/footer')

</body>

</html>