var icon = document.getElementById("icon");
    icon.onclick = function(){
        document.body.classList.toggle("darkmode");
        if(document.body.classList.contains('darkmode')){
            icon.src = 'sun.png';
        }else{
            icon.src='moon.png'
            
        }
    }

    var paragraf = document.getElementsByClassName("paragraf");
    setInterval(function () {
        paragraf[0].style.color = "#33755a";

        setTimeout(function () {
            paragraf[0].style.color = "#33755a";
            paragraf[0].style.color = "beige";
        }, 500)
    }, 1000);
    

    function sayHello(){
        alert("Hello!");
    }

    function tampil(){
        document.getElementById("area").style.color='crimson'
        document.getElementById("area").innerHTML='Anda menyentuh area terlarang'
      }
      function kembali(){
        document.getElementById("area").style.color='black'
        document.getElementById("area").innerHTML='Jangan arahkan mouse kalian disini'
      }
      $( "p" ).click(function() {
        $( this ).slideUp();
      });   