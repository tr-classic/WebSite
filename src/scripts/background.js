var cursorX = 0;
var cursorY = 0;
document.onmousemove = function(e){
    cursorX = e.pageX;
    cursorY = e.pageY - window.scrollY;
}

class bg_scene extends THREE.Scene {
  constructor() {

  }
}


var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );


// instantiate a loader
var loader = new THREE.OBJLoader();

var tr ;

// load a resource
loader.load(
	// resource URL
	'/src/obj/tr.obj',
	// called when resource is loaded
	function ( object ) {
    tr = object ;

    tr.position.set(0,0,2) ;
    tr.rotation.y = Math.PI ;
    object.traverse( function ( child ) {
  		//This allow us to check if the children is an instance of the Mesh constructor
  		if(child instanceof THREE.Mesh){
  			//child.material.color = new THREE.Color(0x00000000);

  			//Sometimes there are some vertex normals missing in the .obj files, ThreeJs will compute them
  			child.geometry.computeVertexNormals();
  		}
  		scene.add( tr );
  	});

	},
	// called when loading is in progresses
	function ( xhr ) {

		console.log( ( xhr.loaded / xhr.total * 100 ) + '% loaded' );

	},
	// called when loading has errors
	function ( error ) {

		console.log( 'An error happened' );

	}
);

let container = document.getElementById( 'background' );

if(container == null){
  console.error("Pas d'élément nommé 'background' dans le html") ;
}else{
  var renderer = new THREE.WebGLRenderer();
  renderer.setSize( window.innerWidth, window.innerHeight );
  container.appendChild( renderer.domElement );

  // var cube = new THREE.Mesh(new THREE.BoxGeometry( .1, .001, .1 ), new THREE.MeshBasicMaterial( {color: 0x00ff00} ));
  // cube.position.z = 2 ;
  // cube.position.y = 1.75 ;
  // scene.add(cube) ;

  var pointLight = new THREE.PointLight( 0xffffff, 1, 6 );
  pointLight.position.set( 0, 0, 0 );
  scene.add( pointLight );



  var animate = function () {
    requestAnimationFrame( animate );
    camera.position.x =  ((cursorX/window.innerWidth )-0.5) *0.6;
    camera.position.y =  ((cursorY/window.innerHeight)-0.5) *0.6 + 1.50;

    camera.rotation.z = window.scrollY / window.scrollMaxY * Math.PI *2 + 1;

    camera.lookAt(0,1.5,2) ;
    pointLight.position.set(camera.position.x,camera.position.y,camera.position.z) ;

    renderer.render( scene, camera );
  };

  animate();
}
