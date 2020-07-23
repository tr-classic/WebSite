<style>
  #background{
    height:100vh;
    width:100vw;
    left:0;
    top:0;
    opacity: 1;
    position:fixed;
    z-index: -1;
    background-color: #000 ;
  }

  nav{
    transition: 3s;
  }

  .fade-in{
    animation: 6s ease 6s alternate bg_change;
  }

  main{
    height:1000vh ;
  }
</style>

<main class="container">
  <div id="background" class="">

  </div>
  <div style="height:90vh;"></div>
  <h1>Bonjour</h1>
  <div class="">
    <p>nous avons une page qui fonctionne</p>
  </div>
</main>

<script src="/src/scripts/background.js" charset="utf-8"></script>
