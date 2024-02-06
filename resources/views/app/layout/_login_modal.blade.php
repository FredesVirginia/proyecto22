{{-- SIGN UP MODAL --}}
<div class="modal fade form-modal" id="login_form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10"
            data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                    <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                        <div class="pb-9">
                            <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                Crea una cuenta gratuita
                            </h3>
                            <p class="mb-0 font-size-4 text-white">Crear tu cuenta te permite aplicar a empleos o
                                publicar oportunidades.</p>
                        </div>
                        {{-- <div class="border-top border-default-color-2 mt-auto">
                <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                  <div class="pt-5 px-9">
                    <h3 class="font-size-7 text-white">
                      295
                    </h3>
                    <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                      posted today</p>
                  </div>
                  <div class="pt-5 px-9">
                    <h3 class="font-size-7 text-white">
                      14
                    </h3>
                    <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                      registered</p>
                  </div>
                </div>
              </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                        {{-- <div class="row">
                            <div class="col-4 col-xs-12">
                            <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from LinkedIn</span></a>
                            </div>
                            <div class="col-4 col-xs-12">
                            <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Google</span></a>
                            </div>
                            <div class="col-4 col-xs-12">
                            <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Facebook</span></a>
                            </div>
                        </div>
                        <div class="or-devider">
                            <span class="font-size-3 line-height-reset">Or</span>
                        </div> --}}

                        {{-- REGISTER FORM --}}
                        <form action="{{ route('register') }}" method="POST" id="register_form" class="auth_form">
                            @csrf
                            <div class="form-group">
                                <label for="name"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Nombre</label>
                                <input type="name" class="form-control" placeholder="Tu nombre" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email2"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                <input type="email" class="form-control" placeholder="Tu email" id="email2" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password2"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Contraseña</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password2"
                                        placeholder="Ingrese su contraseña" name="password">
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password"></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirmar
                                    Contraseña</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Repita la contraseña">
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password_confirmation"></a>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                                <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                                    <input class="d-none" type="checkbox" id="terms-check2">
                                    <span class="checkbox mr-5"></span>
                                    <span class="font-size-3 mb-0 line-height-reset d-block">Acepto los <a
                                            href="{{ route('terms') }}" class="text-primary">Términos y
                                            Condiciones</a></span>
                                </label>
                                <a href="" class="font-size-3 text-dodger line-height-reset">Olvidé mi
                                    contraseña</a>
                            </div>
                            <div class="form-group mb-8">
                                <button
                                    class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Registrarse</button>
                            </div>

                            <p class="font-size-4 text-center heading-default-color">¿Ya tienes una cuenta? <a href="#" data-action="to-login" class="text-primary js_auth_form_toggle">Ingrese aquí</a></p>
                        </form>


                        {{-- LOGIN FORM --}}
                        <form action="{{ route('login.store') }}" method="POST" id="login_form" class="auth_form">
                            @csrf
                            <div class="form-group">
                                <label for="email"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                <input type="email" class="form-control" placeholder="Tu email" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Contraseña</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Ingrese su contraseña" name="password">
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password"></a>
                                </div>
                            </div>
                            <div class="form-group mb-8">
                                <button
                                    class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Ingresar</button>
                            </div>
                            <p class="font-size-4 text-center heading-default-color">No tienes cuenta? <a href="#" data-action="to-register" class="text-primary js_auth_form_toggle">Regístrate aquí</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- <script>  see js/c.js </script> --}}

</script>
