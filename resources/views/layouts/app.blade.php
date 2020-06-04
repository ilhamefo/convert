<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="{{asset('')}}assets/images/fav-icon.png?v=248">
  <title>@yield('title') Page!</title>


  <link href="{{asset('')}}lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="{{asset('')}}lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="{{asset('')}}lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="{{asset('')}}lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="{{asset('')}}lib/highlightjs/github.css" rel="stylesheet">
  <link href="{{asset('')}}lib/select2/css/select2.min.css" rel="stylesheet">
  <link href="{{asset('')}}lib/jquery-toggles/toggles-full.css" rel="stylesheet">
  <link href="{{asset('')}}lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
  <link href="{{asset('')}}lib/spectrum/spectrum.css" rel="stylesheet">
  <link href="{{asset('')}}lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <link href="{{asset('')}}lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="{{asset('')}}lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">


  <link rel="stylesheet" href="{{asset('')}}css/bracket.css">
</head>

<body>


  <div class="br-logo"><a href="#"><span>[</span>UbahSaldo<span>]</span></a></div>
  <div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">


      <a href="#" class="br-menu-link {{ Request::is('home*') ? 'active show-sub' : '' }}">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
          <span class="menu-item-label">Bagian..</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div>
      </a>
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('home.company')}}" class="nav-link {{ Request::is('home/company') ? 'active' : '' }}">Company profile</a></li>
        <li class="nav-item"><a href="{{route('home.providers')}}" class="nav-link {{ Request::is('home/providers*') ? 'active' : '' }}">Providers</a></li>
        <li class="nav-item"><a href="{{route('home.rates')}}" class="nav-link {{ Request::is('home/rates*') ? 'active' : '' }}">Rate Providers</a></li>
    </ul>


    </div>
    <br>
  </div>
  <div class="br-header">
    <div class="br-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a>
      </div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i
            class="icon ion-navicon-round"></i></a></div>
      <div class="input-group hidden-xs-down wd-170 transition">
        <input id="searchbox" type="text" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </div>
    <div class="br-header-right">
    </div>
  </div>
        @yield('main')
  {{-- <script src="{{asset('')}}lib/jquery/jquery.js"></script> --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="{{asset('')}}lib/popper.js/popper.js"></script>
  <script src="{{asset('')}}lib/bootstrap/bootstrap.js"></script>
  <script src="{{asset('')}}lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="{{asset('')}}lib/moment/moment.js"></script>
  <script src="{{asset('')}}lib/jquery-ui/jquery-ui.js"></script>
  <script src="{{asset('')}}lib/jquery-switchbutton/jquery.switchButton.js"></script>
  <script src="{{asset('')}}lib/peity/jquery.peity.js"></script>
  <script src="{{asset('')}}js/bracket.js"></script>
  <script src="{{asset('')}}lib/select2/js/select2.min.js"></script>
  <script src="{{asset('')}}lib/highlightjs/highlight.pack.js"></script>
  <script src="{{asset('')}}lib/jquery-toggles/toggles.min.js"></script>
  <script src="{{asset('')}}lib/jt.timepicker/jquery.timepicker.js"></script>
  <script src="{{asset('')}}lib/spectrum/spectrum.js"></script>
  <script src="{{asset('')}}lib/jquery.maskedinput/jquery.maskedinput.js"></script>
  <script src="{{asset('')}}lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
  <script src="{{asset('')}}lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
@if ($message = Session::get('success'))
<script>
    Swal.fire(
      'Sukses!',
      '{{$message}}',
      'success'
    )
    </script>
@endif

@if ($message = Session::get('danger'))
<script>
    Swal.fire(
      'Oops...',
      '{{$message}}',
      'error'
    )
    </script>
@endif

<script>
    $(document).ready(function(){

        $(".tmb_hps").click(function(e){
            e.preventDefault();
            var form = event.target.form;
            Swal.fire({
            title: 'Yakin?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, delete!'
            }).then((result) => {
            if (result.value) {
                form.submit();
            }
            })

         });
    })
</script>
</body>

</html>
