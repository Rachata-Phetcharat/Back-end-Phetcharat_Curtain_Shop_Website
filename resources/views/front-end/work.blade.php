@include ('layouts/layouts-front/head')


<body>
    @include ('layouts/layouts-front/navbar')
      <div>
            <div class="work-header font-header">
                  <a>ผลงานทั้งหมด</a>
                  <img src="{{asset('admin/img/D-6.jpg')}}" class="work-image">
            </div>
      </div>

      <div class="container">
            <div class="heading example-show">
                  <img src="{{asset('admin/img/D-1.jpg')}}" width="500" height="450">
                  <img src="{{asset('admin/img/D-2.jpg')}}" width="550" height="500">
                  <img src="{{asset('admin/img/D-3.jpg')}}" width="450" height="400">
                  <img src="{{asset('admin/img/D-4.jpg')}}" width="100%" height="450">
                  <img src="{{asset('admin/img/D-5.jpg')}}" width="550" height="450">
                  <img src="{{asset('admin/img/D-6.jpg')}}" width="550" height="400">
            </div>
      </div>

      <div style="padding-top: 50px"></div>
      </div>
</body>