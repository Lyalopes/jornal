
<!doctype html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>

   
 

  <div class="container-sm mt-4 w-75" style="padding:30px 0 30px;">
    <h1 style="border-bottom:1px solid #eee; margin-bottom:20px;">Cadastre-se</h1>
        <form method="post" action="formulario.php">
             <div class="form-group col-md-6">
              <!-- Nome!-->
                <input name="nome" type="text" class="form-control mt-0" placeholder="Nome">
            </div>
            
       
         
            <div class="form-group col-md-6">
              <input  name="cpf" type="text" class="form-control" placeholder="CPF">
            </div>
            
           
            <div class="form-group col-md-6">
              <input   name="email" type="email" class="form-control mt-0" id="inputEmail4" placeholder="Email">
            </div>
            
           
         
             <div class="form-group col-md-6">
              <input  name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha">
            </div>
            <div class="form-group col-md-6">
              <input type="password" class="form-control" id="inputPassword4" placeholder="Repita a senha">
            </div>
           
           <br>
          <!-- Continuar -->
          <div class="text-center">
            <a href="./planos1.html"><button type="submit" class="mb-4 mt-0 btn btn-info" onsubmit="enviar()">Cadastre-se</button></a>
          </div>
        </form>
      </div>
    </div>

    <!-- Rodapé -->
    <footer>
      <div class"container" style="font-size:14px; font-weight:normal; text-align:center; padding:30px; color:#aaa; width:100%; background:#222;">
        <div class="row">
          <div class="col-sm" style="text-align:justify">
            <h3>Endereço</h3>
              <p>Segunda a sexta, das 14h às 19h<br />
              Empresarial Epitácio Pessoa, andar L3, sala 210, Lot. da Propriedade Veado Sobradinho, João Pessoa-PB, Brasil. CEP 58040-770</p>
          </div>
          <div class="col-sm" style="text-align:left; line-height:2.5em;">
            <h3>Contato</h3>
                <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:nathalia.flopes11@gmail.com" target="_blank"> nathalia.flopes11@gmail.com</a><br />
                <i class="fa fa-phone" aria-hidden="true"></i> (83) 9 9000-0000 (telefone)<br />
                <i class="fa fa-whatsapp" aria-hidden="true"></i>(83) 9 8111-2222 (WhatsApp)<br />
                <a href="https://www.instagram.com/nathalia.flopes/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> @Nathalia.flopes</a></br>
          </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>

</html>