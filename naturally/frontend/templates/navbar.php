<div id="fh5co-offcanvas">
    <a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i
                class="icon-cross"><i
                    class="icon-cross"></i><i
                    class="icon-cross"></i></i></span></a>
    <div class="fh5co-bio">
        <figure>
            <a href="#">
                <img ng-src="{{facebook.image}}" class="img-responsive">
            </a>
        </figure>
        <h3 class="heading">Sobre mim</h3>
        <a href="#"><h3>{{facebook.name}}</h3></a>
        <p>Um amante de TI, fanático por SERIADOS e apaixonado por GAMES.</p>
        <ul class="fh5co-social">
           <li><a ng-href="{{facebook.link}}"><span class="icon-facebook-with-circle"></span></a></li>
        </ul>
    </div>

    <div class="fh5co-menu">
        <div class="fh5co-box">
            <h3 class="heading">
                <a ng-href="/#!/perfil">
                    <li class="glyphicon glyphicon-user"></li>
                    Perfil
                </a>
            </h3>
            <ul>
                <li class=""><p class="text-muted">{{facebook.email}}</p></li>
                <hr/>
                <li class="glyphicon glyphicon-heart-empty"><a href="#"> Seguindo</a></li>
                <li class="glyphicon glyphicon-heart"><a href="#"> Seguidores</a></li>
                <li class="glyphicon glyphicon-star"><a href="#"> Favoritos</a></li>
                <li class="glyphicon glyphicon-cutlery"><a href="#"> Receitas</a></li>
                <li class="glyphicon glyphicon-cog"><a href="#"> Configurações</a></li>
            </ul>
        </div>
        <div class="fh5co-box">
            <h3 class="heading">Pesquisar na história</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="O que deseja procurar?">
                </div>
            </form>
        </div>
        <p id="sair">
            <a ng-click="">
                <span class="glyphicon glyphicon-log-out"></span> SAIR
            </a>
        </p>
    </div>
</div>
<!--Navbar-->
<nav class="gtco-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 text-left">
                <div id="gtco-logo"><a ng-href="/#!/">Naturally<span>.</span></a></div>
            </div>
            <span></span>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <div class="navbar-menu-items wow fadeIn">
                        <li class="nav navbar-nav navbar-right">
                            <a class="js-perfil-toggle perfil-toggle">
                                <img ng-src="{{facebook.image}}" class="img-circle">
                                {{facebook.name}}
                            </a>
                        </li>
                        <li class="nav navbar-nav navbar-right  ">
                            <button type="button" ng-click="facebookLogin()" class="login">
                                <div class="sign">
                                    <img src="frontend/assets/img/fb.png">Logar com JS
                                </div>
                            </button>
                        </li>
                        <!--<li class="nav navbar-nav navbar-right">
                          <?php //include '../../backend/php/index.php'; echo $output; ?>
                        </li>-->
                        <li class="nav navbar-nav navbar-right"><a id="contato" ng-href="/#!/contato">Contato</a>
                        </li>
                        <li class="nav navbar-nav navbar-right  "><a
                                ng-href="/#!/sobre">Naturally</a>
                        </li>
                        <li class="has-dropdown nav navbar-nav navbar-right  ">
                            <a ng-href="/#!/">Explorar</a>
                            <ul class="dropdown">
                                <li><a ng-href="/#!/tendencias">Tendências</a></li>
                                <li><a ng-href="/#!/veganos">Veganos</a></li>
                                <li><a ng-href="/#!/vegetarianos">Vegetarianos</a></li>
                                <li><a href="frontend/conteudo/semgluten.html">Sem Glúten</a></li>
                                <li><a href="frontend/conteudo/diabeticos.html">Diabéticos</a></li>
                                <li><a href="frontend/conteudo/semlactose.html">Sem Lactose</a></li>
                                <li><a href="frontend/conteudo/fitness.html">Fitness</a></li>
                            </ul>
                        </li>
                        <li class="nav navbar-nav navbar-right"><a class="active" ng-href="/#!/feed">Feed</a>
                        </li>
                    </div> <!--fim dos itens que vão sumir-->
                    <li>
                        <ul id="botaobusc" class="nav navbar-nav navbar-right navbar-search-button">
                            <li><a class="search-button" ng-href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <form class="navbar-form form-inline navbar-right navbar-search-form disabled wow fadeInLeft"
                              role="form" action=""
                              method="post">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Pessoas</option>
                                    <option>Receitas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" required
                                       placeholder="Pesquisar..." onchange="" class="search form-control">

                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!--AUMENTAR LINHA ABAIXO DO HEADER(alterar fa-css também
            <div class="container-fluid"></div> -->
</nav>