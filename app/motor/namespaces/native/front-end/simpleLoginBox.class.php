<?php
/*
Data de criação: 14/05/2018
Ultima Alteração: 14/05/2018
Autor: daniel.santos.ap@gmail.com
*/
class simpleLoginBox {
	public $LoginText = "Login";
	public $bntText = "ENTRAR";
	public $addContent;
	public $action = "auth/";
	public $userInput = "user";
	public $snhpwd = "snhpwd";
	public $placeholders = ["Usuário", "Senha"];
	public function __construct(){

	}
	public function render(){
		echo '<div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Login</h1>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user" style="width: auto"></i>
                            </span>
                            <input id="txtUsuario" runat="server" type="text" class="form-control" name="user" placeholder="Usuário" required="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock" style="width: auto"></i>
                            </span>
                            <input id="txtSenha" runat="server" type="password" class="form-control" name="password" placeholder="Senha" required="" />
                        </div>
                    </div>
                    <button id="btnLogin" runat="server" class="btn btn-default" style="width: 100%">
                        ENTRAR<i class="glyphicon glyphicon-log-in"></i>
                    </button>
                </div>
            </div>
        </div>';
	}
	public function html(){
		$this->addContent = '<div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4"><br /><div class="panel panel-default"><div class="panel-heading"><h1>'.$this->LoginText.'</h1></div><div class="panel-body"><div class="form-group"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user" style="width: auto"></i></span><form action="'.$this->action.'" method="POST"><input id="txtUsuario" runat="server" type="text" class="form-control" name="'.$this->userInput.'" placeholder="'.$this->placeholders[0].'" required="" /></div></div><div class="form-group"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="width: auto"></i></span><input id="txtSenha" runat="server" type="password" class="form-control" name="'.$this->snhpwd.'" placeholder="'.$this->placeholders[1].'" required="" /></div></div><button id="btnLogin" runat="server" class="btn btn-default" style="width: 100%">'.$this->bntText.'<i class="glyphicon glyphicon-log-in"></i></button></form></div></div></div>';
        return $this->addContent;
	}
}
?>