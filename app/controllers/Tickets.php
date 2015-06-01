<?php
/**
 * Gestion des tickets
 * @author jcheron
 * @version 1.1
 * @package helpdesk.controllers
 */
class Tickets extends \_DefaultController {
	public function Tickets(){
		parent::__construct();
		$this->title="Tickets";
		$this->model="Ticket";
	}

	private static function getTypes() {
        return ["incident" => "Incident", "demande" => "Demande"];
        return ["incident" => "Incident", "demande" => "Demande"];
    }
	
	protected function setValuesToObject(&$object) {
		parent::setValuesToObject($object);
		$object->setUser(Auth::getUser());
		$categorie=DAO::getOne("Categorie", $_POST["idCategorie"]);
		$object->setCategorie($categorie);
	}
	public function frm($id=null){
		if (Auth::isAuth()){
			$ticket = $this->getInstance($id);
			$categories = DAO::getAll("Categorie");
			$cat = -1;
			if ($ticket->getCategorie() != null) {
				$cat = $ticket->getCategorie()->getId();
			}
			$list = Gui::select($categories, $cat, "Sélectionnez une catégorie ...");
			$this->loadView("ticket/vAdd", array("ticket" => $ticket, "listCat" => $list));
			echo JsUtils::execute("CKEDITOR.replace( 'contenu');");
		}
		else{
			$this->nonValid();
		}
	}
	public function isValid() {
		return Auth::isAuth();
	}
	public function onInvalidControl () {
		$this->loadView("main/vHeader", array("infoUser"=>Auth::getInfoUser()));
		$this->nonValid();
		$this->loadView("main/vFooter");
		exit;
	}
	private function nonValid(){
		echo "<div class='container'>";
		$this->messageDanger("Accès interdit. Vous devez vous connecter".Auth::getInfoUser());
		echo "</div>";
	}
}