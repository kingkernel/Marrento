<?php
class automate_class{
	public $nomeClass = "classeNome";
	public $methods = [];
	public function __construct(){

	}
	public function createClassBase(){
			echo "\n<?php\n\tclass ".$this->nomeClass." {\n\tpublic \$page;\n\t\tpublic function __construct(){\n\t\tauth::checkAuth();\n\t\t\$pagina = new page_site;\n\t\t\$this->page = \$pagina;\n\t\treturn \$this;\n\t}\n";
			foreach ($this->methods as $key => $value) {
					echo "\t\tpublic function ".$value."(){\n\n\t}\n";
				};
			echo "}\n?>\n";
	}
	public function tableToForm($table){
		$sql = 'describe '.$table;
		$query = retornadbinfo($sql);
		$inputs = [];
			while ($data = $query->fetch(PDO::FETCH_ASSOC)){
				if ($data["Field"]== "id" && $data["Key"]=="PRI"){
					echo "\$".$data["Field"]." = new inputBase;\n";
					echo "\t\$".$data["Field"]."->type = \"hidden\";\n";
					echo "\t\$".$data["Field"]."->name = \"".$data["Field"]."\";\n";
					echo "\t\$".$data["Field"]."->value = @value;\n";
					echo "\t\n";
				} else {
					echo "\$".$data["Field"]." = new inputAddOn;\n";
					echo "\t\$".$data["Field"]."->inputPlaceholder = @nomePlaceholder\n";
					echo "\t\$".$data["Field"]."->inputIcon = glyphicon glyphicon-home\n";
					echo "\t\$".$data["Field"]."->inputName = @nomeCampo\n";
					echo "\t\n";
				};
				array_push($inputs, "\$".$data["Field"]);
			};
		echo "\$form = new formbootstrap;\n\t\$form->action=\"@action\";\n\t\$form->\$formitens = [".implode(", ", $inputs)."];\n\n";
	}
	public function tablesToForms(){
		$sql = "show tables";
		$query = retornadbinfo($sql);
		while ($data = $query->fetch(PDO::FETCH_NUM)) {
			echo "#####################\n FORM:".$data[0]."\n#####################\n\n";
			$this->tableToForm($data[0]);
		};
	}
}
?>
