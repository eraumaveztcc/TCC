<?php
//COISAS PRA ARRUMAR:
//LOCAL DO REQUIRE

    // ARRUMAR FORMULARIO PRA MADNAR O EMAIL AO INVEZ DO NOME.   CONTROLARDOPR USUARIO: PEGAR O POST_EMAIL AO INVEZ DO POST_NOME E FAZER GETuSUARIO COMO PARAMETRO $US_EMAIL.  USUARIOCRUD USAR EMAIL COMO PARAMETRO AO INVEZ DO ID

require '../Models/UsuarioCrud.php';


if (isset($_GET['acao'])){
    $action = $_GET['acao'];
}else{
    $action = 'index';
}

switch ($action){
    case 'index':

        include "../View/index.php";

        break;

    case 'login':
        if (!isset($_POST['gravar'])){
            include "../View/usuario/login.php";
        }else {
            $user = new Usuario(null, $_POST['email'], $_POST['senha']);
            $crud = new UsuarioCrud();
            $resultado = $crud->LoginUsuario($user);
            $user = $crud->getUsuario($_POST['email']);

            if ($resultado == 0) {
                header("Location: ?acao=login&erro=1");
            } else {
                session_start();
                $_SESSION['us_id'] = $user->getId();
                $_SESSION['us_nome'] = $user->getNome();
                $_SESSION['us_email'] = $user->getEmail();
                $_SESSION['us_senha'] = $user->getSenha();
                $_SESSION['us_datanascimento'] = $user->getDatanascimento();
                $_SESSION['us_sexo'] = $user->getSexo();
                include "../View/index.php";
            }
        }

        break;

     case 'logout':


         session_start();
         session_destroy();
         header("Location: ControlerUsuario.php");

         break;

    case 'cadastrar':

        if (!isset($_POST['gravar'])) {
            include "../View/usuario/cadastrar.php";
        } else {
            $nomeArquivo = date('dmYhis').$_FILES['foto']['name'];
            $user = new Usuario($nomeArquivo, $_POST['nome'], $_POST['login'], $_POST['senha'], $_POST['email'], $_POST['telefone'], $_POST['cpf'], $_POST['endereco'], $_POST['tipuser']);
            $crud = new UsuarioCrud();
            move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/img/'.$nomeArquivo);
            $crud->insertUsuario($user);
            header("Location: ?acao=login");
        }

        break;


}