<?php

class View
{

    public function render ($tpl, $pageDate) {
        include ROOT. $tpl;
    }
}