<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Form\SerieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SerieController extends AbstractController
{
    /**
     * @Route("/serie", name="serie_List")
     */
    public function List()
    {
        $serieRepository = $this->getDoctrine()->getRepository(Serie::class);
        $series = $serieRepository->findTheOne();


        return $this->render('serie/List.html.twig', [
            "series" => $series
        ]);

    }

    /**
     * @Route("/serie/{id}", name="serie_detail" , requirements={"id":"\d+"})
     */
    public function Detail($id)
    {
        $report = $this->getDoctrine()->getRepository(Serie::class);
        $serie = $report->find($id);
        dump($id);
        return $this->render('serie/detail.html.twig', ["serie" => $serie]);
    }

    /**
     * @Route("/serie/add", name="serie__add")
     * @param EntityManagerInterface $em
     * @param Request $request
     * @return Response
     */
    public function add(EntityManagerInterface $em, Request $request)
    {
        $serie = new Serie();
        $serieForm = $this->createForm(SerieType::class, $serie);
        $serie->setDateCreated(new \dateTime());
        $serieForm->handleRequest($request);
        if ($serieForm->isSubmitted()&& $serieForm->isValid()){
            $em->persist($serie);
            $em->flush();
            $this->addFlash('success','serie bien enregistré');
            return $this->redirectToRoute('serie_detail',['id'=>$serie->getId()]);
        }

        return $this->render('serie/add.html.twig', [
            "serieForm" => $serieForm->createView()
        ]);
    }
}
