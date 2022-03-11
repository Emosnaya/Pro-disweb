
+window.addEventListener("load", () => {
    //Declaración de pajaro, tubos y valores
    let bird = document.getElementById("bird");
    //Declaración de tubos de arriba
    let tubo1 = document.getElementById("tubo1");
    let tubo2 = document.getElementById("tubo2");
    let tubo3 = document.getElementById("tubo3");
    //Declaración de tubos de abajo
    let tubo1a = document.getElementById("tubo1a");
    let tubo2a = document.getElementById("tubo2a");
    let tubo3a = document.getElementById("tubo3a");
    //Valores del tubo de arriba
    let valort1 = window.getComputedStyle(tubo1);
    let valort2 = window.getComputedStyle(tubo2);
    let valort3 = window.getComputedStyle(tubo3);
    //x de los tubos de arriba
    let left1 = valort1.getPropertyValue("left");
    let left2 = valort2.getPropertyValue("left");
    let left3 = valort3.getPropertyValue("left");
    //Cuerpo del html
    let body = document.getElementById("body");
    let h = 0;
    //Letrero de game over y boton de jugar de nuevo
    let gameover = document.getElementById("over");
    let jugar = document.getElementById("jugar");
    let puntaje = 0
    let p = document.getElementById("puntuacion")
  
  
    //Funciones random para las alturas
    function random2() {
      return Math.round(Math.random() * 300);
    }
    //segundo random de 1 y 2
    function random1() {
      return Math.round(Math.random() * 300);
    }
    function random3() {
      return Math.round(Math.random() * 300);
    }
    //Al iniciar la página mostrar y ocultar ciertos eleentos
    tubo1.style.display = "block";
    tubo2.style.display = "block";
    tubo3.style.display = "block";
    tubo1a.style.display = "block";
    tubo2a.style.display = "block";
    tubo3a.style.display = "block";
    bird.style.display = "block";
    gameover.style.display = "none";
    jugar.style.display = "none";
    //Funcion si se pierde
    function perdiste() {
      tubo1.style.display = "none";
      tubo2.style.display = "none";
      tubo3.style.display = "none";
      tubo1a.style.display = "none";
      tubo2a.style.display = "none";
      tubo3a.style.display = "none";
      bird.style.display = "none";
      gameover.style.display = "block";
      jugar.style.display = "block";

    }
    //Funcion del movimiento del tubo 1 de arriba
    function movimiento() {
      var elem1 = document.getElementById("tubo1");
      var pos1 = 0;
      elem1.style.left = 0 + "px";
      elem1.style.top = 0;
      elem1.style.width = 80 + "px";
      elem1.style.height = 0;
      //Funcion que actualiza el movimiento de los tubos
      var id = setInterval(frame, 16);
      function frame() {
        //mover a la derecha si llega a cero
        if (pos1 == 0) {
          pos1 = 700;
          modificar1();
          //movimiento del tubo a la izquierda
        } else {
          pos1--;
          elem1.style.left = pos1 + "px";
        }
      }
    }
  
    //Funcion del movimiento del tubo 2 de arriba
    function movimiento2() {
      var elem2 = document.getElementById("tubo2");
      var pos2 = 233;
      elem2.style.left = 233 + "px";
      elem2.style.top = 0;
      elem2.style.width = 80 + "px";
      elem2.style.height = 0;
      //Funcion que actualiza el movimiento de los tubos
      var id2 = setInterval(frame1, 16);
      function frame1() {
        //mover a la derecha si llega a cero
        if (pos2 == 0) {
          pos2 = 700;
          modificar2();
          //movimiento del tubo a la izquierda
        } else {
          pos2--;
          elem2.style.left = pos2 + "px";
        }
      }
    }
  
    //Funcion del movimiento del tubo 3 de arriba
    function movimiento3() {
      var elem3 = document.getElementById("tubo3");
      var pos3 = 466;
      elem3.style.left = 466 + "px";
      elem3.style.top = 0;
      elem3.style.width = 80 + "px";
      elem3.style.height = 0;
      //Funcion que actualiza el movimiento de los tubos
      var id3 = setInterval(frame2, 16);
      function frame2() {
        //mover a la derecha si llega a cero
        if (pos3 == 0) {
          pos3 = 700;
          modificar3();
          //movimiento del tubo a la izquierda
        } else {
          pos3--;
          elem3.style.left = pos3 + "px";
        }
      }
    }
  
    //Funcion del movimiento del tubo 1 de abajo
    function movimientoa() {
      var elem1a = document.getElementById("tubo1a");
      var pos1 = 0;
      elem1a.style.left = 0 + "px";
      elem1a.style.bottom = 0;
      elem1a.style.width = 80 + "px";
      elem1a.style.height = 0;
      //Funcion que actualiza el movimiento de los tubos
      var id = setInterval(frame, 16);
      function frame() {
        //mover a la derecha si llega a cero
        if (pos1 == 0) {
          pos1 = 700;
          modificar1();
          //movimiento del tubo a la izquierda
        } else {
          pos1--;
          elem1a.style.left = pos1 + "px";
        }
      }
    }
  
    //Funcion del movimiento del tubo 2 de abajo
    function movimiento2a() {
      var elem2a = document.getElementById("tubo2a");
      var pos2 = 233;
      elem2a.style.left = 233 + "px";
      elem2a.style.bottom = 0;
      elem2a.style.width = 80 + "px";
      elem2a.style.height = 0;
      //Funcion que actualiza el movimiento de los tubos
      var id2 = setInterval(frame1, 16);
      function frame1() {
        //mover a la derecha si llega a cero
        if (pos2 == 0) {
          pos2 = 700;
          modificar2();
          //movimiento del tubo a la izquierda
        } else {
          pos2--;
          elem2a.style.left = pos2 + "px";
        }
      }
    }
  
    //Funcion del movimiento del tubo 3 de abajo
    function movimiento3a() {
      var elem3a = document.getElementById("tubo3a");
      var pos3 = 466;
      elem3a.style.left = 466 + "px";
      elem3a.style.bottom = 0;
      elem3a.style.width = 80 + "px";
      elem3a.style.height = 0;
      //Funcion que actualiza el movimiento de los tubos
      var id3 = setInterval(frame2, 16);
      function frame2() {
        //mover a la derecha si llega a cero
        if (pos3 == 0) {
          pos3 = 700;
          modificar3();
          //movimiento del tubo a la izquierda
        } else {
          pos3--;
          elem3a.style.left = pos3 + "px";
        }
      }
    }
   //Funcion de movimiento del pájaro
    function movimientop() {
      var elem1 = document.getElementById("bird");
      var elem2 = document.getElementById("body");
      var pos1 = 200;
      //Posiciones del pajaro de inicio
      elem1.style.top = 200 + "px";
      elem1.style.left = 120 + "px";
      elem1.style.height = 25 + "px";
      elem1.style.width = 25 + "px";
      //Evento para que brinque el pajaro
      elem2.addEventListener("keydown", (e) => {
        if (e.key == "w") {
          console.log("salto");
          var posic = pos1 - 50;
          pos1 -= 50;
          elem1.style.top = posic + "px";
        }
      });
  
      console.log(pos1);
      var id = setInterval(frame, 8);
      //console.log(pos1)
      if (h == 0) {
        //Llamada de los tubos
        movimiento3a();
        movimiento2a();
        movimientoa();
        movimiento3();
        movimiento2();
        movimiento();
      } else {
        console.log("perdiste");
      }
      function frame() {
        var elem1 = document.getElementById("bird");
        //Posiciones de los tubos y los pájaros
        let post1y = tubo1.style.top;
        let post1x = tubo1.style.left;
        let post1h = tubo1.style.height;
        let post1w = tubo1.style.width;
        let post2y = tubo2.style.top;
        let post2x = tubo2.style.left;
        let post2h = tubo2.style.height;
        let post2w = tubo2.style.width;
        let post3y = tubo3.style.top;
        let post3x = tubo3.style.left;
        let post3h = tubo3.style.height;
        let post3w = tubo3.style.width;
        let post1ay = tubo1a.style.top;
        let post1ax = tubo1a.style.left;
        let post1ah = tubo1a.style.height;
        let post1aw = tubo1a.style.width;
        let post2ay = tubo2a.style.top;
        let post2ax = tubo2a.style.left;
        let post2ah = tubo2a.style.height;
        let post2aw = tubo2a.style.width;
        let post3ay = tubo3a.style.top;
        let post3ax = tubo3a.style.left;
        let post3ah = tubo3a.style.height;
        let post3aw = tubo3a.style.width;
        var pos1y = elem1.style.top;
        var pos1x = elem1.style.left;
        var pos1h = elem1.style.height;
        var pos1w = elem1.style.width;
        //Condicional si toca el piso
        if (pos1 >= 380) {
          perdiste();
          console.log("perdiste caida");
          //Condicional de choque con primer tubo superior
        } else if (
          pos1x < post1x + post1w &&
          pos1x + pos1w > post1x &&
          pos1y < post1y + post1h &&
          pos1y + pos1h > post1y
        ) {
          perdiste();
          console.log("perdiste1");
          //Condicional de choque con segundo tubo superior
        } else if (
          pos1x < post2x + post2w &&
          pos1x + pos1w > post2x &&
          pos1y < post2y + post2h &&
          pos1y + pos1h > post2y
        ) {
          console.log("perdiste2");
          perdiste();
          //Condicional de choque con tercer tubo superior
        } else if (
          pos1x < post3x + post3w &&
          pos1x + pos1w > post3x &&
          pos1y < post3y + post3h &&
          pos1y + pos1h > post3y
        ) {
          perdiste();
          console.log("perdiste3");
          //Condicional de choque con primer tubo inferior
        } else if (
          pos1x < post1ax + post1aw &&
          pos1x + pos1w > post1ax &&
          pos1y < post1ay + post1ah &&
          pos1y + pos1h > post1ay
        ) {
          perdiste();
          console.log("perdiste1a");
          //Condicional de choque con segundo tubo inferior
        } else if (
          pos1x < post2ax + post2aw &&
          pos1x + pos1w > post2ax &&
          pos1y < post2ay + post2ah &&
          pos1y + pos1h > post2ay
        ) {
          perdiste();
          console.log("perdiste2a");
          //Condicional de choque con tercer tubo inferior
        } else if (
          pos1x < post3ax + post3aw &&
          pos1x + pos1w > post3ax &&
          pos1y < post3ay + post3ah &&
          pos1y + pos1h > post3ay
        ) {
          perdiste();
          console.log("perdiste3a");
          //Por si se pasa de altura
        } else if (pos1 <= 0) {
          pos1 = 20;
          console.log("adios");
          //Si no se da en w o no choca, que baje el pájaro
        } else {
          console.log("baja");
          pos1++;
          elem1.style.top = pos1 + "px";
          console.log(post1y);
          console.log(post1h);
          console.log(pos1y);
        }
        if(pos1x == post1x && tubo1.style.display == "block"
          || pos1x == post2x &&tubo1.style.display == "block"|| 
          pos1x == post3x && tubo1.style.display == "block"){
          puntaje++
          console.log(puntaje)
          p.innerHTML = puntaje
        }
      }
    }
    //Llamado de función del pájaro
    movimientop();
  //Funcion para crear alturas aleatorias de los primeros tubos
    function modificar1() {
      let a = random1();
      document.getElementById("tubo1").style.height = a + "px";
      document.getElementById("tubo1a").style.height = "450" - a - "100" + "px";
    }
  //Funciom para crear alturas aleatorias de los segundos tubos
    function modificar2() {
      let b = random2();
      document.getElementById("tubo2").style.height = b + "px";
      document.getElementById("tubo2a").style.height = "450" - b - "100" + "px";
    }
  //Funcion para crear alturas aleatorias de los terceros tubos
    function modificar3() {
      let c = random3();
      document.getElementById("tubo3").style.height = c + "px";
      document.getElementById("tubo3a").style.height = "450" - c - "100" + "px";
    }
  //Boton para reiniciar si se desea volver a jugar
    jugar.addEventListener("click", () => {
      window.location.reload();
    });
  });