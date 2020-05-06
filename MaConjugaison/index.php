<?php include 'VIEWS/index.views.php';?>
<?php
if($_POST['conjuguer']) {
  //je recupere mes varible du formulaire
  $verbe = addslashes($_POST['verbe']);
  $temps = addslashes($_POST['temps']);
  //verification de temps du verbe(premier groupe)
  $position = strrpos($verbe, "er");

  //verbe terminé par éter
  $eter = strrpos($verbe, "éter");
  //verbe terminé par éder
  $eder = strrpos($verbe, "éder");
  //verbe terminé par érer
  $erer = strrpos($verbe, "érer");
  //verbe terminé par nger
 $nger = strrpos($verbe, "nger");
  //verbe terminé par uger
  $uger = strrpos($verbe, "uger");
  //verbe en ecer
    $cer = strrpos($verbe, "cer");

  // si verbe est du premier groupe
 if ($position) {
    if ($verbe != 'aller') {
      if ($temps == 'present') {
              //debut if voyelle ou h
        if ( substr_compare('$verbe','h', 1) || substr_compare('$verbe','a', 1) || substr_compare('$verbe','e', 1)
           || substr_compare('$verbe','u', 1) || substr_compare('$verbe','i', 1) || substr_compare('$verbe','o', 1))
          {
              if ($eter) {
                echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                        echo "<center>";
                        echo " J' ".lreplace("éter","<font color='blue'>ète</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("éter","<font color='blue'>ètes</font>",$verbe)."<br/>";
                        echo "Il ou elle ".lreplace("éter","<font color='blue'>ète</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("éter","<font color='blue'>étons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("éter","<font color='blue'>étez</font>",$verbe)."<br/>";
                        echo "Ils ou elles ".lreplace("éter","<font color='blue'>ètent</font>",$verbe)."<br/>";
                        echo "</center>";

              }//fin du if verbe terminé par éter
              elseif ($eder) {
                echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                        echo "<center>";
                        echo " J' ".lreplace("éder","<font color='blue'>ède</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("éder","<font color='blue'>èdes</font>",$verbe)."<br/>";
                        echo "Il ou elle ".lreplace("éder","<font color='blue'>ède</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("éder","<font color='blue'>édons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("éder","<font color='blue'>édez</font>",$verbe)."<br/>";
                        echo "Ils ou elles ".lreplace("éder","<font color='blue'>èdent</font>",$verbe)."<br/>";
              }//fin du if verbe terminé par éder
              elseif ($cer) {
                echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                        echo "<center>";
                        echo "J' ".lreplace("cer","<font color='blue'>ce</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("cer","<font color='blue'>ces</font>",$verbe)."<br/>";
                        echo "Il ou elle ".lreplace("cer","<font color='blue'>ce</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("cer","<font color='blue'>ceons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("cer","<font color='blue'>cez</font>",$verbe)."<br/>";
                        echo "Ils ou elles ".lreplace("cer","<font color='blue'>cent</font>",$verbe)."<br/>";
              }//fin du if verbe terminé par cer au present
              elseif ($erer) {
                echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                        echo "<center>";
                        echo " J' ".lreplace("érer","<font color='blue'>ère</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("érer","<font color='blue'>ères</font>",$verbe)."<br/>";
                        echo "Il ou elle ".lreplace("érer","<font color='blue'>ère</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("érer","<font color='blue'>érons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("érer","<font color='blue'>érez</font>",$verbe)."<br/>";
                        echo "Ils ou elles ".lreplace("érer","<font color='blue'>èrent</font>",$verbe)."<br/>";
              }//fin du if verbe terminé par érer
              elseif ($nger) {
                echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                        echo "<center>";
                        echo " J' ".lreplace("nger","<font color='blue'>nge</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("nger","<font color='blue'>nges</font>",$verbe)."<br/>";
                        echo "Il ou elle ".lreplace("nger","<font color='blue'>nge</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("nger","<font color='blue'>ngeons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("nger","<font color='blue'>ngez</font>",$verbe)."<br/>";
                        echo "Ils ou elles ".lreplace("nger","<font color='blue'>ngent</font>",$verbe)."<br/>";


               }// fin du verbe terminé par nger
               elseif ($uger) {
                 echo "<br>";
                         echo "<br>";
                         echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                         echo "<center>";
                         echo " J' ".lreplace("uger","<font color='blue'>uge</font>",$verbe)."<br/>";
                         echo "Tu ".lreplace("uger","<font color='blue'>uges</font>",$verbe)."<br/>";
                         echo "Il ou elle ".lreplace("uger","<font color='blue'>uge</font>",$verbe)."<br/>";
                         echo "Nous ".lreplace("uger","<font color='blue'>ugeons</font>",$verbe)."<br/>";
                         echo "Vous ".lreplace("uger","<font color='blue'>ugez</font>",$verbe)."<br/>";
                         echo "Ils ou elles ".lreplace("uger","<font color='blue'>ugent</font>",$verbe)."<br/>";


              }// fin du verbe terminé par uger
              else{
                echo "<br>";
                          echo "<br>";
                          echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent de l'indicatif</center></u></h4>";

                          echo "<center>";
                          echo " J' ".lreplace("er","<font color='blue'>e</font>",$verbe)."<br/>";
                          echo "Tu ".lreplace("er","<font color='blue'>es</font>",$verbe)."<br/>";
                          echo "Il ou elle ".lreplace("er","<font color='blue'>e</font>",$verbe)."<br/>";
                          echo "Nous ".lreplace("er","<font color='blue'>ons</font>",$verbe)."<br/>";
                          echo "Vous ".lreplace("er","<font color='blue'>ez</font>",$verbe)."<br/>";
                          echo "Ils ou elles ".lreplace("er","<font color='blue'>ent</font>",$verbe)."<br/>";
                          echo "</center>";
              }

        } //fin if voyelle ou h
        //debut du else de voyelle ou h
        else {

          if ($eter) {
            echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éter","<font color='blue'>ète</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éter","<font color='blue'>ètes</font>",$verbe)."<br/>";
                    echo "Il ou elle ".lreplace("éter","<font color='blue'>ète</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éter","<font color='blue'>étons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éter","<font color='blue'>étez</font>",$verbe)."<br/>";
                    echo "Ils ou elles ".lreplace("éter","<font color='blue'>ètent</font>",$verbe)."<br/>";
                    echo "</center>";

          }//fin du if verbe terminé par éter
          elseif ($eder) {
            echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éder","<font color='blue'>ède</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éder","<font color='blue'>èdes</font>",$verbe)."<br/>";
                    echo "Il ou elle ".lreplace("éder","<font color='blue'>ède</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éder","<font color='blue'>édons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éder","<font color='blue'>édez</font>",$verbe)."<br/>";
                    echo "Ils ou elles ".lreplace("éder","<font color='blue'>èdent</font>",$verbe)."<br/>";
          }//fin du if verbe terminé par éder
          elseif ($cer) {
            echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ou J' ".lreplace("cer","<font color='blue'>ce</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("cer","<font color='blue'>ces</font>",$verbe)."<br/>";
                    echo "Il ou elle ".lreplace("cer","<font color='blue'>ce</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("cer","<font color='blue'>ceons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("cer","<font color='blue'>cez</font>",$verbe)."<br/>";
                    echo "Ils ou elles ".lreplace("cer","<font color='blue'>cent</font>",$verbe)."<br/>";
          }//fin du if verbe terminé par cer au present
          elseif ($erer) {
            echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("érer","<font color='blue'>ère</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("érer","<font color='blue'>ères</font>",$verbe)."<br/>";
                    echo "Il ou elle ".lreplace("érer","<font color='blue'>ère</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("érer","<font color='blue'>érons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("érer","<font color='blue'>érez</font>",$verbe)."<br/>";
                    echo "Ils ou elles ".lreplace("érer","<font color='blue'>èrent</font>",$verbe)."<br/>";
          }//fin du if verbe terminé par érer
          elseif ($nger) {
            echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ou J' ".lreplace("nger","<font color='blue'>nge</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("nger","<font color='blue'>nges</font>",$verbe)."<br/>";
                    echo "Il ou elle ".lreplace("nger","<font color='blue'>nge</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("nger","<font color='blue'>ngeons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("nger","<font color='blue'>ngez</font>",$verbe)."<br/>";
                    echo "Ils ou elles ".lreplace("nger","<font color='blue'>ngent</font>",$verbe)."<br/>";


           }// fin du verbe terminé par nger
           elseif ($uger) {
             echo "<br>";
                     echo "<br>";
                     echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent</center></u></h4>";

                     echo "<center>";
                     echo "Je ".lreplace("uger","<font color='blue'>uge</font>",$verbe)."<br/>";
                     echo "Tu ".lreplace("uger","<font color='blue'>uges</font>",$verbe)."<br/>";
                     echo "Il ou elle ".lreplace("uger","<font color='blue'>uge</font>",$verbe)."<br/>";
                     echo "Nous ".lreplace("uger","<font color='blue'>ugeons</font>",$verbe)."<br/>";
                     echo "Vous ".lreplace("uger","<font color='blue'>ugez</font>",$verbe)."<br/>";
                     echo "Ils ou elles ".lreplace("uger","<font color='blue'>ugent</font>",$verbe)."<br/>";


          }// fin du verbe terminé par uger
          else{
            echo "<br>";
                      echo "<br>";
                      echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au présent de l'indicatif</center></u></h4>";

                      echo "<center>";
                      echo "Je ".lreplace("er","<font color='blue'>e</font>",$verbe)."<br/>";
                      echo "Tu ".lreplace("er","<font color='blue'>es</font>",$verbe)."<br/>";
                      echo "Il ou elle ".lreplace("er","<font color='blue'>e</font>",$verbe)."<br/>";
                      echo "Nous ".lreplace("er","<font color='blue'>ons</font>",$verbe)."<br/>";
                      echo "Vous ".lreplace("er","<font color='blue'>ez</font>",$verbe)."<br/>";
                      echo "Ils ou elles ".lreplace("er","<font color='blue'>ent</font>",$verbe)."<br/>";
                      echo "</center>";
          }


        }// fin du else voyelle ou h

      }//fin du if temps present
      if ($temps =='futurS'){
         if ($eter) {
           echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au futur Simple</center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("éter","<font color='blue'>éterai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("éter","<font color='blue'>éteras</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("éter","<font color='blue'>ète</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("éter","<font color='blue'>étons</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("éter","<font color='blue'>étez</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("éter","<font color='blue'>étent</font>",$verbe)."<br/>";
                  echo "</center>";
         }//fin du if eter au futur Simple
         elseif ($eder) {
           echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au futur Simple</center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("éder","<font color='blue'>éderai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("éder","<font color='blue'>éderas</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("éder","<font color='blue'>èdera</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("éder","<font color='blue'>éderons</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("éder","<font color='blue'>éderez</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("éder","<font color='blue'>éderont</font>",$verbe)."<br/>";
         }//fin du if eder au futur Simple
         elseif ($cer) {
           echo "<br>";
                   echo "<br>";
                   echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au Futur Simple </center></u></h4>";

                   echo "<center>";
                   echo "Je ou J' ".lreplace("cer","<font color='blue'>cerai</font>",$verbe)."<br/>";
                   echo "Tu ".lreplace("cer","<font color='blue'>cera</font>",$verbe)."<br/>";
                   echo "Il ou elle ".lreplace("cer","<font color='blue'>cera</font>",$verbe)."<br/>";
                   echo "Nous ".lreplace("cer","<font color='blue'>cerons</font>",$verbe)."<br/>";
                   echo "Vous ".lreplace("cer","<font color='blue'>cerez</font>",$verbe)."<br/>";
                   echo "Ils ou elles".lreplace("cer","<font color='blue'>ceront</font>",$verbe)."<br/>";
         }//fin du if verbe terminé par cer au futur simple
         elseif ($erer) {
           echo "<br>";
                   echo "<br>";
                   echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au Futur Simple</center></u></h4>";

                   echo "<center>";
                   echo "Je ou J' ".lreplace("érer","<font color='blue'>érerai</font>",$verbe)."<br/>";
                   echo "Tu ".lreplace("érer","<font color='blue'>éreras</font>",$verbe)."<br/>";
                   echo "Il ou elle ".lreplace("érer","<font color='blue'>érera</font>",$verbe)."<br/>";
                   echo "Nous ".lreplace("érer","<font color='blue'>érerons</font>",$verbe)."<br/>";
                   echo "Vous ".lreplace("érer","<font color='blue'>érerez</font>",$verbe)."<br/>";
                   echo "Ils ou elles ".lreplace("érer","<font color='blue'>éreront</font>",$verbe)."<br/>";
         }//fin du if erer au futur Simple
         else {
           echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au futur Simple </center></u></h4>";

                    echo "<center>";
                    echo "Je ou J' ".lreplace("er","<font color='blue'>erai</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("er","<font color='blue'>eras</font>",$verbe)."<br/>";
                    echo "Il ou elle ".lreplace("er","<font color='blue'>era</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("er","<font color='blue'>erons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("er","<font color='blue'>erez</font>",$verbe)."<br/>";
                    echo "Ils ou elles".lreplace("er","<font color='blue'>eront</font>",$verbe)."<br/>";
                    echo "</center>";
         }

      }//fin du if temps futur simple
      elseif ($temps =='passeS') {
        if ($eter) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple </center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("éter","<font color='blue'>étai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("éter","<font color='blue'>étas</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("éter","<font color='blue'>éta</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("éter","<font color='blue'>étâmes</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("éter","<font color='blue'>étâtes</font>",$verbe)."<br/>";
                  echo "Ils ou elles".lreplace("éter","<font color='blue'>étèrent</font>",$verbe)."<br/>";
                  echo "</center>";
        }//fin du if de eter au passe simple
        elseif ($eder) {
          echo "<br>";
                 echo "<br>";
                 echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple </center></u></h4>";

                 echo "<center>";
                 echo "Je ou J' ".lreplace("éder","<font color='blue'>édai</font>",$verbe)."<br/>";
                 echo "Tu ".lreplace("éder","<font color='blue'>édas</font>",$verbe)."<br/>";
                 echo "Il ou elle ".lreplace("éder","<font color='blue'>éda</font>",$verbe)."<br/>";
                 echo "Nous ".lreplace("éder","<font color='blue'>édâmes</font>",$verbe)."<br/>";
                 echo "Vous ".lreplace("éder","<font color='blue'>édâtes</font>",$verbe)."<br/>";
                 echo "Ils ou elles ".lreplace("éder","<font color='blue'>édèrent</font>",$verbe)."<br/>";
        }//fin du if de eder au passe simple
        elseif ($cer) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple</center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("cer","<font color='blue'>ceai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("cer","<font color='blue'>cea</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("cer","<font color='blue'>cea</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("cer","<font color='blue'>ceames</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("cer","<font color='blue'>ceates</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("cer","<font color='blue'>cerent</font>",$verbe)."<br/>";
        }//fin du if verbe terminé par cer au passé simple
        elseif ($erer) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple </center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("érer","<font color='blue'>érai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("érer","<font color='blue'>éras</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("érer","<font color='blue'>éra</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("érer","<font color='blue'>érames</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("érer","<font color='blue'>érates</font>",$verbe)."<br/>";
                  echo "Ils ou elles".lreplace("érer","<font color='blue'>érerent</font>",$verbe)."<br/>";
        }//fin du if de erer au passe simple
        elseif ($nger) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au Passé Simple</center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("nger","<font color='blue'>ngeai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("nger","<font color='blue'>ngeas</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("nger","<font color='blue'>ngea</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("nger","<font color='blue'>ngeâmes</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("nger","<font color='blue'>ngeâtes</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("nger","<font color='blue'>ngèrent</font>",$verbe)."<br/>";
        }//fin du if de nger au passe simple
        elseif ($uger) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple </center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("uger","<font color='blue'>ugeais</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("uger","<font color='blue'>ugeais</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("uger","<font color='blue'>ugeait</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("uger","<font color='blue'>ugerions</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("uger","<font color='blue'>ugeriez</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("uger","<font color='blue'>ugeraient</font>",$verbe)."<br/>";
         }//fin du if de uger au passe simple
        else {
          echo "<br>";
                echo "<br>";
                echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au Passé Simple</center></u></h4>";

                echo "<center>";
                echo "Je ou J' ".lreplace("er","<font color='blue'>ai</font>",$verbe)."<br/>";
                echo "Tu ".lreplace("er","<font color='blue'>as</font>",$verbe)."<br/>";
                echo "Il ou elle ".lreplace("er","<font color='blue'>a</font>",$verbe)."<br/>";
                echo "Nous ".lreplace("er","<font color='blue'>âmes</font>",$verbe)."<br/>";
                echo "Vous ".lreplace("er","<font color='blue'>âtes</font>",$verbe)."<br/>";
                echo "Ils ou elles ".lreplace("er","<font color='blue'>èrent</font>",$verbe)."<br/>";
        }
      }//fin du if temps passe simple
      elseif ($temps == 'Imparfait') {
        if ($eter) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> a l'Imparfait de l'Indicatif </center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("éter","<font color='blue'>étais</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("éter","<font color='blue'>étais</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("éter","<font color='blue'>était</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("éter","<font color='blue'>étions</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("éter","<font color='blue'>étiez</font>",$verbe)."<br/>";
                  echo "Ils ou elles".lreplace("éter","<font color='blue'>étaient</font>",$verbe)."<br/>";
                  echo "</center>";
        }//fin du if de eter  a l'Imparfait de l'Indicatif
        elseif ($eder) {
          echo "<br>";
                 echo "<br>";
                 echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> a l'Imparfait de l'Indicatif </center></u></h4>";

                 echo "<center>";
                 echo "Je ou J' ".lreplace("éder","<font color='blue'>édais</font>",$verbe)."<br/>";
                 echo "Tu ".lreplace("éder","<font color='blue'>édais</font>",$verbe)."<br/>";
                 echo "Il ou elle ".lreplace("éder","<font color='blue'>édait</font>",$verbe)."<br/>";
                 echo "Nous ".lreplace("éder","<font color='blue'>édions</font>",$verbe)."<br/>";
                 echo "Vous ".lreplace("éder","<font color='blue'>édiez</font>",$verbe)."<br/>";
                 echo "Ils ou elles ".lreplace("éder","<font color='blue'>édaient</font>",$verbe)."<br/>";
        }//fin du if de eder a l'Imparfait de l'Indicatif
        elseif ($cer) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple</center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("cer","<font color='blue'>ceai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("cer","<font color='blue'>cea</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("cer","<font color='blue'>cea</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("cer","<font color='blue'>ceames</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("cer","<font color='blue'>ceates</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("cer","<font color='blue'>cerent</font>",$verbe)."<br/>";
        }//fin du if verbe terminé par cer au passé simple
        elseif ($erer) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple </center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("érer","<font color='blue'>érai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("érer","<font color='blue'>éras</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("érer","<font color='blue'>éra</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("érer","<font color='blue'>érames</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("érer","<font color='blue'>érates</font>",$verbe)."<br/>";
                  echo "Ils ou elles".lreplace("érer","<font color='blue'>érerent</font>",$verbe)."<br/>";
        }//fin du if de erer au passe simple
        elseif ($nger) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au Passé Simple</center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("nger","<font color='blue'>ngeai</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("nger","<font color='blue'>ngeas</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("nger","<font color='blue'>ngea</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("nger","<font color='blue'>ngeâmes</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("nger","<font color='blue'>ngeâtes</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("nger","<font color='blue'>ngèrent</font>",$verbe)."<br/>";
        }//fin du if de nger au passe simple
        elseif ($uger) {
          echo "<br>";
                  echo "<br>";
                  echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au passé simple </center></u></h4>";

                  echo "<center>";
                  echo "Je ou J' ".lreplace("uger","<font color='blue'>ugeais</font>",$verbe)."<br/>";
                  echo "Tu ".lreplace("uger","<font color='blue'>ugeais</font>",$verbe)."<br/>";
                  echo "Il ou elle ".lreplace("uger","<font color='blue'>ugeait</font>",$verbe)."<br/>";
                  echo "Nous ".lreplace("uger","<font color='blue'>ugerions</font>",$verbe)."<br/>";
                  echo "Vous ".lreplace("uger","<font color='blue'>ugeriez</font>",$verbe)."<br/>";
                  echo "Ils ou elles ".lreplace("uger","<font color='blue'>ugeraient</font>",$verbe)."<br/>";
         }//fin du if de uger au passe simple
        else {
          echo "<br>";
                echo "<br>";
                echo "<h4><u><center>Le verbe <font color='blue'>$verbe</font> au Passé Simple</center></u></h4>";

                echo "<center>";
                echo "Je ou J' ".lreplace("er","<font color='blue'>ai</font>",$verbe)."<br/>";
                echo "Tu ".lreplace("er","<font color='blue'>as</font>",$verbe)."<br/>";
                echo "Il ou elle ".lreplace("er","<font color='blue'>a</font>",$verbe)."<br/>";
                echo "Nous ".lreplace("er","<font color='blue'>âmes</font>",$verbe)."<br/>";
                echo "Vous ".lreplace("er","<font color='blue'>âtes</font>",$verbe)."<br/>";
                echo "Ils ou elles ".lreplace("er","<font color='blue'>èrent</font>",$verbe)."<br/>";
        }//jhgdfghjklmmlkjhgfdfghj

      }
      //fin du si voyelle
    }//fin du si different de aller
    // elseif($verbe =='jéter'|| $verbe =='gueter' && $verbe != 'aller' && $temps == 'present'){
    //   echo "<br>";
    //            echo "<br>";
    //            echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au présent</center></u></h4>";
    //
    //            echo "<center>";
    //            echo "Je ".lreplace("éter","<font color='red'>ètte</font>",$verbe)."<br/>";
    //            echo "Tu ".lreplace("éter","<font color='red'>èttes</font>",$verbe)."<br/>";
    //            echo "Il ".lreplace("éter","<font color='red'>ètte</font>",$verbe)."<br/>";
    //            echo "Nous ".lreplace("éter","<font color='red'>éttons</font>",$verbe)."<br/>";
    //            echo "Vous ".lreplace("éter","<font color='red'>éttez</font>",$verbe)."<br/>";
    //            echo "Ils ".lreplace("éter","<font color='red'>èttent</font>",$verbe)."<br/>";
    //            echo "</center>";
    // }//fin de jéter au present
    // elseif($verbe =='jéter'|| $verbe =='gueter' && $verbe != 'aller' && $temps == 'passeS'){
    //   echo "<br>";
    //           echo "<br>";
    //           echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au passé</center></u></h4>";
    //
    //           echo "<center>";
    //           echo "Je ".lreplace("éter","<font color='red'>éttai</font>",$verbe)."<br/>";
    //           echo "Tu ".lreplace("éter","<font color='red'>éttas</font>",$verbe)."<br/>";
    //           echo "Il ou elle".lreplace("éter","<font color='red'>étta</font>",$verbe)."<br/>";
    //           echo "Nous ".lreplace("éter","<font color='red'>éttâmes</font>",$verbe)."<br/>";
    //           echo "Vous ".lreplace("éter","<font color='red'>éttâtes</font>",$verbe)."<br/>";
    //           echo "Ils ou elles".lreplace("éter","<font color='red'>éttèrent</font>",$verbe)."<br/>";
    //           echo "</center>";
    // }//fin de jéter au passé simple
    // elseif($verbe =='jéter'|| $verbe =='gueter' && $verbe != 'aller' && $temps == 'futurS'){
    //   echo "<br>";
    //          echo "<br>";
    //          echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au futur</center></u></h4>";
    //
    //          echo "<center>";
    //          echo "Je ".lreplace("éter","<font color='red'>étterai</font>",$verbe)."<br/>";
    //          echo "Tu ".lreplace("éter","<font color='red'>étteras</font>",$verbe)."<br/>";
    //          echo "Il ou elle".lreplace("éter","<font color='red'>ètte</font>",$verbe)."<br/>";
    //          echo "Nous ".lreplace("éter","<font color='red'>éttons</font>",$verbe)."<br/>";
    //          echo "Vous ".lreplace("éter","<font color='red'>éttez</font>",$verbe)."<br/>";
    //          echo "Ils ou elle ".lreplace("éter","<font color='red'>éttent</font>",$verbe)."<br/>";
    //          echo "</center>";
    // }//fin de jéter au futur simple
    else //if($verbe == 'aller')
    {
      echo "<center>";
      echo " <h2>verbe <font color='red'>$verbe</font> n'est pas du premier groupe...merci </h2>";
      echo "</center>";
    }
 }//fin du if sur le premier groupe(position)
}
// if ($verbe == 'jéter') {
//   echo "<br>";
//           echo "<br>";
//           echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au présent</center></u></h4>";
//
//           echo "<center>";
//           echo "Je ".lreplace("éter","<font color='red'>ètte</font>",$verbe)."<br/>";
//           echo "Tu ".lreplace("éter","<font color='red'>èttes</font>",$verbe)."<br/>";
//           echo "Il ".lreplace("éter","<font color='red'>ètte</font>",$verbe)."<br/>";
//           echo "Nous ".lreplace("éter","<font color='red'>éttons</font>",$verbe)."<br/>";
//           echo "Vous ".lreplace("éter","<font color='red'>éttez</font>",$verbe)."<br/>";
//           echo "Ils ".lreplace("éter","<font color='red'>èttent</font>",$verbe)."<br/>";
//           echo "</center>";
// }//fin du if de jeter

  function lreplace($terminaison,$replace,$verbe){
      $pos = strrpos($verbe,$terminaison);
      if($pos !== false ){
          $subject = substr_replace($verbe, $replace, $pos, strlen($terminaison));
      }

      return $subject;
  }
 ?>
