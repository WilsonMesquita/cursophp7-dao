<?php
    /*require_once("config.php");
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    echo json_encode($usuarios);*/
    require_once("config.php");
    //carrega um usuário
    //$root = new Usuario();
    //$root->loadById(2);
    //echo $root;

    //carrega uma lista de usuários
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //carrega uma lista de usuarios buscando pelo login
    //$search = Usuario::search("fe");
    //echo json_encode($search);

    //carrega um usuário usando login e senha
    //$usuario = new Usuario();
    //$usuario->login("JFrancisco", "qwesdfvc");
    //echo $usuario;

    $aluno = new Usuario("aluno4", "@lun0");
    //$aluno -> setDeslogin("aluno3");
    //$aluno -> setDessenha("@luno");
    $aluno -> insert();
    echo $aluno;

?>