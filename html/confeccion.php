<?php require_once('Mobile_Detect.php'); 
     $detect = new Mobile_Detect(); //redireccionar a versión móvil si nos visitan desde un móvil o tablet 
    if
    ($detect->isMobile() || $detect->isTablet()) { 
       header("Location: confeccion.html"); 
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
            light0.intensity = 0.4;
            light0.diffuse = new BABYLON.Color3(1, 1, 1);
            light0.specular = new BABYLON.Color3(1, 1, 1);
            light0.setEnabled(1);
                  
            var light1 = new BABYLON.SpotLight("", new BABYLON.Vector3.Zero(), new BABYLON.Vector3.Zero(), 0, 0, scene);
            light1.name = "My Slowly and Discretely Constructed Spot "
            //light1.position = new BABYLON.Vector3(-1000, -100, 125);
            light1.direction = new BABYLON.Vector3(0, -1,0 );
            light1.angle = Math.PI/2;
            light1.exponent = 1.25;
            light1.intensity = 0.4;
            light1.diffuse = new BABYLON.Color3(1, 1, 1);
            light1.specular = new BABYLON.Color3(1, 1, 1);
            light1.setEnabled(1);


            var light2 = new BABYLON.SpotLight("", new BABYLON.Vector3.Zero(), new BABYLON.Vector3.Zero(), 0, 0, scene);
            light2.name = "My Slowly and Discretely Constructed Spot "
            //light2.position = new BABYLON.Vector3(1000, -100, 125);
            light2.direction = new BABYLON.Vector3(0, -1,0 );
            light2.angle = Math.PI/2;
            light2.exponent = 1.25;
            light2.intensity = 0.4;
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
           var camera = new BABYLON.FreeCamera("FreeCamera", new BABYLON.Vector3(0, -101, -20), scene);
            // var camera = new BABYLON.VirtualJoysticksCamera("VJ_camera", new BABYLON.Vector3(0, -104, -20), scene);
            //var camera = new BABYLON.TouchCamera("VJ_camera", new BABYLON.Vector3(0, -104, -20), scene);
            camera.attachControl(canvas, true);
   
            
            //Ground
            var ground = BABYLON.Mesh.CreatePlane("ground", 1500.0, scene);
            ground.material = new BABYLON.StandardMaterial("groundMat", scene);
            ground.material.diffuseTexture = new BABYLON.Texture("textures/piso2.jpg", scene);
            ground.material.diffuseColor = new BABYLON.Color3(0.67,0.75,0.77);
            ground.material.diffuseTexture.uScale = 150;
            ground.material.diffuseTexture.vScale = 150;
            ground.material.backFaceCulling = false;
            ground.material = new BABYLON.StandardMaterial("Mat", scene);
            ground.material.specularTexture = new BABYLON.Texture("textures/piso2.jpg", scene);
            ground.material.specularTexture.uScale = 150;
            ground.material.specularTexture.vScale = 150;
            ground.material.emissiveTexture = new BABYLON.Texture("textures/piso2.jpg", scene); 
            ground.material.emissiveTexture.uScale = 150;
            ground.material.emissiveTexture.vScale = 150;
            ground.position = new BABYLON.Vector3(5, -110, 700);
            ground.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);
      
      //ceiling
           var ceiling = BABYLON.Mesh.CreatePlane("ceiling", 1500.0, scene);
           ceiling .material = new BABYLON.StandardMaterial("groundMat", scene);
           ceiling.material.diffuseColor = new BABYLON.Color3(0.96,1.11,1.40);
           ceiling .material.specularColor = new BABYLON.Color3(0.96,1.11,1.40);
           ceiling .material.specularPower = 32;
           scene.ambientColor = new BABYLON.Color3(0.96,1.11,1.40);
           ceiling .material.ambientColor = new BABYLON.Color3(0.96,1.11,1.40); 
           ceiling.position = new BABYLON.Vector3(5, -90, 700);
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

           
            // Pared1
            
            var Pared = BABYLON.Mesh.CreateBox("Pared", 2, scene);
            Pared .material = new BABYLON.StandardMaterial("groundMat", scene);
            Pared.material.diffuseColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared .material.specularColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared .material.specularPower = 32;
            scene.ambientColor = new BABYLON.Color3(0.67,0.75,0.77);
            Pared .material.ambientColor = new BABYLON.Color3(0.67,0.75,0.77);  
            Pared.position = new BABYLON.Vector3(0, -100, 1350);
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
            Pared3.position = new BABYLON.Vector3(-25, -100, 650);
            Pared3.scaling = new BABYLON.Vector3(700, 10, 1);
            Pared3.rotation.y = -Math.PI / 2;
            Pared3.rotation.x = -Math.PI ;
          
          
          
            // Pared4
            var Pared4 = Pared3.clone("Pared4");
            Pared4.position = new BABYLON.Vector3(25, -100, 650);
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
            salida1.position = new BABYLON.Vector3(0, -100, 1349);
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
            local2.position = new BABYLON.Vector3(24, -100, 55);
            local2.rotation.z = -Math.PI ;
			
            var local3 = local1.clone("pendon1");
            local3.position = new BABYLON.Vector3(-24, -100, 55);
            			
            var local4 = local1.clone("pendon1");
            local4.position = new BABYLON.Vector3(24, -100, 100);
			local4.rotation.z = -Math.PI ;
			
            var local5 = local1.clone("pendon1");
            local5.position = new BABYLON.Vector3(-24, -100, 100);
            		
			var local6 = local1.clone("pendon1");
            local6.position = new BABYLON.Vector3(24, -100, 145);
            local6.rotation.z = -Math.PI ;
			
			var local7 = local1.clone("pendon1");
            local7.position = new BABYLON.Vector3(-24, -100, 145);
			
			var local8 = local1.clone("pendon1");
            local8.position = new BABYLON.Vector3(24, -100, 190);
            local8.rotation.z = -Math.PI ;
            
            var local9 = local1.clone("pendon1");
            local9.position = new BABYLON.Vector3(-24, -100, 190);
            
            var local10 = local1.clone("pendon1");
            local10.position = new BABYLON.Vector3(24, -100, 235);
            local10.rotation.z = -Math.PI ;
			
            var local11 = local1.clone("pendon1");
            local11.position = new BABYLON.Vector3(-24, -100, 235);
                      
            var local12 = local1.clone("pendon1");
            local12.position = new BABYLON.Vector3(24, -100, 280);
            local12.rotation.z = -Math.PI ;
			
			var local13 = local1.clone("pendon1");
            local13.position = new BABYLON.Vector3(-24, -100, 280);
			
			var local14 = local1.clone("pendon1");
            local14.position = new BABYLON.Vector3(24, -100, 325);
            local14.rotation.z = -Math.PI ;
			
			var local15 = local1.clone("pendon1");
            local15.position = new BABYLON.Vector3(-24, -100, 325);
						 
			var local16 = local1.clone("pendon1");
            local16.position = new BABYLON.Vector3(24, -100, 370);
            local16.rotation.z = -Math.PI ;
            
            var local17 = local1.clone("pendon1");
            local17.position = new BABYLON.Vector3(-24, -100,370);
            
            var local18 = local1.clone("pendon1");
            local18.position = new BABYLON.Vector3(24, -100, 415);
            local18.rotation.z = -Math.PI ;
            
            var local19 = local1.clone("pendon1");
            local19.position = new BABYLON.Vector3(-24, -100, 415);
              
            var local20 = local1.clone("pendon1");
            local20.position = new BABYLON.Vector3(24, -100, 460);
			local20.rotation.z = -Math.PI ;
			 
			var local21 = local1.clone("pendon1");
            local21.position = new BABYLON.Vector3(-24, -100, 460);
			
			var local22 = local1.clone("pendon1");
            local22.position = new BABYLON.Vector3(24, -100, 505);
            local22.rotation.z = -Math.PI ;
			
            var local23 = local1.clone("pendon1");
            local23.position = new BABYLON.Vector3(-24, -100, 505);
            			
            var local24 = local1.clone("pendon1");
            local24.position = new BABYLON.Vector3(24, -100, 550);
			local24.rotation.z = -Math.PI ;
			
            var local25 = local1.clone("pendon1");
            local25.position = new BABYLON.Vector3(-24, -100, 550);            
			
			var local26 = local1.clone("pendon1");
            local26.position = new BABYLON.Vector3(24, -100, 595);
            local26.rotation.z = -Math.PI ;
			
			var local27 = local1.clone("pendon1");
            local27.position = new BABYLON.Vector3(-24, -100, 595);
			
			var local28 = local1.clone("pendon1");
            local28.position = new BABYLON.Vector3(24, -100, 640);
            local28.rotation.z = -Math.PI ;
            
            var local29 = local1.clone("pendon1");
            local29.position = new BABYLON.Vector3(-24, -100, 640);
            
            var local30 = local1.clone("pendon1");
            local30.position = new BABYLON.Vector3(24, -100, 685);
            local30.rotation.z = -Math.PI ;
			
            var local31 = local1.clone("pendon1");
            local31.position = new BABYLON.Vector3(-24, -100, 685);
                       
            var local32 = local1.clone("pendon1");
            local32.position = new BABYLON.Vector3(24, -100, 730);
            local32.rotation.z = -Math.PI ;
			
			var local33 = local1.clone("pendon1");
            local33.position = new BABYLON.Vector3(-24, -100, 730);
			
			var local34 = local1.clone("pendon1");
            local34.position = new BABYLON.Vector3(24, -100, 775);
            local34.rotation.z = -Math.PI ;
			
			var local35 = local1.clone("pendon1");
            local35.position = new BABYLON.Vector3(-24, -100, 775);			
			 
			var local36 = local1.clone("pendon1");
            local36.position = new BABYLON.Vector3(24, -100, 820);
            local36.rotation.z = -Math.PI ;
            
            var local37 = local1.clone("pendon1");
            local37.position = new BABYLON.Vector3(-24, -100,820);
            
            var local38 = local1.clone("pendon1");
            local38.position = new BABYLON.Vector3(24, -100, 865);
            local38.rotation.z = -Math.PI ;
            
            var local39 = local1.clone("pendon1");
            local39.position = new BABYLON.Vector3(-24, -100, 865);
			
			var local40 = local1.clone("pendon1");
            local40.position = new BABYLON.Vector3(24, -100, 910);
            local40.rotation.z = -Math.PI ;
            
            var local41 = local1.clone("pendon1");
            local41.position = new BABYLON.Vector3(-24, -100, 910);
			
			var local42 = local1.clone("pendon1");
            local42.position = new BABYLON.Vector3(24, -100, 955);
            local42.rotation.z = -Math.PI ;
			
            var local43 = local1.clone("pendon1");
            local43.position = new BABYLON.Vector3(-24, -100, 955);
            
            var local44 = local1.clone("pendon1");
            local44.position = new BABYLON.Vector3(24, -100, 1000);
			local44.rotation.z = -Math.PI ;
			
            var local45 = local1.clone("pendon1");
            local45.position = new BABYLON.Vector3(-24, -100, 1000);            
			
			var local46 = local1.clone("pendon1");
            local46.position = new BABYLON.Vector3(24, -100, 1045);
            local46.rotation.z = -Math.PI ;
			
			var local47 = local1.clone("pendon1");
            local47.position = new BABYLON.Vector3(-24, -100, 1045);
			
			var local48 = local1.clone("pendon1");
            local48.position = new BABYLON.Vector3(24, -100, 1090);
            local48.rotation.z = -Math.PI ;
            
            var local49 = local1.clone("pendon1");
            local49.position = new BABYLON.Vector3(-24, -100, 1090);
            
            var local50 = local1.clone("pendon1");
            local50.position = new BABYLON.Vector3(24, -100, 1135);
            local50.rotation.z = -Math.PI ;
			
            var local51 = local1.clone("pendon1");
            local51.position = new BABYLON.Vector3(-24, -100, 1135);
            
            var local52 = local1.clone("pendon1");
            local52.position = new BABYLON.Vector3(24, -100, 1180);
            local52.rotation.z = -Math.PI ;
			
			var local53 = local1.clone("pendon1");
            local53.position = new BABYLON.Vector3(-24, -100, 1180);
			
			var local54 = local1.clone("pendon1");
            local54.position = new BABYLON.Vector3(24, -100, 1225);
            local54.rotation.z = -Math.PI ;
			
			var local55 = local1.clone("pendon1");
            local55.position = new BABYLON.Vector3(-24, -100, 1225);		
			 
			var local56 = local1.clone("pendon1");
            local56.position = new BABYLON.Vector3(24, -100, 1270);
            local56.rotation.z = -Math.PI ;
            
            var local57 = local1.clone("pendon1");
            local57.position = new BABYLON.Vector3(-24, -100,1270);
            
            var local58 = local1.clone("pendon1");
            local58.position = new BABYLON.Vector3(24, -100, 1315);
            local58.rotation.z = -Math.PI ;
            
            var local59 = local1.clone("pendon1");
            local59.position = new BABYLON.Vector3(-24, -100, 1315);
              
              
           
          
			
			
			
           
            
			
			
            
            
            
            
            
               
          
            //pendon
            var pendon1 = BABYLON.Mesh.CreateBox("pendon1", 2, scene);
            pendon1.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon1.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon1.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon1.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon1.material.diffuseTexture.hasAlpha = true;                       
            pendon1.position = new BABYLON.Vector3(-20, -100, 25);
            pendon1.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon2 = pendon1.clone("pendon1");
            pendon2.position = new BABYLON.Vector3(-20, -100, 25.1);
            pendon2.rotation.z = Math.PI;
          
            //pendon
            var pendon3 = BABYLON.Mesh.CreateBox("pendon3", 2, scene);
            pendon3.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon3.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon3.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon3.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);    
            pendon3.position = new BABYLON.Vector3(20, -100, 25);
            pendon3.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon4 = pendon3.clone("pendon3");
            pendon4.position = new BABYLON.Vector3(20, -100, 25.1);
            pendon4.rotation.z = Math.PI;
          
            //pendon
            var pendon5 = BABYLON.Mesh.CreateBox("pendon5", 2, scene);
            pendon5.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon5.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon5.material.specularTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon5.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon5.material.diffuseTexture.hasAlpha = true;
            pendon5.position = new BABYLON.Vector3(-20, -100, 70);
            pendon5.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
          
            var pendon6 = pendon5.clone("pendon5");
            pendon6.position = new BABYLON.Vector3(-20, -100, 70.1);
            pendon6.rotation.z = Math.PI;
          
            //pendon
            var pendon7 = BABYLON.Mesh.CreateBox("pendon7", 2, scene);
            pendon7.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon7.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon7.material.specularTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon7.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon7.material.diffuseTexture.hasAlpha = true;
            pendon7.position = new BABYLON.Vector3(20, -100, 70);
            pendon7.scaling = new BABYLON.Vector3(5, 8, 0.1);
            
            var pendon8 = pendon7.clone("pendon7");
            pendon8.position = new BABYLON.Vector3(20, -100, 70.1);
            pendon8.rotation.z = Math.PI;
          
          
            //pendon
            var pendon9 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon9.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon9.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon9.material.specularTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon9.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon9.material.diffuseTexture.hasAlpha = true;
            pendon9.position = new BABYLON.Vector3(-20, -100, 115);
            pendon9.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon10 = pendon9.clone("pendon9");
            pendon10.position = new BABYLON.Vector3(-20, -100, 115.1);
            pendon10.rotation.z = Math.PI;
          
            //pendon
            var pendon11 = BABYLON.Mesh.CreateBox("pendon11", 2, scene);
            pendon11.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon11.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon11.material.specularTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon11.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon11.material.diffuseTexture.hasAlpha = true;
            pendon11.position = new BABYLON.Vector3(20, -100, 115);
            pendon11.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon12 = pendon11.clone("pendon11");
            pendon12.position = new BABYLON.Vector3(20, -100, 115.1);
            pendon12.rotation.z = Math.PI;
			
			
			//pendon
            var pendon13 = BABYLON.Mesh.CreateBox("pendon13", 2, scene);
            pendon13.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon13.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon13.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon13.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon13.material.diffuseTexture.hasAlpha = true;
            pendon13.position = new BABYLON.Vector3(-20, -100, 160);
            pendon13.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon14 = pendon13.clone("pendon14");
            pendon14.position = new BABYLON.Vector3(-20, -100, 160.1);
            pendon14.rotation.z = Math.PI;
          
		  
		  
            //pendon
            var pendon15 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            pendon15.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon15.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon15.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon15.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon15.material.diffuseTexture.hasAlpha = true;
            pendon15.position = new BABYLON.Vector3(20, -100, 160);
            pendon15.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon16 = pendon15.clone("pendon16");
            pendon16.position = new BABYLON.Vector3(20, -100, 160.1);
            pendon16.rotation.z = Math.PI;
			
			
			
			
			  //pendon
            var pendon17 = BABYLON.Mesh.CreateBox("pendon1", 2, scene);
            pendon17.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon17.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon17.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon17.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon17.material.diffuseTexture.hasAlpha = true;                       
            pendon17.position = new BABYLON.Vector3(-20, -100, 205);
            pendon17.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon18 = pendon1.clone("pendon1");
            pendon18.position = new BABYLON.Vector3(-20, -100, 205.3);
            pendon18.rotation.z = Math.PI;
          
            //pendon
            var pendon19 = BABYLON.Mesh.CreateBox("pendon3", 2, scene);
            pendon19.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon19.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon19.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon19.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);    
            pendon19.position = new BABYLON.Vector3(20, -100, 205);
            pendon19.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon20 = pendon3.clone("pendon3");
            pendon20.position = new BABYLON.Vector3(20, -100, 205.3);
            pendon20.rotation.z = Math.PI;
          
            //pendon
            var pendon21 = BABYLON.Mesh.CreateBox("pendon5", 2, scene);
            pendon21.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon21.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon21.material.specularTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon21.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon21.material.diffuseTexture.hasAlpha = true;
            pendon21.position = new BABYLON.Vector3(-20, -100, 250);
            pendon21.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
          
            var pendon22 = pendon5.clone("pendon5");
            pendon22.position = new BABYLON.Vector3(-20, -100, 250.1);
            pendon22.rotation.z = Math.PI;
          
            //pendon
            var pendon23 = BABYLON.Mesh.CreateBox("pendon7", 2, scene);
            pendon23.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon23.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon23.material.specularTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon23.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon23.material.diffuseTexture.hasAlpha = true;
            pendon23.position = new BABYLON.Vector3(20, -100, 250);
            pendon23.scaling = new BABYLON.Vector3(5, 8, 0.1);
            
            var pendon24 = pendon7.clone("pendon7");
            pendon24.position = new BABYLON.Vector3(20, -100, 250.1);
            pendon24.rotation.z = Math.PI;
          
          
            //pendon
            var pendon25 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon25.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon25.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon25.material.specularTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon25.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon25.material.diffuseTexture.hasAlpha = true;
            pendon25.position = new BABYLON.Vector3(-20, -100, 295);
            pendon25.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon26 = pendon9.clone("pendon9");
            pendon26.position = new BABYLON.Vector3(-20, -100, 295.1);
            pendon26.rotation.z = Math.PI;
          
            //pendon
            var pendon27 = BABYLON.Mesh.CreateBox("pendon11", 2, scene);
            pendon27.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon27.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon27.material.specularTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon27.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon27.material.diffuseTexture.hasAlpha = true;
            pendon27.position = new BABYLON.Vector3(20, -100, 295);
            pendon27.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon28 = pendon11.clone("pendon11");
            pendon28.position = new BABYLON.Vector3(20, -100, 295.1);
            pendon28.rotation.z = Math.PI;
			
			
			//pendon
            var pendon29 = BABYLON.Mesh.CreateBox("pendon13", 2, scene);
            pendon29.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon29.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon29.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon29.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon29.material.diffuseTexture.hasAlpha = true;
            pendon29.position = new BABYLON.Vector3(-20, -100, 340);
            pendon29.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon30 = pendon13.clone("pendon14");
            pendon30.position = new BABYLON.Vector3(-20, -100, 340.1);
            pendon30.rotation.z = Math.PI;
          
		  
		  
            //pendon
            var pendon31 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            pendon31.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon31.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon31.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon31.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon31.material.diffuseTexture.hasAlpha = true;
            pendon31.position = new BABYLON.Vector3(20, -100, 340);
            pendon31.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon32 = pendon15.clone("pendon16");
            pendon32.position = new BABYLON.Vector3(20, -100, 340.1);
            pendon32.rotation.z = Math.PI;
			
			
			
			 //pendon
            var pendon33 = BABYLON.Mesh.CreateBox("pendon3", 2, scene);
            pendon33.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon33.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon33.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon33.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);    
            pendon33.position = new BABYLON.Vector3(-20, -100, 385);
            pendon33.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon34 = pendon1.clone("pendon3");
            pendon34.position = new BABYLON.Vector3(-20, -100, 385.1);
            pendon34.rotation.z = Math.PI;
          
            //pendon
            var pendon35 = BABYLON.Mesh.CreateBox("pendon5", 2, scene);
            pendon35.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon35.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon35.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon35.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon35.material.diffuseTexture.hasAlpha = true;
            pendon35.position = new BABYLON.Vector3(20, -100, 385);
            pendon35.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
          
            var pendon36 = pendon3.clone("pendon5");
            pendon36.position = new BABYLON.Vector3(20, -100, 385.1);
            pendon36.rotation.z = Math.PI;
          
            //pendon
            var pendon37 = BABYLON.Mesh.CreateBox("pendon7", 2, scene);
            pendon37.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon37.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon37.material.specularTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon37.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon37.material.diffuseTexture.hasAlpha = true;
            pendon37.position = new BABYLON.Vector3(-20, -100, 430);
            pendon37.scaling = new BABYLON.Vector3(5, 8, 0.1);
            
            var pendon38 = pendon5.clone("pendon7");
            pendon38.position = new BABYLON.Vector3(-20, -100, 430.1);
            pendon38.rotation.z = Math.PI;
          
          
            //pendon
            var pendon39 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon39.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon39.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon39.material.specularTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon39.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon39.material.diffuseTexture.hasAlpha = true;
            pendon39.position = new BABYLON.Vector3(20, -100, 430);
            pendon39.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon40 = pendon7.clone("pendon9");
            pendon40.position = new BABYLON.Vector3(20, -100, 430.1);
            pendon40.rotation.z = Math.PI;
			
			
			
			 //pendon
            var pendon41 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon41.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon41.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon41.material.specularTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon41.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon41.material.diffuseTexture.hasAlpha = true;
            pendon41.position = new BABYLON.Vector3(-20, -100, 475);
            pendon41.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon42 = pendon9.clone("pendon9");
            pendon42.position = new BABYLON.Vector3(-20, -100, 475.1);
            pendon42.rotation.z = Math.PI;
          
            //pendon
            var pendon43 = BABYLON.Mesh.CreateBox("pendon11", 2, scene);
            pendon43.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon43.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon43.material.specularTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon43.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon43.material.diffuseTexture.hasAlpha = true;
            pendon43.position = new BABYLON.Vector3(20, -100, 475);
            pendon43.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon44 = pendon11.clone("pendon11");
            pendon44.position = new BABYLON.Vector3(20, -100, 475.1);
            pendon44.rotation.z = Math.PI;
			
			
			//pendon
            var pendon45 = BABYLON.Mesh.CreateBox("pendon13", 2, scene);
            pendon45.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon45.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon45.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon45.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon45.material.diffuseTexture.hasAlpha = true;
            pendon45.position = new BABYLON.Vector3(-20, -100, 520);
            pendon45.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon46 = pendon13.clone("pendon14");
            pendon46.position = new BABYLON.Vector3(-20, -100, 520.1);
            pendon46.rotation.z = Math.PI;
          
		  
		  
            //pendon
            var pendon47 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            pendon47.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon47.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon47.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon47.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon47.material.diffuseTexture.hasAlpha = true;
            pendon47.position = new BABYLON.Vector3(20, -100, 520);
            pendon47.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon48 = pendon15.clone("pendon16");
            pendon48.position = new BABYLON.Vector3(20, -100, 520.1);
            pendon48.rotation.z = Math.PI;
			
			
			
			 //pendon
            var pendon49 = BABYLON.Mesh.CreateBox("pendon5", 2, scene);
            pendon49.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon49.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon49.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon49.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo.jpg", scene);
            pendon49.material.diffuseTexture.hasAlpha = true;
            pendon49.position = new BABYLON.Vector3(-20, -100, 565);
            pendon49.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
          
            var pendon50 = pendon1.clone("pendon5");
            pendon50.position = new BABYLON.Vector3(-20, -100, 565.1);
            pendon50.rotation.z = Math.PI;
          
            //pendon
            var pendon51 = BABYLON.Mesh.CreateBox("pendon7", 2, scene);
            pendon51.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon51.material.diffuseTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon51.material.specularTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon51.material.emissiveTexture = new BABYLON.Texture("textures/pendon_komodo_.jpg", scene);
            pendon51.material.diffuseTexture.hasAlpha = true;
            pendon51.position = new BABYLON.Vector3(20, -100, 565);
            pendon51.scaling = new BABYLON.Vector3(5, 8, 0.1);
            
            var pendon52 = pendon3.clone("pendon7");
            pendon52.position = new BABYLON.Vector3(20, -100, 565.1);
            pendon52.rotation.z = Math.PI;
          
          
            //pendon
            var pendon53 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon53.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon53.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon53.material.specularTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon53.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story.jpg", scene);
            pendon53.material.diffuseTexture.hasAlpha = true;
            pendon53.position = new BABYLON.Vector3(-20, -100, 610);
            pendon53.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon54 = pendon5.clone("pendon9");
            pendon54.position = new BABYLON.Vector3(-20, -100, 610.1);
            pendon54.rotation.z = Math.PI;
			
			
			
			 //pendon
            var pendon55 = BABYLON.Mesh.CreateBox("pendon9", 2, scene);
            pendon55.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon55.material.diffuseTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon55.material.specularTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon55.material.emissiveTexture = new BABYLON.Texture("textures/pendon_story_.jpg", scene);
            pendon55.material.diffuseTexture.hasAlpha = true;
            pendon55.position = new BABYLON.Vector3(20, -100, 610);
            pendon55.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon56 = pendon7.clone("pendon9");
            pendon56.position = new BABYLON.Vector3(20, -100, 610.1);
            pendon56.rotation.z = Math.PI;
          
            //pendon
            var pendon57 = BABYLON.Mesh.CreateBox("pendon11", 2, scene);
            pendon57.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon57.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon57.material.specularTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon57.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas.jpg", scene);
            pendon57.material.diffuseTexture.hasAlpha = true;
            pendon57.position = new BABYLON.Vector3(-20, -100, 655);
            pendon57.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon58 = pendon9.clone("pendon11");
            pendon58.position = new BABYLON.Vector3(-20, -100, 655.1);
            pendon58.rotation.z = Math.PI;
			
			
			//pendon
            var pendon59 = BABYLON.Mesh.CreateBox("pendon13", 2, scene);
            pendon59.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon59.material.diffuseTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon59.material.specularTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon59.material.emissiveTexture = new BABYLON.Texture("textures/pendon_totas_.jpg", scene);
            pendon59.material.diffuseTexture.hasAlpha = true;
            pendon59.position = new BABYLON.Vector3(20, -100, 655);
            pendon59.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon60 = pendon11.clone("pendon14");
            pendon60.position = new BABYLON.Vector3(20, -100, 655.1);
            pendon60.rotation.z = Math.PI;
          
		  
		  
            //pendon
            var pendon61 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            pendon61.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon61.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon61.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon61.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy.jpg", scene);
            pendon61.material.diffuseTexture.hasAlpha = true;
            pendon61.position = new BABYLON.Vector3(-20, -100, 700);
            pendon61.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon62 = pendon13.clone("pendon16");
            pendon62.position = new BABYLON.Vector3(-20, -100, 700.1);
            pendon62.rotation.z = Math.PI;
			
			 //pendon
            var pendon63 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            pendon63.material = new BABYLON.StandardMaterial("Mat", scene);
            pendon63.material.diffuseTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon63.material.specularTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon63.material.emissiveTexture = new BABYLON.Texture("textures/pendon_uyy_.jpg", scene);
            pendon63.material.diffuseTexture.hasAlpha = true;
            pendon63.position = new BABYLON.Vector3(20, -100, 700);
            pendon63.scaling = new BABYLON.Vector3(5, 8, 0.1);
          
            var pendon64 = pendon15.clone("pendon16");
            pendon64.position = new BABYLON.Vector3(20, -100, 700.1);
            pendon64.rotation.z = Math.PI;
			
		
		
		
		
		
	
			//numeración
			

			var numero1 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero1.material = new BABYLON.StandardMaterial("Mat", scene);
            numero1.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-01.jpg", scene);
            numero1.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-01.jpg", scene);
            numero1.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-01.jpg", scene);
            numero1.material.diffuseTexture.hasAlpha = true;
            numero1.position = new BABYLON.Vector3(-13.5, -93, 25);
            numero1.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero2 = numero1.clone("pendon16");
            numero2.position = new BABYLON.Vector3(-13.5, -93, 25.1);
            numero2.rotation.z = Math.PI;
          
          
            var numero3 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero3.material = new BABYLON.StandardMaterial("Mat", scene);
            numero3.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-02.jpg", scene);
            numero3.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-02.jpg", scene);
            numero3.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-02.jpg", scene);
            numero3.material.diffuseTexture.hasAlpha = true;
            numero3.position = new BABYLON.Vector3(13.5, -93, 25);
            numero3.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero4 = numero3.clone("pendon16");
            numero4.position = new BABYLON.Vector3(13.5, -93, 25.1);
            numero4.rotation.z = Math.PI;
		  
		  
		  
		  
		  
		    var numero5 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero5.material = new BABYLON.StandardMaterial("Mat", scene);
            numero5.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-03.jpg", scene);
            numero5.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-03.jpg", scene);
            numero5.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-03.jpg", scene);
            numero5.material.diffuseTexture.hasAlpha = true;
            numero5.position = new BABYLON.Vector3(-13.5, -93, 70);
            numero5.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero6 = numero5.clone("pendon16");
            numero6.position = new BABYLON.Vector3(-13.5, -93, 70.1);
            numero6.rotation.z = Math.PI;
          
          
            var numero7 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero7.material = new BABYLON.StandardMaterial("Mat", scene);
            numero7.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-04.jpg", scene);
            numero7.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-04.jpg", scene);
            numero7.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-04.jpg", scene);
            numero7.material.diffuseTexture.hasAlpha = true;
            numero7.position = new BABYLON.Vector3(13.5, -93, 70);
            numero7.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero8 = numero7.clone("pendon16");
            numero8.position = new BABYLON.Vector3(13.5, -93, 70.1);
            numero8.rotation.z = Math.PI;
			
			
			
			
			
			var numero9 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero9.material = new BABYLON.StandardMaterial("Mat", scene);
            numero9.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-05.jpg", scene);
            numero9.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-05.jpg", scene);
            numero9.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-05.jpg", scene);
            numero9.material.diffuseTexture.hasAlpha = true;
            numero9.position = new BABYLON.Vector3(-13.5, -93, 115);
            numero9.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero10 = numero9.clone("pendon16");
            numero10.position = new BABYLON.Vector3(-13.5, -93, 115.1);
            numero10.rotation.z = Math.PI;
          
          
            var numero11 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero11.material = new BABYLON.StandardMaterial("Mat", scene);
            numero11.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-06.jpg", scene);
            numero11.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-06.jpg", scene);
            numero11.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-06.jpg", scene);
            numero11.material.diffuseTexture.hasAlpha = true;
            numero11.position = new BABYLON.Vector3(13.5, -93, 115);
            numero11.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero12 = numero11.clone("pendon16");
            numero12.position = new BABYLON.Vector3(13.5, -93, 115.1);
            numero12.rotation.z = Math.PI;
			
			
			
			
			
			var numero13 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero13.material = new BABYLON.StandardMaterial("Mat", scene);
            numero13.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-07.jpg", scene);
            numero13.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-07.jpg", scene);
            numero13.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-07.jpg", scene);
            numero13.material.diffuseTexture.hasAlpha = true;
            numero13.position = new BABYLON.Vector3(-13.5, -93, 160);
            numero13.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero14 = numero13.clone("pendon16");
            numero14.position = new BABYLON.Vector3(-13.5, -93, 160.1);
            numero14.rotation.z = Math.PI;
          
		  
            var numero15 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero15.material = new BABYLON.StandardMaterial("Mat", scene);
            numero15.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-08.jpg", scene);
            numero15.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-08.jpg", scene);
            numero15.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-08.jpg", scene);
            numero15.material.diffuseTexture.hasAlpha = true;
            numero15.position = new BABYLON.Vector3(13.5, -93, 160);
            numero15.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero16 = numero15.clone("pendon16");
            numero16.position = new BABYLON.Vector3(13.5, -93, 160.1);
            numero16.rotation.z = Math.PI;
			
			
			
			
			
			
			var numero17 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero17.material = new BABYLON.StandardMaterial("Mat", scene);
            numero17.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-09.jpg", scene);
            numero17.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-09.jpg", scene);
            numero17.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-09.jpg", scene);
            numero17.material.diffuseTexture.hasAlpha = true;
            numero17.position = new BABYLON.Vector3(-13.5, -93, 205);
            numero17.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero18 = numero17.clone("pendon16");
            numero18.position = new BABYLON.Vector3(-13.5, -93, 205.1);
            numero18.rotation.z = Math.PI;
          	  
		  
            var numero19 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero19.material = new BABYLON.StandardMaterial("Mat", scene);
            numero19.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-10.jpg", scene);
            numero19.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-10.jpg", scene);
            numero19.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-10.jpg", scene);
            numero19.material.diffuseTexture.hasAlpha = true;
            numero19.position = new BABYLON.Vector3(13.5, -93, 205);
            numero19.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero20 = numero19.clone("pendon16");
            numero20.position = new BABYLON.Vector3(13.5, -93, 205.1);
            numero20.rotation.z = Math.PI;
			
			
			
			
			
			
			var numero21 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero21.material = new BABYLON.StandardMaterial("Mat", scene);
            numero21.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-11.jpg", scene);
            numero21.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-11.jpg", scene);
            numero21.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-11.jpg", scene);
            numero21.material.diffuseTexture.hasAlpha = true;
            numero21.position = new BABYLON.Vector3(-13.5, -93, 250);
            numero21.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero22 = numero21.clone("pendon16");
            numero22.position = new BABYLON.Vector3(-13.5, -93, 250.1);
            numero22.rotation.z = Math.PI;
          
          
            var numero23 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero23.material = new BABYLON.StandardMaterial("Mat", scene);
            numero23.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-12.jpg", scene);
            numero23.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-12.jpg", scene);
            numero23.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-12.jpg", scene);
            numero23.material.diffuseTexture.hasAlpha = true;
            numero23.position = new BABYLON.Vector3(13.5, -93, 250);
            numero23.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero24 = numero23.clone("pendon16");
            numero24.position = new BABYLON.Vector3(13.5, -93, 250.1);
            numero24.rotation.z = Math.PI;
		  
		  
		  
		  
		  
		    var numero25 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero25.material = new BABYLON.StandardMaterial("Mat", scene);
            numero25.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-13.jpg", scene);
            numero25.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-13.jpg", scene);
            numero25.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-13.jpg", scene);
            numero25.material.diffuseTexture.hasAlpha = true;
            numero25.position = new BABYLON.Vector3(-13.5, -93, 295);
            numero25.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero26 = numero25.clone("pendon16");
            numero26.position = new BABYLON.Vector3(-13.5, -93, 295.1);
            numero26.rotation.z = Math.PI;
          
          
            var numero27 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero27.material = new BABYLON.StandardMaterial("Mat", scene);
            numero27.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-14.jpg", scene);
            numero27.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-14.jpg", scene);
            numero27.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-14.jpg", scene);
            numero27.material.diffuseTexture.hasAlpha = true;
            numero27.position = new BABYLON.Vector3(13.5, -93, 295);
            numero27.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero28 = numero27.clone("pendon16");
            numero28.position = new BABYLON.Vector3(13.5, -93, 295.1);
            numero28.rotation.z = Math.PI;
			
			
			
			
			
			var numero29 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero29.material = new BABYLON.StandardMaterial("Mat", scene);
            numero29.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-15.jpg", scene);
            numero29.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-15.jpg", scene);
            numero29.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-15.jpg", scene);
            numero29.material.diffuseTexture.hasAlpha = true;
            numero29.position = new BABYLON.Vector3(-13.5, -93, 340);
            numero29.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero30 = numero29.clone("pendon16");
            numero30.position = new BABYLON.Vector3(-13.5, -93, 340.1);
            numero30.rotation.z = Math.PI;
          
          
            var numero31 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero31.material = new BABYLON.StandardMaterial("Mat", scene);
            numero31.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-16.jpg", scene);
            numero31.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-16.jpg", scene);
            numero31.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-16.jpg", scene);
            numero31.material.diffuseTexture.hasAlpha = true;
            numero31.position = new BABYLON.Vector3(13.5, -93, 340);
            numero31.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero32 = numero31.clone("pendon16");
            numero32.position = new BABYLON.Vector3(13.5, -93, 340.1);
            numero32.rotation.z = Math.PI;
			
			
			
			
			
			var numero33 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero33.material = new BABYLON.StandardMaterial("Mat", scene);
            numero33.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-17.jpg", scene);
            numero33.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-17.jpg", scene);
            numero33.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-17.jpg", scene);
            numero33.material.diffuseTexture.hasAlpha = true;
            numero33.position = new BABYLON.Vector3(-13.5, -93, 385);
            numero33.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero34 = numero33.clone("pendon16");
            numero34.position = new BABYLON.Vector3(-13.5, -93, 385.1);
            numero34.rotation.z = Math.PI;
          
		  
            var numero35 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero35.material = new BABYLON.StandardMaterial("Mat", scene);
            numero35.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-18.jpg", scene);
            numero35.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-18.jpg", scene);
            numero35.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-18.jpg", scene);
            numero35.material.diffuseTexture.hasAlpha = true;
            numero35.position = new BABYLON.Vector3(13.5, -93, 385);
            numero35.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero36 = numero35.clone("pendon16");
            numero36.position = new BABYLON.Vector3(13.5, -93, 385.1);
            numero36.rotation.z = Math.PI;
			
			
			
			
			
			
			var numero37 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero37.material = new BABYLON.StandardMaterial("Mat", scene);
            numero37.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-19.jpg", scene);
            numero37.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-19.jpg", scene);
            numero37.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-19.jpg", scene);
            numero37.material.diffuseTexture.hasAlpha = true;
            numero37.position = new BABYLON.Vector3(-13.5, -93, 430);
            numero37.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero38 = numero37.clone("pendon16");
            numero38.position = new BABYLON.Vector3(-13.5, -93, 430.1);
            numero38.rotation.z = Math.PI;
          	  
		  
            var numero39 = BABYLON.Mesh.CreateBox("pendon15", 2, scene);
            numero39.material = new BABYLON.StandardMaterial("Mat", scene);
            numero39.material.diffuseTexture = new BABYLON.Texture("textures/numero_pendon-20.jpg", scene);
            numero39.material.specularTexture = new BABYLON.Texture("textures/numero_pendon-20.jpg", scene);
            numero39.material.emissiveTexture = new BABYLON.Texture("textures/numero_pendon-20.jpg", scene);
            numero39.material.diffuseTexture.hasAlpha = true;
            numero39.position = new BABYLON.Vector3(13.5, -93, 430);
            numero39.scaling = new BABYLON.Vector3(1.5,1, 0.05);
          
            var numero40 = numero39.clone("pendon16");
            numero40.position = new BABYLON.Vector3(13.5, -93, 430.1);
            numero40.rotation.z = Math.PI;
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          
    
            //Set the ellipsoid around the camera (e.g. your player's size)
            camera.ellipsoid = new BABYLON.Vector3(1, 4.5, 1);
        
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
      prueba(box,"../stand/gransan.html");
      prueba(pendon1,"../stand/komodo.html");
      prueba(pendon2,"../stand/komodo.html");
      prueba(pendon3,"../stand/komodo.html");
      prueba(pendon4,"../stand/komodo.html");
      prueba(pendon5,"../stand/story.html");
      prueba(pendon6,"../stand/story.html");
      prueba(pendon7,"../stand/story.html");
      prueba(pendon8,"../stand/story.html");
      prueba(pendon9,"../stand/totas.html");
      prueba(pendon10,"../stand/totas.html");
      prueba(pendon11,"../stand/totas.html");
      prueba(pendon12,"../stand/totas.html");
	  prueba(pendon13,"../stand/uyy.html");
	  prueba(pendon14,"../stand/uyy.html");
	  prueba(pendon15,"../stand/uyy.html");
	  prueba(pendon16,"../stand/uyy.html");
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
	  makeOverOut(pendon13);
	  makeOverOut(pendon14);
      makeOverOut(pendon15);
	  makeOverOut(pendon16);
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