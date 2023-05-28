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
                <li><a href="http://minecraftas.lt/nusizengimai.php">STATISTIKA</a></li>
                <li><a href="http://minecraftas.lt/logai.php">ŽURNALAS</a></li>
                <li><a href="http://minecraftas.lt/uzblokavimai.php" class="active">UŽBLOKAVIMAI</a></li>
                <li><a href="http://minecraftas.lt/uztildymai.php">UŽTILDYMAI</a></li>
                <li><a href="http://minecraftas.lt/ismetimai.php">IŠMETIMAI</a></li>
             </ul> 
         </div>
          
         <div class="content">    
             
             <?php
             $sql = 
                   "SELECT bm_player_ban_records.id, 
                   banned_players.name AS banned_player_name, 
                   actor_players.name AS actor_player_name,
                   bm_player_ban_records.reason,
                   bm_player_ban_records.created
                   FROM bm_player_ban_records
                   JOIN bm_players AS banned_players ON bm_player_ban_records.player_id = banned_players.id
                   JOIN bm_players AS actor_players ON bm_player_ban_records.actor_id = actor_players.id";

            $result = $conn->query($sql);

            if (!$result) {
                die('Query failed: ' . $conn->error);
            }
             
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
                echo '<td><img src="https://mc-heads.net/avatar/' . $row['actor_player_name'] . '/15">' . $row['actor_player_name'] . '</td>';
                echo '<td>' . $row['reason'] . '</td>';
                echo '<td>' . date('Y-m-d H:i:s', $row['created']) . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';

            $result->free();
            $conn->close();
            ?>
             
          </div>

          <div class="footer"><p>@ 2023 <span>Minecraftas.lt</span> | Visos teisės saugomos</p></div>
          
      </div>
 </body>
    
</html>