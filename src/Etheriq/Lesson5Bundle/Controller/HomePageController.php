<?php
/**
 * Created by PhpStorm.
 * File: HomePageController.php
 * User: Yuriy Tarnavskiy
 * Date: 09.11.13
 * Time: 15:54
 * To change this template use File | Settings | File Templates.
 */

namespace Etheriq\Lesson5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{
    public function indexAction()
    {
        return $this->render('EtheriqLesson5Bundle:HomePage:home.html.twig');
    }

} 