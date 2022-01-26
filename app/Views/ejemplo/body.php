<body>
        
        <table>
        <tr>
                <th>Id: </th>
                <th>Nombre: </th>
                <th>Email: </th>        
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


</body>
</html>