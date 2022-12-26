<?php 
    require_once "header.php"; 
    use Indra\Resistor\ResistorService;

    $service = new ResistorService(); 
    $selectedColor = $service->getSelectedColor($_GET['color']);
?>
        
<section>
    <h1>Challenge 1 - Cor de um resistor </h1>
    <div>
        <p>O objetivo deste exercício é criar uma maneira:</p>
        <ul>
            <li>verificar se a cor informada existe na lista.</li>
            <li>exibir o valor númerico da cor informada de acordo com a tabela.</li>
        </ul>
    </div>
    <div>
        <form>
            <div class="form-group">
                <label>Selecione uma cor: </label>
                <select name="color" class="form-control">
                    <option value="">Selecione uma cor</option>
                    <?php foreach($service->getData() as $key=>$value)  : ?>
                        <?php $selected = $key == $_GET['color'] ? 'selected' : ''; ?>
                        <option value="<?php echo $key;?>" <?php echo $selected; ?> ><?php echo $value;?></option>         
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Calcular</button>
            </div>
        </form>

        <?php if(!is_null($selectedColor)) : ?>
            <div>
                <h3>Valor numero de Resistencia: <?php echo $_GET["color"]; ?></h3>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once "footer.php"; ?>