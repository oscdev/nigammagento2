<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Setup\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Controller of homepage of setup
 *
 * @deprecated Starting from Magento 2.3.6 Web Setup Wizard is deprecated
 */
class Home extends AbstractActionController
{
    /**
     * @return ViewModel|\Zend\Http\Response
     */
    public function indexAction()
    {
        $view = new ViewModel;
        $view->setTerminal(true);
        $view->setTemplate('/magento/setup/home.phtml');
        $view->setVariable('userName', 'UserName');
        return $view;
    }
}
