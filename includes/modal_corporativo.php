<div class="modal fade" id="modalCorporativo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Corporativo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-wrap">
                    <form id="contact-form" action="assets/php/mail.php" method="post">
                        <div class="contact-form">

                            <div class="contact-inner">
                                <input name="con_subject" type="text" placeholder="Subject *">
                            </div>
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="con_name" type="text" placeholder="Name *">
                                </div>
                                <div class="contact-inner">
                                    <input name="con_email" type="email" placeholder="Email *">
                                </div>
                            </div>
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="con_name" type="text" placeholder="Telefone *">
                                </div>
                                <div class="contact-inner">
                                    <input name="con_email" type="email" placeholder="CNPJ *">
                                </div>
                            </div>
                            <div class="submit-btn mt-20">
                                <button class="ht-btn ht-btn-xs btn--gradient" type="submit">
                                    <i class="far fa-paper-plane"></i>
                                    Enviar Mensagem 
                                </button>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>