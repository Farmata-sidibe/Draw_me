
<?php require('partials/header_dessin.php'); ?>


<div class="container">

<nav>
    <div class="menu">

        <input type="checkbox" id="check">
        <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>
        <div class="sidebar">

            <a href="/index.php">
                <header>Accueil</header>
            </a>
            <ul>
                <li>
                        
                        <i class="fa-solid fa-download"></i>
                        <button type="submit" id="btnSave" >Sauvegarder</button>
                    
                </li>
                <li>
                    
                        <i class="fa-solid fa-spinner"></i>
                        <button type="submit" onclick="functload()">Charger</button>
                    
                </li>
                
                <li>
                    
                        <i class="fa-solid fa-file-export"></i>
                        <button type="submit" id="btnExportPDF" onclick="functExportPDF()">Export PDF</button>
                    
                </li>
                <li>
                        <i class="fa-solid fa-file-export"></i>
                        <button type="submit" id="btnExportPNG" onclick="doCapture();">Export JPG</button>
                </li>

                <li class="btnim">
                    <a href="/filename.png">
                        <i class="fa-solid fa-file-export"></i>
                        <button type="submit" id="btnimg" >Voir l'image</button>
                        </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="content_btn">

    <button id="btn_rect">&#x25AD;</button>
    <button id="btn_circle">&#9675;</button>
    <button id="btn_triangle">&#9651;</button>
    <button id="btn_text">T</button>


    </div>
    <img src="./image/Logo_final-draw_me.png" class="logo" alt="logo">

   

</nav>

<div class="dessin">
<div id="zone_dessin" name="monCode" method="post">

</div>

</div>


</div>




<?php require('partials/footer.php'); ?>

