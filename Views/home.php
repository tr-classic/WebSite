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

<script type="text/javascript">
  var cursorX;
  var cursorY;
  document.onmousemove = function(e){
      cursorX = e.pageX;
      cursorY = e.pageY - window.scrollY;
  }


			var scene = new THREE.Scene();
			var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

			var renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );

        let container = document.getElementById( 'background' );

        renderer.setSize( window.innerWidth, window.innerHeight );
        container.appendChild( renderer.domElement );


			var geometry = new THREE.BoxGeometry();
			var material = new THREE.MeshPhongMaterial( { color: 0x00ff00 } );
			var cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

      var pointLight = new THREE.PointLight( 0xffffff, 1, 100 );
      pointLight.position.set( 0, 0,5 );
      scene.add( pointLight );

			camera.position.z = 5;

			var animate = function () {
				requestAnimationFrame( animate );

				cube.rotation.x = window.scrollY / window.scrollMaxY * Math.PI *2;
				cube.rotation.y = window.scrollY / window.scrollMaxY * Math.PI *2 *3;

        camera.position.x = -((cursorX/window.innerWidth )-0.5) *5;
        camera.position.y =  ((cursorY/window.innerHeight)-0.5) *7;

        camera.lookAt(0,0,0);

				renderer.render( scene, camera );
			};

			animate();


</script>
