<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Forgot_Password extends BaseController
{

    /**
     * Affiche le formulaire de connexion.
     */
    public function index()
    {
        // Données envoyées à la vue
        $data = [
            'title'       => 'Connexion - Mon Site',
            'description' => 'Veuillez entrer vos identifiants pour vous connecter.',
        ];

        // Charger la vue et transmettre les données
        return view('auth/forgot_password', $data);
    }


    public function reset()  {

             // Données envoyées à la vue
             $data = [
                'title'       => 'Connexion - Mon Site',
                'description' => 'Veuillez entrer vos identifiants pour vous connecter.',
            ];
    
            // Charger la vue et transmettre les données
            return view('auth/reset', $data);
        
    }



}