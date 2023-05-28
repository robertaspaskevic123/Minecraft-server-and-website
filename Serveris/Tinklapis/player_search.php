<html>
    
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <link rel="stylesheet" href="main.css">
  <title>Minecraftas.lt</title>
   <?php include 'connect_to_mysql.php';?>
 </head>
    
 <body>
      <div class="main-container">
         <div class="logo"><img src="images/logo.png" draggable="false"></div>
          
         <div class="nav-bar">
             <div class="back-button"><a href="http://minecraftas.lt/">GRĮŽTI ATGAL</a></div>
            <ul> 
                <li><a href="http://minecraftas.lt/logai.php">ŽURNALAS</a></li>
                <li><a href="http://minecraftas.lt/uzblokavimai.php">UŽBLOKAVIMAI</a></li>
                <li><a href="http://minecraftas.lt/uztildymai.php">UŽTILDYMAI</a></li>
                <li><a href="http://minecraftas.lt/ismetimai.php">IŠMETIMAI</a></li>
             </ul> 
         </div>
          
         <div class="content">    
             
              <?php       
                $name = $_GET['name'];
                $sql = "SELECT bp1.name AS banned_player_name, bp2.name AS actor_name, bpr.*
                        FROM bm_player_ban_records bpr
                        JOIN bm_players bp1 ON bpr.player_id = bp1.id
                        JOIN bm_players bp2 ON bpr.actor_id = bp2.id
                        WHERE bp1.name = ?";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param("s", $name);

                $stmt->execute();

                $result = $stmt->get_result();

               if (mysqli_num_rows($result) == 0) {
                    echo "<p class='not_found'>Žaidėjo užblokavimo įrašų nėra.</p>" . "<br>";
                }

                else {
                    echo '<table>';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>ID</th>';
                    echo '<th>Žaidėjas</th>';
                    echo '<th>Užblokavo</th>';
                    echo '<th>Priežastis</th>';
                    echo '<th>Data</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td><img src="https://mc-heads.net/avatar/' . $row['banned_player_name'] . '/15">' . $row['banned_player_name'] . '</td>';
                        echo '<td><img src="https://mc-heads.net/avatar/' . $row['actor_name'] . '/15">' . $row['actor_name'] . '</td>';
                        echo '<td>' . $row['reason'] . '</td>';
                        echo '<td>' . date('Y-m-d H:i:s', $row['created']) . '</td>';
                        echo '</tr>';
                        }

                    echo '</tbody>';
                    echo '</table>';
                    echo '<br>';
                }
             
                  $sql = "SELECT bp1.name AS banned_player_name, bp2.name AS actor_name, bpr.*
                        FROM bm_player_mutes bpr
                        JOIN bm_players bp1 ON bpr.player_id = bp1.id
                        JOIN bm_players bp2 ON bpr.actor_id = bp2.id
                        WHERE bp1.name = ?";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param("s", $name);

                $stmt->execute();

                $result = $stmt->get_result();

              if (mysqli_num_rows($result) == 0) {
                    echo "<p class='not_found'>Žaidėjo užtildymo įrašų nėra.</p>" . "<br>";
                }

                 else {         
                    echo '<table>';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>ID</th>';
                    echo '<th>Žaidėjas</th>';
                    echo '<th>Užtildė</th>';
                    echo '<th>Priežastis</th>';
                    echo '<th>Data</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td><img src="https://mc-heads.net/avatar/' . $row['banned_player_name'] . '/15">' . $row['banned_player_name'] . '</td>';
                        echo '<td><img src="https://mc-heads.net/avatar/' . $row['actor_name'] . '/15">' . $row['actor_name'] . '</td>';
                        echo '<td>' . $row['reason'] . '</td>';
                        echo '<td>' . date('Y-m-d H:i:s', $row['created']) . '</td>';
                        echo '</tr>';
                       }

                    echo '</tbody>';
                    echo '</table>';
                    echo '<br>';
                 }

                   $sql = "SELECT bp1.name AS banned_player_name, bp2.name AS actor_name, bpr.*
                        FROM bm_player_kicks bpr
                        JOIN bm_players bp1 ON bpr.player_id = bp1.id
                        JOIN bm_players bp2 ON bpr.actor_id = bp2.id
                        WHERE bp1.name = ?";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param("s", $name);

                $stmt->execute();

                $result = $stmt->get_result();

                      if (mysqli_num_rows($result) == 0) {
                          echo "<p class='not_found'>Žaidėjo išmetimo įrašų nėra.<p>";
                      }

                     else {
                            echo '<table>';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>ID</th>';
                            echo '<th>Žaidėjas</th>';
                            echo '<th>Išmetė</th>';
                            echo '<th>Priežastis</th>';
                            echo '<th>Data</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';

                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td><img src="https://mc-heads.net/avatar/' . $row['banned_player_name'] . '/15">' . $row['banned_player_name'] . '</td>';
                                echo '<td><img src="https://mc-heads.net/avatar/' . $row['actor_name'] . '/15">' . $row['actor_name'] . '</td>';
                                echo '<td>' . $row['reason'] . '</td>';
                                echo '<td>' . date('Y-m-d H:i:s', $row['created']) . '</td>';
                                echo '</tr>';
                            }

                            echo '</tbody>';
                            echo '</table>';
                         }

                    $result->free();
                    $conn->close();
              ?> 
           </div>
          
          <div class="footer"><p>@ 2023 <span>Minecraftas.lt</span> | Visos teisės saugomos</p></div>
          
      </div>
 </body>
    
</html>