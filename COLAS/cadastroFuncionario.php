<!-- SE EU VER ESSA LINHA NA NTL É PQ FUNCIONOU A PARADAA -->
<?php
//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

//colocar o tratamento de permissão sempre abaixo de require_once("inc/config.ui.php");
//$condicaoAcessarOK = (in_array('USUARIO_ACESSAR', $arrayPermissao, true));
// $condicaoGravarOK = (in_array('USUARIO_GRAVAR', $arrayPermissao, true));
// $condicaoExcluirOK = (in_array('USUARIO_EXCLUIR', $arrayPermissao, true));

// if ($condicaoAcessarOK == false) {
//     unset($_SESSION['login']);
//     header("Location:login.php");
// }

$esconderBtnGravar = "";
if ($condicaoGravarOK === false) {
    $esconderBtnGravar = "none";
}

// $esconderBtnExcluir = "";
// if ($condicaoExcluirOK === false) {
//     $esconderBtnExcluir = "none";
// }

/* ---------------- PHP Custom Scripts ---------

  YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
  E.G. $page_title = "Custom Title" */

$page_title = "Usuário";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
//$page_nav["configuracao"]["sub"]["usuarios"]["active"] = true;

include("inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
    <?php
    $breadcrumbs["Configurações"] = "";
    include("inc/ribbon.php");
    ?>

    <!-- MAIN CONTENT -->
    <div id="content">
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable centerBox">
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-sortable="false">
                        <header>
                            <span class="widget-icon"><i class="fa fa-cog"></i></span>
                            <h2>Funcionário</h2>
                        </header>
                        <div>
                            <div class="widget-body no-padding">
                                <form class="smart-form client-form" id="formUsuario" method="post">
                                    <div class="panel-group smart-accordion-default" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCadastro" class="" id="accordionCadastro">
                                                        <i class="fa fa-lg fa-angle-down pull-right"></i>
                                                        <i class="fa fa-lg fa-angle-up pull-right"></i>
                                                        Cadastro
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseCadastro" class="panel-collapse collapse in">
                                                <div class="panel-body no-padding">
                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-1">
                                                                <label class="label">Código</label>
                                                                <label class="input">
                                                                    <input id="codigo" name="codigo" type="text" class="readonly" readonly>
                                                                </label>
                                                            </section>
                                                            <section class="col col-2">
                                                                <label class="label">&nbsp;</label>
                                                                <label id="labelAtivo" class="checkbox ">
                                                                    <input checked="checked" id="ativo" name="ativo" type="checkbox" value="true"><i></i>
                                                                    Ativo
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-2">
                                                                <label class="label">Nome do funcionário:</label>
                                                                <label class="input">
                                                                    <input id="nome" maxlength="255" name="nome" class="required" value="">
                                                                </label>
                                                            </section>
                                                            <section class="col col-2">
                                                                <label class="label">CPF:</label>
                                                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                                                    <input id="cpf"  name="cpf" class="required cpf-mask" type="text" value="" placeholder="XXX.XXX.XXX-XX">
                                                                </label>
                                                            </section>
                                                            <section class="col col-2">
                                                                <label class="label">RG:</label>
                                                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                                                    <input id="rg" name="rg" class="required rg-mask" type="text" value="" placeholder="XX.XXX.XXX-X">
                                                                </label>
                                                            </section>
                                                            <section class="col col-2">
                                                                <label class="label">Data de Nascimento:</label>
                                                                <label class="input">
                                                                    <input id="dataNascimento" name="dataNascimento" type="text" class="datepicker required" data-dateformat="dd/mm/yy" value="" placeholder="XX/XX/XXXX">
                                                                </label>
                                                            </section>
                                                            
                                                            <section class="col col-1">
                                                                <label class="label">Idade:</label>
                                                                <label class="input">
                                                                    <input id="idade" name="idade" type="text" class="readonly">
                                                                </label>
                                                            </section>
                                                            <section class="col col-2">
                                                                <label class="label" for="Sexo">Estado Civil</label>
                                                                <label class="select">
                                                                    <select id="estadoCivil" name="ativo">
                                                                        <option value="1" selected>Solteiro</option>
                                                                        <option value="2">Casado</option>
                                                                        <option value="3">Separado</option>
                                                                        <option value="4">Divorciado</option>
                                                                        <option value="5">Viúvo</option>
                                                                    </select><i></i>
                                                            </section>
                                                            <section class="col col-2">
                                                                <label class="label" for="genero">Sexo:</label>
                                                                <label class="select">
                                                                    <select id="genero" name="genero">
                                                                        <option value="1">Homem</option>
                                                                        <option value="2">Mulher</option>
                                                                    </select><i></i>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable" tabindex="-1" role="dialog" aria-describedby="dlgSimpleExcluir" aria-labelledby="ui-id-1" style="height: auto; width: 600px; top: 220px; left: 262px; display: none;">
                                            <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                                                <span id="ui-id-2" class="ui-dialog-title">
                                                </span>
                                            </div>
                                            <div id="dlgSimpleExcluir" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 0px; max-height: none; height: auto;">
                                                <p>CONFIRMA A EXCLUSÃO ? </p>
                                            </div>
                                            <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
                                                <div class="ui-dialog-buttonset">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="btnGravar" class="btn btn-success" aria-hidden="true" title="Gravar" style="display:<?php echo $esconderBtnGravar ?>">
                                            <span class="fa fa-floppy-o"></span>
                                        </button>
                                        <button type="button" id="btnNovo" class="btn btn-primary" aria-hidden="true" title="Novo" style="display:<?php echo $esconderBtnGravar ?>">
                                            <span class="fa fa-file-o"></span>
                                        </button>
                                        <button type="button" id="btnExcluir" class="btn btn-danger" aria-hidden="true" title="Excluir">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                        <button type="button" id="btnVoltar" class="btn btn-default" aria-hidden="true" title="Voltar">
                                            <span class="fa fa-backward "></span>
                                        </button>

                                    </footer>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php
//include required scripts
include("inc/scripts.php");
?>

<script src="<?php echo ASSETS_URL; ?>/js/businessCadastroFuncionario.js" type="text/javascript"></script>

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->
<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.tooltip.min.js"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Full Calendar -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/moment/moment.min.js"></script>
<!--<script src="/js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/fullcalendar/fullcalendar.js"></script>
<!--<script src="<?php echo ASSETS_URL; ?>/js/plugin/fullcalendar/locale-all.js"></script>-->


<!-- Form to json -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/form-to-json/form2js.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/form-to-json/jquery.toObject.js"></script>


<script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        //EVENTO CONSTANTE
        // $("#cpf").mask('999.999.999-99', {
        //     reverse: true
        // });
        $("#cpf").mask('999.999.999-99');
        $("#rg").mask('99.999.999-9');
        $("#dataNascimento").mask('99/99/9999');
        $("#dataNascimento").on("change", function() {
            let data = $("#dataNascimento").val()
            if (validaData(data) == false) {
                smartAlert("Atenção", "Data inválida ", "error");
                $("#idade").val("");
                document.getElementById('dataNascimento').value = '';
                $("#dataNascimento").focus();
                // disableButton();
            }
        });




        $("#cpf").on("change", function() {
            let data = $("#cpf").val()
            VerificaCPF()
            ValidaCPF()
            
        });
        
        $("#rg").on("change", function() {
            VerificaRG()
        });

        

        carregaPagina();

        $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
            _title: function(title) {
                if (!this.options.title) {
                    title.html("&#160;");
                } else {
                    title.html(this.options.title);
                }
            }
        }));


        $('#dlgSimpleExcluir').dialog({
            autoOpen: false,
            width: 400,
            resizable: false,
            modal: true,
            title: "<div class='widget-header'><h4><i class='fa fa-warning'></i> Atenção</h4></div>",
            buttons: [{
                html: "Excluir registro",
                "class": "btn btn-success",
                click: function() {
                    $(this).dialog("close");
                    excluir();
                }
            }, {
                html: "<i class='fa fa-times'></i>&nbsp; Cancelar",
                "class": "btn btn-default",
                click: function() {
                    $(this).dialog("close");
                }
            }]
        });

        $("#btnExcluir").on("click", function() {
            var id = +$("#codigo").val();

            if (id === 0) {
                smartAlert("Atenção", "Selecione um registro para excluir !", "error");
                $("#nome").focus();
                return;
            }

            if (id !== 0) {
                $('#dlgSimpleExcluir').dialog('open');
            }
        });

        // $("#btnNovo").on("click", function() {
        //     novo();
        // });
        $("#btnGravar").on("click", function() {
            gravar();

        });

        $("#btnVoltar").on("click", function() {
            voltar();
        });
    });



    function VerificaCPF() {
        var cpf = $("#cpf").val();
        cpfverificado(cpf);
        return;
    }

    function ValidaCPF() {
        var cpf = $("#cpf").val();
        cpfvalidado(cpf);
        return;
    }

    function VerificaRG() {
        var rg = $("#rg").val();
        RGverificado(rg);
        return;
    }


    function carregaPagina() {
        var urlx = window.document.URL.toString();
        var params = urlx.split("?");
        if (params.length === 2) {
            var id = params[1];
            var idx = id.split("=");
            var idd = idx[1];
            if (idd !== "") {
                recuperaUsuario(idd,
                    function(data) {
                        if (data.indexOf('failed') > -1) {
                            return;
                        } else {
                            data = data.replace(/failed/g, '');
                            var piece = data.split("#");
                            var mensagem = piece[0];
                            var out = piece[1];
                            var strArrayTelefone = piece[2];
                            var strArrayEmail = piece[3];
                            var strArrayDependente = piece[4];
                            piece = out.split("^");

                            // Atributos de vale transporte unitário que serão recuperados: 
                            var id = piece[0];
                            var ativo = piece[1];
                            var nome = piece[2];
                            var cpf = piece[3];
                            var rg = piece[4];
                            var dataNascimento = piece[5];
                            var estadoCivil = piece[6];
                            var genero = piece[7];

                            // var dataNascimento = piece[5];



                            //Associa as varíaveis recuperadas pelo javascript com seus respectivos campos html.
                            $("#codigo").val(id);
                            $("#ativo").val(ativo);
                            $("#nome").val(nome);
                            $("#cpf").val(cpf);
                            $("#rg").val(rg);
                            $("#dataNascimento").val(dataNascimento);
                            ///////////////////////////////////////////////////////////////////////////////
                            var dataagora = new Date()
                            var anoAtual = dataagora.getFullYear();
                            var dataNascimento = $("#dataNascimento").val();
                            var dataNascimento = dataNascimento.split("/")[2];
                            var idade = (anoAtual - dataNascimento);
                            $("#idade").val(idade);
                            $("#estadoCivil").val(estadoCivil);
                            $("#genero").val(genero);
                            return;
                        }


                    }
                );

            }
        }
        $("#nome").focus();

    }


    $("#nome").focus();



    function novo() {
        $(location).attr('href', 'cadastroFuncionario.php');
    }

    function excluir() {
        var id = +$("#codigo").val();

        if (id === 0) {
            smartAlert("Atenção", "Selecione um registro para excluir!", "error");
            return;
        }

        excluirUsuario(id);
    }

    function voltar() {
        $(location).attr('href', 'funcionarioFiltro.php');
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function VerificaCPF() {
        var cpf = $("#cpf").val();  
        cpfverificado(cpf);        
        return;
    }



    function gravar() {
        var id = +($("#codigo").val());
        var ativo = 0;
        if ($("#ativo").is(':checked')) {
            ativo = 1;
        }
        var nome = $("#nome").val();
        var cpf = $("#cpf").val();
        var dataNascimento = $("#dataNascimento").val();
        var rg = $("#rg").val();
        var estadoCivil = $("#estadoCivil").val();
        var genero = $("#genero").val();

        if (cpf === "") {
            smartAlert("Atenção", "Informe o cpf !", "error");
            $("#cpf").focus();
            return;
        }
        // || (nome=="") || (dataNascimento=="")
        if (nome == "") {
            smartAlert("Atenção", "Informe o nome!", "error");
            $("#nome").focus();
            return;
        }
        if (dataNascimento == "") {
            smartAlert("Atenção", "Informe a data de nascimento!", "error");
            $("#dataNascimento").focus();
            return;
        }
        if (rg == "") {
            smartAlert("Atenção", "Informe o seu RG!", "error");
            $("#rg").focus();
            return;
        }
        // if (estadoCivil == "") {
        //     smartAlert("Atenção", "Informe o seu Estado Civil!", "error");
        //     $("#estadoCivil").focus();
        //     return;
        // }



        gravaFuncionario(id, ativo, cpf, nome, dataNascimento, rg, estadoCivil, genero);
    }


    /////////////////////////////////

    function validaData(data) {
        var data = document.getElementById("dataNascimento").value; // pega o valor do input
        data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
        var data_array = data.split("-"); // quebra a data em array

        // para o IE onde será inserido no formato dd/MM/yyyy
        if (data_array[0].length != 4) {
            data = data_array[2] + "-" + data_array[1] + "-" + data_array[0];
        }

        // compara as datas e calcula a idade
        var hoje = new Date();
        var nasc = new Date(data);
        var idade = hoje.getFullYear() - nasc.getFullYear();
        var m = hoje.getMonth() - nasc.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;

        if (idade < 14) {
            // alert("Pessoas menores de 14 não podem se cadastrar.");
            $("#idade").val(idade)
            $("#btnGravar").prop('disabled', false);
            return false;

        }

        if (idade >= 18 && idade <= 95) {
            // alert("Maior de 18, pode se cadastrar.");
            $("#idade").val(idade)
            $("#btnGravar").prop('disabled', false);
            return;
        }
        if (hoje)
            // se for maior que 60 não vai acontecer nada!
            return false;

    }
</script>
