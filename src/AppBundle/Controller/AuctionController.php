<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuctionController extends Controller 
{
    /**
     * @Route("/", name="auction_index")
     * 
     * @return Response
     */
    public function indexAction() {

        $auctions = [
            [
                "id" => 1,
                "title" => "super samochód",
                "description" => "opis super samochodu",
                "price" => "1000 zł"
            ],
            [
                "id" => 2,
                "title" => "pralka",
                "description" => "opis pralki",
                "price" => "500 zł"
            ],
            [
                "id" => 3,
                "title" => "rower",
                "description" => "opis roweru",
                "price" => "300 zł"
            ],
            [
                "id" => 4,
                "title" => "ołówek",
                "description" => "lista ołówków",
                "price" => "30 zł"
            ]
        ];

        return $this->render("Auction/index.html.twig", [
            'auctions' => $auctions
        ]);
    }

    /**
     * @Route("/{id}", name="auction_details")
     * param $id
     * @return Response
    */

    public function detailsAction($id) {

        return $this->render("Auction/details.html.twig");
    }

}