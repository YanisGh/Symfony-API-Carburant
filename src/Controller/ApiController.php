<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ODM\MongoDB\DocumentManager;

use App\Document\Station;

use App\Entity\Salutation;

class ApiController extends AbstractController
{

    private $documentManager;

    public function __construct(DocumentManager $documentManager){
        $this->documentManager = $documentManager;
    }
    #[Route('/api', name: 'app_api')]
    public function index(): Response
    {
        $id='6537d527c5827b7336ccd066';
        $station = $this->documentManager->getRepository(Station::class)->find($id);
        //$station = $this->documentManager->getRepository(Station::class)->findAll($id);
        return $this->json($station);
    }
    #[Route('/hello', name: 'hello', methods:['GET'])]
    public function sayHello(Request $request): Response
    {
        $name = $request->get('name')??'Symfony';
        $data = Salutation::of('Hello '.$name);
        return $this->json($data);
    }
}
