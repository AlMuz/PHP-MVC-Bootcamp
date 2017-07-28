<?php

namespace Myproject\controllers;

class FishController extends AbstractController
{
    public function fishAction()
    {
        /** @var \Animals $animals */
        $fish = $this->container->get('model.fish');

        $listOfFish = $fish->getFishList();

        $templateVariables = ['fish' => $listOfFish];
        $template = 'fish.view.php';

        return $this->render($template, $templateVariables);
    }
}