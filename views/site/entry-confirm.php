<?php 
use yii\helpers\Html;
?>

<p>Você informou os seguintes dados:</p>

<ul>
	<li><label>Nome</label>: <?= Html::encode($model->name) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>