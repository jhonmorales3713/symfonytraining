// assets/js/app.js
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery"(or "npm install jquery"), then uncomment to import it.
// import $ from 'jquery';
var $shelves_genre = $("#shelves_genre");
var $token = $("#shelves__token");
$shelves_genre.on('change',function(){

    var $form = $(this).closest('form');

    var data=[];

    data[$token.attr('name')] = $token.val();
    data[$shelves_genre.attr('name')] = $shelves_genre.val();
    // console.log("sd")
    // console.log($shelves_genre.val());
    // console.log(data);
    // $.post("new", data).then(function (response){
    //     // console.log(response);
    //     // console.log($("#shelves_subGenre"));
    //     // $("#shelves_subGenre").replaceWith(
    //     //     $(response).find("#shelves_subGenre")
    //     // );
    // }); 
});

// console.log('Hello Webpack Encore! t me in assets/js/app.js');