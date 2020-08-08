<?php
    if(!empty($_GET["error"])){
        setcookie("error", $_GET["error"], time()+5, "/");
        header("Location: /contacto");
        die();
    }else if(!empty($_GET["exito"])){
        setcookie("exito", "1", time()+5, "/");
        header("Location: /contacto");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Funeraria Nuestra Señora de la Granada</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <style media="screen">
            .cuerpoAlto{
                padding-left: 65px;
                padding-right: 65px;
                padding-top: 50px;
                padding-bottom: 50px;
                text-align: center;
            }
            .cuerpoMedio{
                text-align: center;
                border-top: double;
                border-bottom: double;
                padding: 50px;
                background-color: #EDEDED;
            }
            @media (min-width:767px){
                .cuerpoMedioIzquierda{
                    border-right: 1px dashed #333;
                }
            }
            @media (max-width:767px){
                .cuerpoMedioIzquierda{
                    margin-bottom: 50px;
                }
            }
            .cuerpoBajo{
                padding-left: 65px;
                padding-right: 65px;
                padding-top: 50px;
                padding-bottom: 50px;
                text-align: center;
            }
            .contacto{
                padding: 50px;
                background-color: #f1f1f1;
                text-align: center;
            }
            .contacto form{
                width: 100%;
            }
            .contacto h2{
                margin-bottom: 20px;
            }
            .c-black{
                filter: invert(0.75);
            }
        </style>
        <script>
            $(function(){
                $("#headerLocation").load("/parts/header.html", function(){
                    $("#navItemContacto").addClass("active");
                });
                $("#footerLocation").load("/parts/footer.html");
            });
        </script>
    </head>
    <body>
        <div id="headerLocation" class="row"></div>
        <div class="row cuerpoAlto">
            <div class="col col-12">
                <h2>Datos de contacto de Funeraria Ntra. Sra. De La Granada en La Puebla del Río</h2>
                <p>Póngase en contacto con nosotros en La Puebla del Río. En <a href="/">Funeraria Ntra. Sra. De La Granada</a> estaremos encantados de poder ayudarle en lo que precise, <b>llámenos</b>.</p>
            </div>
        </div>
        <div class="row cuerpoMedio">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 cuerpoMedioIzquierda">
                <img src="/img/iconPhoneBig.png" alt="">
                <h3>Teléfonos</h3>
                <img src="/img/iconPhone.png" alt="" class="c-black"><a href="tel:955770214">955 770 214</a><br>
                <img src="/img/iconWhatsapp.png" alt="" class="c-black"><a href="tel:607377047">607 377 047</a><br>
                <img src="/img/iconWhatsapp.png" alt="" class="c-black" class="c-black"><a href="tel:658993898">658 993 898</a><br>
                <img src="/img/iconWhatsapp.png" alt="" class="c-black"><a href="tel:634757717">634 757 717</a>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="/img/iconMailBig.png" alt="">
                <h3>E-mail</h3>
                <a href="mailto:funelagranada@gmail.com">funelagranada@gmail.com</a>
            </div>
        </div>
        <div class="row cuerpoBajo">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2>Oficina</h2>
                <p>C/. Manuel Garcia Soriano, 5 Bajo, 41130 La Puebla del Río, (Sevilla)</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.1020045519836!2d-6.063455584327081!3d37.26900817985463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd127329be2e4c51%3A0x789dff8fae11d9dd!2sCalle%20Manuel%20Garc%C3%ADa%20Soriano%2C%205%2C%2041130%20La%20Puebla%20del%20R%C3%ADo%2C%20Sevilla!5e0!3m2!1ses!2ses!4v1596732496201!5m2!1ses!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2>Sala velatorio</h2>
                <p>Pol. ind. Las Pompas C/Juncal Nave 90, 41130 La Puebla del Río, (Sevilla)</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.3412773048763!2d-6.078392084327223!3d37.26333357985585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd127329be2e4c51%3A0x3428240fcb08b9aa!2sFuneraria%20Ntra.%20Sra.%20De%20La%20Granada!5e0!3m2!1ses!2ses!4v1596732425713!5m2!1ses!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="row contacto">
            <form action="/func/contacto.php" method="post">
                <h2>Contacta con nosotros</h2>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="nombre" placeholder="*Nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="apellidos" placeholder="*Apellidos">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="email" placeholder="*Email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="telefono" placeholder="Telfono">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <textarea class="form-control" name="mensaje" placeholder="*Mensaje" rows="3"></textarea>
                    </div>
                </div>
                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Ldza7sZAAAAAEo7aK3Me1CI-PfaSe5vNcKzZh08"></div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>


        <?php
            if(!empty($_COOKIE["error"])){
                switch($_COOKIE["error"]){
                    case 1:
                        echo '
                            <div class="modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Error al enviar el correo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>El correo no ha sido enviado ya que faltaban datos campos obligatorios por rellenar</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(".modal").modal("show");
                            </script>
                        ';
                    break;
                    case 2:
                        echo '
                            <div class="modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Error al enviar el correo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>El correo no ha sido enviado ya que el capcha no estaba resuelto. Debes demostrar que eres humano.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(".modal").modal("show");
                            </script>
                        ';
                    break;
                    case 3:
                        echo '
                            <div class="modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Error al enviar el correo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Se ha producido un error al enviar el correo. Por favor, inténtelo más tarde o pongase en contacto por los otros medios proporcionados</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(".modal").modal("show");
                            </script>
                        ';
                    break;
                }
            }else if(!empty($_COOKIE["exito"])){
                echo '
                    <div class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Correo enviado</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Su correo ha sido enviado. Será atendido lo antes posible.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(".modal").modal("show");
                    </script>
                ';
            }
            //setcookie('error', null, time()-3600, '/');
            //setcookie('exito', null, time()-3600, '/');
        ?>

        <div id="footerLocation"></div>
    </body>
</html>
