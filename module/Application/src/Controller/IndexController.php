<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Miesiace;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function miesiaceAction()
    {
        $miesiac = new Miesiace();

        return new ViewModel([
            'miesiace' => $miesiac->pobierzWszystkie(),
        ]);
    }
}
