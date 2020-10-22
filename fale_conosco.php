<?php include("includes/head.php"); ?>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


    <?php include("includes/header.php"); ?>

    <div class="site-wrapper-reveal">
        <div class="contact-us-area appointment-contact-bg section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-title section-space--mb_50">
                            <h3 class="mb-20">Entre em contato conosco. </h3>
                            <p class="sub-title"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form-wrap">
                            <form id="enviarMensagem">
                                <div class="contact-form__two">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="con_name" id="name" type="text" placeholder="Nome *" required>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_email" id="email" type="email" placeholder="E-mail *" required>
                                        </div>
                                    </div>
                                    <div class="contact-select">
                                        <div class="form-item contact-inner">
                                            <span class="inquiry">
                                                <select name="inquiry" id="inquiry" class="select-item">
                                                    <option value="Your inquiry about" disabled selected>Sobre o que e sua mensagem ?</option>
                                                    <option value="General Information Request">Sugestão</option>
                                                    <option value="Partner Relations">Reclamação</option>
                                                    <option value="Careers">Dúvida</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="con_message" placeholder="Suas dúvidas, reclamações ou sugestões.." id="message"></textarea>
                                    </div>
                                    <div class="comment-submit-btn">
                                        <button class="ht-btn ht-btn-md" type="submit">
                                            <i class="fas fa-send"></i>
                                            Enviar minha mensagem
                                        </button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <div class="contact-info-three text-left">
                            <h6 class="heading font-weight--reguler">Nos ligue agora!</h6>
                            <h3 class="call-us"><a href="#">(27) 4062 9035</a></h3>
                            <div class="location-button mt-20">
                                <a href="#" class="location-text-button"><span class="button-icon"></span> <span class="button-text">Nos veja no Google Maps</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include("includes/footer.php"); ?>
    <script>
        $("#enviarMensagem").submit(function(event) {
            event.preventDefault();

            const url = "http://localhost:8080/mail/sendemail";
            let data = {
                name: $("#name").val(),
                email: $("#email").val(),
                subject: $("#inquiry").val(),
                message: $("#message").val()
            }
            axios.post(url, data).then(response => {
                const {
                    data
                } = response;

                if (data.status === true) {
                    Swal.fire(
                        'Uhuu! ',
                        'Enviado com sucesso.',
                        'success'
                    )
                } else {
                    Swal.fire('Keep me Calm !', "Houve um erro ao enviar sua mensagem", 'error')
                }
            });
        });
    </script>