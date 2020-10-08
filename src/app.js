const $ = require('jquery');  // per collegare jquary ad dist/app.js
const Handlebars = require("handlebars"); // per collegare handlebars ad dist/app.js


// apriamo il document in jquary
$(document).ready(function(){

        // chiamata ajax
        $.ajax(
            {
                "url":"http://localhost/php-ajax-dischi/partials/server.php", // colleghiamo il nostro url server alla chiamata ajax
                "method":"GET", // impostiamo metodo chiamata
                "success": function(data) {  // se la chiamata va a buon fine, esegui la funzione
                    render(data);
                },
                "error": function(err) { // se cla chiamata non va a buon fine, manda un errore
                    alert("errore");
                }
            }
        );

        // creiamo funzione per la chiamata ajax    
        function render(data){
            // var template handlebars
            var source = $('#entry-template').html();
            var template = Handlebars.compile(source);

            
            for(var i = 0; i < data.length; i++) {
                console.log(data[i]);

                // compiliamo il context di handlebars con i vari oggetti da collegare allo script html
                var context = {
                    "poster": data[i].poster,
                    "title": data[i].title,
                    "author": data[i].author,
                    "year": data[i].year,
                };


                var html = template(context);
                // stampiamo la chiamata ajax nel nostro container html
                $(".container").append(html);
            }
        }




});