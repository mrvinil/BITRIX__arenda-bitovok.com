(function(){

var imgpath = "/cars/img/";
var container = document.querySelector(".header_canvas");
var canvas = container.querySelector("canvas");

var scene = new THREE.Scene();
scene.add( new THREE.AmbientLight( 0xffffff ) );
var renderer = new THREE.WebGLRenderer({
	canvas: canvas,
	antialias:true,
	alpha:true
});
renderer.setClearColor(0x000000, 0);

var dpr = window.devicePixelRatio || 1;
var w, h, oldw = 0;
var camera;

var bgmeshes = [], bgmaterial = false;
var bgimgw = 1000, roadh = 43;
var roadmeshes = [], roadmaterial = false;

var car1 = false;
var car1t1, car1t2;
var windt;

var sunmesh = false;

var smallcars = [
	{
		file: "car2.png"
	},
	{
		file: "car3.png"
	},
	{
		file: "car4.png"
	},
	{
		file: "car5.png"
	},
	{
		file: "car6.png"
	}
];

function resize(){
	w = parseInt(container.offsetWidth);
	h = parseInt(container.offsetHeight);

	renderer.setPixelRatio(dpr);
	renderer.setSize(w,h);

	camera = new THREE.OrthographicCamera(0, w, -h/2, h/2, 1, h);
	camera.position.set(0, 0, h/2);

	if (oldw != w) updateBgMesh();
	if (sunmesh) sunmesh.position.x = w - 200;
	oldw = w;
}

window.addEventListener('resize', resize);
resize();


function updateBgMesh() {
	// remove old mesh!

	if (bgmaterial && roadmaterial) {

		var nmeshes = Math.ceil(w / bgimgw) + 1;

		for (var i = 0; i < bgmeshes.length; i++) {
			scene.remove(bgmeshes[i]);
			scene.remove(roadmeshes[i]);
			bgmeshes[i].geometry.dispose();
			roadmeshes[i].geometry.dispose();
		}

		bgmeshes = [];
		roadmeshes = [];

		for (var i = 0; i < nmeshes; i++) {
			(function(i){
				var geometry = new THREE.PlaneGeometry(bgimgw, h);
				var bgmesh = new THREE.Mesh(geometry, bgmaterial);
				bgmesh.position.x = i * bgimgw + bgimgw/2;
				scene.add(bgmesh);
				bgmeshes.push(bgmesh);
			})(i);
		}

		for (var i = 0; i < nmeshes; i++) {
			(function(i){
				var geometry1 = new THREE.PlaneGeometry(bgimgw, roadh);
				var roadmesh = new THREE.Mesh(geometry1, roadmaterial);
				roadmesh.position.y = (h - roadh) / 2;
				roadmesh.position.x = i * bgimgw + bgimgw/2;
				roadmesh.position.z = 2;
				scene.add(roadmesh);
				roadmeshes.push(roadmesh);
			})(i);
		}
	}
}

var textureLoader = new THREE.TextureLoader();

textureLoader.load(imgpath + "bg6.png", function(texture){
	texture.flipY = false;
	texture.minFilter = THREE.LinearFilter;
	texture.magFilter = THREE.LinearFilter;
	texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;

	bgimgw = parseInt(texture.image.width);

	bgmaterial = new THREE.MeshBasicMaterial({color: 0xffffff, map: texture, side: THREE.DoubleSide});
	updateBgMesh();
});

for (var i = 0; i < smallcars.length; i++) {
	(function(i){
		textureLoader.load(imgpath + smallcars[i].file, function(texture){
			texture.flipY = false;
			texture.minFilter = THREE.LinearFilter;
			texture.magFilter = THREE.LinearFilter;
			texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;

			smallcars[i].width = parseInt(texture.image.width);
			smallcars[i].height = parseInt(texture.image.height);
			smallcars[i].texture = texture;
		});
	})(i);
}

textureLoader.load(imgpath + "road4.png", function(texture){
	texture.flipY = false;
	texture.minFilter = THREE.LinearFilter;
	texture.magFilter = THREE.LinearFilter;
	texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;

	bgimgw = parseInt(texture.image.width);
	roadh = parseInt(texture.image.height);

	roadmaterial = new THREE.MeshBasicMaterial({color: 0xffffff, map: texture, side: THREE.DoubleSide});
	updateBgMesh();
});

textureLoader.load(imgpath + "car1.png", function(texture){
	texture.flipY = false;
	texture.minFilter = THREE.LinearFilter;
	texture.magFilter = THREE.LinearFilter;
	texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;

	var ww = parseInt(texture.image.width);
	var hh = parseInt(texture.image.height);

	car1t1 = texture;

	var geometry = new THREE.PlaneGeometry(ww, hh);
	var material = new THREE.MeshBasicMaterial({color: 0xffffff, map: texture, side: THREE.DoubleSide, transparent:true});
	car1 = new THREE.Mesh(geometry, material);
	car1.position.y = 42;
	car1.position.z = 10;
	scene.add(car1);
});

/*textureLoader.load(imgpath + "sun.png", function(texture){
	texture.flipY = false;
	texture.minFilter = THREE.LinearFilter;
	texture.magFilter = THREE.LinearFilter;
	texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;

	var ww = parseInt(texture.image.width);
	var hh = parseInt(texture.image.height);

	var geometry = new THREE.PlaneGeometry(ww, hh);
	var material = new THREE.MeshBasicMaterial({color: 0xffffff, map: texture, side: THREE.DoubleSide, transparent:true, blending: THREE.AdditiveBlending});
	sunmesh = new THREE.Mesh(geometry, material);
	sunmesh.position.x = w - 200;
	sunmesh.position.y = -70;
	sunmesh.position.z = 15;
	sunmesh.scale.x = 0.8;
	sunmesh.scale.y = 0.8;
	scene.add(sunmesh);
});*/

textureLoader.load(imgpath + "car11.png", function(texture){
	texture.flipY = false;
	texture.minFilter = THREE.LinearFilter;
	texture.magFilter = THREE.LinearFilter;
	texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;

	car1t2 = texture;
});

var lt = new Date().getTime();
var wheelst = 0;
var wheelbool = false;

var cursmallcar = 0;
var allsmallcars = [];
var firstsmallcar = 0;

function mySmallCar(){
	var i = Math.floor(Math.random() * smallcars.length);

	this.type = i;

	if (smallcars[i].texture) {
		var geometry = new THREE.PlaneGeometry(smallcars[i].width, smallcars[i].height);
		var material = new THREE.MeshBasicMaterial({color: 0xffffff, map: smallcars[i].texture, side: THREE.DoubleSide, transparent: true});

		this.mesh = new THREE.Mesh(geometry, material);
		this.mesh.position.y = 32;
		this.mesh.position.z = 5;
		this.mesh.position.x = w + smallcars[i].width/2;

		scene.add(this.mesh);
		allsmallcars[cursmallcar] = this;
		this.arri = cursmallcar;
		cursmallcar++;
	}

	this.go = function(dt) {
		this.mesh.position.x -= dt / 3;
		if (this.mesh.position.x < -smallcars[i].width/2) {
			this.mesh.geometry.dispose();
			this.mesh.material.dispose();
			firstsmallcar = this.arri + 1;
			delete allsmallcars[this.arri];
		}
	}
}

var winds = [];
function MyWind(x, y) {
	this.w = 70 + Math.random() * 60;
	this.maxw = 70 + 60;
	this.maxw2 = this.maxw / 2;
	var geometry = new THREE.PlaneGeometry(this.w, 20);
	var material = new THREE.MeshBasicMaterial({color: 0xffffff, map: windt, side: THREE.DoubleSide, transparent: true});
	this.mesh = new THREE.Mesh(geometry, material);
	this.mesh.position.z = 10;
	this.mesh.position.y = y;
	this.mesh.position.x = x;
	scene.add(this.mesh);

	this.go = function(dt) {
		if (dt > 100) dt = 30;
		this.mesh.position.x -= dt * 0.7;
		if (this.mesh.position.x <= -this.maxw2) this.mesh.position.x = w + this.maxw2;
	}
}

textureLoader.load(imgpath + "wind.png", function(texture){
	texture.flipY = false;
	texture.minFilter = THREE.LinearFilter;
	texture.magFilter = THREE.LinearFilter;
	texture.anisotropy = renderer.capabilities.getMaxAnisotropy() || 1;
	windt = texture;

	winds.push(new MyWind(0, 0));
	winds.push(new MyWind(w * 0.4, 20));
	winds.push(new MyWind(w * 0.1, 40));
	winds.push(new MyWind(w * 0.6, -10));
	winds.push(new MyWind(0 * 0.7, 80));
});

var lastcart = 0;

function draw(t, dt) {
	//if (bgmaterial) bgmaterial.map.offset.x += 0.0005;
	//if (roadmaterial) roadmaterial.map.offset.x += 0.0015;

	for (var i = 0; i < bgmeshes.length; i++) {
		bgmeshes[i].position.x -= 0.2;
		roadmeshes[i].position.x -= 2;

		if (bgmeshes[i].position.x <= -bgimgw/2) bgmeshes[i].position.x += (bgmeshes.length) * bgimgw;
		if (roadmeshes[i].position.x <= -bgimgw/2) roadmeshes[i].position.x += (bgmeshes.length) * bgimgw;
	}

	if (car1) {
		car1.position.x = 400 + Math.cos(t / 4000) * 100;
		if (car1t2) {
			if (t - wheelst > 100) {
				wheelst = t;
				car1.material.map = wheelbool ? car1t1 : car1t2;
				wheelbool = !wheelbool;
			}
		}
	}

	if (t > lastcart) {
		var kk = new mySmallCar();
		lastcart = t + 1000 + Math.random()*3000;
	}

	for (var i = firstsmallcar; i < allsmallcars.length; i++) {
		if (allsmallcars[i]) allsmallcars[i].go(dt);
	}

	for (var i = 0; i < winds.length; i++) winds[i].go(dt);
	renderer.render(scene, camera);
}

var requestAnimFrame = (function(){
    return  window.requestAnimationFrame       || 
        window.webkitRequestAnimationFrame || 
        window.mozRequestAnimationFrame    || 
        window.oRequestAnimationFrame      || 
        window.msRequestAnimationFrame     || 
        function(callback, element){
            window.setTimeout(callback, 1000 / 60);
        };
})();

function animate(){
	var t = new Date().getTime();
	var dt = t - lt;
	draw(t, dt);
	lt = t;
	requestAnimFrame(animate);
}

animate();

})();