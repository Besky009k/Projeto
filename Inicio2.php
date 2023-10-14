
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Inicio2.css">
    <link rel="icon" href="icon.png">
    <title>Inicio</title>
</head>
<body>
  <nav>
    <ul>
      <a href="Inicio2.html"><button data-text="Awesome" class="button">
        <span class="actual-text">&nbsp;Adventure&nbsp;</span>
        <span class="hover-text" aria-hidden="true">&nbsp;Adventure&nbsp;</span>
      </button></a>
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        echo "<li>Bem-vindo, $nome!</li>";
    } else {
        echo "Nome de usuário não encontrado.";
    }
    ?>
    </ul>
  </nav>
  <section class="bg">
  </section>
  <div class="card-Container">
        <div class="lichCard">
          <div class="innerCard">
              <div class="frontSide">
              </div>
              <div class="backSide">
                  <p class="title">The <i>Lich</i></p>
                  <a href="Lich.html"><button class="btn">Ler mais
                  </button></a>
                  <p>There is only darkness for you,<br>
                    and only <strong>death</strong> for your people.</p>
              </div>
            </div>
          </div>
          <div class="finnCard">
            <div class="innerCard2">
                <div class="frontSide2">
                </div>
                <div class="backSide2">
                    <p class="title2"><i>Finn</i></p>
                    <a href="Finn.html"><button class="btn">Ler mais
                    </button></a>
                    <p>I'm <strong>Finn</strong>, and I'm here to save the day!</p>
                </div>
              </div>
            </div>
            <div class="simonCard">
              <div class="innerCard3">
                  <div class="frontSide3">
                  </div>
                  <div class="backSide3">
                      <p class="title3"><i>Ice King</i></p>
                      <a href="Simon.html"><button class="btn">Ler mais
                      </button></a>
                      <p>Do you know what '<strong>Ice King</strong>' means?!</p>
                  </div>
                </div>
              </div>
  </div>
  </div>    
</body>
</html> 