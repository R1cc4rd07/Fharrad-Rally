<?php
/**
 * Created by PhpStorm.
 * User: Riccardo Schula
 * Date: 3/8/18
 * Time: 8:32 PM
 */
include 'head/head.php';
?>
        <header>
        </header>
        <nav>
            <label for="show-menu" class="show-menu"><span>&#9776;</span> Navigation</label>
            <input type="checkbox" id="show-menu" role="button">
            <ul id="menu">
                <li><a <?php if ($thisPage == "Home") echo'class="active"';?> href="/index">Home</a></li>
                <li class="dropdown03">
                  <a <?php if ($thisPage == 'New Pictures' || $thisPage == 'Old Pictures') echo'class="active"';?> href="javascript:void(0)" class="dropbtn">Bilder &dArr;</a>
                  <div class="dropdown_Bilder_content">
                    <a <?php if ($thisPage == 'New Pictures') echo'class="active"';?> href="/html/Neue_Bilder">Neue Bilder</a>
                    <a <?php if ($thisPage == 'Old Pictures') echo'class="active"';?> href="/html/Alte_Bilder">Alte Bilder</a>
                  </div>
                </li>
                <li class="dropdown00">
                    <a <?php if ($thisPage == 'Strecke 2018' || $thisPage == 'Strecke 2017' || $thisPage == 'Strecke 2016' || $thisPage == 'Strecke 2015' || $thisPage == 'Strecke 2014') echo 'class="active"'; ?> href="javascript:void(0)" class="dropbtn">Strecken &dArr;</a>
                    <div class="dropdown_Strecken_content">
                        <a <?php if ($thisPage =="Strecke 2018") echo'class="active"';?> href="/html/2018/strecke_2018">2018</a>
                        <a <?php if ($thisPage =="Strecke 2017") echo'class="active"';?> href="/html/2017/strecke_2017">2017</a>
                        <a <?php if ($thisPage =="Strecke 2016") echo'class="active"';?> href="/html/2016/strecke_2016">2016</a>
                        <a <?php if ($thisPage =="Strecke 2015") echo'class="active"';?> href="/html/2015/strecke_2015">2015</a>
                        <a <?php if ($thisPage =="Strecke 2014") echo'class="active"';?> href="/html/2014/strecke_2014">2014</a>

                    </div>
                </li>
                <li class="dropdown01">
                    <a <?php if ($thisPage == 'Ergebnisse 2018' || $thisPage == 'Ergebnisse 2017' || $thisPage == 'Ergebnisse 2016' || $thisPage == 'Ergebnisse 2015' || $thisPage == 'Ergebnisse 2014') echo 'class="active"'; ?> href="javascript:void(0)" class="dropbtn">Ergebnisse &dArr;</a>
                    <div class="dropdown_Ergebnisse_content">
                        <a <?php if ($thisPage == 'Ergebnisse 2018') echo 'class="active"';?> href="/html/2018/ergebnisse_2018">2018</a>
                        <a <?php if ($thisPage =="Ergebnisse 2017") echo 'class="active"';?> href="/html/2017/ergebnisse_2017">2017</a>
                        <a <?php if ($thisPage =="Ergebnisse 2016") echo 'class="active"';?> href="/html/2016/ergebnisse_2016">2016</a>
                        <a <?php if ($thisPage =="Ergebnisse 2015") echo 'class="active"';?> href="/html/2015/ergebnisse_2015">2015</a>
                        <a <?php if ($thisPage =="Ergebnisse 2014") echo 'class="active"';?> href="/html/2014/ergebnisse_2014">2014</a>
                    </div>
                </li>
                <li class="dropdown02">
                    <a  <?php if ( $thisPage == 'Fragen 2018' || $thisPage == 'Fragen 2015' || $thisPage == 'Fragen 2014') echo 'class="active"'; ?> href="javascript:void(0)" class="dropbtn">Fragen &dArr;</a>
                    <div class="dropdown_Fragen_content">
                        <a <?php if ($thisPage =="Fragen 2018") echo'class="active"';?> href="/html/2018/fragen_2018">2018</a>
                        <a <?php if ($thisPage =="Fragen 2015") echo'class="active"';?> href="/html/2015/fragen_2015">2015</a>
                        <a <?php if ($thisPage =="Fragen 2014") echo'class="active"';?> href="/html/2014/fragen_2014">2014</a>
                    </div>
                </li>
                <li><a <?php if ($thisPage =="Chronik") echo'class="active"';?> href="/html/chronik">Chronik</a></li>
                <li><a <?php if ($thisPage =="Presse") echo'class="active"';?> href="/html/presse">Presse</a></li>
                <li><a <?php if ($thisPage =="Impressum") echo'class="active"';?> href="/html/impressum">Impressum</a></li>
            </ul>
        </nav>
