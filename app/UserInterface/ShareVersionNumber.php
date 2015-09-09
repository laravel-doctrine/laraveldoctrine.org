<?php

namespace LaravelDoctrine\UserInterface;

class ShareVersionNumber
{
    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->version = $view->version ?: 'master';
    }
}
