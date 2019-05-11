<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;


class SOSController extends Controller
{
    /**
     * @Route("/", name="SOSDiderotpage")
     */
    public function SOSDiderotAction(Request $request)
    {  $session = $request->getSession();
       $session->set('headerName', 'header-anonym.html.twig');
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/SOSDiderot.html.twig');
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function SOSLogout(Request $request)
    {
        // replace this example code with whatever you need
        $session = $request->getSession();
        $session->set('headerName', 'header-anonym.html.twig');
        return $this->render('SOSDiderot/SOSDiderot.html.twig');
    }


    /**
     * @Route("/settings", name="settings")
     */
    public function SOSSettings(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/settings.html.twig');
    }



        /**
         * @Route("/accueil", name="accueil")
         */
        public function SOSPAccueil(Request $request)
        {   $session = $request->getSession();
            $session->set('headerName', 'header-authenticated.html.twig');
            $user = $this->getUser();
            $session->set('nom',$user->getNom());
            $session->set('prenom',$user->getPrenom());
            $session->set('formation',$user->getFormation());
            $session->set('university',$user->getUniversity());
            $session->set('statut',$user->getStatut());

            // replace this example code with whatever you need
            return $this->render('SOSDiderot/accueil.html.twig');
        }



        /**
         * @Route("/email-update", name="email-update")
         */
        public function SOSUpdateMail(Request $request)
        {
          if ($request->isMethod('post')){

                $data=$request->request->all();
                $user = $this->getUser();
                $user->setEmail($data['email']);
                $em= $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $em->refresh($user);
                $this->addFlash(
                		'success',
                		'Votre email a été mise à jour'
                	);
                return $this->redirectToRoute('settings');
                }
            return $this->render('SOSDiderot/email-update.html.twig');
        }


        /**
         * @Route("/passwordUpdate", name="passwordUpdate")
         */
        public function SOSPasswordUpdate(Request $request, UserPasswordEncoderInterface $encoder)
        {

            if ($request->isMethod('post')){

                  $data=$request->request->all();
                  $user = $this->getUser();
                  $encoded = $encoder->encodePassword($user, $data['pswNouv']);
                  $encodedActuelle=$encoder->encodePassword($user, $data['pswActuelle']);
                  if($data['pswActuelle'] != $user->getPassword()){
                    $this->addFlash(
                       'warning',
                       'Votre mot de passe actuelle est incorrect'
                     );
                     return $this->render('SOSDiderot/passwordUpdate.html.twig');
                  }
                  $user->setPassword($encoded);
                  $em= $this->getDoctrine()->getManager();
                  $em->persist($user);
                  $em->flush();
                  $em->refresh($user);
                  return $this->redirectToRoute('settings');
                  }


            return $this->render('SOSDiderot/passwordUpdate.html.twig');
        }


    /**
     * @Route("/inscription", name="inscription")
     */
    public function SOSInscription(Request $request,\Swift_Mailer $mailer, UserPasswordEncoderInterface $encoder)
    {
		  $user = new User();
      if ($request->isMethod('post')){

    		$data=$request->request->all();
    		$user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        $user->setEmail($data['email']);
        $user->setStatut($data['statut']);
        $encoded = $encoder->encodePassword($user, $data['password']);
        $user->setPassword($encoded);
        $user->setFormation("non renseigné");
        $user->setUniversity("non renseigné");
        $user->setUfr("non renseigné");
        $user->setPoste("non renseigné");

        $em= $this->getDoctrine()->getManager();

        $em->persist($user);
        $em->flush();


        $message = (new \Swift_Message('Hello Email'))
        ->setFrom('send@example.com')
        ->setTo($data['email']);
         $mailer->send($message);


        $this->addFlash(
        		'success',
        		'Votre inscription à été pris en compte'
        	);
        return $this->redirectToRoute('login');

  		}

        return $this->render('SOSDiderot/inscription.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function SOSLogin(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $errors= $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/connexion.html.twig',array(
          'errors'=>$errors,
          'last_username'=>$lastUsername,
        ));
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function SOSProfile(Request $request)
    {
      $user = $this->getUser();
      return $this->render('SOSDiderot/profil.html.twig', ['user'=>$user]);;
    }

    /**
    * @Route("/rendez_vous", name="rendez_vous")
    */
    public function SOSRendezVous(Request $request)
    {
    return $this->render('SOSDiderot/rendez_vous.html.twig');
    }




    /**
    * @Route("/profile-update", name="profile-update")
    */
    public function SOSProfileUpdate(Request $request)
    {
      if ($request->isMethod('post')){

            $data=$request->request->all();
            $user = $this->getUser();
            $user->setNom($data['nom']);
            $user->setPrenom($data['prenom']);
            if($user->getStatut()=="Etudiant"){
              $user->setFormation($data['formation']);
              $user->setUniversity($data['university']);
            }else{
              $user->setUfr($data['ufr']);
              $user->setPoste($data['postee']);
            }
            $em= $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $em->refresh($user);
            $session = $request->getSession();
            $session->set('nom',$user->getNom());
            $session->set('prenom',$user->getPrenom());
            $session->set('formation',$user->getFormation());
            $session->set('university',$user->getUniversity());
            return $this->redirectToRoute('profile');
            }



    return $this->render('SOSDiderot/profil.html.twig');
    }

    /**
    * @Route("/notification", name="notification")
    */
    public function SOSNotification(Request $request)
    {
    return $this->render('SOSDiderot/notification.html.twig');
    }


}
