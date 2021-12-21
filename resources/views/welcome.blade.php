@include ('layouts/layouts-front/head')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>       
    @include ('layouts/layouts-front/navbar')

             <!--2_StratCasrousel-->
        <img class="head-img" src="{{asset('admin/img/A-1.jpg')}}">
            <div class="header">
                <div class="title">
                    <h1>ร้านจำหน่ายผ้าม่าน</h1>
                    <h1>ร้านผ้าม่านเพชรรัตน์</h1>
                </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-height"></div>
            <!--2_EndCasrousel-->
            <div class="container">
                <div class="row">
                    <div class="mt-5">
                        <h1 class="heading">เรื่องน่ารู้เกี่ยวกับผ้าม่าน</h1>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="mb-3">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('admin/img/c-1.jpg')}}" class="img-fluid rounded-start" width="350" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h2 class="rcorners1">ม่านคืออะไร</h2>
                                <h4 class="rcorners2"> ม่าน คือวัสดุที่ใช้สำหรับสำหรับป้องกันหรือบดบังแสงหรือลมโดยมากมักหมายถึงวัสดุที่ทำจากผ้า ผ้าม่านจะแขวนเหนือประตู หรือเรียกว่าม่านประตู
                                    ม่านมักแขวนภายในอาคารเหนือหน้าต่างเพื่อกันแสง หรือในตอนกลางคืนเพื่อความเป็นส่วนตัวในการนอนหลับ หรือป้องกันแสงออกนอกอาคาร</h4>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h1 style="padding-left: 60px;">รูปตัวอย่างสินค้า</h1>
                    </div>

                    <div class="col-6 mt-4 text-center">
                        <img src="{{asset('admin/img/C-1.jpg')}}" class="rounded" width="450" height="400" vspace=”50” hspace=”50”>
                        <img src="{{asset('admin/img/C-2.jpg')}}" class="rounded mt-4" width="450" height="400" vspace=”50” hspace=”50”>
                    </div>

                    <div class="col-6 mt-5 text-center">
                        <img src="{{asset('admin/img/C-3.jpg')}}" class="rounded" width="450" height="400" vspace=”50” hspace=”50”>
                        <img src="{{asset('admin/img/C-4.jpg')}}" class="rounded mt-4" width="450" height="400" vspace=”50” hspace=”50”>
                    </div>

                    <h3 class="example-top mt-3">
                    <a class="nav-link " href="product.php" align=center>ดูเพิ่มเติม</a>
                    </h3>

                    <div class="col-12 mt-5">
                    <h2 class="advice-left-heading">คำแนะนำในการเลือกผ้าม่านให้เหมาะกับบ้าน</h2>
                    <h5 class="advice-left mt-auto">
                        <p>
                        <li>ถ้าต้องการให้ห้องดูโล่งกว้างสบายตา ควรเลือกใช้ม่านสีโทนอ่อน</li>
                        </p>
                        <p>
                        <li>ถ้าต้องการให้ห้องมีพื้นที่กระชับหรือดูเข้มขรึม สงบนิ่ง ควรเลือกใช้ม่านสีโทนเข้ม</li>
                        </p>
                        <p>
                        <li>ผ้าม่านที่มีลวดลายหรือเส้นสายใหญ่ๆ จะช่วยให้ห้องดูเล็กลง จึงเหมาะกับการใช้ในห้องโถงหรือห้องรับแขกขนาดใหญ่</li>
                        </p>
                        <p>
                        <li>ผ้าม่านที่มีลวดลายเล็กๆ ให้ผลตรงข้ามกัน เพราะจะช่วยให้ห้องดูกว้างขึ้น</li>
                        </p>
                        <p>
                        <li>จึงมักใช้ในห้องขนาดเล็กหรือห้องชุดคอนโดมิเนียมเป็นส่วนใหญ่</li>
                        </p>
                    </h5>
                    </div>
                    <hr>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <h3 class="advice-left-heading"> ห้องนั่งเล่น</h3>
                        <h4 class="advice-left">
                            ม่านในห้องนี้ใช้เพื่อความสวยงาม ช่วยกันแสงและกรองเสียง
                            ทั้งยังเพิ่มความเป็นส่วนตัวให้แขกและเจ้าของบ้าน
                            ควรเลือกโทนสีผ้าม่านที่ไปด้วยกันกับโทนสีของห้องและเฟอร์นิเจอร์
                            แนะนำให้ใช้ม่านแบบ 2 ชั้นที่มีทั้งผ้าม่านทึบและผ้าม่านโปร่งไม่ควรเลือกสีจัดจนเกินไป
                            เพราะจะทำให้ห้องนั่งเล่นดูอึดอัด
                        </h4>
                        </div>
                        <div class="carousel-item">
                        <h3 class="advice-left-heading">ห้องนอน</h3>
                        <h4 class="advice-left">
                            ม่านในห้องนอนต้องสามารถบังแดดและป้องกันเสียงได้ดี
                            ควรใช้ม่านที่ช่วยบังแสงแดดที่จะส่องเข้าห้องในตอนเช้าและบดบังสายตาจากภายนอกได้ดี
                            ทั้งนี้ควรเลือกโทนสีม่านให้กลมกลืนกับสีห้องและเฟอร์นิเจอร์ นอกจาก ประเภทของผ้าม่าน ที่ต้องคำนึงถึงแล้ว สีของผ้าม่าน ก็เป็นปัจจัยอันดับต้น ๆ ของการพักผ่อนที่จะช่วยให้ห้องนอนรู้สึกผ่อนคลาย
                            เน้นโทนสีเย็นตาดีกว่าสีโทนร้อน
                            <h4>
                        </div>
                        <div class="carousel-item">
                        <h3 class="advice-left-heading">ห้องรับประทานอาหาร</h3>
                        <h4 class="advice-left">
                            นอกจากใช้กันแดดแล้ว
                            ม่านยังช่วยแบ่งสัดส่วนภายในห้องช่วยกันฝุ่นและไอระเหยจากน้ำมันของอาหารได้ด้วยควรเน้นม่านสีสดๆ เช่น สีเขียว
                            สีแดง สีเหลือง สีส้ม เพื่อกระตุ้นความอยากอาหาร แต่ต้องดูให้เข้ากับโทนสีของห้องด้วยหรือจะใช้มู่ลี่แทนก็ได้
                            เพราะสามารถปรับแสงและบังสายตาได้ดีแถมทำความสะอาดง่าย
                        </h4>
                        </div>
                        <div class="carousel-item">
                        <h3 class="advice-left-heading">ห้องนอน</h3>
                        <h4 class="advice-left">
                            ม่านในห้องนอนต้องสามารถบังแดดและป้องกันเสียงได้ดี
                            ควรใช้ม่านที่ช่วยบังแสงแดดที่จะส่องเข้าห้องในตอนเช้าและบดบังสายตาจากภายนอกได้ดี
                            ทั้งนี้ควรเลือกโทนสีม่านให้กลมกลืนกับสีห้องและเฟอร์นิเจอร์ นอกจาก ประเภทของผ้าม่าน ที่ต้องคำนึงถึงแล้ว สีของผ้าม่าน ก็เป็นปัจจัยอันดับต้น ๆ ของการพักผ่อนที่จะช่วยให้ห้องนอนรู้สึกผ่อนคลาย
                            เน้นโทนสีเย็นตาดีกว่าสีโทนร้อน
                            <h4>
                        </div>
                        <div class="carousel-item">
                        <h3 class="advice-left-heading">ห้องนอน</h3>
                        <h4 class="advice-left">
                            ม่านในห้องนอนต้องสามารถบังแดดและป้องกันเสียงได้ดี
                            ควรใช้ม่านที่ช่วยบังแสงแดดที่จะส่องเข้าห้องในตอนเช้าและบดบังสายตาจากภายนอกได้ดี
                            ทั้งนี้ควรเลือกโทนสีม่านให้กลมกลืนกับสีห้องและเฟอร์นิเจอร์ นอกจาก ประเภทของผ้าม่าน ที่ต้องคำนึงถึงแล้ว สีของผ้าม่าน ก็เป็นปัจจัยอันดับต้น ๆ ของการพักผ่อนที่จะช่วยให้ห้องนอนรู้สึกผ่อนคลาย
                            เน้นโทนสีเย็นตาดีกว่าสีโทนร้อน
                            <h4>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                    <img src="{{asset('admin/img/Block-1.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </body>
</html>
