<?php

/**
 * Podium Module
 * Yii 2 Forum Module
 * @author Paweł Bizley Brzozowski <pawel@positive.codes>
 * @since 0.1
 */

use bizley\podium\helpers\Helper;
use bizley\podium\models\Activity;

$lastActive = Activity::lastActive();

?>
<div class="panel panel-default">
    <!--removed footer here-->
    <div class="panel-footer small">
        <ul class="list-inline">
            <li><?= Yii::t('podium/view', 'Members') ?> <span class="badge"><?= Activity::totalMembers() ?></span></li>
            <li><?= Yii::t('podium/view', 'Threads') ?> <span class="badge"><?= Activity::totalThreads() ?></span></li>
            <li><?= Yii::t('podium/view', 'Posts') ?> <span class="badge"><?= Activity::totalPosts() ?></span></li>
        </ul>
    </div>
</div>
