<?php

namespace App\Controllers;

use App\Models\FilmModel;

class Film extends BaseController
{
    protected $filmModel;
    public function __construct()
    {
        $this->filmModel = new FilmModel();
    }

    public function index()
    {
        $film = $this->filmModel->findAll();

        $data = [
            'title' => 'Film',
            'film' => $film
        ];

        //Cara lama buat konek (Query harusnya ada dimodel)
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM film")->getResultArray();
        // dd($komik);

        return view('pages/film', $data);
    }
    //--------------------------------------------------------------------

}
