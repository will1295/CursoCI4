<?= $cabecera; //echo view('ejemplo/header');?>
<body>
        <div class="container">
                <div class="form-row">
                    <div class= col-md-4>
                     <a href="<?php echo base_url();?>/NuevoRegistro" class="btn btn-success" role="button">Nuevo Registro</a>
                         </div>
                         <form method="post" action="<?php echo base_url();?>/CrudForm/Buscar">    
                            <div class= col-md-4>
                            <input type="text" id="buscar" name="buscar" placeholder="Busqueda de registro">
                            <button type="submit" id="btnbuscar" class="btn btn-info">Buscar</button>
                        </div>
                        </form>
                        <a href="<?php echo base_url();?>/CrudForm" class="btn btn-info" role="button">Limpiar Búsqueda</a>
               
                 </div>

                 <div class = "form-row">
                 <table class = "table" id="registros">
                 <tr>
                        <th scope="col">Id: </th>
                        <th scope="col">Nombre: </th>
                        <th scope="col">Email: </th>
                        <th scope="col">Funciones </th>        
                        </tr>
                        <!--Sintaxis alternativa para foreach de php en ci4-->
                        <?php foreach ($user as $usuario): ?>
                        <tr>
                        <td><?=$usuario['id']?></td>
                        <td><?=$usuario['name']?></td>
                        <td><?=$usuario['email']?></td>
                        <td>
                        <a href="<?= base_url();?>/EditarRegistro?id=<?= $usuario['id'] ?>" class="btn btn-info" role="button"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url();?>/CrudForm/Borrar?id=<?= $usuario['id'] ?>" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                        </td>
                        </tr>
                       <?php endforeach ?>
                     </table>
                     <?php echo $paginador->links(); ?>

                 </div>  
                 <div>
                
                     
                </div>
                
              

        </div>
        
        


</body>
</html>

<?php
/*        
                        Sintaxis regular de php

                        foreach ($user as $usuario) {
                        echo "<tr>";
                        echo "<td>".$usuario['id']."</td>";
                        echo "<td>".$usuario['name']."</td>";
                        echo "<td>".$usuario['email']."</td>";
                        echo "<td>";
                        ?>
                        <a href="<?php echo base_url();?>/EditarRegistro?id=<?php echo $usuario['id'] ?>" class="btn btn-info" role="button"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo base_url();?>/CrudForm/Borrar?id=<?php echo $usuario['id'] ?>" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                        <?php
                        //echo form_button(array('name'=>'editar','type'=>'submit','class'=>'btn btn-info','content'=>'<i class="fa fa-edit"></i>'));
                        //echo form_button(array('name'=>'editar','type'=>'submit','class'=>'btn btn-info','content'=>'<i class="fa fa-trash"></i>'));
                        echo "</td>";
                        echo "</tr>";
                        }
                        */
                      ?>


<script>
function Buscar() {
    var busqueda, convertir, tabla, tr, td, i, valor;
    busqueda = document.getElementById("buscar");
    convertir = input.value.toUpperCase();
    tabla = document.getElementById("registros");
    tr = tabla.getElementByTagName("tr");
    for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if(td){
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }

    }
       
        
    }
}
</script>
