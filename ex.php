<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faq my Butt</title>
    <style media="screen">
      body{
        padding: 20px;
      }
      a{
        color: blue;
        text-decoration: none;
      }
      header{
        height: 50px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 10px 28px;
        display: flex;
        background-color: white;
        align-items: center;
        border-bottom: 1px solid rgba(0,0,0,0.2);
      }
      header h2{
        color: #3c4043;
        font-family: 'Google Sans',sans-serif;
        font-weight: 500;
        font-size: 24px;
        margin: 0 20px 0 0;
        padding: 0;
        display: inline-block;
      }
      img{
        height: 30px;
        margin: 0 20px;
      }

      main h2{
        color: #3c4043;
        font-family: 'Google Sans',sans-serif;
        font-weight: 500;
        font-size: 24px;
        line-height: 32px;
        margin: 0;
        padding: 64px 0 0 0;
      }
      p{
        letter-spacing: .2px;
        line-height: 24px;
        padding-top: 20px;
        color: rgba(0,0,0,0.87);
        font-family: Roboto,arial,sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.54;
      }

    </style>

    <?php
      require_once "data.php";

      function numeroFaq($argomenti){
        $count = 0;
        for ($i=0; $i <count($argomenti) ; $i++){
          $count += 1;
        }
        return $count;
      }

      function iesimaFaq($Faq){
        echo "<h2>" . $Faq['domanda'] . "</h2>"
        ."<p>" . $Faq['risposta'] . "</p>";
      }

      function stampaInsiemeFaq($insiemeFaq){
        foreach ($insiemeFaq as $key => $Faq){
          iesimaFaq($Faq);
        };
      };


     ?>

  </head>
  <body>
    <header>
      <button type="button" name="button">Mutendina</button>
      <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
      <h2>Domande frequenti</h2>
      <span>Numero Faq : <?php echo numeroFaq($argomenti) ?></span>
    </header>
    <main>
      <?php
        stampaInsiemeFaq($argomenti);
        // $Faq = $argomenti[1];
        // iesimaFaq($Faq);
        // foreach ($argomenti as $argomento) {
        //   echo "<h2>" . $argomento['domanda'] . "</h2>"
        //   ."<p>" . $argomento['risposta'] . "</p>";
        // };
      ?>
    </main>
  </body>
</html>


<!-- GOAL:
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di
queste domande e risposte con PHP.
HINT:
Crearsi un array con i dati come l'ultimo
esercizio visto a lezione (hotels) e usare un
foreach per stampare i dati in esso contenuti -->

<!-- TODAY:
riprendere e completare esercizio di ieri (compreso di grafica :exploding_head: )
BONUS:
usare l'include/require per spostare i dati in un file dedicato
sviluppare funzione e stampare numero delle faq (da qualche parte in pagina)
sviluppare funzione che stampa i-esima faq (come visto a lezione per gli studenti) -->
