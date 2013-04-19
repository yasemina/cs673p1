<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
if( !isset($_POST['zipCode']) and !isset($_GET['id']) ) {
    ?>

    <div id="form-wrap2" class="span4 offset4" >
        <div class="text-center">
            <h1>Search</h1>


