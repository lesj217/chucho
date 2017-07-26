<banner>
    <div class="color">
  <!-- Logo --> 
  <div class="logo">               
        <span class="image avatar48">
          <img src="views/app/img/escudo.jpg" alt="Escudo Raimundi Ordóñez" width=8.6% align="left" />
          <img src="views/app/img/facebook_1500565891608.jpg" alt="Colegio Raimundi Ordóñez" width=18% align="right" />
        </span>
    </div>                   
    <div class="titulo">
      <h1 id="title">Biblioteca</h1>
         <h2>Institución Educativa Raimundo Ordóñez Yáñez</h2>
      </div>
  </div>
  </banner>
  

<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="?view=index">Biblioteca</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    <?php
if (isset($_COOKIE['user']) AND isset($_COOKIE['privilegio'])){
	echo '<li><a href="?view=registros">registros</a></li>
      <li><a href="?view=logout">salir</a></li>';
}
    ?>
      
    </ul>
  </div>
</nav>