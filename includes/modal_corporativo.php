<div class="modal fade" id="modalCorporativo" tabindex="-1" role="dialog" aria-labelledby="modalCorporativoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCorporativoLabel">Comercial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-wrap">
                    <form id="mailCorporativo">
                        <div class="contact-form">

                            <div class="contact-inner">
                                <input name="con_subject" type="text" id="corporativo_name" placeholder="Nome *">
                            </div>
                            <div class="contact-inner">
                                <input name="con_name" type="text" id="corporativo_email" placeholder="Email*">
                            </div>
                            <div class="contact-inner">
                                <input name="con_name" type="text" id="corporativo_telefone" placeholder="Telefone *">
                            </div>
                            <div class="contact-inner">
                                <input name="con_name" type="text" id="corporativo_cnpj" placeholder="CNPJ *">
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

<script> 
    $("#mailCorporativo").submit((event) => {
        event.preventDefault();
        const url = "http://localhost:8080/mail/sendemail";

        let data = {
            "name": $("#corporativo_name").val(),
            "message": `O cliente ${$("#corporativo_name").val()} está solicitando internet. Entrar em contato no telefone ${$("#corporativo_telefone").val()}. Seu e-mail para contato é ${$("#corporativo_email").val()}`,
            "email": $("#corporativo_email").val(),
            "subject": "Cliente Solicitando Internet | Corporativo",
        }

        axios.post(url, data).then(response => {
            console.log(response);
        });


    })
</script>