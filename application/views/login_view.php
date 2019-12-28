

<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary pt-5 pb-8">
        <div class="container">
            <div class="header-body text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Welcome!</h1>
                        <p class="text-lead text-light">login or contact us for your account</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>sign in with credentials</small>
                        </div>
                        <?=form_open('main/index')?>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <?=form_input(["class" => "form-control", "placeholder" => "Mobile", "type" => "text", "name" => "username", "value" => set_value("username")])?>
                                    <?=form_error("username")?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <?=form_password(["class" => "form-control", "name" => "password", "placeholder" => "Password", "value" => set_value("password")])?>
                                    <?=form_error("password")?>
                                </div>
                                <div class="text-center">
                                    <?=form_submit(["name" => "login_btn", "class" => "btn btn-primary my-4", "value" => "Log Me In"])?>
                                    <?=form_reset(["value" => "clear", "class" => "btn btn-danger"])?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
