<?php
/**
 * Created by PhpStorm.
 * User: femiibiwoye
 * Date: 28/10/2017
 * Time: 4:33 AM
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="container">
    <table class="table table-bordered table-striped">

        <tr>
            <th>ID</th>
            <td><?= $user->id ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $user->name ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?= $user->phone ?></td>
        </tr>
    </table>

    <table class="table table-bordered table-striped">
        <?php foreach($user->posts as $post){?>
        <tr>
            <td><?=$post->title?></td>
        </tr>
        <?php } ?>
    </table>


</div>