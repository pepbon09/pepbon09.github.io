<!DOCTYPE html>
    <html>
        <head>
            <title>Mis Clientes</title>
            <style type="text/css">
                body {
                    background-color: #142850;
                    color: white;
                }
                div {
                    text-align: center;   
                }
                table {
                    margin: 0 auto;
                    border-collapse: collapse;
                }
                tr:nth-of-type(even) {
                    background-color: #27496d;
                }
                tr:nth-of-type(odd) {
                    background-color: #0c7b93;
                }
            </style>
        </head>
        <body>
            <div>
                <h1>Mis Clientes</h1>
                <table>
                    <tr>
                        <td>DNI</td>
                        <td>Nombre</td>
                        <td>Edad</td>
                    </tr>
                    
                    <?php
                        
                        $conexion=mysqli_connect("fdb19.awardspace.net","3295830_bdprueba","bdprueba123");

                        if(!$conexion){
                            die("No se ha podido conectar: " . mysqli_connect_error());
                        }
                        print "Se ha conectado a la base de datos";

                    ?>
                </table>
            </div>
        </body>
