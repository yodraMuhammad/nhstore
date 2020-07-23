<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5 mt-2">
                                <div class="text-center mt-3    ">
                                    <h1 class="h4 text-gray-900 mb-2">Login Page</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="POST" action="<?= base_url('index.php/auth'); ?>">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">*', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" name="password1" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">*', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" href="" class="btn btn-primary btn-user btn-block mb-5">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('index.php/auth/forgotpassword') ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('index.php/auth/registration') ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>