<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i><?= APP_NAME ?></h3>
                        </a>
                        <h3>Nova conta</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                        <label for="floatingText">Usuário</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <span class="me-2">Esqueceu a senha?</span><a href="<?= site_url('/auth/forgot_password') ?>">Recuperar</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Criar conta</button>
                    <p class="text-center mb-0">Já tenho conta de usuário? <a href="<?= site_url('/auth/login') ?>">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->
</div>

<?= $this->endSection() ?>