<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" method="POST" action="{{url('buscar')}}">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Buscador en diferentes motores de busqueda</legend>



        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">1.ingrese el termino a buscar </label>
          <div class="col-md-5">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">Seleccione motor de busqueda</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="motores-0">
                    <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
                    Google
                    </label>
                </div>
                <div class="radio">
                    <label for="motores-1">
                    <input type="radio" name="motores" id="motores-1" value="2">
                    Bing
                    </label>
                </div>
                <div class="radio">
                    <label for="motores-1">
                    <input type="radio" name="motores" id="motores-2" value="3">
                    YouTube
                    </label>
                    <div class="radio">
                        <label for="motores-0">
                        <input type="radio" name="motores" id="motores-0" value="4" checked="checked">
                        Yahoo
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                        <input type="radio" name="motores" id="motores-1" value="5">
                        Wikipedia
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                        <input type="radio" name="motores" id="motores-2" value="6">
                        Facebook
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-0">
                            <input type="radio" name="motores" id="motores-0" value="7" checked="checked">
                            Mercado Libre
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                            <input type="radio" name="motores" id="motores-1" value="8">
                            Instagram
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                            <input type="radio" name="motores" id="motores-2" value="9">
                            Play Store
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                            <input type="radio" name="motores" id="motores-2" value="10">
                            Duckduckgo
                        </label>
                     </div>
                </div>
            </div>
        </div>

         <!-- Button -->
         <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">Buscar</button>
            </div>
          </div>

        </fieldset>
    </form>
</body>
</html>
