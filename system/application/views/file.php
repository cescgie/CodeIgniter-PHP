  <p><span class="blink">Stand : <?= $data['datum'] ?></span></p>
  <?php

  //GA Information
  if (!sizeof($data['result'])) {
      echo
      '<div class="alert alert-info">No CF Data.</div>';
  }else{
    echo "<table border='1'>
      <thead>
        <tr>
            <th></th>
            <th>UserId</th>
            <th>IpAddress</th>
            <th>Impression</th>
        </tr>
      </thead>";
    for($i = 0;$i<count($data['result']);$i++){
    echo "<tbody>
            <tr>
              <td>".$i."</td>
              <td>".$data['result'][$i]["_id"]["UserId"]."</td>
              <td>".$data['result'][$i]["_id"]["IpAddress"]."</td>
              <td>".$data['result'][$i]["count"]."</td>
            </tr>
      </tbody>";
    }
      echo "
      </table>";
    }
  ?>
  </body>
</html>
