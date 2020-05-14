<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ac0c01cedc.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
      <div class="modal fade" data-backdrop="static" id="calculadoraModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="text-align: center"class="modal-title" id="exampleModalLabel">SIMULADOR SOLAR</h4>
              <h6 style="font-style: italic; font-family: Creo-Light; font-weight: bolder; text-align: center; color: grey"> Quer saber o quanto você pode economizar produzindo sua própria energia? </h6>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-xl-6 col-md-5">
                    <select style="width:100px;" data-size="25" id="estado" class="wide">
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
                    <input type="text" name="valor" class="form-control" aria-label="Quanto você paga de energia por mês(R$)?" placeholder="Quanto você paga de energia por mês(R$)?" required>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-simular" id="modal2">
                SIMULAR
              </button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" id="destravabotao2">
                FECHAR
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal modaltabela fade" data-backdrop="static" id="tabelaModal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">CONFIRA O RESULTADO</h5>
            </div>
            <div class="modal-body">
              <table class="table table-bordered table-striped">
                <tbody>
                  <tr>
                    <th class="col-md-1">
                      <b>Consumo estimado/mês</b> 
                    </th>
                    <th class="cold-md-1 tarifa-estimada"></th>
                  </tr>
                  <tr>
                    <th class="col-md-1">
                      <b>Consumo estimado/dia</b> 
                    </th>
                    <th class="cold-md-1 consumo-dia"></th>
                  </tr>
                  <tr>
                    <th class="col-md-1">
                      <b>Geração diária nec.</b> 
                    </th>
                    <th class="cold-md-1 geracao-necessaria"></th>
                  </tr>
                  <tr>
                    <th class="col-md-1">
                      <b>Qntd. de painéis</b> 
                    </th>
                    <th class="cold-md-1 qntd-placas"></th>
                  </tr>
                  <tr>
                    <th class="col-md-1">
                      <b>Investimento estimado</b> 
                    </th>
                    <th class="cold-md-1 geracao_total_diaria"></th>
                  </tr>
                  <tr>
                    <th class="col-md-1">
                      <b style="font-family: Creo !important">RETORNO ESTIMADO EM 5 ANOS</b> 
                    </th>
                    <th class="cold-md-1 retorno" style="font-family: Creo !important"></th>
                  </tr>                          
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-simular" id="modal1">
                SIMULAR NOVAMENTE
              </button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" id="destravabotao">
                FECHAR
              </button>
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
                  <a href="<?php echo esc_url(home_url()); ?>">
                    <img class="img-fluid" src="<?php echo esc_url(get_option("header_logo")); ?>" alt="" width="183px" height="90px">
                  </a>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9">
                <div class="menu_wrap d-none d-lg-block">
                  <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                    <div class="main-menu">
                      <nav>
                        <?php
                          $args = get_menu_args('header_menu');
                          wp_nav_menu($args);
                        ?>
                      </nav>
                    </div>
                    <div class="book_room">
                      <div class="book_btn">
                        <a data-toggle="modal" data-target="#calculadoraModal" data-whatever="@getbootstrap" id="travabotao">
                          SIMULAR ORÇAMENTO
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-header">
          <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
              <div class="col-6">
                <div class="logo">
                  <a href="<?php echo esc_url(home_url()); ?>" title="Logo <?php echo bloginfo('name'); ?>">
                    <img src="<?php echo get_option('header_logo'); ?>" class="img-fluid" alt="Logo <?php echo bloginfo('name'); ?>">
                  </a>
                </div>
              </div>
              <div class="col-6">
                <div class="sidemenu-cta">
                  <a href="#!" class="open" title="Menu">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-sidemenu">
          <div class="header">
            <div class="logo">
              <a href="<?php echo esc_url(home_url()); ?>" title="Logo <?php echo bloginfo('name'); ?>">
                <img src="<?php echo get_option('header_logo'); ?>" class="img-fluid" alt="Logo <?php echo bloginfo('name'); ?>">
              </a>
            </div>
            <div class="sidemenu-cta">
              <a href="#!" class="close-menu" title="Fechar">
                <i class="fas fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <nav>
            <?php
              $args = get_menu_args('header_menu');
              wp_nav_menu($args);
            ?>
          </nav>
        </div>
      </div>
    </header>
    <!-- header-fim -->

		<?php
			wp_reset_postdata();