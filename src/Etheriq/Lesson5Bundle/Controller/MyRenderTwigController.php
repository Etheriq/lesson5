<?php
/**
 * Created by PhpStorm.
 * File: MyRenderTwigController.php
 * User: Yuriy Tarnavskiy
 * Date: 10.11.13
 * Time: 20:55
 * To change this template use File | Settings | File Templates.
 */

namespace Etheriq\Lesson5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Etheriq\Lesson5Bundle\Entity\Articles;

class MyRenderTwigController extends Controller
{
    public function showSeveralArticlesAction($count)
    {
        $article = array();
        for ($i = 1; $i <= $count; $i++)
        {
            $article[] = new Articles();
        }

        return $this->render('EtheriqLesson5Bundle:Articles:showSeveralArticles.html.twig', array('countArticles' => $article));

    }

} 