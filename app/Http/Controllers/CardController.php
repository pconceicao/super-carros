<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    
    private $cards;
    private $max_value;

    public function __construct()
    {
        $this->cards = [];
        $this->max_value = 32;
    }

    public function getCard()
    {

        $this->cards = range(1, $this->max_value);

        $date = $this->cards;

        return response($date,200);

    }

    public function __toString()
    {
        return "Dados do jogo Super Carros";
    }
}
