<?php

session_start();

if(empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["email"]) or (empty($_POST["senha"]))))){
    print("<script>location.href='index.php';</script>");
}

include_once("conexao.php");

switch ($_REQUEST["acao"]) {
    case 'cadastraruser':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST['senha'];
        // $senha = md5($_POST["senha"]);//md5 tratamento de senha par q não fique exposta

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

        $res = $conn->query($sql);

        // teste dia 21 as 00:20

        // $row = $res->fetch_object();
    
        // $qtd = $res->num_rows;

        // teste dia 21 as 00:20

        if($res==true){
            // teste dia 21 as 00:20
            $_SESSION["nome"] = $nome;//Define o nome no conteudo
            $_SESSION["email"] = $email;
            // teste dia 21 as 00:20
            print "<script>alert('Cadastro com sucesso');</script>";//msg de aleert
            print "<script>location.href='?view=principal';</script>";//redirecionamento 
        }else{
            print "<script>alert('Não foi possível Cadastrar');</script>";
            print "<script>location.href='?view=cadastro';</script>";
            // print "<script>location.href='?view=novouser';</script>";
        }
    break;
    case 'loginuser':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $sql = "SELECT * FROM usuario WHERE nome = '{$nome}' AND email = '{$email}' AND senha = '{$senha}'";
    
        $res = $conn->query($sql) or die($conn->error);

        $row = $res->fetch_object();
    
        $qtd = $res->num_rows;
    
        if($qtd > 0){
            $_SESSION["nome"] = $nome;
            $_SESSION["email"] = $email;
            // $_SESSION["email"] = $email;
            print "<script>location.href='?view=principal';</script>";
        }else{
            print "<script>alert('Nome e/ou Senha incorreto(s)');</script>";
            print "<script>location.href='index.php';</script>";
        }
    break;
    case 'cadastraritem':
        $descricao = $_POST["descricao"];
        $valor = $_POST["valor"];
        $dat = $_POST["dat"];
        $tipo = $_POST["tipo"];

        $sql = "INSERT INTO receitas (descricao, valor, dat, tipo) VALUES ('{$descricao}', '{$valor}', '{$dat}', '{$tipo}')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastro com sucesso');</script>";//msg de aleert
            print "<script>location.href='?view=principal';</script>";
        }else{
            print "<script>alert('Não foi possível Cadastrar');</script>";
            print "<script>location.href='?view=principal';</script>";
        }
    break;
    case 'editaritem':
        $descricao = $_POST["descricao"];
        $valor = $_POST["valor"];
        $dat = $_POST["dat"];
        $tipo = $_POST["tipo"];

        $sql = "UPDATE receitas SET
                    descricao='{$descricao}',
                    valor='{$valor}',
                    dat='{$dat}'
                    tipo='{$tipo}'
                WHERE
                    id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";//msg de aleert
            print "<script>location.href='?view=principal';</script>";//redirecionamento 
        }else{
            print "<script>alert('Não foi possível Editar');</script>";
            print "<script>location.href='?view=principal';</script>";
        }

    break;
    case 'excluiritem':
        $sql = "DELETE FROM receitas WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluido com sucesso');</script>";//msg de aleert
            print "<script>location.href='?view=principal';</script>";//redirecionamento 
        }else{
            print "<script>alert('Não foi possível Excluir');</script>";
            print "<script>location.href='?view=principal';</script>";
        }

    break;
}

?>