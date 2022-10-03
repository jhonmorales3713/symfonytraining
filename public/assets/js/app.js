
$(function() {
  var $shelves_genre = $("#shelves_genre");
  var $token = $("#shelves__token");
  $shelves_genre.on('change',function(e){
    e.preventDefault();
    // console.log(e);
    var $form = $(this).closest('form');

    var data=[];

    data[$token.attr('name')] = $token.val();
    data[$shelves_genre.attr('name')] = $shelves_genre.val();
    
    // console.log($form.attr('action'));
    // console.log(data);
    // console.log($form.attr('method'));
    $.ajax({
        url : $form.attr('action'),
        type: $form.attr('method'),
        data : $form.serialize(),
        success: function(html) {
          // console.log(html);
          $("#shelves_subGenre").replaceWith(
              $(html).find("#shelves_subGenre")
          );
        }
      });
  });
});