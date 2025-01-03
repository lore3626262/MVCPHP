<html>
    <head>

    </head>
    <body>
        <table>
            <tr><?php 
            require_once("../core/contantes.php");
            foreach(usuarioColumns as $value):?>
            <td><?php echo $value;?>
            <?php endforeach;?>

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="">Editar</a></td>
                <td><a onclick="return confirm('¿Seguro de eliminar este registro?')">Eliminar</a></td>
                </tr>
        </table>
    </body>
</html>