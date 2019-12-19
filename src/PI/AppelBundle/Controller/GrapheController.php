<?php

namespace PI\AppelBundle\Controller;

use PI\AppelBundle\appeldoffre;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GrapheController extends Controller
{

        public function chartLineAction()
    {
        $user = $this->getUser();
        $em = $this->container->get('doctrine')->getEntityManager();
        $appel = $em->getRepository('PIAppelBundle:appeldoffre')->findBy(array('patisserie' => $user));
        $tab=array();
        $cat=array();
        $user=$em->getRepository('PIAppelBundle:appeldoffre')->findAll();
        foreach ($appel as $a) {
            $n = 0;
            $appel = $em->getRepository('PIAppelBundle:appeldoffre')->findBy(array('patisserie' => $user));
            foreach ($user as $user)
                $n = $n + 1;
            array_push($tab, $n);
            array_push($cat, $user->getPatisserie());

        }

// Chart
        $series = array(
            array("name" => "Graphe", "data" => $tab)
        );
        $user = $this->getUser();
        $ob = new Highchart();
        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe
        $ob->title->text('Nombre des Appel doffre par Semaine');
        $ob->xAxis->title(array('text'=>'Semaine'));
        $ob->yAxis->title(array('text' => "Nb Appel d'offre"));
        $ob->xAxis->user($user);
        $ob->series($series);
        return $this->render('PIAppelBundle:Graphe:LineChart.html.twig',
            array(
                'chart' => $ob
            ));
    }
}




