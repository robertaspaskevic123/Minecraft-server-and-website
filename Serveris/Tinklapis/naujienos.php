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
         <div class="server-info">
            <div class="server-status">
                <div class="status-wrapper">
                    <span class="status-label">Serverio statusas:</span>
                    <span class="status-value"></span>
                </div>
                    <span class="ip-adress">Serverio IP adresas: <span class="ip-color">78.63.27.125</span></span>
                
                                <?php        
                                $sql = "SELECT COUNT(*) FROM authentic";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo "Mūsų serveryje iš viso yra apsilanke " . $row["COUNT(*)"] . " žaidėjai";
                                mysqli_close($conn);
                                ?> 
                
                      <div class="progress-bar">
                          <span class="player-count">0/0</span>
                        <div class="progress" style="width: 0%;"></div>
                      </div>
                    <div class="player-list"></div>
                </div>


                <script src="https://mcapi.us/scripts/minecraft.min.js"></script>
                <script>
                    MinecraftAPI.getServerStatus('78.63.27.125', {
                        port: 25565
                    }, function (err, status) {
                        if (err) status = { online: false, players: { now: 0, max: 0, sample : [] } };
                        document.querySelector('.status-value').innerHTML = status.online ? 'Ijungtas' : 'Išjungtas';
                        if (!status.online) document.querySelector('.status-value').classList.add('off');
                        document.querySelector('.player-count').innerHTML = status.players.now + "/" + status.players.max;
                        document.querySelector('.progress').style.width = status.players.now / status.players.max * 100 + '%';
                        document.querySelector('.player-list').innerHTML = status.players.sample.map(player => `<div class="player" data-name="${player.name}">
                        <img src="http://cravatar.eu/head/${player.name}/15" alt="${player.name}">
                        </div>`).join('');
                    });
                </script>
          </div>

         <div class="nav-bar">
            <ul> 
                <li><a href="#"><a href="http://minecraftas.lt/">PAGRINDINIS</a></li>
                <li><a href="http://minecraftas.lt/naujienos.php" class="active">NAUJIENOS</a></li>
                <li><a href="http://minecraftas.lt/modai.php">SERVERIO MODAI</a></li>
                <li><a href="http://78.63.27.125:8123/" target=”_blank”>ŽEMĖLAPIS</a></li>
                <li><a href="http://minecraftas.lt/gidas.php">KAIP PRADĖTI ŽAISTI?</a></li>
                <li><a href="http://minecraftas.lt/nusizengimai.php">NUSIŽENGIMAI</a></li>
             </ul> 
         </div>
          
         <div class="content"><p> Čia bus pildomos naujienos.</p></div>
          
          <div class="footer"><p>@ 2023 <span>Minecraftas.lt</span> | Visos teisės saugomos</p></div>
      </div>
 </body>
    
</html>