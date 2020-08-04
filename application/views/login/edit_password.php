<?php $this->load->view('login/header.php') ?>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-10 p-b-30">
                <form name="form" onsubmit="return validateForm()" role="form" action="<?= site_url('login/updatePassword/' . $user->id) ?>" method="POST">

                    <span class="login100-form-title p-b-40">
                        Ubah Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Masukan Password Lama">
                        <input class="input100" type="password" name="old_password" placeholder="Masukkan Password Lama" autofocus>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate="Password">
                        <span class="btn-show-pass">
                            <i class="fa fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" placeholder="Masukkan Password Baru">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate="Konfirmasi Password">
                        <span class="btn-show-pass">
                            <i class="fa fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="confirm_password" placeholder="Masukkan Password Baru Kembali">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('dashboard/footer.php') ?>
    <script>
        function validateForm() {
        let oldPassword = document.forms["form"]["old_password"].value;
        let newPassword = document.forms["form"]["password"].value;
        let confirmPassword = document.forms["form"]["confirm_password"].value;
        console.log(oldPassword.value);
        console.log(newPassword.value);
        console.log(confirmPassword.value);
        if (oldPassword != <?= $user->password ?>) {
            alert("password lama yang anda masukkan salah");
            return false;
        }

        if (newPassword != confirmPassword) {
            alert("Password baru dengan konfirmasi password tidak sama")
            return false;
        }

        return true;
    }
    </script>