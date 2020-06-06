<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>{{$data['company'][0]->nama_perusahaan}}</title>
	<meta name="description" content="Convert Pulsa Terpercaya.">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<link rel="icon" type="image/png" href="{{asset("")}}assets/images/ubahsaldo-favico.png?v=<?= rand(1, 1000) ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset("")}}assets/css/select2-bootstrap4.css">

	<link rel="stylesheet" href="{{asset("")}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset("")}}assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="{{asset("")}}assets/css/accordian.css" />
	<link rel="stylesheet" href="{{asset("")}}assets/css/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset("")}}assets/css/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/font-awesome.min.css">
    <link href="{{asset('')}}css/lightbox.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">

	<script src="{{asset("")}}assets/js/jquery.min.js"></script>
	<script src="{{asset("")}}assets/js/smoothscroll.js"></script>
	<script>
		$("#navbarNav").on("click", "a", function() {
			$(".navbar-toggle").click();
			//or $("#nav").slideToggle();
		});
	</script>
</head>

<body>

	<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
		<div class="navbar-container container">

			<div class="navbar-brand">
				<a class="navbar-brand-logo" href="#">
                <img src="{{asset('')}}assets/images/logo-ubahsaldo.png" width="155px">
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-around" id="navbarNav">
				<ul class="navbar-nav menu-navbar-nav">
					<li class="nav-item">
                    <a class="nav-link" href="{{route('home.store')}}">
							<p class="nav-link-number">01</p>
							<p class="nav-link-menu">Beranda</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">
							<p class="nav-link-number">02</p>
							<p class="nav-link-menu">Jasa</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#rate">
							<p class="nav-link-number">03</p>
							<p class="nav-link-menu">Rate Kami</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">
							<p class="nav-link-number">04</p>
							<p class="nav-link-menu">Kontak</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tos">
							<p class="nav-link-number">05</p>
							<p class="nav-link-menu">Cara Transaksi</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tos">
							<p class="nav-link-number">06</p>
							<p class="nav-link-menu">Syarat dan Ketentuan</p>
						</a>
					</li>
                </ul>

			</div>
		</div>
	</nav>

	<div id="top"></div>

	<div class="wrapper">
        @yield('content')

		<div class="footer-section">
			<div class="footer-section-bg-graphics">
				<img src="">
			</div>

			<div class="container footer-container">
				<div class="col-lg-4 col-md-6 footer-logo">
					<img src="{{asset('')}}assets/images/ubahsaldo-putih.png">
					<p class="footer-susection-text">UbahSaldo.com . website jasa pertukaran pulsa ke uang tunai</p>
				</div>
				<div class="col-lg-4 col-md-6 footer-subsection">
					<div class="footer-subsection-2-1">
						<h3 class="footer-subsection-title">Tentang Kami</h3>
						<p class="footer-subsection-text">Kami adalah perusahaan yang berjalan pada jasa pertukaran pulsa ke uang tunai.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 footer-subsection">
					<div class="footer-subsection-2-2">
						<h3 class="footer-subsection-title">Kontak Kami</h3>
						<div class="footer-social-media-icons-section">
							<a href="https://wa.me/6287783036094" class="footer-social-media-icon"><i class="fa fa-whatsapp"></i></a>
							<a href="fb.com/fajarmcv" class="footer-social-media-icon"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
        <!-- Modal -->


       <!-- Modal2 -->




	<script src="{{asset("")}}assets/js/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{asset('')}}js/lightbox-plus-jquery.min.js"></script>
    <script src="{{asset("")}}assets/js/popper.min.js"></script>
	<script src="{{asset("")}}assets/js/bootstrap.min.js"></script>
	<script src="{{asset("")}}assets/js/owl.carousel.js"></script>
	<script src="{{asset("")}}assets/js/accordian.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>


	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(this).scrollTop() > 20) {
				$('#navbar').addClass('header-scrolled');
			} else {
				$('#navbar').removeClass('header-scrolled');
			}
		});
	</script>
	<script>
		$(document).ready(function() {
			$(".owl-carousel").owlCarousel({
				items: 3,
				loop: true,
				nav: true,
				autoplay: true,
				autoplayTimeout: 2000,
                autoplayHoverPause: true,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 3
					},
					1000: {
						items: 4
					}
				}
			});
		});
    </script>
    <script>
        $(document).ready(function(){
                $(".btn_mdl").click(function() {

                    var id_isp = $(this).attr('data-id_isp');
                    hitung_rate(id_isp);
                });

                });

                    function hitung_rate(id_isp){
                        $(".hitung").click(function(){
                            var nominal = $("#nominal").val();
                            $.ajax({
                            url: '{!! route("get_rate") !!}',
                            data: {
                                id_isp:id_isp,
                                nominal:nominal
                            },
                            success: function(data){
                                console.log(data);
                                $(".hasil").html(data);
                            },
                            dataType:'text'
                        });
                        })
                    }

    </script>

    <script>
        $(function () {
        $('select').each(function () {
            $(this).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
            });
        });
        });

    </script>
</body>
</html>
