<?php require_once 'header.php'; ?>
<?php require_once 'mail.php'; ?>

<!-- MAIN CONTENT -->
<div class="pg-opt">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Servi&ccedil;os</h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Or&ccedil;amentos</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="slice white">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wr">
                        <h3 class="section-title left"><span>Or&ccedil;amentos</span></h3>
                    </div><br />
                    <p>Preencha o formul&aacute;rio abaixo e fa&ccedil;a um or&ccedil;amento online, ou agende uma visita de avalia&ccedil;&atilde;o t&eacute;cnica sem compromisso.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="slice light-gray bb">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form action="orcamentos.php#formulario" method="post" enctype="multipart/form-data" class="form-light mt-20" role="form" data-toggle="validator">
                        <h4 class="title title-md c-light-gray">Segmento</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Escolha seu segmento</label>
                                    <select class="form-control" name="segmento" id="segmento" required>
                                        <option value="" selected="selected" disabled="disabled"> -- Escolha seu Segmento --</option>
                                        <option value="Residenciais">Residenciais</option>
                                        <option value="Comércio">Comércio</option>
                                        <option value="Condomínios e Hotéis">Condomínios e Hotéis</option>
                                        <option value="Indústrias">Indústrias</option>
                                        <option value="Restaurantes e Lanchonetes">Restaurantes e Lanchonetes</option>
                                        <option value="Orgãos Publicos">Órgãos Públicos</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <h4 class="title title-md c-light-gray">Seus Dados</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Nome Completo</label>
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>CPF / CNPJ</label>
                                    <input type="text" name="cpfcnpj" id="cpfcnpj" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Endere&ccedil;o</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" name="estado" id="estado" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="Telefone" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" name="celular" id="celular" class="form-control" placeholder="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <h4 class="title title-md c-light-gray">Dados do Servi&ccedil;o </h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Selecione o Servi&ccedil;o</label>
                                    <select class="form-control" name="servico" id="servico" required>
                                        <option value="" selected="selected" disabled="disabled">-- Dados Serviço --</option>
                                        <option value="Controle de Pragas">Controle de Pragas</option>
                                        <option value="Controle de Traças">Controle de Traças</option>
                                        <option value="Descupinização">Descupinização</option>
                                        <option value="Desinsetização">Desinsetização</option>
                                        <option value="Desratização">Desratização</option>
                                        <option value="Desentupimento">Desentupimento</option>
                                        <option value="Armadilhas">Armadilhas</option>
                                        <option value="Controle de Carrapatos">Controle de Carrapatos</option>
                                        <option value="Controle de Pombos">Controle de Pombos</option>
                                        <option value="Aplicação de Gel">Aplicação de Gel</option>
                                        <option value="Desodorizador de Ambientes">Desodorizador de Ambientes</option>
                                        <option value="Limpeza de Reservatórios de Água">Limpeza de Reservatórios de Água</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Descri&ccedil;&atilde;o do Problema</label>
                            <textarea class="form-control" name="descricao" id="descricao" placeholder="" style="height:100px;" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <h4 class="title title-md c-light-gray">Como Conheceu a Matabem?</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Selecione a Op&ccedil;&atilde;o</label>
                                    <select class="form-control" name="conheceu" id="conheceu" required >
                                        <option value="" selected="selected" disabled="disabled">-- Como Conheceu --</option>
                                        <option value="Anúncios">Anúncios</option>
                                        <option value="Site na Internet">Site na Internet</option>
                                        <option value="Indicação">Indicação</option>
                                        <option value="Lista Telefônica">Lista Telefônica</option>
                                        <option value="Nossos Veículos">Nossos Veículos</option>
                                        <option value="Já Sou Cliente">Já Sou Cliente</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" name="btnSendOrcamento" class="btn btn-base">Enviar</button>
                                <!--<div class="col-md-12">-->
                                <a name="formulario">
                                    <div class="mensagem-alerta"><?php echo $msg ?></div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
