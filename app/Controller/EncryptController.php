<?php

namespace Controller;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class EncryptController implements ControllerInterface
{

    /**
     * @inheritDoc
     */
    public function execute(Request $request): string|null
    {
        // TODO: Implement execute() method.
        return TwigCore::getEnvironment()->render('home/encrypt.html.twig',
            [
                'titre'   => 'Encrypted page !',
                'requete' => $request
            ]
        );
    }
}