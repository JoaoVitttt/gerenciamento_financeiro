<?php 

    require '../vendor/autoload.php';
    include_once('../connection/conexao.php');

    $sql = "SELECT * FROM receitas";
    $res = $conn -> query($sql);

    $qtd = $res -> num_rows;

    use Dompdf\Dompdf;

    $dompdf = new Dompdf(['enable_remote' => true]);

    $dados = "<!DOCTYPE html>";
    $dados .= "<html lang='pt-br'>";
    $dados .= "<head>";
    $dados .= "<meta charset='UTF-8'>";
    $dados .= "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>";
     
    $dados .= "<link href='http://localhost/PHP/SGF/MelhorJV/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>";
    $dados .= "<link rel='stylesheet' type='text/css' media='screen' href='http://localhost/PHP/SGF/MelhorJV/css/stylePDF.css'>";
    $dados .= "<title>PDF</title>";
    $dados .= "</head>";
    $dados .= "<body>";
    $dados .= "<img src='http://localhost/PHP/SGF/MelhorJV/img/topo2.jpg'; id='topopdf'>";
    // $dados .= "<img src='http://localhost/PHP/SGF/MelhorJV/img/tj-logo.jpg'>";
    $dados .= "<h1>Sistema de Gerenciamento Financeiro</h1>";
    $dados .= " Uma prática estratégica de estabelecer, controlar e monitorar todos os recursos financeiros para atingir seus objetivos de negócios.";


    If($qtd > 0){
        $dados .= ("<table id='tablepdf'; border='2'>");

        $dados .= ("<thead>");

        $dados .= ("<tr>");
        $dados .= "<th>Descrição</th>";
        $dados .= "<th>Valor</th>";
        $dados .= "<th>Vencimento</th>";
        $dados .= "<th>Tipo</th>";
        $dados .= ("</tr>");

        $dados .= ("</thead>");

        while($row = $res->fetch_object()){

            $dados .= ("<tbody>");

            $dados .= ("<tr>");
            $dados .= "<td>".$row->descricao."</td>";
            $dados .= "<td>".$row->valor."</td>";
            $dados .= "<td>".$row->dat."</td>";
            $dados .= "<td>".$row->tipo."</td>";
            $dados .= ("</tr>");

            $dados .= ("</tbody>");
        }
        $dados .= ("</table>");
    }else{
        $dados .= ("<p>Não foi encontrado nenhum resultado!</p>");
    }

    $dados .= ("<footer>");
    $dados .= "<img src='http://localhost/PHP/SGF/MelhorJV/img/topo2.jpg'; id='topopdf' >";
    $dados .= ("</footer>");

    $dados .= "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
    integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'>
</script>";
    $dados .= "</body>";


    $dompdf->loadHtml($dados);
    // $dompdf->set_option('defaultFont', 'sans');
    $dompdf->setPaper('A4', 'landscape');//portrait

    $dompdf->render();
    $dompdf->stream();
?>