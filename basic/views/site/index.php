<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Instituto de Computação';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 onmouseover="handleMouseOver(this)" onmouseout="handleMouseOut(this)">
            <?= Html::img('@web/images/logo.jpg')?>
            <?= Html::jsFile('@web/js/main.js') ?>
            Instituto de Computação
        </h1>

        <p class="lead">Instituto acadêmico da Universidade Federal do Amazonas que atua no ensino, pesquisa e extensão.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.facebook.com/ICompUFAM">IComp no Facebook</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Ensino de Graduação</h2>

                <p>O IComp atua principalmente nos cursos de Ciência da Computação, Sistemas de Informação e Engenharia da Computação. 
                    Também oferece disciplinas básicas de computação para 27 cursos de graduação em 7 unidades acadêmicas distintas.</p>

                <p><a class="btn btn-default" href="http://icomp.ufam.edu.br/">Leia Mais &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Ciência da Computação</h2>

                <p>O curso de Bacharelado em Ciência da Computação é resultado de um processo de consolidação do ensino e pesquisa em 
                    Ciência da Computação no norte do país, estando em consonância com as diretrizes estabelecidas pelo Ministério da Educação - MEC, 
                    também atendendo à Nova lei de Diretrizes e Bases da Educação Brasileira.</p>

                <p><a class="btn btn-default" href="http://icomp.ufam.edu.br/index.php/graduacao/graduacao-cursos/graduacao-cc">Leia Mais &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Sistemas de Informação</h2>

                <p>O Curso de Bacharelado em Sistemas de Informação visa desenvolver um profissional comprometido com a 
                    aplicação das soluções nas organizações administrativas no que concerne aos problemas culturais, 
                    éticos e técnico-científicos, situados no estado da arte da ciência e tecnologia em computação</p>

                <p><a class="btn btn-default" href="http://icomp.ufam.edu.br/index.php/graduacao/graduacao-cursos/graduacao-si">Leia Mais &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
