<?php $this->load->view('login/header.php') ?>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-10 p-b-30">
            <form class="login100-form validate-form" role="form" action="" method="POST">

                <div class="login100-form-title p-b-20">
                    <img width="175px" height="175px" src="<?= base_url('asset_login/images/logo.png') ?>"/>
                </div>
				<span class="login100-form-title p-b-40">
					Sistem Informasi Akademik SMAN 6 Pekanbaru
				</span>



                <div class="wrap-input100 validate-input m-b-16" data-validate="Masukan Nama">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-20" data-validate = "Password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>



            </form>
        </div>
    </div>
</div>

<?php $this->load->view('dashboard/footer.php') ?>
