<?php
/**
 * Created by PhpStorm.
 * File: PagesController.php
 * User: Yuriy Tarnavskiy
 * Date: 09.11.13
 * Time: 21:12
 * To change this template use File | Settings | File Templates.
 */

namespace Etheriq\Lesson5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function showSliderAction()
    {
        return $this->render('EtheriqLesson5Bundle:Pages:slider.html.twig');
    }

} 