<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href ="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "app/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
        <link rel = "stylesheet" href = "CSS/index.css">

    </head>
    <body>
        <div class = "container">
            <!-- là on a l'en-tête avec le menu -->

                <header> 
                    <img src="images/charte/entete.jpg" class = "img-fluid" alt = " ça ne marche pas ">
                    <!-- là on a l'en-tête avec le menu -->
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-curent = " page" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-curent = " page" href="#">informatique</a>
                            </li>
                        </ul>

                        <ul class ="navbar-nav">
                            
                            
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">A propos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>

                        </div>
                    </div>
                    </nav>
                <header>
            
            <div class = "row">

         <!-- la methode main c'est tout ce qui se trouve aprés la balise header et avant la balise footer  -->
        <main class = "col-md-8">
                    <article class = "my-5">
                        <h1 class = "bienvenueGreen">
                            Bienvenue sur le Gigastore </br>
                            plein d'idées de cadeaux à petits prix!
                        </h1>

                     <!-- pour mettre mes image côtes aà côtes sans se touchés j'ai utiliser card gril sur boostrp-->
                        <p class = "text-center my-5">
                        <img src="images/charte/special_paques2.png" alt="Special pâque">
                        </p>
                    </article>
                    <article>
                      <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                            <img src="images/produits/millenium-01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Les hommes qui n'aiment pas les femmes</h3>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="images/produits/millenium-02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h3 class="card-title">La fille qui rêvait d'un bidon d'essence et d'une allumette</h3>             
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card  h-100">
                            <img src="images/produits/millenium-03.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">La reine dans le palais des courants d'air</h3>
                            </div>
                            </div>
                        </div>
                        </div>
             </article>
        </main>

        <!-- la colonne de droite : ce qui permet de séparer la page en deux  -->

                <aside class = "col-md-4   text-end">
                    <p>
                    <img src="images/charte/nouveaute.png" alt="non" class = "monjoliaside my-5">

                    <img src="images/charte/international.png" alt="" class ="my-2">
                    <img src="images/charte/blog.png" alt="" class = " mt-2">
                    <p>
                        <strong>vous etes fan de lecture ?</br>
                         Continuer la dicussion</br>
                          sur  le bog de gigastore
                        </strong>
                    </p>
                </aside>
        <!-- le pied  avec une balise footer -->

            </div>
            <footer>
                <img src="/images/charte/banniere_pied.png" class = "img-fluid" alt="ça ne charge pas l'image">

            </footer>
        </div>
        
         <Script src = "vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js">

         </Script>
    </body>

</html>
