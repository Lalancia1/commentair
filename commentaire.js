
    $(document).ready(function(){
       console.log('debut');
       // recupererMessage();
       // alert('there');
        $('.formulaire').submit(function(ev){
            ev.preventDefault();
            console.log('la');
            var nom = $('.nom').val();
            var message = $('.message').val();

            $.post('script.php',{name:nom,messenger:message}, function(donnees){
                console.log('there');
                    $(".return").text(donnees);
                    $('.nom').val(' ');
                    $('.message').val(' ');
                });

        });

    });

function getMessages(){
    $.post('recupere.php',function(data){//recupere sert a récupérer les données
        $('.afficher').text(data);
    });

}
getMessages();


  var bouton=  document.getElementById('bouton');
    bouton.addEventListener('click',function(){
        var doc=document.getElementById('monNom');
        if (doc.value) {
            var foo1 = document.getElementById('affich1');
            var foo2 = document.getElementById('affich2');
            foo1.innerHTML = doc.value;
            var ladate = new Date();
            // document.write("Heure brute : ");
            foo2.innerHTML=(ladate.getHours() + ":" + ladate.getMinutes() + ":" + ladate.getSeconds());
            //document.write("<BR>");
            var h = ladate.getHours();
            if (h < 10) {
                h = "0" + h
            }
            var m = ladate.getMinutes();
            if (m < 10) {
                m = "0" + m
            }
            var s = ladate.getSeconds();
            if (s < 10) {
                s = "0" + s
            }
            foo2.innerHTML=("Heure  : ");
            foo2.innerHTML=(h + ":" + m + ":" + s);
        }
    });

