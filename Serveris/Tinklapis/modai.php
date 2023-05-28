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
            <li><a href="http://minecraftas.lt/naujienos.php">NAUJIENOS</a></li>
            <li><a href="http://minecraftas.lt/modai.php" class="active">SERVERIO MODAI</a></li>
            <li><a href="http://78.63.27.125:8123/" target=”_blank”>ŽEMĖLAPIS</a></li>
            <li><a href="http://minecraftas.lt/gidas.php">KAIP PRADĖTI ŽAISTI?</a></li>
            <li><a href="http://minecraftas.lt/nusizengimai.php">NUSIŽENGIMAI</a></li>
         </ul> 
     </div>
      
     <div class="content"> 
        <p> Šiuo metu serveryje veikiančios modifikacijos:<br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Additional Banners</a> by DarkhaxDev <br><br>

        <a class="mod_title" href="https://technicpack.fandom.com/wiki/Additional_Buildcraft_Pipes" target=”_blank”> Additional Pipes for Buildcraft</a> by MultipleMonomials <br><br>

        <a class="mod_title" href="https://minecraft-mods.fandom.com/wiki/Advanced_Machines_(Chocohead)" target=”_blank”> Advanced Machines</a> by Chocohead <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/advanced-machines-patcher" target=”_blank”> Advanced Machines Patcher</a> by Su5eD <br><br>

        <a class="mod_title" href="https://feed-the-beast.fandom.com/wiki/Advanced_Solar_Panel" target=”_blank”> Advanced Solar Panels</a> by Icedfire, SeNtiMeL, Chocohead <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/advanced-solar-panels-patcher" target=”_blank”> Advanced Solar Panels Patcher</a> by Su5eD <br><br>

        <a class="mod_title" href="https://skyfactory-4.fandom.com/wiki/AE2_Stuff" target=”_blank”> AE2 Stuff</a> by bdew <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/ae2-extended-life" target=”_blank”> AE2 Unofficial Extended Life</a> by PrototypeTrousers <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/akashic-tome" target=”_blank”> Akashic Tome</a> by Vazkii <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/ambientsounds" target=”_blank”> Ambient Sounds</a> by CreativeMD <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/appleskin" target=”_blank”> AppleSkin</a> by squeek502 <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/aqua-acrobatics" target=”_blank”> Aqua Acrobatics</a> by Fuzs_, embeddedt <br><br>

        <a class="mod_title" href="https://ftbwiki.org/Aroma1997Core" target=”_blank”> Aroma Core</a> by Aroma1997 <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/aroma1997s-dimensional-world" target=”_blank”> Aroma Mining World</a> by Aroma1997 <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/asmc" target=”_blank”> ASMC</a> by AstroTibs <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/autoreglib" target=”_blank”> AutoRegLib</a> by Vazkii <br><br>

        <a class="mod_title" href="https://ftbwiki.org/Backpacks" target=”_blank”> Backpacks</a> by Eydamos <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/backups" target=”_blank”> Backups</a> by Silly511 <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/bad-wither-no-cookie-reloaded" target=”_blank”> Bad Wither No Cookie - Reloaded</a> by Kreezxil, Eleksploded <br><br>

        <a class="mod_title" href="https://thaumcraft-4.fandom.com/wiki/Baubles" target=”_blank”> Baubles</a> by Azanor <br><br>

        <a class="mod_title" href="https://minecraft-mods.fandom.com/wiki/BDLib" target=”_blank”> BdLib</a> by BDew <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/better-ping-display" target=”_blank”> Better Ping Display</a> by Quintinity <br><br>

        <a class="mod_title" href="https://ftbwiki.org/BiblioCraft" target=”_blank”> BiblioCraft</a> by Nuchaz <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/binnies-mods" target=”_blank”> Binnie's Mods</a> by Binnie567, mezz <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/biomes-o-plenty" target=”_blank”> Biomes O' Plenty</a> by Forstride, TheAdubbz, Glitchfiend <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/blockcraftery" target=”_blank”> Blockcraftery</a> by elucent_, EpicSquid319 <br><br>

        <a class="mod_title" href="https://www.curseforge.com/minecraft/mc-mods/blood-magic" target=”_blank”> Blood Magic</a> by WayofTime <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Bookshelf</a> by Darkhax <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Born in a Barn</a> by Chocohead <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Botania</a> by Vazkii <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> BuildCraft</a> by CovertJaguar, SpaceToad <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Charset Crafting</a> by asiekierka <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Charset Immersion</a> by asiekierka <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Charset Lib</a> by asiekierka <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Charset Storage - Barrels</a> by asiekierka <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ChatFlow</a> by Vazkii <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Chicken Chunks</a> by ChickenBones <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ChickenASM</a> by covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Chisel</a> by Automatic_Maiden, tterrag, Drullkus, and Minecreatr <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Chisels and Bits</a> by AlgorithmX2 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ChunkGenLimiter</a> by barteks2x <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Client Tweaks</a> by BlayTheNinth <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> CodeChickenLib</a> by Chicken_Bones, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> CoFH Core</a> by Team CoFH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> CoFH World</a> by TeamCoFH, KingLemming, skyboy026, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Comforts</a> by TheIllusiveC4 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Compact Solars</a> by cpw <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Compacter</a> by bdew <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Computronics</a> by Asie, Vexatos <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ConnectedTexturesMod</a> by tterrag1098 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Construct's Armory</a> by TheIllusiveC4 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Controlling</a> by jaredlll08 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Cooking for Blockheads</a> by BlaytheNinth <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> CraftTweaker</a> by jaredlll08, StanH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> CreativeCore</a> by CreativeMD <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Crimson Revelations</a> by MobiusFlip <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Crimson Warfare</a> by Ta6e <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Cucumber Library</a> by BlakeBr0 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Culinary Construct</a> by TheIllusiveC4 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Custom Main Menu</a> by Lumien <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Custom Starting Gear</a> by brandon3055 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Damage Tilt</a> by Charles445 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> dan's Mouse Tweaks</a> by YaLTeR, CleanroomMC, dandannoodlesman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Death Counter</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Debark</a> by asie <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Default Options</a> by BlaytheNinth <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Default World Generator</a> by EzTerry, FireBall1725 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Ding</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Doge</a> by mmdanggg2 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> DupeFix Project</a> by Focamacho <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Dynamic Lights</a> by AtomicStryker <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Enchanting Plus</a> by LCLC98, Freyadono, Darkhax <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Enchantment Descriptions</a> by DarkhaxDev <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Ender IO</a> by CrazyPants <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Ender Storage</a> by EcuTruin, Chickenbones, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Ender Zoo</a> by CrazyPants <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> EnderCore</a> by tterag1098 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Energy Converters</a> by xalcon <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Entity Culling</a> by Meldexun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Entity Desync Fix</a> by Meldexun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Exchangers</a> by Jackyy <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Extra Cells</a> by Leonelf <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”>Extra Utilities</a> by RWTema <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ExtraPlanets</a> by MJRLegends <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ExtremeReactors</a> by ZeroNoRyouki <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Fairy Lights</a> by pau101 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Fast Leaf Decay</a> by Olafski <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Featured Servers</a> by Jake_Evans <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> FoamFix</a> by Asie <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Forestry</a> by SirSengir, Covert_Jaguar, MysteriousAges, mezz <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Forge Multipart CBE</a> by Chicken_Bones, MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Funky Locomotion</a> by RWTema <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Galactic Computers</a> by vyo2003 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Galacticraft</a> by micdoodle8, teamgalacticraft, ROMVoid95 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Gas Conduits</a> by pupnewfster <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Gendustry</a> by BDew <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Gendustry JEI Addon</a> by ninjabrain1 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> GooglyEyes</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Gravitation Suite</a> by SeNtiMeL, Chocohead <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Gravitation Suite Patcher</a> by Su5eD <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Growthcraft Community Edition</a> by Gwafu, Alatyami <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Guide-API</a> by TehNut, Tombenpotter <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Guidebook</a> by gigaherz <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> GunpowderLib</a> by Jackyy <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Had Enough Items</a> by mezz, CleanroomMC, Rongmario <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Hat Stand</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Hats</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> HelpFixer</a> by MatthewPrenger <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Hesperus</a> by jellysquid3_, embeddedt, kappa_maintainer <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> HT's TreeChop</a> by hammertater <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Hwyla</a> by ProfMobius, TehNut <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> IC2 Crop-Breeding Plugin</a> by Speiger <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> IC2 Patcher</a> by Su5eD <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ICBM - Classic</a> by Calclavia, DarkGuardsman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Ichorium Kit</a> by keletu66666, Nekosune, pixlepix <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> iChunUtil</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> IFPatcher</a> by eve0415 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Industrial Foregoing</a> by Buuz135 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Industrial Foregoing / OC Compat</a> by BrisingrAerowing <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> IndustrialCraft²</a> by sfPlayer1, Aroma1997, Chocohead, estebess <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Integration Foregoing</a> by Buuz135, Jackyy <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Inventory Tweaks</a> by Kobata <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Iron Chests</a> by cpw, ProgWML6, Alexbegt <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Iron Tanks</a> by Indemnity83 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> It's The Little Things</a> by Zlepper <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> IvToolkit</a> by Ivorius <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> JAOPCA</a> by TheLMiffy1111 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> JEI Bees</a> by bdew <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> JEI Integration</a> by tonius11, SnowShock35 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Jon's Exclusives</a> by Jon <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough Drags</a> by warmthdawn <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough Energistics</a> by TheRealp455w0rd <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough HarvestCraft</a> by mrAppleXZ <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough Pattern Banners</a> by Lorexe <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough Reactors</a> by BrainStone <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough Resources</a> by way2muchnoise <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Just Enough Throwing In Fluids</a> by Lykrast <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> JustEnoughIDs</a> by Runemoro, ZombieHDGaming <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> KleeSlabs</a> by BlayTheNinth <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> LemonLib</a> by Lemonszz <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Let Sleeping Dogs Lie</a> by ohaiiChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Linking Through the Ages (LTTA)</a> by IAmTheFloydman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> linking-tweaks</a> by Veovis_Muaddib <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Login Shield</a> by Glasspelican <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Logistics Pipes</a> by mc_rs485, theZoro266, davboecki <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> LoliASM</a> by Rongmario <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Long Fall Boots</a> by Nano_Heart <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> LootTweaker</a> by Daomephsta <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Lost Magic</a> by Spiteful_Fox <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> LunatriusCore</a> by Lunatrius <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Magic Bees</a> by MysteriousAges <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Main Menu Scale</a> by modmuss50 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Mantle</a> by mDiyo, ProgWML6, bonusboni <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MCMultiPart</a> by amadornes, 2xsaiko <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Mekanism</a> by aidancbrady <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MekanismGenerators</a> by aidancbrady <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MekanismTools</a> by aidancbrady <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Minor Integrations and Additions</a> by SokyranTheDragon <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MixinBooter</a> by Rongmario <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MJRLegends Lib</a> by MJRLegends <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ModTweaker</a> by joshiejack, Jaredlll08 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Modular Powersuits</a> by MachineMuse <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Modular Routers</a> by desht_08 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> More Mystcraft</a> by IAmTheFloydman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> More Overlays</a> by FeldiM245 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Morph</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Morph-o-Tool</a> by Vazkii <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Morpheus</a> by Quetzi <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MrCrayfish's Furniture Mod</a> by MrCrayfish <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MrTJPCore</a> by MrTJP <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MTLib</a> by Jaredlll08 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Myst Library</a> by Veovis_Muaddib, IAmTheFloydman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Mystcraft</a> by XCompWiz <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Mystcraft / OC Integration</a> by BrisingrAerowing <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> mystcraft-info</a> by Veovis_Muaddib, IAmTheFloydman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Mystical Agriculture</a> by BlakeBr0 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> MysticalLib</a> by elucent_, EpicSquid319, Noobanidus, Martacus, Davoleo_K <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Natura</a> by mDiyo, ProgWML6, Alexbegt <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Nature's Compass</a> by Chaosyr <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Netherending Ores</a> by ic_trab <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> NetherPortalFix</a> by BlayTheNinth <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> No Recipe Book</a> by Seneschal_Luwin <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> NoMoreRecipeConflict</a> by stimmedcow, GotoLink <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Numina</a> by MachineMuse <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> OMLib</a> by voltyfarstar, Keridos <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Open Modular Turrets</a> by Poenjabiesous, voltyfarstar, Keridos <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> OpenBlocks</a> by OpenMods Team <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> OpenComputers</a> by Sangar <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> OpenComputers ICBM Addon</a> by TheEternalSoap <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> OpenEye</a> by OpenMods Team <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”>OpenModsLib</a> by OpenMods Team <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Pack Crash Info</a> by BloodWorkXGaming <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Pages</a> by IAmTheFloydman, Veovis_Muaddib <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Pam's Harvestcraft</a> by MatrexsVigil, pamharvestcraft <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Patchouli</a> by Vazkii <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Picture in Picture</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Planet Progression</a> by MJRLegends <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Player Plates</a> by Gaz_ <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Plethora Peripherals</a> by SquidDev <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> PlusTiC</a> by landmaster_phuong0429 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> PneumaticCraft</a> by MineMaarten, desht_08 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Portal Gun</a> by iChun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - Base</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - Compact</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - Fabrication</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - Integration</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - Lighting</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - Mechanical</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Project Red - World</a> by MrTJP, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Quark</a> by Vazkii, wiiv <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Railcraft</a> by CovertJaguar <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> RandomPatches</a> by TheRandomLabs <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Reach Fix</a> by Meldexun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ReAuth</a> by TechnicianLP <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Reborn Core</a> by modmuss50, GigaBit101, ProspectorDev <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Recurrent Complex</a> by Ivorius <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Redstone Arsenal</a> by Team CoFH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Redstone Flux</a> by KingLemming <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ReForbidden Magic</a> by keletu66666, justGameR413, Spiteful_Fox <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Reforged</a> by HypaSpeeed <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Reliquary</a> by TheMike, x3n0ph0b3, P3pp3rF1y <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> RenderLib</a> by Meldexun <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Resource Loader</a> by Lumien <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Roguelike Dungeons</a> by Greymerk <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Schematica</a> by Luantrius <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Seared Ladder Backport</a> by jbredwards <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Shadowfacts' Forgelin</a> by ShadowfactsDev <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Simply Jetpacks</a> by Tonius <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Smooth Font</a> by bre2el <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Smooth Scrolling Everywhere</a> by shedaniel <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Sonomagy</a> by TechnoMysterio <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Sound Device Options</a> by ichttt <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Space Ambient</a> by BlesseNtumble <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> SplashAnimation</a> by Asie <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Startup Timer</a> by embeddedt <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Statues</a> by Automatic_Maiden, Asiekierka, Lemonszz <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Steve's Carts Reborn</a> by modmuss50 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Super Factory Manager</a> by TeamDman <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Super Sound Muffler: Revived</a> by EdgarAllen, Firstnecron <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Tesla Core Lib</a> by face_of_cat <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumcraft</a> by Azanor <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumic Augmentation</a> by TheCodex6824, TechnoMysterio <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumic Computers</a> by jco2641 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumic Energistics</a> by Nividica, BrockWS, TheRealp455w0rd <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumic JEI</a> by Buuz135 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumic Tinkerer</a> by pixlepix, Nekosune <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thaumic Wonders</a> by daedalus4096 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ThaumicWaila</a> by xfl03 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> ThaumTweaks</a> by GrigLog <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> The Twilight Forest</a> by Benimatic, williewillus, Drullkus, Tamaized, AtomicBlom <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thermal Cultivation</a> by TeamCoFH, KingLemming <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thermal Dynamics</a> by Team CoFH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thermal Expansion</a> by Team CoFH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thermal Foundation</a> by TeamCoFH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Thermal Innovation</a> by TeamCoFH <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Tinker's JEI</a> by Possible_triangle <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Tinkers Construct</a> by mDiyo, boni, KnightMiner <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Tinkers OreDict Cache</a> by youyihj <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Tinkers' Addons</a> by oitsjustjose <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> TipTheScales</a> by Jaredlll08 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Torchmaster</a> by xalcon <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Translocators</a> by ChickenBones <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Tumbleweed</a> by konwboj <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> UniDict</a> by WanionCane <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> UniQ</a> by fake_domi, Rongmario <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”>Universal Tweaks</a> by ACGaming <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> VoxelMap</a> by MamiyaOtaru <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> VoxelMap Fixes</a> by ACGaming <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Waila Harvestability</a> by squeek502 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> WanionLib</a> by WanionCane <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Whoosh</a> by Imba_Knugel, EpicSquid319 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> Wireless Redstone CBE</a> by ChickenBones, covers1624 <br><br>

        <a class="mod_title" href="https://ftb.fandom.com/wiki/Additional_Banners" target=”_blank”> World Control</a> by xbony2, mincrmatt12, dmf444, The_CodedOne <br>

        </p>
      </div>
      
      <div class="footer"><p>@ 2023 <span>Minecraftas.lt</span> | Visos teisės saugomos</p></div>
  </div>
 </body>
    
</html>