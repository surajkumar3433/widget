<?php
use app\components\HelloWidget;
?>
<style>
.container {
    display: flex;
    align-items: center;
    justify-content: center;
	    margin-top: 66px;
}

</style>
<div class = "container">
<h4>
<?= HelloWidget::widget(['message' => ' Hello  World']) ?></h4>
</div>
