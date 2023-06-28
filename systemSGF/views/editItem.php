<h1>Edit Item</h1>
<?php 
    $sql = "SELECT * FROM receitas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?view=salvaritem" method="post">
    <input type="hidden" name="acao" value="editaritem">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor</label>
        <input type="number" name="valor" value="<?php print $row->valor; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="dat" value="<?php print $row->dat; ?>" class="form-control">
    </div>
    <div class="col-auto">
        <label>Tipo</label>
        <select class="form-select" name="tipo" value="<?php print $row->tipo; ?>" aria-label="Default select example">
            <option value="1">Entrada</option>
            <option value="2">Saída</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>