<html>
    <body>
<?php
    if($pacientes){
        foreach($pacientes->result() as $paciente){?>
        <ul>
            <li>
                <?= $paciente->nombre; ?>
            </li>
        </ul>
        <?php }      
        
    }
    else{
            echo '<p>Error en la aplicacion</p>';
        }
?>
        </body>
</html>

