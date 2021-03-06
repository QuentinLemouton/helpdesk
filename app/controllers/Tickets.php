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

	public function messages($id){
		$ticket=DAO::getOne("Ticket", $id[0]);
		if($ticket!=NULL){
			echo "<h2>".$ticket."</h2>";
			$messages=DAO::getOneToMany($ticket, "messages");
			echo "<table class='table table-striped'>";
			echo "<thead><tr><th>Messages</th></tr></thead>";
			echo "<tbody>";
			foreach ($messages as $msg){
				echo "<tr>";
				echo "<td title='message' data-content='".htmlentities($msg->getContenu())."' data-container='body' data-toggle='popover' data-placement='bottom'>".$msg->toString()."</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
			echo JsUtils::execute("$(function () {
					  $('[data-toggle=\"popover\"]').popover({'trigger':'hover','html':true})
				})");
		}
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
		$statut=DAO::getOne("Statut", $_POST["idStatut"]);
		$object->setStatut($statut);
	}
	public function frm($id=null){
		if (Auth::isAuth()){
			$ticket = $this->getInstance($id);
			$categories = DAO::getAll("Categorie");
			$cat = -1;
			if ($ticket->getCategorie() != null) {
				$cat = $ticket->getCategorie()->getId();
			}
			$list = Gui::select($categories, $cat);
			$this->loadView("ticket/vAdd", array("ticket" => $ticket, "listCat" => $list));
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