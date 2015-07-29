<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\MenuLink */

$this->title = 'Create Menu Link';
$this->params['breadcrumbs'][] = ['label' => 'Menu Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-link-create">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', compact('model')) ?>
</div>