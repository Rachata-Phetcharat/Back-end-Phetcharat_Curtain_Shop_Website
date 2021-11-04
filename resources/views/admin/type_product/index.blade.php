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
                                <h3 class="page-header"><i class="fa fa-table"></i> ประเภทสินค้า</h3>
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
                                    <header class="panel-heading"> Responsive tables </header>
                                    <div class="breadcrumb">
                                        <a href="{{route('add_type')}}" class="btn btn-primary">เพิ่มข้อมูล</a>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>เนื้อหา</th>
                                                        <th>ผู้ที่สรางบทความ</th>
                                                        <th>เวลาที่สร้าง</th>
                                                        <th>เวลาที่แก้ไข</th>
                                                        <th>แก้ไขข้อมูล</th>
                                                        <th>ลบข้อมูล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($type_product as $type)
                                                        <tr>
                                                            <td>{{$type->id_type}}</td>
                                                            <td>{{$type->name}}</td>
                                                            <td>{{$type->admin->firstName." ".$type->admin->lastName}}</td>
                                                            <td>{{$type->created_at}}</td>
                                                            <td>{{$type->updated_at}}</td>
                                                            <td><a href="{{url('/Admin/type_product/edit_type/'.$type->id_type)}}" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
                                                            <td><a href="{{url('/Admin/type_product/delete/'.$type->id_type)}}"><button type="submit" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button></a></td>
                                                        </tr>
                                                    @endforeach
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