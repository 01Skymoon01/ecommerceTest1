<?PHP

require_once "../config.php";

class favoris{

	private $idClient;
  private $nomProd;
  private $idProd;




	function __construct($idClient,$nomProd,$idProd){
		$this->idClient=$idClient;
		$this->nomProd=$nomProd;
		$this->idProd=$idProd;

	}

/*__________________________________LES GET__________________________________*/


	function get_idClient(){
		return $this->idClient;
	}
	function get_nomProd(){
		return $this->nomProd;
	}
	function get_idProd(){
		return $this->idProd;
	}


/*__________________________________LES SET__________________________________*/


	function set_idClient($idClient){
		$this->idClient=$idClient;
	}
	function set_nomProd($nomProd){
		$this->nomProd=$nomProd;
	}
	function set_idProd($idProd){
		$this->idProd=$idProd;
	}


}

?>
