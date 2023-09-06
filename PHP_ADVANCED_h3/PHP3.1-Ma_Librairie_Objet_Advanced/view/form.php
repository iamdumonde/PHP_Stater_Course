<?php
class Formulaire{
	
	private string $titre;
	private string $legend;
	private string $lbl_login;
	private string $lbl_pwd;
	private string $msg;
	private string $action;
	
	public function __construct($titre,$legend,$login,$pwd,$action){
		$this->titre = $titre;
		$this->legend = $legend;
		$this->lbl_login=$login;
		$this->lbl_pwd=$pwd;
		$this->action=$action;
		$this->msg = "";
	}
	
	public function Titre(): string{
		return $this->titre;
	}
	
	public function Legend(): string{
		return $this->legend;
	}
	
	public function Lbl_login(): string{
		return $this->lbl_login;
	}
	
	public function Lbl_pwd(): string{
		return $this->lbl_pwd;
	}
	
	public function Msg(): string{
		return $this->msg;
	}
	
	public function Action(): string{
		return $this->action;
	}
	
	public function setPwd($pwd){
		$this->pwd = $pwd;
	}
	
	public function setAction($url){
		$this->action = $url;
	}
	
	public function setMsg($msg){
		$this->msg = $msg;
	}
	
	public function init($fichier) : string{
		$fichier = file($fichier);
		$total = count($fichier);
		$content = "";
		for($i = 0; $i < $total; $i++) {
			$content .= $fichier[$i];
		}
		$content = str_replace("##titre##",$this->titre,$content);
		$content = str_replace("##legend##",$this->legend,$content);
		$content = str_replace("##login##",$this->lbl_login,$content);
		$content = str_replace("##pwd##",$this->lbl_pwd,$content);
		$content = str_replace("##messageerreur##",$this->msg,$content);
		$content = str_replace("##action##",$this->action,$content);
		return $content;
	}
	
	public function affiche($contenu){
		echo $contenu;
		
	}
}

 ?>