<!DOCTYPE html>

<html lang="vi" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			SecPASS | Đặt lại mật khẩu
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Helvetica:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="{{ asset('vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<!-- <link rel="shortcut icon" href="demo/default/media/img/logo/favicon.ico" /> -->
	</head>
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{ asset('app/media/img/bg/bg-2.jpg') }});">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img width="300" src="{{ asset('demo/default/media/img/logo/logo_395x50_dark.png') }}"/>
							</a>
						</div>
						<div class="m-login forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Quên mật khẩu ?
								</h3>
								<div class="m-login__desc">
									Vui lòng nhập email mà bạn sử dụng để đăng ký dịch vụ.
								</div>
							</div>
							<form class="m-login__form m-form" action="">
		  						@csrf
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Gửi yêu cầu
									</button>
									&nbsp;&nbsp;
                                    <a href="{{ route('login') }}" id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Hủy</a>
									<!-- <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
										Huỷ
									</button> -->
								</div>
							</form>
						</div>

					</div>
                </div>
            <div>
        <div>
    </body>        
</html>