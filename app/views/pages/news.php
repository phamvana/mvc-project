<?php
while($row=mysqli_fetch_array($data["St"])){
    echo $row["name"] .  " " . $row["YoB"]. "<br />";
}
