<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="./main.css" rel="stylesheet" />
    <title>Verbe du 1er groupe</title>
  </head>
  <body>
    <br>
    <center> <h1>JE CONJUGUE LES VERBES DU PREMIER GROUPE!!!</h1></center>
    <br><br>
    <div class="s003">
      <form method="post" action="./index.php">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="temps" class="selection">
                <option placeholder=""><h1><b>TEMPS</b></h1></option>
                <option value="present">Présent</option>
                <option value="futurS">Futur Simple</option>
                <option value="passeS">Passé Simple</option>
                <option value="Imparfait">Imparfait</option>
                <option value="passeC"> Passé Composé</option>
                <option value="pqp"> Plus Que Parfait</option>
                <option value="pa"> Passé Antérieur</option>
                <option value=fa> Futur Antérieur</option>
                <option value="spr"> Subjonctif Présent</option>
                <option value="sps"> Subjonctif Passé</option>
                <option value="subI"> Subjonctif Imparfait</option>
                <option value="subpqp"> Subjonctif du Plus Que Parfait </option>
                <option value="ipr"> Imperatif Present</option>
                <option value="ips"> Imperatif Passé</option>
                <option value="cpr1"> Conditionnel Present forme1</option>
                <option value="cpr2"> Conditionnel Present forme2 </option>

              </select>
            </div>
          </div>
          <div class="input-field second-wrap">
            <input  class="vac" id="search" name="verbe" type="text" placeholder="Exemple: jouer" />
          </div>
          <div class="input-field third-wrap">
            <input type="submit" class=" btn btn-success" type="button" value="conjuguer" name="conjuguer" style="padding-left:20px;">
          </div>
        </div>
      </form>
    </div>

    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: true,
        itemSelectText: ''
      });
    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
