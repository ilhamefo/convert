<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>{{$data['company'][0]->nama_perusahaan}}</title>
	<meta name="description" content="Convert Pulsa Terpercaya.">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<link rel="icon" type="image/png" href="{{asset("")}}assets/images/fav-icon.png?v=<?= rand(1, 1000) ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset("")}}assets/css/select2-bootstrap4.css">

	<link rel="stylesheet" href="{{asset("")}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset("")}}assets/css/form.css">
	<link rel="stylesheet" type="text/css" href="{{asset("")}}assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="{{asset("")}}assets/css/accordian.css" />
	<link rel="stylesheet" href="{{asset("")}}assets/css/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset("")}}assets/css/owl/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{asset("")}}assets/css/font-awesome.min.css">
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
                <img src="{{asset('')}}assets/images/logo-cv.png" width="155px">
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
							<p class="nav-link-menu">Home</p>
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
							<p class="nav-link-menu">TOS / Syarat dan Ketentuan</p>
						</a>
					</li>
				</ul>
				<!-- <ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link learn-more-btn" href="#">Signup</a>
					</li>
				</ul> -->
			</div>
		</div>
	</nav>

	<div id="top"></div>

	<div class="wrapper">
        @yield('content')

		<div class="footer-section">
			<div class="footer-section-bg-graphics">
				<img src="{{asset('')}}assets/images/footer-section-bg.png">
			</div>

			<div class="container footer-container">
				<div class="col-lg-3 col-md-6 footer-logo">
					<img src="{{asset('')}}assets/images/footer-logo.png">
					<p class="footer-susection-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="col-lg-3 col-md-6 footer-subsection">
					<div class="footer-subsection-2-1">
						<h3 class="footer-subsection-title">Tentang Kami</h3>
						<p class="footer-subsection-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 footer-subsection">
					<h3 class="footer-subsection-title">Kontak Kami</h3>
					<ul class="footer-subsection-list">
						<li>123 Business Centre<br>London SW1A 1AA</li>
						<li>0123456789</li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-subsection">
					<div class="footer-subsection-2-2">
						<h3 class="footer-subsection-title">Sosial Media</h3>
						<div class="footer-social-media-icons-section">
							<a href="#top" class="footer-social-media-icon"><i class="fa fa-twitter"></i></a>
							<a href="#top" class="footer-social-media-icon"><i class="fa fa-instagram"></i></a>
							<a href="#top" class="footer-social-media-icon"><i class="fa fa-facebook"></i></a>
							<a href="#top" class="footer-social-media-icon"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
        <!-- Modal -->


       <!-- Modal2 -->




	<script src="{{asset("")}}assets/js/email-decode.min.js"></script>
	<script src="{{asset("")}}assets/js/jquery.min.js"></script>
	<script src="{{asset("")}}assets/js/popper.min.js"></script>
	<script src="{{asset("")}}assets/js/bootstrap.min.js"></script>
	<script src="{{asset("")}}assets/js/owl.carousel.js"></script>
	<script src="{{asset("")}}assets/js/accordian.js"></script>
	<script src="{{asset("")}}assets/js/form.js"></script>
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
				items: 4,
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
            Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
            })
                function hitung_rate(header){
                    console.log(header);
                    $(".hitung" ).click(function() {
                    var nominal = $("#nominal").val() * parseFloat(header);
                    // console.log(header);
                    var	reverse = nominal.toString().split('').reverse().join(''),
                    ribuan 	= reverse.match(/\d{1,3}/g);
                    ribuan	= ribuan.join('.').split('').reverse().join('');

                   $(".hasil").html(ribuan);
                });
                }


                $('.btn_mdl').click(function(){
                    var header = $(this).attr('data-header');
                    hitung_rate(header);

                });



        })
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
sd
</html>
