<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Socialite;

use App\Models\User;

class SocialiteController extends Controller
{

  // Les tableaux des providers autorisés
    protected $providers = [ "google", "github", "facebook" ];

    # La vue pour les liens vers les providers
    public function loginRegister () {
    	return view("socialite.login-register");
    }

    # redirection vers le provider
    public function redirect (Request $request) {

        $provider = $request->provider;

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
 
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
        abort(404); // Si le provider n'est pas autorisé
    }

    // Callback du provider
    public function callback (Request $request) {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) {

        	// Les informations provenant du provider
            $data = Socialite::driver($provider)->stateless()->user();
          
            # Social login - register
            $email = $data->getEmail(); // L'adresse email
            $name = $data->getName(); // le nom
           
            # 1. On récupère l'utilisateur à partir de l'adresse email
            $user = User::where("email", $email)->first();
            # 2. Si l'utilisateur existe
            if (isset($user)) {

                // Mise à jour des informations de l'utilisateur
                $user->name = $name;
                $user->save();

            # 3. Si l'utilisateur n'existe pas, on l'enregistre
            } else {
                
                // Enregistrement de l'utilisateur
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'role' => 'user',
                    'password' => bcrypt("emiliedghioljfydesretyuioiuytrds") // On attribue un mot de passe
                ]);
                
            }

            # 4. On connecte l'utilisateur
            backpack_auth()->login($user);

            # 5. On redirige l'utilisateur vers /home
            if (backpack_auth()->check()) return redirect('/');

         }
         abort(404);
    }

}