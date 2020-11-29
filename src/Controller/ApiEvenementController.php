<?php

namespace App\Controller;

use Acme\ContentBundle\Entity\Content;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Evenement;
use App\Entity\Inscription;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiEvenementController extends AbstractController
{
    /**
     * @Route("/api/evenement", name="api_evenement_index", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository, SerializerInterface $serializer)
    {
		$even = $evenementRepository->findAll();

		$json=$serializer->serialize($even,'json');

        $response=new Response($json, 200, ["Content-Type" => "application/json"]);

		return $response;
    }

	/**
    * @Route("/api/evenement", name="api_evenement_store", methods={"POST"})
    */
	public function store(Request $request, SerializerInterface $serializer, EntityManagerInterface $em){
		
		$jsonRecu=$request->getContent();

		try{
			$post = $serializer->deserialize($jsonRecu,Evenement::class,'json');

			$em->persist($post);
			$em->flush();

			return $this->json($post,201,[]);

		}catch(NotEncodableValueException $e){

			return $this->json([
				'status' => 400,
				'message'=> $e->getMessage()
			], 400);
		}
	 }

	 /**
     * @Route("/api/evenement", name="api_evenement_maj", methods={"PUT"})
     */
	 public function maj(Request $request,SerializerInterface $serializer, EntityManagerInterface $em){

		$data_recu=json_decode($request->getContent());

		$em = $this->getDoctrine()->getManager();     
		$query = $em->getRepository(Evenement::class)->createQueryBuilder('')
            ->update(Evenement::class, 'u')

            ->set('u.date_debut', ':date_debut')
            ->set('u.date_fin', ':date_fin')
            ->set('u.nombre_inscrits', ':nombre_inscrits')
            ->setParameter('date_debut', $data_recu->date_debut)
            ->setParameter('date_fin', $data_recu->date_fin)
            ->setParameter('nombre_inscrits', $data_recu->nombre_inscrits)

            ->where('u.id = :id')
            ->setParameter('id', $data_recu->id)
            ->getQuery();

		$result = $query->execute();

		return $this->json($data_recu,201,[]);
	 }

	 /**
     * @Route("/api/evenement", name="api_evenement_supp", methods={"DELETE"})
     */
	 public function supp(Request $request,SerializerInterface $serializer, EntityManagerInterface $em){

		$data_recu=json_decode($request->getContent());

		$entityManager = $this->getDoctrine()->getManager();


		$queryBuilder = $entityManager->createQueryBuilder();
		$queryBuilder->delete(Inscription::class, 'i')
		   ->where('i.id_evenement  = :id')
		   ->setParameter('id', $data_recu->id);
		$query = $queryBuilder->getQuery();
		$query->getDQL();
		$query->execute();

		$queryBuilder = $entityManager->createQueryBuilder();
		$queryBuilder->delete(Evenement::class, 'e')
		   ->where('e.id = :id')
		   ->setParameter('id', $data_recu->id);
		$query = $queryBuilder->getQuery();
		$query->getDQL();
		$query->execute();

		return $this->json($data_recu,201,[]);
	 }
}
