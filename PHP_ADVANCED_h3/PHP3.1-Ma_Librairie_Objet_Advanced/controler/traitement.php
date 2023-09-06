<?php

class traitement{
	
	private string message = "";
	private string $login = "";
	private string $pwd = "";
	private string $bonLogin = "toto";
	private string $bonPwd = "nicolas";
	
	public function __construct($login,$pwd){
		$this->login   = $login;
		$this->pwd     = $pwd;
		$this->message = "";
	}		
	
	public function Message():string{
		return $this->message;
	}
	
	public function verifie(): bool{
		$result = false;
		if($this->login !== $this->bonLogin) {
			$this->message = "Mauvais login !";
		}
        elseif($this->pwd !== $this->bonPwd) {  
			$this->message = "Mauvais password !";
		} else {
			$result = true;
			$this->message = "";
		}
		return $result;
	}
}

session_start();
		
if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password'])) {
		$ttt = new traitement($_POST['login'],$_POST['password']);
		if ($ttt->verifie()){
			$_SESSION['login'] = "3WA_DP";
			$_SESSION['message'] = "";
			header('Location: http://localhost/main.php');
			exit();
		} else {
			$_SESSION['login'] = "echec";
			$_SESSION['message'] = $ttt->Message();
		}
	} else {
		$_SESSION['message'] = "veuillez renseigner les 2 champs";
		$_SESSION['login'] = "echec";
	}
} else {
$_SESSION['message'] = "veuillez passer d'abord par cette phase";
}
header('Location: http://localhost/index.php');
exit();  

  
        
?>