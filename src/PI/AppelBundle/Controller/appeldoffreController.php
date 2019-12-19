<?php

namespace PI\AppelBundle\Controller;

use PI\AppelBundle\Entity\appeldoffre;
use PI\AppelBundle\Entity\demandeoffre;
use PI\AppelBundle\Form\appeldoffreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class appeldoffreController extends Controller
{

    public function AjoutAction(Request $request){
        $user = $this->getUser();
        if($user){
            $appel= new appeldoffre();
            $Form=$this->createForm(appeldoffreType::class,$appel);
            $Form->handleRequest($request);
            if($Form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $appel->setStatut(0);
                $appel->setPatisserie($user);
                $date  = new \DateTime();
                if($appel->getDatemax() > $date){
                    $em->persist($appel);
                    $em->flush();
                    return $this->redirectToRoute('pi_affiche_appeloffre2');
               }else{
                   return $this->render('PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig',array(
                        'f'=>$Form->createView(),
                        'user'=>$user
                    ));
                }
            }

            return $this->render('PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig',array('f'=>$Form->createView(), 'user'=>$user));
        }else{
            return $this->redirectToRoute('fos_user_security_login');
        }

}




    public function AfficheAction()
    {
        $user = $this->getUser();
        if($user){
            $em=$this->getDoctrine()->getManager();
            $appel=$em->getRepository('PIAppelBundle:appeldoffre')->findBy(array('patisserie'=>$user));
            return $this->render('PIAppelBundle:appeldoffre:affichageAO.html.twig',
                array(
                    'a'=>$appel,
                    'user'=>$user
                ));
        }else{
            return $this->redirectToRoute('fos_user_security_login');
        }

    }
    public function AfficheallAction()
    {

        $user = $this->getUser();
            $em=$this->getDoctrine()->getManager();
            $appel=$em->getRepository('PIAppelBundle:appeldoffre')->findAll();
            return $this->render('PIAppelBundle:appeldoffre:affichageall.html.twig',
                array(
                    'a'=>$appel,
                    'user'=>$user
                ));
    }

    public function participerAction($id)
    {

        $user = $this->getUser();
        if($user) {
            $em = $this->getDoctrine()->getManager();
            $appel = $em->getRepository('PIAppelBundle:appeldoffre')->find($id);
            $demandeoffre = new demandeoffre();
            $demandeoffre->setStatut(0);
            $demandeoffre->setUser($user);
            $demandeoffre->setAppel($appel);
            $em->persist($demandeoffre);
            $em->flush();
            return $this->redirectToRoute('mesdemande');
        }else{
        return $this->redirectToRoute('fos_user_security_login');
    }
    }
    public function mesdemandeAction()
    {
        $user = $this->getUser();
        if($user) {
            $em = $this->getDoctrine()->getManager();
            $appel = $em->getRepository('PIAppelBundle:demandeoffre')->findBy(array('user'=>$user));
            return $this->render('PIAppelBundle:appeldoffre:mesdemande.html.twig',
                array(
                    'a'=>$appel,
                    'user'=>$user
                ));

        }else{
            return $this->redirectToRoute('fos_user_security_login');
        }
    }
    public function demandeAction()
    {
        $user = $this->getUser();
        if($user) {
            $em = $this->getDoctrine()->getManager();
            $d = $em->getRepository('PIAppelBundle:appeldoffre')->findBy(array('patisserie'=>$user));
            $appel = $em->getRepository('PIAppelBundle:demandeoffre')->findBy(array('appel'=>$d));
            return $this->render('PIAppelBundle:appeldoffre:demande.html.twig',
                array(
                    'a'=>$appel,
                    'user'=>$user
                ));
        }else{
            return $this->redirectToRoute('fos_user_security_login');
        }
    }
    public function annulerAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $appel = $em->getRepository('PIAppelBundle:demandeoffre')->find($id);
        $appel->setStatut(-1);
        $em->flush();
        return $this->redirectToRoute('demande');
    }

    public function rechercheAction (Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $appel = $em->getRepository("PIAppelBundle:appeldoffre")->findAll();
        if ($request->isMethod('POST')) {
            $patisserie = $request->get("patisserie");
            $appel = $em->getRepository("PIAppelBundle:appeldoffre")->findBy(array("patisserie" => $user));
        }
        return $this->render("PIAppelBundle:appeldoffre:recherche.html.twig",
            array('a'=>$appel,
                'user'=>$user
                ));
    }

    public function confirmerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $appel = $em->getRepository('PIAppelBundle:demandeoffre')->find($id);
        $appel->setStatut(1);
        $id = $appel->getAppel()->getId();
        $d = $em->getRepository('PIAppelBundle:appeldoffre')->find($id);
        $d->setStatut(1);
        $em->flush();
        return $this->redirectToRoute('demande');

    }




    public function UpdateAction(Request $request,$id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $appel = $em->getRepository("PIAppelBundle:appeldoffre")->find($id);
        $Form = $this->createForm(appeldoffreType::class, $appel);
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em->persist($appel);
            $em->flush();
            return $this->redirectToRoute('pi_affiche_appeloffre2');
        }
        return $this->render('PIAppelBundle:appeldoffre:update.html.twig',
            array(
                'form'=>$Form->createView(),
                'user'=>$user
            ));
    }



    public function DeleteAction(Request $request, $id){
        $APPEL=new appeldoffre();
        $em=$this->getDoctrine()->getManager();
        $appel=$em->getRepository("PIAppelBundle:appeldoffre")->find($id);
        $em->remove($appel);
        $em->flush();
        return $this->redirectToRoute('pi_affiche_appeloffre2');
    }
    public function annulerdemAction(Request $request, $id){
        $APPEL=new demandeoffre();
        $em=$this->getDoctrine()->getManager();
        $appel=$em->getRepository("PIAppelBundle:demandeoffre")->find($id);
        $em->remove($appel);
        $em->flush();
        return $this->redirectToRoute('mesdemande');
    }




}
