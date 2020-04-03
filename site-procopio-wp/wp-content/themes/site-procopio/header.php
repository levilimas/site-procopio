<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/icone-procopio.png">



    <?php wp_head(); ?>

    <script src="https://kit.fontawesome.com/ac0c01cedc.js" crossorigin="anonymous"></script>
</head>



<body>


    <!-- header-começo -->
    <header>
        <div class="modal fade" data-backdrop="static" id="calculadoraModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SIMULAÇÃO DE ORÇAMENTO</h5>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                       <div class="row">
                            <div class="col-xl-6 col-md-5">
                                <select style="width:100px;" data-size="25" id="estado" onchange ="buscaCidades(this.value)" class="wide">
                                   <option value="">Selecione o Estado</option>
                                   <option value="AC">Acre</option>
                                   <option value="AM">Amazonas</option>
                                   <option value="AP">Amapá</option>
                                   <option value="BA">Bahia</option>
                                   <option value="CE">Ceará</option>
                                   <option value="DF">Distrito Federal</option>
                                   <option value="ES">Espírito Santo</option>
                                   <option value="GO">Goiás</option>
                                   <option value="MA">Maranhão</option>
                                   <option value="MG">Minas Gerais</option>
                                   <option value="MS">Mato Grosso do Sul</option>
                                   <option value="MT">Mato Grosso</option>
                                   <option value="PA">Pará</option>
                                   <option value="PB">Paraíba</option>
                                   <option value="PE">Pernambuco</option>
                                   <option value="PI">Piauí</option>
                                   <option value="PR">Paraná</option>
                                   <option value="RJ">Rio de Janeiro</option>
                                   <option value="RN">Rio Grande do Norte</option>
                                   <option value="RO">Rondônia</option>
                                   <option value="RR">Roraima</option>
                                   <option value="RS">Rio Grande do Sul</option>
                                   <option value="SC">Santa Catarina</option>
                                   <option value="SE">Sergipe</option>
                                   <option value="SP">São Paulo</option>
                                   <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-md-7">
                                <select id="cidade" class="wide">
                                    <option value="">Selecione a Cidade</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="col-xl-13 col-md-13" >
                            <div class="input-group mb-3" style="width: 100%">
                              <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                              </div>
                              <input type="text" name="valor" class="form-control" aria-label="Quanto você paga de energia por mês(R$)?" placeholder="Quanto você paga de energia por mês(R$)?" onKeyPress="return(moeda(this,'.',',',event))">
                            </div>
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-simular" id="modal2" onclick="toggleSection()">SIMULAR</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="destravabotao2">FECHAR</button>
                    
                  </div>
                </div>
            </div>
        </div>

        <div class="modal modaltabela fade" data-backdrop="static" id="tabelaModal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CONFIRA O RESULTADO</h5>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th class="col-md-1">
                                   <b>Tarifa estimada</b> 
                                </th>
                                <th class="cold-md-1 tarifa-estimada"></th>
                            </tr>

                            <tr>
                                <th class="col-md-1">
                                   <b>Consumo estimado</b> 
                                </th>
                                <th class="cold-md-1 tarifa-estimada"></th>
                            </tr>

                            <tr>
                                <th class="col-md-1">
                                   <b>Qntd. de placas estimada</b> 
                                </th>
                                <th class="cold-md-1 tarifa-estimada"></th>
                            </tr>

                            <tr>
                                <th class="col-md-1">
                                   <b>Potência Inst. estimada</b> 
                                </th>
                                <th class="cold-md-1 tarifa-estimada"></th>
                            </tr>

                            <tr>
                                <th class="col-md-1">
                                   <b>Produção anual de energia</b> 
                                </th>
                                <th class="cold-md-1 tarifa-estimada"></th>
                            </tr>

                            <tr>
                                <th class="col-md-1">
                                   <b>INVESTIMENTO ESTIMADO</b> 
                                </th>
                                <th class="cold-md-1 tarifa-estimada"></th>
                            </tr>                          
                        </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-simular" id="modal1">SIMULAR NOVAMENTE</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="fecharmodals()" id="destravabotao">FECHAR</button>
                    
                  </div>
                </div>
            </div>
        </div>

        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div style="padding-bottom: 10px" class="logo-img">
                                <a href="index.php">
                                    <img class="img-fluid" src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/logo3.png" alt="" width="183px" height="90px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu_wrap d-none d-lg-block">
                                <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a class="active" href="index.php">HOME</a></li>
                                                <li><a href="#">SERVIÇOS</a></li>
                                                <li><a href="#">SOBRE</a></li>
                                                <li><a href="#formulario" class="scrollSuave">CONTATO</a></li>
                                            </ul>
                                        </nav>

                                    </div>
                                    <div class="book_room">
                                        <div class="book_btn">
                                            <a data-toggle="modal" data-target="#calculadoraModal" data-whatever="@getbootstrap" id="travabotao">SIMULAR ORÇAMENTO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-fim -->