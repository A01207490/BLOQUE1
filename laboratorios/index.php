<html>

<head>

  <?php include '_head.html'; ?>
  <title><?php echo basename(__DIR__); ?></title>
</head>

<body>
  <?php include '_sidebar.html'; ?>
  <!-- Page Content -->
  <div id="main">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary border-bottom" id="navbar">
      <!-- Toogle Sidebar Button -->
      <button class="btn btn-green" onclick="openSideBar()"><i class="material-icons text-primary">menu</i></button>
      <!-- End Toogle Sidebar Button -->
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Preguntas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="cuestionario-tab" data-toggle="tab" href="#cuestionario" role="tab" aria-controls="cuestionario" aria-selected="false">Cuestionario</a>
        </li>
      </ul>
      <!-- End Nav tabs -->
    </nav>
    <!-- End Top Navbar -->

    <!--------------------------------------------------------------------------------------->

    <div class="container-fluid bg-info content">
      <div class="tab-content">
        <!--------------------------------------------------------------------------------------->
        <div class="tab-pane active container" id="home" role="tabpanel" aria-labelledby="home-tab">
          <h5>Hello there!</h5>
          <p>Lo que más me gusta son los juegos de Nintendo, Dragon Ball, One Punch Man y atletismo</p>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="resources/images/zelda.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="resources/images/metroid.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="resources/images/super_mario.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!--------------------------------------------------------------------------------------->
        <div class="tab-pane container" id="cuestionario" role="tabpanel" aria-labelledby="cuestionario-tab">
          <h5>URL</h5>
          <p>También conocido como dirección web, un URL (Uniform Resource Locator) es una forma de URI (Uniform
            Resource Identifier) y una designación de convención estandarizada para direccionar documentos que se pueden
            acceder por el Internet. [12]</p>
          <br>

          <h5>MIME</h5>
          <p>Un tipo de media, también conocido como Multipurpose Internet Mail Extensions o MIME, es un estándar que
            indica la naturaleza y formato de un documento, archivo o conjunto de bytes. [13]</p>
          <br>

          <h5>Códigos de errores HTTP</h5>
          <p>404 Not Found.
            403 Forbidden. .
            500 Internal Server Error.
            503 Service Unavailable.
            504 Gateway Timeout.
            [14]</p>
          <br>

          <h5>HTML5</h5>
          <p>Es la ultima evolución del estándar que define HTML. Es una nueva versión del lenguaje, con nuevos
            atributos, elementos y comportamiento, y un conjunto de tecnologías mas amplio que permite el desarrollo de
            aplicaciones y paginas mas diversas y poderosas. [15]</p>
          <br>

          <h5>JS</h5>
          <p>JavaScript es un lenguaje de programación compilado just-in-time, ligero e interpretado con funciones de
            primera clase. A pesar de se le conoce por ser el lenguaje de scripting de las páginas web, muchos otros
            ambientes lo usan, como Node.js y Apache CouchDB. [16]</p>
          <br>

          <h5>PHP</h5>
          <p>Hypertext Preprocessor es un lenguaje de programación que le permite a los desarrolladores web crear
            contenido dinámico que interactuá con bases de datos. [17]</p>
          <br>

          <h5>Jsp</h5>
          <p>Java Server Pages es una tecnología de programación server-side que permite la creación de un método
            independiente de plataforma dinámico para constituir aplicaciones web. [18]</p>
          <br>

          <h5>Ajax</h5>
          <p>Asynchronous JavaScript and XML, es un término acuñado en 2005 por Jesse James Garrett, que describe a un
            nuevo paradigma para usar tecnologías existentes en conjunto, inlcuyendo: HTML, CSS, JavaScript, DOM, XML,
            XSLT, y la más importante, XMLHttpRequest object.
            Cuando estas tecnologías se combinan en el modelo Ajax, las aplicaciones web pueden ser actualizadas de
            manera rápida e incremental sin tener que volver a cargar toda la página del navegador. Esto hace que las
            aplicaciones sean más rápidas y responsivas a las acciones de los usuarios. [19]</p>
          <br>

          <h5>¿Cuál es la diferencia entre Internet y la World Wide Web?</h5>

          <p>El internet es una colección global de redes, mientras que la World Wide Web es una colección de
            información y datos que pueden ser accesados a través del internet. [1]</p>
          <br>

          <h5>¿Cuál es el propósito de los métodos HTTP: GET, HEAD, POST, PUT, PATCH, DELETE?</h5>

          <p>
            <ul>
              <li>
                GET: este método es utilizado para recuperar información de un servidor usando un URL. Es el método
                principal usado para recuperar documentos.
              </li>
              <li>
                HEAD: este método es similar al GET, pero el servidor responde solo con los encabezados y sin el cuerpo.
              </li>
              <li>
                POST: este método se usa cuando se quiere enviar datos al servidor, por ejemplo, la actualización de
                archivo.
              </li>
              <li>
                PUT: se utiliza para solicitarle al servidor que almacene el cuerpo proporcionado en la ubicación
                especificada por el URL provisto.
              </li>
              <li>
                PATCH: este método es similar al put, pero difiere en que solamente se realiza una actualización parcial
                del cuerpo.
              </li>
              <li>
                DELETE: se usa para solicitarle al servidor que elimine un archivo en la ubicación especificada por el
                URL provisto.
              </li>
            </ul>
            <p>[2]</p>
          </p>
          <br>

          <h5>¿Qué método HTTP se debe utilizar al enviar un formulario HTML, por ejemplo cuando ingresas tu usuario y
            contraseña en algún sitio? ¿Por qué?</h5>

          <p>Debido a que se esta mandado un formulario, se tendría que utilizar el método POST. [2]</p>

          <br>

          <h5>¿Qué método HTTP se utiliza cuando a través de un navegador web se accede a una página a través de un URL?
          </h5>

          <p>Se utiliza el método GET, ya que se esta solicitando un recurso en específico. [2]</p>

          <br>


          <h5>Un servidor web devuelve una respuesta HTTP con código 200. ¿Qué significa esto? ¿Ocurrió algún error?
          </h5>

          <p>En general independientemente del método usado, el código 200 indica que la solicitud se realizó de manera
            exitosa. [3]</p>

          <br>


          <h5>Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al
            sitio y se encontró con un error 404? ¿Por qué? </h5>

          <p>El código de error 404 indica que el servidor no puede encontrar el recurso solicitado, usualmente porque
            los vínculos están muertos o ya no apuntan a su recurso original debido a que este ha sido re-ubicado o no
            esta disponible de manera permanente. Por ello, cuando se dan incidencias de este código, usualmente es
            responsabilidad de los desarrolladores que no han actualizado de manera correcta sus recursos y
            correspondientes vínculos. [4]</p>

          <br>

          <h5>¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al
            sitio y se encontró con un error 500? ¿Por qué? </h5>

          <p>Este código de error indica que el servidor encontró una condición inesperada que le impidió completar la
            solicitud; es un error genérico que utiliza cuando no se puede proporcionar un mejor código de error 5xx que
            sea más específico. Por lo tanto, no se puede decir con certeza si es responsabilidad o no del
            desarrollador. [5]</p>

          <br>


          <h5>¿Qué significa que un atributo HTML5 esté depreciado o desaprobado (deprecated)? Menciona algunos
            elementos de HTML 4 que en HTML5 estén desaprobados.</h5>

          <p>Que una tag o atributo este despreciado, quiere decir que se han remplazado por otras nuevas; es decir, se
            han vuelto obsoletos, por lo que se recomienda evitar su uso. Algunos ejemplos son: ISINDEX, APPLET, CENTER
            y FONT. [6]</p>

          <br>


          <h5>¿Cuáles son las diferencias principales entre HTML 4 y HTML5? </h5>

          <p>HTML 5 es mucho más simple que su predecesor. Debido a que HTML5 es más consistente, en mucho más fácil
            corregir errores. También cuenta con nuevas tags, y provee soporte para contenido multimedia. Sin embargo,
            debido a que HTML5 es la versión más reciente, HTML4 cuenta con mayor compatibilidad en diferentes
            navegadores. [7]</p>
          <br>


          <h5>¿Qué componentes de estructura y estilo tiene una tabla? </h5>

          <p>La estructura de una tabla se define utilizando la tag “table”, que contiene celdas definidas por “td”
            organizadas por filas “tr”, no por columnas. Algunas propiedades de CSS que dan estilo a una tabla son:
            border, padding, text-align, colspan y rowspan. [8]</p>
          <br>
          <h5>¿Cuáles son los principales controles de una forma HTML5? </h5>

          <p>Las formas de HTML5 permiten aceptar entrada del usuario de una manera específica. Algunas de las
            principales formas son: input text control, input type submit, input type radio, input type checkbox, etc.
            [9] </p>
          <br>
          <h5>¿Qué tanto soporte HTML5 tiene el navegador que utilizas? Puedes utilizar la siguiente página para
            descubrirlo: http://html5test.com/ (Al responder la pregunta recuerda poner el navegador que utilizas)</h5>

          <p>El navegador firefox en un distro basado en Ubuntu, tiene un puntaje de 468/555.</p>
          <br>
          <h5>¿Cuál es el ciclo de vida de los sistemas de información? </h5>

          <p>
            <ol>
              <li>Planeación</li>
              <li>Análisis</li>
              <li>Diseño</li>
              <li>Implementación</li>
              <li>Soporte</li>
            </ol>
            <p>[10]</p>
          </p>

          <br>

          <h5>¿Cuál es el ciclo de desarrollo de sistemas de información?</h5>

          <p>
            <ol>
              <li>Análisis preliminar </li>
              <li>Análisis del sistema </li>
              <li>Diseño del sistema</li>
              <li>Programación</li>
              <li>Pruebas</li>
              <li>Implementación</li>
              <li>Mantenimiento</li>
            </ol>
            <p>[11]</p>
          </p>
          <br>

          <p>
            <h5>Referencias</h5>
            <ul>
              <li>[1] https://www.geeksforgeeks.org/whats-difference-internet-web/</li>
              <li>[2] https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods </li>
              <li>[3] https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/200</li>
              <li>[4] https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/404</li>
              <li>[5] https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500</li>
              <li>[6]
                https://www.htmlgoodies.com/tutorials/html_401/html4-ref/article.php/3460291/deprecated-tags-in-html-40.htm
              </li>
              <li>[7] https://www.educba.com/html5-vs-html4/</li>
              <li>[8] https://www.w3schools.com/html/html_tables.asp </li>
              <li>[9] https://www.educba.com/html-form-controls/</li>
              <li>[10]
                https://archive.hshsl.umaryland.edu/bitstream/handle/10713/3968/2F.%20Wilson%20and%20Winner.pdf?sequence=9&isAllowed=y
              </li>
              <li>[10]
                https://archive.hshsl.umaryland.edu/bitstream/handle/10713/3968/2F.%20Wilson%20and%20Winner.pdf?sequence=9&isAllowed=y
              </li>
              <li>[11] https://bus206.pressbooks.com/chapter/chapter-10-information-systems-development/</li>
              <li>[12] https://www.computerhope.com/jargon/u/url.htm</li>
              <li>[13] https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types</li>
              <li>[14] https://www.globo.tech/learning-center/5-most-common-http-error-codes-explained/</li>
              <li>[15] https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5</li>
              <li>[15] https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5</li>
              <li>[16] https://developer.mozilla.org/en-US/docs/Web/JavaScript</li>

              <li>[17] https://www.tutorialspoint.com/php/index.htm</li>

              <li>[18] https://www.tutorialspoint.com/jsp/index.htm</li>

              <li>[19] https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX</li>




            </ul>
          </p>
          <br>
        </div>
        <!--------------------------------------------------------------------------------------->
      </div>


    </div>

  </div>
  <?php include '_footer.html'; ?>
</body>


</html>