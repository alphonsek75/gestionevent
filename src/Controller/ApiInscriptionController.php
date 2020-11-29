<?php

namespace App\Controller;

use Acme\ContentBundle\Entity\Content;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Evenement;
use App\Entity\Inscription;
use App\Repository\EvenementRepository;
use App\Repository\InscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiInscriptionController extends AbstractController
{
    /**
     * @Route("/api/inscription", name="api_inscription_store", methods={"POST"})
     */
    public function store(EvenementRepository $evenementRepository,InscriptionRepository $inscriptionRepository,Request $request, SerializerInterface $serializer, EntityManagerInterface $em){
		$data_recu=json_decode($request->getContent());
		
		$em = $this->getDoctrine()->getManager();

        $repoInscri = $em->getRepository(Inscription::class);
        $totalInscri = $repoInscri->createQueryBuilder('i')
            ->where('i.id_evenement = '.$data_recu->id_evenement)
            ->select('count(i.id)')
            ->getQuery()
            ->getSingleScalarResult();

		$evenRepo = $this->getDoctrine()->getRepository(Evenement::class);
		$results = $evenRepo->createQueryBuilder("e")
			->where('e.id='.$data_recu->id_evenement)
			->getQuery()
			->getResult();

		if($totalInscri >= $results[0]->nombre_inscrits){
			return new Response('Nombre de places depassé', 200);
		}else{
			
			$jsonRecu=$request->getContent();
			try{
				$post = $serializer->deserialize($jsonRecu,Inscription::class,'json');

				$em->persist($post);
				$em->flush();

				return $this->json($data_recu,201,[]);

			}catch(NotEncodableValueException $e){

				return $this->json([
					'status' => 400,
					'message'=> $e->getMessage()
				], 400);
			}
		}
	 }
}
