<html>
    <?php
        //o que esse isset faz??
        //verificando se foi digitados os 3 valores
        if((isset($_POST["txA"])) && (isset($_POST["txB"])) && (isset($_POST["txC"]))){
            $valorA = floatval($_POST["txA"]);
            $valorB = floatval($_POST["txB"]);
            $valorC = floatval($_POST["txC"]);
            echo "Funcionol.$valorA";
            echo "Funcionol.$valorB";
            echo "Funcionol.$valorC";
            //Para calcular
            $delta = 0;
            $raizDelta = 0;
            $x1 = 0;
            $x2 = 0;
        }
    ?>
    <h1>Cálculo de raízes reais</h1>
    <hr>
    <!--
        GET PEGA OS DADOS PELA URL
        POST PEGA OS DADOS PELO CAMPO DO FORMULARIO
    -->
    <form action="questao05.php" method="post">
        <p>
            a <input type="text" name="txA" value="<?php if(isset($valorA)) {echo $valorA;}?>" style="border-radius: 8px; border: 1px grey solid">
        </p>
        <p>
            b <input type="text" name="txB" value="<?php if(isset($valorB)) {echo $valorB;}?>" style="border-radius: 8px; border: 1px grey solid">
        </p>
        <p>
            c <input type="text" name="txC" value="<?php if(isset($valorC)) {echo $valorC;}?>" style="border-radius: 8px; border: 1px grey solid">
        </p>
   
        <p>
            Delta <input type="text" name="txDelta" style="border-radius: 8px; border: 1px grey solid" disabled value="<?php if(isset($delta)) {echo $delta;} ?>">
        </p>
        <p>
            x1 <input type="text" name="tx1" value="<?php if(isset($x1)) {echo $x1;}?>" style="border-radius: 8px; border: 1px grey solid" disabled> &nbsp;&nbsp;&nbsp;
            x2 <input type="text" name="tx2" value="<?php if(isset($x2)) {echo $x2;}?>" style="border-radius: 8px; border: 1px grey solid" disabled>
        </p>
    <hr>
        <?php
            $delta = ((($valorB) * $valorB) - (4 * $valorA * $valorC));
            $raizDelta = sqrt($delta);
            if($delta >= 0){
                $x1 = ((-$valorB) + (sqrt($delta))) / (2 * $valorA);
                $x2 = ((-$valorB) - (sqrt($delta))) / (2 * $valorA);
                echo "<p> x1 =".$x1."</p>";
                echo "<p> x1 =".$x2."</p>";
                
            }    
            else {
                echo "Para os valores informados <b>não existem raízes reais</b>.";
                echo "$delta";
            }
        ?>
        <p>
            <input type="submit" value="calcular as raizes reais">
        </p>
    </form>
</html>