<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O Canvas de Usabilidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href = "style.css">
</head>
  <body>

    <div class="content">
        <div class="blur">
            <h1>Canvas de Usabilidade</h1>
            <img class = "🚀" src="assets/logo.png">
            <hr>
            <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">
                 <a class="navbar-brand" href="#">O canvas</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">First</a>
                        </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading2">Second</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                        </ul>
                </li>
                    </ul>
            </nav>
            
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
            <h4 id="scrollspyHeading1">O que é?</h4>
            <p>Usabilidade é um atributo de qualidade de software relacionado à facilidade de se utilizá-lo e esse atributo é relevante para vários tipos de sistemas. Para verificar se o produto ou serviço pretendido atende aos atributos de usabilidade exigidos em relação aos usuários esperados, é feita uma avaliação de usabilidade. A avaliação de usabilidade é um nome genérico para um grupo de métodos baseados na avaliação e inspeção ou exame relacionado com aspectos de usabilidade da interface com o usuário. Existem várias alternativas para se realizar a avaliação da usabilidade de uma solução. OCAU (O canvas de Avaliação de Usabilidade) é um artefato desenvolvido com a intenção de facilitar o planejamento da avaliação de usabilidade possuindo 8 dimensões:

</p>
<hr>
            <h4 id="scrollspyHeading2">Como usar</h4>
  <p>
  <li>Defina a Solução</li>
                <ol>O que será avaliado?</ol>
            <li>Defina os Requisitos</li>
                <ol>Qual requisito ou funcionalidade será avaliado?</ol>
            <li>Defina os Usuários</li>
                <ol>Quem são os participantes da avaliação?</ol>
            <li>Defina a(s) Tarefas</li>
                <ol>Quais tarefas os participantes irão realizar?</ol>
            <li>Defina o Contexto</li>
                <ol>Em quais contextos estão inseridos?</ol>
            <li>Defina a(s) Alternativas</li>
                <ol>Quais alternativas serão utilizadas?</ol>
            <li>Defina os Critérios</li>
                <ol>Quais são os critérios utilizados?</ol>
            <li>Defina as Métricas</li>
                <ol>Quais são as métricas utilizados?</ol>
  </p>
  <hr>

  <h4 id="scrollspyHeading3">Clicks para download</h4>
<div style="display:flex;">
    <div class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Click para fazer o download do manual</h5>
        <a href="#" class="btn btn-primary">Manual</a>
        <hr>
        
    </div>

    </div>

    <div class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Click para fazer o download dos casos de estudo</h5>
    <a href="#" class="btn btn-primary">OLX</a>
    <a href="#" class="btn btn-primary">Autopass</a>
    <hr>

    </div>
    </div>

</div>
<hr>







<div class="container mt-5 mx-auto">
            <div class="bg-light p-5 rounded">
                <?php echo'<h2 class="text-center mb-4">Participe da nossa Newsletter</h2>';?>
                <form action="inserirDados.php" method="POST">
                    <div class="row mb-3">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" placeholder="Preencha o campo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Preencha o campo">
                        </div>
                        <button type="submit" class="btn btn-primary mx-auto mt-3">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        

        <div class="card mt-5 text-center">
            <h5 class="card-header">
            <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="https:/www.instagram.com/ocanvasdeusabilidade/" target="_blank">
                                <img class="icons" src="Assets/icons8-instagram.svg">Instagram
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="https://www.facebook.com/ocanvasdeusabilidade/" target="_blank">
                                <img class="icons" src="Assets/icons8-facebook-novo.svg">Facebook
                            </a>
                        </li>
                    </ul>
            </h5>
            <div class="card-body">
                <a target="_blank" href="https://icons8.com/icon/59813/instagram">Instagram</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
                </br>
                <a target="_blank" href="https://icons8.com/icon/118466/facebook-novo">Facebook</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
            </div>
        </div>


        </div>
        <!--final blur -->
</div> 
<!-- final content -->

    
    </div>




    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
