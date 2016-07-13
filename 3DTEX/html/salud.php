<?php require_once('Mobile_Detect.php'); 
     $detect = new Mobile_Detect(); //redireccionar a versión móvil si nos visitan desde un móvil o tablet 
    if
    ($detect->isMobile() || $detect->isTablet()) { 
       header("Location: salud.html"); 
    } 
?>
<html lang="es">
  <head>
    <title>Feria virtual</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximun-scale=1">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/babylon.js"></script>
    <script src="../js/hand.js"></script>
  </head>
  <body >
    <header id="header">
      <div class="grupo">
        <div class="caja header-1 web-30"><img src="../img/logo_mt.png" class="logo base-75 tablet-40 web-80 centro"></div>
        <div class="caja header-2 web-70">
          <div id="toggle-menu" class="icon-menu espacio hasta-web">Menú principal</div>
          <ul class="menu-principal centro">
            <li><a href="#"> Inicio</a></li>
            <li><a href="../index.html"> Pabellones</a></li>
            <li><a href="#"> Programación</a>
              <ul>
                <li><a href="#"> Conferencias</a></li>
                <li><a href="#"> Pasarela</a></li>
                <li><a href="#">  Eventos</a></li>
              </ul>
            </li>
            <li><a href="#"> Información</a></li>
            <li><a href="#"> Contacto</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main id="main">
      <div class="grupo">
        <div class="caja">
          <div id="pasillos ">
                <canvas id="renderCanvas" ></canvas>
    <script>
            var canvas = document.getElementById("renderCanvas");
            var engine = new BABYLON.Engine(canvas, true);
            var createScene = function () {
            var scene = new BABYLON.Scene(engine);
      
            // Lights
      
      
            var light0 = new BABYLON.SpotLight("", new BABYLON.Vector3.Zero(), new BABYLON.Vector3.Zero(), 0, 0, scene);
            light0.name = "My Slowly and Discretely Constructed Spot "
            //light1.position = new BABYLON.Vector3(-1000, -100, 125);
            light0.direction = new BABYLON.Vector3(0, -1,0 );
            light0.angle = Math.PI/2;
            light0.exponent = 1.25;
            light0.intensity = 0.25;
            light0.diffuse = new BABYLON.Color3(1, 1, 1);
            light0.specular = new BABYLON.Color3(1, 1, 1);
            light0.setEnabled(1);
                  
            var light1 = new BABYLON.SpotLight("", new BABYLON.Vector3.Zero(), new BABYLON.Vector3.Zero(), 0, 0, scene);
            light1.name = "My Slowly and Discretely Constructed Spot "
            //light1.position = new BABYLON.Vector3(-1000, -100, 125);
            light1.direction = new BABYLON.Vector3(0, -1,0 );
            light1.angle = Math.PI/2;
            light1.exponent = 1.25;
            light1.intensity = 0.25;
            light1.diffuse = new BABYLON.Color3(1, 1, 1);
            light1.specular = new BABYLON.Color3(1, 1, 1);
            light1.setEnabled(1);


            var light2 = new BABYLON.SpotLight("", new BABYLON.Vector3.Zero(), new BABYLON.Vector3.Zero(), 0, 0, scene);
            light2.name = "My Slowly and Discretely Constructed Spot "
            //light2.position = new BABYLON.Vector3(1000, -100, 125);
            light2.direction = new BABYLON.Vector3(0, -1,0 );
            light2.angle = Math.PI/2;
            light2.exponent = 1.25;
            light2.intensity = 0.25;
            light2.diffuse = new BABYLON.Color3(1, 1, 1);
            light2.specular = new BABYLON.Color3(1, 1, 1);
            light2.setEnabled(1);

            var light3 = new BABYLON.SpotLight("", new BABYLON.Vector3.Zero(), new BABYLON.Vector3.Zero(), 0, 0, scene);
            light3.name = "My Slowly and Discretely Constructed Spot "
            //light3.position = new BABYLON.Vector3(0, 1000, 125);
            light3.direction = new BABYLON.Vector3(0, -1,0 );
            light3.angle = Math.PI/2;
            light3.exponent = 1.25;
            light3.intensity = 0.25;
            light3.diffuse = new BABYLON.Color3(1, 1, 1);
            light3.specular = new BABYLON.Color3(1, 1, 1);
            light3.setEnabled(1);

            

            

      
            var material = new BABYLON.StandardMaterial("kosh", scene);
            var sphere = BABYLON.Mesh.CreateSphere("Sphere", 16, 3, scene);
            //  sphere.position = new BABYLON.Vector3(0, -90, 25);
              
          
          
                  // Creating light sphere
            var lightSphere0 = BABYLON.Mesh.CreateSphere("Sphere0", 16, 2, scene);
          //  lightSphere1.position = new BABYLON.Vector3(0, -90, 25);
            
            var lightSphere1 = BABYLON.Mesh.CreateSphere("Sphere0", 16, 2, scene);
          //  lightSphere1.position = new BABYLON.Vector3(0, -90, 25);
            
            var lightSphere2 = BABYLON.Mesh.CreateSphere("Sphere0", 16, 2, scene);
          //  lightSphere2.position = new BABYLON.Vector3(0, -90, 25);
            
            var lightSphere3 = BABYLON.Mesh.CreateSphere("Sphere0", 16, 2, scene);
          //  lightSphere3.position = new BABYLON.Vector3(0, -90, 25);
            
            var lightSphere4 = BABYLON.Mesh.CreateSphere("Sphere0", 16, 2, scene);
          //  lightSphere4.position = new BABYLON.Vector3(0, -90, 25);
            
      
      
      
            lightSphere0.material = new BABYLON.StandardMaterial("red", scene);
            lightSphere0.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
            lightSphere0.material.specularColor = new BABYLON.Color3(1, 1, 1);
            lightSphere0.material.emissiveColor = new BABYLON.Color3(1, 1, 1);
        
            lightSphere1.material = new BABYLON.StandardMaterial("red", scene);
            lightSphere1.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
            lightSphere1.material.specularColor = new BABYLON.Color3(1, 1, 1);
            lightSphere1.material.emissiveColor = new BABYLON.Color3(1, 1, 1);
      
            lightSphere2.material = new BABYLON.StandardMaterial("red", scene);
            lightSphere2.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
            lightSphere2.material.specularColor = new BABYLON.Color3(1, 1, 1);
            lightSphere2.material.emissiveColor = new BABYLON.Color3(1, 1, 1);
      
            lightSphere3.material = new BABYLON.StandardMaterial("red", scene);
            lightSphere3.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
            lightSphere3.material.specularColor = new BABYLON.Color3(1, 1, 1);
            lightSphere3.material.emissiveColor = new BABYLON.Color3(1, 1, 1);
      
            lightSphere4.material = new BABYLON.StandardMaterial("red", scene);
            lightSphere4.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
            lightSphere4.material.specularColor = new BABYLON.Color3(1, 1, 1);
            lightSphere4.material.emissiveColor = new BABYLON.Color3(1, 1, 1);
      
            // Need a free camera for collisions
           var camera = new BABYLON.FreeCamera("FreeCamera", new BABYLON.Vector3(0, -104, -20), scene);
            // var camera = new BABYLON.VirtualJoysticksCamera("VJ_camera", new BABYLON.Vector3(0, -104, -20), scene);
            //var camera = new BABYLON.TouchCamera("VJ_camera", new BABYLON.Vector3(0, -104, -20), scene);
            camera.attachControl(canvas, true);
   
            //Ground
            var ground = BABYLON.Mesh.CreatePlane("ground", 400.0, scene);
            ground.material = new BABYLON.StandardMaterial("groundMat", scene);
            ground.material.diffuseTexture = new BABYLON.Texture("textures/pisos_textura.jpg", scene);
            ground.material.diffuseColor = new BABYLON.Color3(0.67,0.75,0.77);
            ground.material.diffuseTexture.uScale = 35;
            ground.material.diffuseTexture.vScale = 35;
            ground.material.backFaceCulling = false;
            ground.material = new BABYLON.StandardMaterial("Mat", scene);
            ground.material.specularTexture = new BABYLON.Texture("textures/pisos_textura.jpg", scene);
            ground.material.specularTexture.uScale = 35;
            ground.material.specularTexture.vScale = 35;
            ground.material.emissiveTexture = new BABYLON.Texture("textures/pisos_textura.jpg", scene); 
            ground.material.emissiveTexture.uScale = 35;
            ground.material.emissiveTexture.vScale = 35;
            ground.position = new BABYLON.Vector3(5, -110, 125);
            ground.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);
      
      //ceiling
           var ceiling = BABYLON.Mesh.CreatePlane("ceiling", 400.0, scene);
           ceiling .material = new BABYLON.StandardMaterial("groundMat", scene);
           ceiling.material.diffuseColor = new BABYLON.Color3(0.96,1.11,1.40);
           ceiling .material.specularColor = new BABYLON.Color3(0.96,1.11,1.40);
           ceiling .material.specularPower = 32;
           scene.ambientColor = new BABYLON.Color3(0.96,1.11,1.40);
           ceiling .material.ambientColor = new BABYLON.Color3(0.96,1.11,1.40); 
           ceiling.position = new BABYLON.Vector3(5, -90, 100);
           ceiling.rotation = new BABYLON.Vector3(-Math.PI / 2, 0, 0);
      

      //create a builtin shape
           var box=BABYLON.Mesh.CreateBox("box",15,scene);
           box.showBoundingBox=false;
           box.position = new BABYLON.Vector3(0, -100, 160);
           box.rotation.z = Math.PI ;

  
          //Define a material
          var f=new BABYLON.StandardMaterial("material0",scene);
          f.diffuseTexture=new BABYLON.Texture("textures/gran_san.jpg",scene);
          f.specularTexture=new BABYLON.Texture("textures/gran_san.jpg",scene);
          f.emissiveTexture=new BABYLON.Texture("textures/gran_san.jpg",scene);
      
          var ba=new BABYLON.StandardMaterial("material1",scene);
          ba.diffuseTexture=new BABYLON.Texture("textures/gran_san2.jpg",scene);
          ba.specularTexture=new BABYLON.Texture("textures/gran_san2.jpg",scene);
          ba.emissiveTexture=new BABYLON.Texture("textures/gran_san2.jpg",scene);
      
          var l=new BABYLON.StandardMaterial("material2",scene);
          l.diffuseTexture=new BABYLON.Texture("textures/gran_san3.jpg",scene);
          l.specularTexture=new BABYLON.Texture("textures/gran_san3.jpg",scene);
          l.emissiveTexture=new BABYLON.Texture("textures/gran_san3.jpg",scene);
      
          var r=new BABYLON.StandardMaterial("material3",scene);
          r.diffuseTexture=new BABYLON.Texture("textures/gran_san3.jpg",scene);
          r.specularTexture=new BABYLON.Texture("textures/gran_san3.jpg",scene);
          r.emissiveTexture=new BABYLON.Texture("textures/gran_san3.jpg",scene);
      
          var t=new BABYLON.StandardMaterial("material4",scene);
          t.diffuseTexture=new BABYLON.Texture("textures/bogota2.jpg",scene);
          t.specularTexture=new BABYLON.Texture("textures/bogota2.jpg",scene);
          t.emissiveTexture=new BABYLON.Texture("textures/bogota2.jpg",scene);
      
          var bo=new BABYLON.StandardMaterial("material5",scene);
          bo.diffuseColor=new BABYLON.Color3(1,1,0);
          bo.backFaceCulling = false;
      
      
          //put into one
          var multi=new BABYLON.MultiMaterial("nuggetman",scene);
          multi.subMaterials.push(f);
          multi.subMaterials.push(ba);
          multi.subMaterials.push(l);
          multi.subMaterials.push(r);
          multi.subMaterials.push(t);
          multi.subMaterials.push(bo);
      
          //apply material
          box.subMeshes=[];
          var verticesCount=box.getTotalVertices();
          box.subMeshes.push(new BABYLON.SubMesh(0, 0, verticesCount, 0, 6, box));
          box.subMeshes.push(new BABYLON.SubMesh(1, 1, verticesCount, 6, 6, box));
          box.subMeshes.push(new BABYLON.SubMesh(2, 2, verticesCount, 12, 6, box));
          box.subMeshes.push(new BABYLON.SubMesh(3, 3, verticesCount, 18, 6, box));
          box.subMeshes.push(new BABYLON.SubMesh(4, 4, verticesCount, 24, 6, box));
          box.subMeshes.push(new BABYLON.SubMesh(5, 5, verticesCount, 30, 6, box));
          box.material=multi;
            
          
            //Set gravity for the scene (G force like, on Y-axis)
            scene.gravity = new BABYLON.Vector3(0, -0.9, 0);
              
            // Enable Collisions
            scene.collisionsEnabled = true;
              
            //Then apply collisions and gravity to the active camera
            camera.checkCollisions = true;
            camera.applyGravity = true;
            var step = 0.1;

            // Pared
            
            var Pared = BABYLON.Mesh.CreateBox("Pared", 2, scene);
            Pared .material = new BABYLON.StandardMaterial("groundMat", scene);
            Pared.material.diffuseColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared .material.specularColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared .material.specularPower = 32;
            scene.ambientColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared .material.ambientColor = new BABYLON.Color3(0.67,0.75,0.77);  
            Pared.position = new BABYLON.Vector3(0, -100, 300);
            Pared.scaling = new BABYLON.Vector3(25, 10, 1);
            Pared.rotation.y = Math.PI ;
            
            // Pared2
            var Pared2 = Pared.clone("Pared2");
            Pared2.position = new BABYLON.Vector3(0, -100,-50);
          
          
            // Pared3
            var Pared3 = BABYLON.Mesh.CreateBox("Pared3", 2, scene);
            Pared3 .material = new BABYLON.StandardMaterial("groundMat", scene);
            Pared3.material.diffuseColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared3 .material.specularColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared3 .material.specularPower = 32;
            scene.ambientColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared3 .material.ambientColor = new BABYLON.Color3(0.67,0.75,0.77);  
            Pared3.position = new BABYLON.Vector3(-25, -100, 125);
            Pared3.scaling = new BABYLON.Vector3(175, 10, 1);
            Pared3.rotation.y = -Math.PI / 2;
            Pared3.rotation.x = -Math.PI ;
          
          
          
            // Pared4
            var Pared4 = Pared3.clone("Pared4");
            Pared4.position = new BABYLON.Vector3(25, -100, 125);
            Pared4.rotation.y = -Math.PI /2;

            //salidas
            var salida = BABYLON.Mesh.CreateBox("pendon1", 2, scene);
            salida.material = new BABYLON.StandardMaterial("Mat", scene);
            salida.material.diffuseTexture = new BABYLON.Texture("textures/puerta_pasillos-01.png", scene);
            salida.material.specularTexture = new BABYLON.Texture("textures/puerta_pasillos-01.png", scene);
            salida.material.emissiveTexture = new BABYLON.Texture("textures/puerta_pasillos-01.png", scene);
            salida.material.diffuseTexture.hasAlpha = true;                      
            salida.position = new BABYLON.Vector3(0, -100, -49);
            salida.scaling = new BABYLON.Vector3(15, 10, 0.1);
            salida.rotation.y = -Math.PI ;
            salida.rotation.x = -Math.PI ;

            var salida1 = salida.clone("pendon1");
            salida1.position = new BABYLON.Vector3(0, -100, 299);
            salida1.rotation.z = -Math.PI ;
            

            //puertas
            
            var local1 = BABYLON.Mesh.CreateBox("pendon1", 2, scene);
            local1.material = new BABYLON.StandardMaterial("Mat", scene);
            local1.material.diffuseTexture = new BABYLON.Texture("textures/local.jpg", scene);
            local1.material.specularTexture = new BABYLON.Texture("textures/local.jpg", scene);
            local1.material.emissiveTexture = new BABYLON.Texture("textures/local.jpg", scene);
            local1.material.diffuseTexture.hasAlpha = true;                      
            local1.position = new BABYLON.Vector3(-24, -100, 10);
            local1.scaling = new BABYLON.Vector3(15, 10, 0.1);
            local1.rotation.y = -Math.PI / 2;
            local1.rotation.x = -Math.PI ;
            
            var local0 = local1.clone("pendon1");
            local0.position = new BABYLON.Vector3(24, -100, 10);
            local0.rotation.z = -Math.PI ;
            
            var local2 = local1.clone("pendon1");
            local2.position = new BABYLON.Vector3(-24, -100, 55);
            
            var local3 = local1.clone("pendon1");
            local3.position = new BABYLON.Vector3(-24, -100, 100);
            
            var local4 = local1.clone("pendon1");
            local4.position = new BABYLON.Vector3(24, -100, 55);
            local4.rotation.z = -Math.PI ;
            
            var local5 = local1.clone("pendon1");
            local5.position = new BABYLON.Vector3(24, -100, 100);
            local5.rotation.z = -Math.PI ;
            
            
            
            
            
            
               
          
            var pendon1 = BABYLON.Mesh.CreateBox("pendon1", 2, scene);
            pendon1.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon1.material.diffuseTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon1.material.specularTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon1.material.emissiveTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon1.material.diffuseTexture.hasAlpha = true;                       
            pendon1.position = new BABYLON.Vector3(-20, -100, 25);
            pendon1.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon2 = pendon1.clone("pendon1");
            pendon2.position = new BABYLON.Vector3(-20, -100, 25.3);
            pendon2.rotation.z = Math.PI;
          
            //pendon
            var pendon3 = BABYLON.Mesh.CreateBox("pendon3", 2, scene);
            pendon3.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon3.material.diffuseTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon3.material.specularTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon3.material.emissiveTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);    
            pendon3.position = new BABYLON.Vector3(20, -100, 25);
            pendon3.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon4 = pendon3.clone("pendon3");
            pendon4.position = new BABYLON.Vector3(20, -100, 25.1);
            pendon4.rotation.z = Math.PI;
          
            //pendon
            var pendon5 = BABYLON.Mesh.CreateBox("pendon5", 2, scene);
            pendon5.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon5.material.diffuseTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon5.material.specularTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon5.material.emissiveTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon5.material.diffuseTexture.hasAlpha = true;
            pendon5.position = new BABYLON.Vector3(-20, -100, 70);
            pendon5.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
          
            var pendon6 = pendon5.clone("pendon5");
            pendon6.position = new BABYLON.Vector3(-20, -100, 70.1);
            pendon6.rotation.z = Math.PI;
          
            //pendon
            var pendon7 = BABYLON.Mesh.CreateBox("pendon7", 2, scene);
            pendon7.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon7.material.diffuseTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon7.material.specularTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon7.material.emissiveTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon7.material.diffuseTexture.hasAlpha = true;
            pendon7.position = new BABYLON.Vector3(20, -100, 70);
            pendon7.scaling = new BABYLON.Vector3(5, 8, 0.1);
            
            var pendon8 = pendon7.clone("pendon7");
            pendon8.position = new BABYLON.Vector3(20, -100, 70.1);
            pendon8.rotation.z = Math.PI;
          
          
            //pendon
            var pendon9 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon9.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon9.material.diffuseTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon9.material.specularTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon9.material.emissiveTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon9.material.diffuseTexture.hasAlpha = true;
            pendon9.position = new BABYLON.Vector3(-20, -100, 115);
            pendon9.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon10 = pendon9.clone("pendon9");
            pendon10.position = new BABYLON.Vector3(-20, -100, 115.1);
            pendon10.rotation.z = Math.PI;
          
            //pendon
            var pendon11 = BABYLON.Mesh.CreateBox("pendon11", 2, scene);
            pendon11.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon11.material.diffuseTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon11.material.specularTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon11.material.emissiveTexture = new BABYLON.Texture("textures/pendon_m_textil.jpg", scene);
            pendon11.material.diffuseTexture.hasAlpha = true;
            pendon11.position = new BABYLON.Vector3(20, -100, 115);
            pendon11.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon12 = pendon11.clone("pendon11");
            pendon12.position = new BABYLON.Vector3(20, -100, 115.1);
            pendon12.rotation.z = Math.PI;
          
          
          
          
    
            //Set the ellipsoid around the camera (e.g. your player's size)
            camera.ellipsoid = new BABYLON.Vector3(1, 3, 1);
        
            //finally, say which mesh will be collisionable
            ground.checkCollisions = true;
            //box.checkCollisions = true;
            Pared.checkCollisions = true;
            Pared2.checkCollisions = true;
            Pared3.checkCollisions = true;  
            Pared4.checkCollisions = true;  
           //pendon1.checkCollisions = true; 
           //redBox.checkCollisions = true;  
      
       // Over/Out
       
        var prueba= function(mesh, actionFunc ) {
              mesh.actionManager = new BABYLON.ActionManager(scene);
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
      prueba(box,"http://feriavirtualmundotextil.com");
      prueba(pendon1,"../stand/mtextil.html");
      prueba(pendon2,"../stand/mtextil.html");
      prueba(pendon3,"../stand/mtextil.html");
      prueba(pendon4,"../stand/mtextil.html");
      prueba(pendon5,"../stand/mtextil.html");
      prueba(pendon6,"../stand/mtextil.html");
      prueba(pendon7,"../stand/mtextil.html");
      prueba(pendon8,"../stand/mtextil.html");
      prueba(pendon9,"../stand/mtextil.html");
      prueba(pendon10,"../stand/mtextil.html");
      prueba(pendon11,"../stand/mtextil.html");
      prueba(pendon12,"../stand/mtextil.html");
      prueba(salida,"../index.html");
      prueba(salida1,"../index.html");
        
            // Conditions
            
            // Over/Out
            var makeOverOut = function (mesh) {
                mesh.actionManager.registerAction(new BABYLON.SetValueAction(BABYLON.ActionManager.OnPointerOutTrigger, mesh.material, "emissiveColor", mesh.material.emissiveColor));
                mesh.actionManager.registerAction(new BABYLON.SetValueAction(BABYLON.ActionManager.OnPointerOverTrigger, mesh.material, "emissiveColor", BABYLON.Color3.Blue()));
                //mesh.actionManager.registerAction(new BABYLON.InterpolateValueAction(BABYLON.ActionManager.OnPointerOutTrigger, mesh, "scaling", new BABYLON.Vector3(1, 1, 1), 150));
               // mesh.actionManager.registerAction(new BABYLON.InterpolateValueAction(BABYLON.ActionManager.OnPointerOverTrigger, mesh, "scaling", new BABYLON.Vector3(1.1, 1.1, 1.1), 150));
            }
        
      //    makeOverOut(redBox);
      makeOverOut(box);
      makeOverOut(pendon1);
      makeOverOut(pendon2);
      makeOverOut(pendon3);
      makeOverOut(pendon4);
      makeOverOut(pendon5);
      makeOverOut(pendon6);
      makeOverOut(pendon7);
      makeOverOut(pendon8);
      makeOverOut(pendon9);
      makeOverOut(pendon10);
      makeOverOut(pendon11);
      makeOverOut(pendon12);
      makeOverOut(salida);
      makeOverOut(salida1);
  
      
           
      
      scene.actionManager = new BABYLON.ActionManager(scene);
      var alpha = 0;
      
      scene.beforeRender = function () {
      light0.position = new BABYLON.Vector3(0, -90, 20);
      light1.position = new BABYLON.Vector3(0, -90, 90);
      light2.position = new BABYLON.Vector3(0, -90, 160);
      light3.position = new BABYLON.Vector3(0, -90, 230);
    
    
         
      lightSphere0.position = light0.position;
      lightSphere1.position = light1.position;
      lightSphere2.position = light2.position;
      lightSphere3.position = light3.position;

    
         
              
        
                alpha += 0.01;
            };
      
        
            return scene;
        }
        
        var scene = createScene();

        engine.runRenderLoop(function () {
            scene.render();
        });

        // Resize
        window.addEventListener("resize", function () {
            engine.resize();
        });
    
    </script>
          </div>  
        </div>
      </div>
    </main>
    <footer id="footer">
            <div class="grupo">
              <div class="caja">
                <p><span>Derechos reservados</span></p>
                <p><span>Mundo textil</span></p>
              </div>
            </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/imageMapResizer.min.js" type="text/javascript"></script>
    <script> $('map').imageMapResize(); </script>
  </body>
</html>