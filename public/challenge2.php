<?php require_once "header.php"; ?>
        
<section>
    <h1>Challenge 2 - Distância de Hamming entre duas fitas de DNA </h1>
    <p>Calcule a distância de Hamming entre duas fitas de DNA.</p>
    <div>

        <form>
            <div class="form-group">
                <label>Sequência de DNA A (ex: GAGCCTACTAACGGGAT): </label>
                <input class="form-control" type="text" name="valueA" placeholder="GAGCCTACTAACGGGAT" value="<?php echo $_GET['valueA'] ?? '' ?>">
            </div>
            <div class="form-group">
            <label>Sequência de DNA B (ex: CATCGTAATGACGGCCT): </label>
                <input class="form-control" type="text" name="valueB" placeholder="CATCGTAATGACGGCCT" value="<?php echo $_GET['valueB'] ?? '' ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </form>

       <?php
            $valueA = $_GET['valueA'];
            $valueB = $_GET['valueB'];
            $result = null;
            $class = "";

            if (strlen($valueA) == strlen($valueB)) {
                $hamming = new \Indra\Hamming\HammingService();
                $result = $hamming->compute($valueA, $valueB);  
                $result = "A distância de Hamming entre as sequências é: " . $result;
                $class = "alert alert-success";
            }else{
                $result = "As sequências devem ter o mesmo tamanho";
                $class = "alert alert-danger";
            }

            $result = strlen($valueA) == 0 && strlen($valueB) == 0 ? null : $result; 
       ?>

        <?php if(!is_null($result)): ?>
            <div class="<?php echo $class ?>" role="alert">
                <?php echo $result; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once "footer.php"; ?>