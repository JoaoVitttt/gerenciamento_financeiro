<?php 

    require 'vendor/autoload.php';
    include_once('./connection/conexao.php');

    $sql = "SELECT * FROM receitas";
    $res = $conn -> query($sql);

    $qtd = $res -> num_rows;
    // If($qtd > 0){
    //     $dados = ("<table border='1'>");

    //     $dados .= ("<tr>");
    //     $dados .= "<th>Descrição</th>";
    //     $dados .= "<th>Valor</th>";
    //     $dados .= "<th>Vencimento</th>";
    //     $dados .= "<th>Tipo</th>";
    //     $dados .= ("</tr>");

    //     while($row = $res->fetch_object()){
    //         $dados .= ("<tr>");
    //         $dados .= "<td>".$row->descricao."</td>";
    //         $dados .= "<td>".$row->valor."</td>";
    //         $dados .= "<td>".$row->dat."</td>";
    //         $dados .= "<td>".$row->tipo."</td>";
    //         $dados .= ("</tr>");
    //     }
    //     $dados .= ("</table>");
    // }else{
    //     $dados .= ("<p>Não foi encontrado nenhum resultado!</p>");
    // }
    // print($dados);

    // $sql= "SELECT id, descricao, valor, dat, tipo FROM receitas";
    // $res = $conn -> query($sql);


    // if($res -> num_rows > 0){
    //     print("<table border='1'>");
    //     while($row = $res -> fetch_object()){
    //         print"</tr>";
    //         print "<td>".$row->id."<td>";
    //         print "<td>".$row->descricao."<td>";
    //         print "<td>".$row->valor."<td>";
    //         print "<td>".$row->dat."<td>";
    //         print "<td>".$row->tipo."<td>";
    //         print"</tr>";
    //     }
    //     print("</table>");
    // }else{
    //     print('Nenhum dado registrado');
    // }

    // $query_receita = "SELECT id, descricao, valor, dat, tipo FROM receitas";
    // $result_receita = $conn -> prepare($query_receita);
    // $result_receita -> execute();

    // while($row_receita = $result_receita -> fetch_object(mysqli::FETCH_ASSOC)){
    //     var_dump($row_receita);
    // }

    use Dompdf\Dompdf;

    $dompdf = new Dompdf(['enable_remote' => true]);

    $dados = "<!DOCTYPE html>";
    $dados .= "<html lang='pt-br'>";
    $dados .= "<head>";
    $dados .= "<meta charset='UTF-8'>";
    $dados .= "<link rel='stylesheet' type='text/css' media='screen' href='http://localhost/PHP/SGF/nadaseiDbugFuncionando%20-%20Copia/css/stylePDF.css'>";
    $dados .= "<title>Document</title>";
    $dados .= "</head>";
    $dados .= "<body>";
    $dados .= "<h1>Sistema de Gerenciamento Financeiro</h1>";
    $dados .= "<img src='http://localhost/PHP/SGF/nadaseiDbugFuncionando%20-%20Copia/img/tj-logo.jpg'><br>";
    $dados .= " Uma prática estratégica de estabelecer, controlar e monitorar todos os recursos financeiros para atingir seus objetivos de negócios.";


    If($qtd > 0){
        $dados .= ("<table border='1'>");

        $dados .= ("<tr>");
        $dados .= "<th>Descrição</th>";
        $dados .= "<th>Valor</th>";
        $dados .= "<th>Vencimento</th>";
        $dados .= "<th>Tipo</th>";
        $dados .= ("</tr>");

        while($row = $res->fetch_object()){
            $dados .= ("<tr>");
            $dados .= "<td>".$row->descricao."</td>";
            $dados .= "<td>".$row->valor."</td>";
            $dados .= "<td>".$row->dat."</td>";
            $dados .= "<td>".$row->tipo."</td>";
            $dados .= ("</tr>");
        }
        $dados .= ("</table>");
    }else{
        $dados .= ("<p>Não foi encontrado nenhum resultado!</p>");
    }

    $dados .= "</body>";


    $dompdf->loadHtml($dados);
    // $dompdf->set_option('defaultFont', 'sans');
    $dompdf->setPaper('A4', 'landscape');//portrait

    $dompdf->render();
    $dompdf->stream();
?>