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
             <div class="image_containers">
               <div class="banned"><img src="images/ban.png" draggable="false"></div>
               <div class="muted"><img src="images/mute.png" draggable="false"></div>
               <div class="kicked"><img src="images/kicked.png" draggable="false"></div>
            </div>
             <div class="info_containers">
                    <div class="banned_stats">

                    <?php        
                    $sql = "SELECT COUNT(*) FROM bm_player_ban_records";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "Viso yra blokuotų žaidėjų <span style='color:red'>" . $row["COUNT(*)"] . "</span><br>";
                    ?>

                     </div>
                 
                    <div class="muted_stats">
                        
                     <?php
                     $sql = "SELECT COUNT(*) FROM bm_player_mutes";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo "Viso yra užtildytų žaidėjų <span style='color:yellow'>" . $row["COUNT(*)"] . "</span><br>";
                     ?>

                     </div>
                 
                    <div class="kicked_stats">

                    <?php
                    $sql = "SELECT COUNT(*) FROM bm_player_kicks";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "Viso yra išmestų žaidėjų <span style='color:blue'>" . $row["COUNT(*)"] . "</span><br>";
                    ?>

                     </div>
                </div>
             <br>

            <form method="get" onsubmit="return fieldNotEmpty()" action="/player_search.php">
              <input type="text" class="player-name-input" placeholder="  Nusižengusio žaidėjo paieška..." name="name" autocomplete="off">
            </form>
             
          </div>
          
       <script>
           function fieldNotEmpty() {
              var username = document.querySelector(".player-name-input").value;
              if (username == null || username == "") {
                 alert("Paieškos laukas neturi būti tuščias!");
                 return false;
              }
           }
        </script>
          
          <div class="footer"><p>@ 2023 <span>Minecraftas.lt</span> | Visos teisės saugomos</p></div>
          
      </div>
 </body>
    
</html>