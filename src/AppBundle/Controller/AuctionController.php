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
                "title" => "super samochód",
                "description" => "opis super samochodu",
                "price" => "1000 zł"
            ],
            [
                "title" => "pralka",
                "description" => "opis pralki",
                "price" => "500 zł"
            ],
            [
                "title" => "rower",
                "description" => "opis roweru",
                "price" => "300 zł"
            ],
            [
                "title" => "ołówek",
                "description" => "lista ołówków",
                "price" => "30 zł"
            ]
        ];

        return $this->render("Auction/index.html.twig", [
            'auctions' => $auctions
            ]);
    }

}