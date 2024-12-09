<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
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
        return view('auth/login', $data);
    }


    public function logout()  {
        echo "hello world";
        
    }
    
   
}