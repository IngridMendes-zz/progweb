<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Sistema de gerenciamento de alunos dos cursos de Ciência da Computação, Engenharia da Computação e Sistemas de Informação da Universidade Federal do Amazonas (UFAM).
    </p>

    <p>
    	Hoje é
    	<?= $data?>
    </p>

</div>
