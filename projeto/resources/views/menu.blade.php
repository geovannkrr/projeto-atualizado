<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MENU</title>

        <!-- LINKS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- LINKS -->

    </head>

    
    <body>
        <br>
        
        <div class="menu">
            <div class="row">

                
              <div class="col">
                <a href="{{route('cadastrar')}}" id="cadastrar">
                    <i class="bi bi-person-plus-fill">
                        CADASTRAR REGISTROS
                    </i>
                </a>
                
              </div>

              <div class="col">
                <a href="{{route('editar')}}" id="editar">
                    <i class="bi bi-pencil-fill">
                        EDITAR CADASTROS
                    </i>
                </a>
              </div>

              <div class="col">
                <a href="{{route('excluir')}}" id="excluir">
                    <i class="bi bi-trash3-fill">
                        EXCLUIR CADASTROS
                    </i>
                </a>
              </div>

              <div class="col">
                <a href="{{route('visualizar')}}" id="visualizar">
                    <i class="bi bi-eye-fill">
                    VISUALIZAR CADASTROS
                    </i>
                </a>
              </div>

              <div class="col">
                <a href="{{route('sair')}}" id="exit">
                    <i class="bi bi-x-circle-fill">
                        SAIR
                    </i>
                </a>
              </div>

            </div>
          </div>
        </div>
          <hr><br><br>
    </body>

    <style>
        body{
        font-family: sans-serif;
        }

        .menu{
            margin-left: 10%;
        }

        #cadastrar{
        text-decoration: none;
        color: green;
        font-weight: bolder;
        }
  
        #editar{
            text-decoration: none;
            color: blue;
            font-weight: bolder;
        }
  
        #excluir{
            text-decoration: none;
            color: red;
            font-weight: bolder;
        }
  
        #visualizar{
            text-decoration: none;
            color: orange;
            font-weight: bolder;
        }
  
        #exit{
            text-decoration: none;
            color: red;
            font-weight: bolder;
        }
  </style>

</html>