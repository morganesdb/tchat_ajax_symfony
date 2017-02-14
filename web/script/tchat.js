var pseudo = encodeURIComponent( $('#pseudo').val() ); // on sécurise les données

var message = encodeURIComponent( $('#message').val() );



if(pseudo != "" && message != ""){ // on vérifie que les variables ne sont pas vides

    $.ajax({

        url : "traitement", // on donne la route du fichier de traitement

        type : "POST", // la requête est de type POST

        data : "pseudo=" + pseudo + "&message=" + message // et on envoie nos données

    });

}

$('#envoi').click(function(e){

    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire



    var pseudo = encodeURIComponent( $('#pseudo').val() ); // on sécurise les données

    var message = encodeURIComponent( $('#message').val() );



    if(pseudo != "" && message != ""){ // on vérifie que les variables ne sont pas vides

        $.ajax({

            url : "traitement.php", // on donne l'URL du fichier de traitement

            type : "POST", // la requête est de type POST

            data : "pseudo=" + pseudo + "&message=" + message // et on envoie nos données

        });



       $('#messages').append("<p>" + pseudo + " dit : " + message + "</p>"); // on ajoute le message dans la zone prévue

    }

});/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


