<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccueilNiko extends Controller{
    /**
     * @Route("/accueil")
     */
    public function accueilNiko()
    {
		
		$content = file_get_contents('./js/data_nikolai.json');
		$info = json_decode($content, true);
		$competences = file_get_contents('./js/competences.json');
		return $this->render('cv.html.twig', array(
			'info' => $info,
			'competences1' => $competences,
			'competences2' => $competences,
		));
    }
}
?>
