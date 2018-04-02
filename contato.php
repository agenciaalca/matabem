<?php require_once 'header.php'; ?>
<?php require_once 'mail.php'; ?>

<!-- MAIN CONTENT -->
<div class="pg-opt">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Contatos</h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contatos</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="slice bg-white">
    <div class="w-section inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title-wr">
                        <h3 class="section-title left"><span>Fale Conosco</span></h3>
                    </div>
                    <p>
                        Preencha o formul&aacute;rio abaixo e nos envie sua mensagem.
                    </p>

                    <form action="contato.php#form" method="post" class="form-light mt-20" role="form" data-toggle="validator" enctype="multipart/form-data>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="" required >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="Telefone" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Assunto</label>
                            <input type="text" name="assunto" id="assunto" class="form-control" placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea class="form-control" name="mensagem" id="message" placeholder="" style="height:100px;" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="reset" class="btn btn-light">Apagar</button>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="btnSendContato" class="btn btn-base btn-icon btn-icon-right btn-fly pull-right">
                                    <span>Enviar</span>
                                </button>
                            </div>
                            <div class="col-md-12">
                                <a name="form"></a>
                                <div class="mensagem-alerta"><?php echo $msg ?></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-title-wr">
                                <h3 class="section-title left"><span>Informa&ccedil;&otilde;es da Empresa</span></h3>
                            </div>
                            <div class="contact-info">
                                <h5><i class="fa fa-map-marker"></i> Endere&ccedil;o</h5>
                                <p>Rua 115, Qd. 36A, Lt. 22A, N. 89-A, Setor Sul</br>Goi&acirc;nia - GO - Brasil, CEP: 74085-240</p>

                                <h5><i class="fa fa-envelope"></i> Email</h5>
                                <p>sac@matabem.com</p>

                                <h5><i class="fa fa-phone"></i> Telefone</h5>
                                <p>+55 62 3997 9600</p>

                                <h5><i class="fa fa-fax"></i> Fax</h5>
                                <p>+55 62 3997 9600</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section-title-wr">
                                <h3 class="section-title left"><span>Hor&aacute;rios</span></h3>
                            </div>
                            <div class="contact-info">
                                <h5><i class="fa fa-check"></i> Segunda - Sexta</h5>
                                <p>08:00 - 18:00</p>

                                <h5><i class="fa fa-check"></i> S&aacute;bado</h5>
                                <p>08:00 - 12:00</p>

                                <h5><i class="fa fa-times"></i> Domingo</h5>
                                <p>Fechado</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;geocode=&amp;q=matabem&amp;aq=&amp;sll=-16.642759,-49.261209&amp;sspn=0.363808,0.676346&amp;t=m&amp;ie=UTF8&amp;hq=matabem&amp;hnear=&amp;ll=-16.687666,-49.245958&amp;spn=0.009948,0.018883&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small></small>

<?php require_once 'footer.php'; ?>
