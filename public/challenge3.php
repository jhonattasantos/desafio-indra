<?php 
    require_once "header.php"; 
    use Indra\MultipleNumbers\NumberPrint;
    $numberPrint = new NumberPrint(range(1, 100));
?>
        
<section>
    <h1>Challenge 3 - Números Múltiplos </h1>
    <div>
        <p>Escreva um programa que imprima todos os números de 1 a 100. No entanto, para múltiplos de 3, em vez do número, imprima “Indra”. Para múltiplos de 5, imprima "Minsait". Para números que são múltiplos de 3 e 5, imprima “Indra Minsait”. </p>
        <p>Mas aqui está o problema: você pode usar apenas um if. Sem ramificações múltiplas, operadores ternários ou else.</p>
    </div>
    <div>
        <?php foreach($numberPrint->display() as $i)  : ?>
            <span class="badge badge-secondary"><?php echo $i; ?></span>            
        <?php endforeach; ?>
    </div>
</section>

<script>
    let badge = document.getElementsByClassName('badge');
    Array.prototype.filter.call(badge, function(item){
        if(item.textContent == "Indra Minsait"){
            item.setAttribute("class", "badge badge-danger");
        }

        if(item.textContent == "Minsait"){
            item.setAttribute("class", "badge badge-warning");
        }

        if(item.textContent == "Indra"){
            item.setAttribute("class", "badge badge-success");
        }
    });
</script>

<?php require_once "footer.php"; ?>