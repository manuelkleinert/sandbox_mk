<?php
/**
 * w-vision
 *
 * LICENSE
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that is distributed with this source code.
 *
 * @copyright  Copyright (c) 2017 Woche-Pass AG (https://www.w-vision.ch)
 */

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends FrontendController
{
    /**
     * @return string The template to be rendered
     */
    public function defaultAction()
    {
        return $this->renderTemplate('Default/default.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function imprintAction()
    {
        return $this->renderTemplate('Default/imprint.html.twig');
    }
}
