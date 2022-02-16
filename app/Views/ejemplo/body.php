<body>
        <div class="container">
                <div class="row">
                <button type="button" class="btn btn-primary">Regresar
                        <a href="">
                </button>
                </div>
                <div class = "row">
                <table class = "table">
                <tr>
                        <th scope="col">Id: </th>
                        <th scope="col">Nombre: </th>
                        <th scope="col">Email: </th>        
                </tr>
                <?php
                foreach ($user as $usuario) {
                        echo "<tr>";
                        echo "<td>".$usuario['id']."</td>";
                        echo "<td>".$usuario['name']."</td>";
                        echo "<td>".$usuario['email']."</td>";
                        echo "</tr>";
                 }
                ?>
                </table>

                </div>
              

        </div>
        
        


</body>
</html>

<script>
        $(document).ready(function()){
                
        }
</script>