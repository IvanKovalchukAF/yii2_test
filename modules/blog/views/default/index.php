<?php

use yii\helpers\Html;
use yii\grid\GridView;
Use yii\data\Pagination;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">
    <div class="posts-index">
        <div class="col-sm-8 text-left">
            <div class="row">
                <?php if(!Yii::$app->user->getIsGuest()) {
                    echo Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']);
                    }
                    foreach ($posts as $post) { ?>

                    <!-- Example row of columns -->
                    <div class="row">
                        <div class="span4">
                            <h1><?= $post->title ?></h1>
                            <h2><?= $post->intro ?></h2>
                            <p> <?= $post->data ?> </p>
                            <p><a class="btn" href="/blog/default/view?id=<?= $post->id ?>">View details &raquo;</a></p>
                            <p>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                <?= \yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
                ]); ?>
            </div>
        </div>
    </div>
</div>


