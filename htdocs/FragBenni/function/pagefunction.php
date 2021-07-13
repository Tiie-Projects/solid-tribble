<?php 
class Pagefunction {
	public $pagefolder = "pages";
	
	private function get(){
		if(isset($_GET["page"])){
			return $_GET['page'].".php";
		}else{
			return "startseite.php";
		}
	}
	
	public function page(){
		$page404 = "pages/page404.php";
		
		$dir = "pages/";
		
		for($i = 0; $i <= count($this->folder()); $i++){
			$pages = $this->folder()[$i];
			
			if($pages === $this->get()){
				require_once($dir.$this->get());
				return false;
			}
			
			if($i +1 == count($this->folder())){
				require_once($page404);
				return false;
			}
		}
	}
	
	protected function folder(){
		$dir = "pages";
		$pages_array = Array();

		if(is_dir($dir)){
			$handle = opendir($dir);
			if(is_resource($handle)){
				while($pages = readdir($handle)){
					if($pages != "." && $pages != "..")
						array_push($pages_array, $pages);
				}
			}
		}
		return $pages_array;
		}
}

$loadpage = new Pagefunction();
$loadpage->page();
?>