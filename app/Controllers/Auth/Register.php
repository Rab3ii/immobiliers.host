<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Register extends BaseController
{

    /**
     * Affiche le formulaire de connexion.
     */
    public function index()
    {
        // Données envoyées à la vue
        $data = [
            'title'       => 'Register - Mon Site',
            'description' => 'Veuillez entrer vos identifiants pour vous connecter.',
        ];

        // Charger la vue et transmettre les données
        return view('auth/register', $data);
    }


   
    
   
}