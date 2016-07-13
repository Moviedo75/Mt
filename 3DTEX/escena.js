var llamarid = document.querySelector("#MundoTextil");
var Motor = new BABYLON.Engine(llamarid);
var CrearEscena = function () {

var Escena= new BABYLON.Scene(Motor);
Escena.clearColor= new BABYLON.Color3(1,1,1);
//seccion de camara1 con Escena

var camaralibre =new BABYLON.FreeCamera("camara1", new BABYLON.Vector3(1000, -100, -1000),Escena);
camaralibre.speed=20;
camaralibre.setTarget(BABYLON.Vector3.Zero());
camaralibre.attachControl(Escena,true);

var light = new BABYLON.HemisphericLight("light1", new BABYLON.Vector3(0, 1, 0), Escena);

var ground = BABYLON.Mesh.CreatePlane("ground", 8000.0, Escena);
  ground.material = new BABYLON.StandardMaterial("ground", Escena);
  var groundMaterial = new BABYLON.StandardMaterial("ground", Escena);
  groundMaterial.diffuseTexture = new BABYLON.Texture("textures/andel.jpg", Escena);
  ground.material = groundMaterial;
  ground.position = new BABYLON.Vector3(5, -120, -15);
  ground.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);


   var avenida1 = {
     width: 800,
     height: 9000,
     depth: 1500,
   };
    // var avenidad = BABYLON.MeshBuilder.CreateGround("ground1",avenida1, Escena);
    // avenidad.material = new BABYLON.StandardMaterial("ground2", Escena);
    // var AvenidaMaterial = new BABYLON.StandardMaterial("ground2", Escena);
    // AvenidaMaterial.diffuseTexture = new BABYLON.Texture("textures/.jpg", Escena);
    // avenidad.material = AvenidaMaterial;
    // avenidad.position = new BABYLON.Vector3(1050, -119, -10);

 camaralibre.checkCollisions = true;
 camaralibre.applyGravity = true;
 Escena.gravity = new BABYLON.Vector3(0, -100, 0);
 camaralibre.ellipsoid = new BABYLON.Vector3(18, 18, 15);

//seccion de camara1 fin

//cielo
var skybox = BABYLON.Mesh.CreateBox("skyBox", 8000.0, Escena);
var skyboxMaterial = new BABYLON.StandardMaterial("skyBox", Escena);
skyboxMaterial.backFaceCulling = false;
skyboxMaterial.reflectionTexture = new BABYLON.CubeTexture("textures/Cielo/TropicalSunnyDay", Escena);
skyboxMaterial.reflectionTexture.coordinatesMode = BABYLON.Texture.SKYBOX_MODE;
skyboxMaterial.diffuseColor = new BABYLON.Color3(0, 0, 0);
skyboxMaterial.specularColor = new BABYLON.Color3(0, 0, 0);skybox.material = skyboxMaterial;
//cielofin del cielo

//primerpiso piso
var edificacion1 = new BABYLON.PointLight("pl2", BABYLON.Vector3.Zero(), Escena);
edificacion1.diffuse = new BABYLON.Color3(.5, .5, .5);
edificacion1.specular = new BABYLON.Color3(.5, .5, .5);


var options1 = {
  width: 1000,
  height: 400,
  depth: 3500,
};
var entradaporta1 = BABYLON.MeshBuilder.CreateBox('box2', options1, Escena);
entradaporta1.material = new BABYLON.StandardMaterial("Mat", Escena);
entradaporta1.material.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
entradaporta1.material.diffuseTexture.hasAlpha = true;
entradaporta1.position = new BABYLON.Vector3(-380, -74, -120);
Escena.registerBeforeRender(function() {
edificacion.position = camaralibre.position;

});

//finprimerpiso



//segundo piso
var edificacion = new BABYLON.PointLight("pl1", BABYLON.Vector3.Zero(), Escena);
 edificacion.diffuse = new BABYLON.Color3(.5, .5, .5);
 edificacion.specular = new BABYLON.Color3(.5, .5, .5);
 edificacion.intensity = 0.20;
var options2 = {
  width: 1000,
  height: 30,
  depth: 4000,
  //faceUV: faceUV
};

var entradaporta = BABYLON.MeshBuilder.CreateBox('box1', options2, Escena);
entradaporta.material = new BABYLON.StandardMaterial("Mat", Escena);
entradaporta.material.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
entradaporta.material.diffuseTexture.hasAlpha = true;
entradaporta.position = new BABYLON.Vector3(-240, 120, -130);
Escena.registerBeforeRender(function() {
edificacion.position = camaralibre.position;
});
//findelsegundo
//tercer piso
var edificacion3 = new BABYLON.PointLight("pl3", BABYLON.Vector3.Zero(), Escena);
 edificacion3.diffuse = new BABYLON.Color3(.5, .5, .5);
 edificacion3.specular = new BABYLON.Color3(.5, .5, .5);
 edificacion3.intensity = 0.8;
var options3 = {
  width: 300,
  height: 200,
  depth: 350,
};
var options4 = {
  width: 120,
  height: 60,
  depth: 220,
};
var entradaporta4 = BABYLON.MeshBuilder.CreateBox('box4', options4, Escena);
entradaporta4.position = new BABYLON.Vector3(80, 150, -250);
entradaporta4.material = new BABYLON.StandardMaterial("Mat", Escena);
entradaporta4.material.diffuseTexture = new BABYLON.Texture("textures/floor.png", Escena);
entradaporta4.material.diffuseTexture.hasAlpha = true;


var entradaporta3 = BABYLON.MeshBuilder.CreateBox('box3', options3, Escena);
entradaporta3.position = new BABYLON.Vector3(-100, 190, -250);
entradaporta3.material = new BABYLON.StandardMaterial("Mat", Escena);
entradaporta3.material.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
entradaporta3.material.diffuseTexture.hasAlpha = true;

var cylinder = BABYLON.Mesh.CreateCylinder("cylinder", 90, 180, 180, 80, 80, Escena, false);
cylinder.position = new BABYLON.Vector3(70, 150, -250);
 cylinder.emissiveColor = new BABYLON.Color3(0.4, 0, 0.4);
 cylinder.material = new BABYLON.StandardMaterial("Mat", Escena);
 cylinder.material.diffuseTexture = new BABYLON.Texture("textures/blanco.jpg", Escena);
 cylinder.material.diffuseTexture.hasAlpha = true;
//box.material = mat;
cylinder.rotation.z = Math.PI/2;
//columnas y anden
var columnas = BABYLON.Mesh.CreateCylinder("cylinder", 230, 20, 20, 20,20, Escena, false);
columnas.position = new BABYLON.Vector3(110, -119, 800);
 columnas.emissiveColor = new BABYLON.Color3(0.4, 0, 0.4);
 columnas.material = new BABYLON.StandardMaterial("Mat", Escena);
 columnas.material.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
 columnas.material.diffuseTexture.hasAlpha = true;
//box.material = mat;
columnas.rotation.y = Math.PI/2;

var columnas2 = BABYLON.Mesh.CreateCylinder("cylinder", 230, 20, 20, 20,20, Escena, false);
columnas2.position = new BABYLON.Vector3(130, -119, -1000);
 columnas2.emissiveColor = new BABYLON.Color3(0.4, 0, 0.4);
 columnas2.material = new BABYLON.StandardMaterial("Mat", Escena);
 columnas2.material.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
 columnas2.material.diffuseTexture.hasAlpha = true;
//box.material = mat;
columnas.rotation.y = Math.PI/2;
//fin columnas anden



Escena.registerBeforeRender(function() {
edificacion3.position = camaralibre.position;
});
//tercer pisofin
//finedificacion




//todo colision

   //Aplicar gravedad de colicion

    // Enable Collisions
    Escena.collisionsEnabled = true;

    //Then apply collisions and gravity to the active camera

    ground.checkCollisions = true;
  camaralibre.checkCollisions=true;
    entradaporta.checkCollisions=true;
    entradaporta1.checkCollisions=true;
  entradaporta3.checkCollisions=true;
  entradaporta4.checkCollisions=true;


//finSeccioncamara

//INICIO DE anden
var edificacion = new BABYLON.PointLight("pl1", BABYLON.Vector3.Zero(), Escena);
 edificacion.diffuse = new BABYLON.Color3(.5, .5, .5);
 edificacion.specular = new BABYLON.Color3(.5, .5, .5);
 edificacion.intensity = 0.20;
var options2 = {
  width: 400,
  height: 5,
  depth: 4000,
  //faceUV: faceUV
};

var entradaporta = BABYLON.MeshBuilder.CreateBox('box1', options2, Escena);
entradaporta.material = new BABYLON.StandardMaterial("Mat", Escena);
entradaporta.material.diffuseTexture = new BABYLON.Texture("textures/andel.jpg", Escena);
entradaporta.material.diffuseTexture.hasAlpha = true;
entradaporta.position = new BABYLON.Vector3(450, -120, -130);
Escena.registerBeforeRender(function() {
edificacion.position = camaralibre.position;
});
//FIN ANDEN

//estructura center
var estructura1 = {
  width: 400,
  height: 8,
  depth: 1600,
};
var muro = BABYLON.MeshBuilder.CreateBox('ground2', estructura1, Escena);
  muro.material = new BABYLON.StandardMaterial("ground2", Escena);
  var muroMaterial1 = new BABYLON.StandardMaterial("ground2", Escena);
  muroMaterial1.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro.material = muroMaterial1;
  muro.position = new BABYLON.Vector3(250, -70, 785);
  muro.rotation.z = Math.PI/2;
//fin estructura center

//estructura2 center
var estructura2 = {
  width: 400,
  height: 8,
  depth: 145,
};
var muro2 = BABYLON.MeshBuilder.CreateBox('ground3', estructura2, Escena);
  muro2.material = new BABYLON.StandardMaterial("ground3", Escena);
  var muroMaterial2 = new BABYLON.StandardMaterial("ground3", Escena);
  muroMaterial2.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro2.material = muroMaterial2;
  muro2.position = new BABYLON.Vector3(200, -70, -70);
  muro2.rotation.z = Math.PI/2;
  muro2.rotation.y = Math.PI/4;
//fin estructura2 center




//estructura5 center
var estructura5 = {
  width: 400,
  height: 8,
  depth: 1300,
};
var muro5 = BABYLON.MeshBuilder.CreateBox('ground2', estructura5, Escena);
  muro5.material = new BABYLON.StandardMaterial("ground2", Escena);
  var muroMaterial5 = new BABYLON.StandardMaterial("ground2", Escena);
  muroMaterial5.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro5.material = muroMaterial5;
  muro5.position = new BABYLON.Vector3(250, -70, -1150);
  muro5.rotation.z = Math.PI/2;
//fin estructura5 center

//estructura2 center
var estructura6 = {
  width: 400,
  height: 8,
  depth: 145,
};
var muro6 = BABYLON.MeshBuilder.CreateBox('ground3', estructura6, Escena);
  muro6.material = new BABYLON.StandardMaterial("ground3", Escena);
  var muroMaterial6 = new BABYLON.StandardMaterial("ground3", Escena);
  muroMaterial6.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro6.material = muroMaterial6;
  muro6.position = new BABYLON.Vector3(200, -70, -450);
  muro6.rotation.z = Math.PI/2;
  muro6.rotation.y = Math.PI/-4;
//fin estructura2 center
//estructura centerprincipal
var estructura1 = {
  width: 300,
  height: 1,
  depth: 300,
};
var muro12 = BABYLON.MeshBuilder.CreateBox('ground2', estructura1, Escena);
  muro12.material = new BABYLON.StandardMaterial("ground2", Escena);
  var muroMaterial12 = new BABYLON.StandardMaterial("ground2", Escena);
  muroMaterial12.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro12.material = muroMaterial12;
  muro12.position = new BABYLON.Vector3(265, 200,-260);
  muro12.rotation.z = Math.PI/2;
//fin estructura centerprincipal


//incicio de la puerta
var estructurapuerta = {
  width:18,
  height: 20,
  depth: 100,
};
var salida = BABYLON.MeshBuilder.CreateBox("pendon1", estructurapuerta, Escena);
            salida.material = new BABYLON.StandardMaterial("Mat", Escena);
            salida.material.diffuseTexture = new BABYLON.Texture("textures/puerta_pasillos-01.png", Escena);
            salida.material.specularTexture = new BABYLON.Texture("textures/puerta_pasillos-01.png", Escena);
            salida.material.emissiveTexture = new BABYLON.Texture("textures/puerta_pasillos-01.png", Escena);
            salida.material.diffuseTexture.hasAlpha = true;
            salida.scaling = new BABYLON.Vector3(15, 10, 0.1);
            salida.position = new BABYLON.Vector3(140, -60,-260);
            salida.rotation.z = Math.PI/1;
                salida.rotation.y = Math.PI/2,3;



            var salida1 = salida.clone("pendon1");
            salida1.position = new BABYLON.Vector3(140, -60,-260);
            salida1.rotation.z = -Math.PI/1 ;
              salida1.rotation.y = Math.PI/2,3;

//fin de la puerta
//link de redireccionamiento

var prueba= function(mesh, actionFunc ) {
             mesh.actionManager = new BABYLON.ActionManager(Escena);
               mesh.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, function(evt) {
                   //    //Action for touch down
                   window.targetTouched = mesh;
               }));
               mesh.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function(evt) {
                  //Action for touch up
                if (window.targetTouched == mesh) {
                 // function() {
                 document.location = actionFunc;
                }
               }));
            }
     //  prueba(redBox,"http://feriavirtualmundotextil.com");

     prueba(salida,"html/confeccion.html");
     prueba(salida1,"html/confeccion.html");

           // Conditions

           // Over/Out
           var makeOverOut = function (mesh) {
               mesh.actionManager.registerAction(new BABYLON.SetValueAction(BABYLON.ActionManager.OnPointerOutTrigger, mesh.material, "emissiveColor", mesh.material.emissiveColor));
               mesh.actionManager.registerAction(new BABYLON.SetValueAction(BABYLON.ActionManager.OnPointerOverTrigger, mesh.material, "emissiveColor", BABYLON.Color3.Blue()));
               //mesh.actionManager.registerAction(new BABYLON.InterpolateValueAction(BABYLON.ActionManager.OnPointerOutTrigger, mesh, "scaling", new BABYLON.Vector3(1, 1, 1), 150));
              // mesh.actionManager.registerAction(new BABYLON.InterpolateValueAction(BABYLON.ActionManager.OnPointerOverTrigger, mesh, "scaling", new BABYLON.Vector3(1.1, 1.1, 1.1), 150));
           }

     //    makeOverOut(redBox);

     makeOverOut(salida);
     makeOverOut(salida1);



//fin del link de redireccionamiento


//estructura centerprincipal
var estructura15 = {
  width: 150,
  height: 8,
  depth: 1600,
};
var muro15 = BABYLON.MeshBuilder.CreateBox('ground2', estructura15, Escena);
  muro15.material = new BABYLON.StandardMaterial("ground2", Escena);
  var muroMaterial15 = new BABYLON.StandardMaterial("ground2", Escena);
  muroMaterial15.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro15.material = muroMaterial15;
  muro15.position = new BABYLON.Vector3(265, 63,-1265);
  muro15.rotation.z = Math.PI/2;
//fin estructura centerprincipal












//estructura centerprincipal
var estructura25 = {
  width: 150,
  height: 8,
  depth: 1800,
};
var muro25 = BABYLON.MeshBuilder.CreateBox('ground2', estructura25, Escena);
  muro25.material = new BABYLON.StandardMaterial("ground2", Escena);
  var muroMaterial25 = new BABYLON.StandardMaterial("ground2", Escena);
  muroMaterial25.diffuseTexture = new BABYLON.Texture("textures/pared.jpg", Escena);
  muro25.material = muroMaterial25;
  muro25.position = new BABYLON.Vector3(265, 63,841);
  muro25.rotation.z = Math.PI/2;
//fin estructura centerprincipal



return Escena;

};
var verEcena= CrearEscena();
Motor.runRenderLoop(function () {
  verEcena.render();
})
