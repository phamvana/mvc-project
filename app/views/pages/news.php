<table class="table">
    <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên</th>
            <th>Năm sinh</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
            while ($row = mysqli_fetch_array($data["St"])) {
                echo "<tr>". "<td>" . $row["id"] ."</td>";
                echo  "<td>" . $row["name"] ."</td>";
                echo  "<td>" . $row["YoB"] ."</td>";
                echo '<td> <a class="btn btn-primary btn-sm" href="/#">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>';
                echo "</tr>";
            }
            ?>
        
    </tbody>
</table>