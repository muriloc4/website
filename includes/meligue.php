<div class="modal fade" id="modalMeLigue" tabindex="-1" role="dialog" aria-labelledby="modalMeLigueLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMeLigueLabel">A gente liga para você</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-wrap">
                    <form id="mailCorporativo" method="post" action="./call.php">
                        <div class="contact-form">

                            <div class="contact-inner">
                                <input name="con_subject" type="text" id="corporativo_name" placeholder="Nome *">
                            </div>

                            <div class="row">
                                <div class="contact-inner col-sm-3">
                                    <input name="ddd" type="text" id="ddd" maxlength="2" placeholder="DDD *">
                                </div>

                                <div class="contact-inner col-sm-9">
                                    <input name="phone_number" type="text" id="phone" maxlength="10" placeholder="Número *">
                                    <code>Somente números</code>
                                </div>
                            </div>


                            <div class="submit-btn mt-20 ">
                                <button class="ht-btn ht-btn-xs btn--gradient" type="submit">
                                    <i class="far fa-phone-volume"></i>
                                    Me ligue
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

</script>