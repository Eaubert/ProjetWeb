$('.test').hide();

$( ".commencer" ).click(function() {

  $( ".intro" ).hide();
  $('.test').show();

  $.ajax({
      url : 'traitement.php',
      type : 'POST',
      dataType : 'html',
      success : function(data, statut){
        $('.test').html(data);
      },
      error : function(resultat, statut, erreur){
        console.log('erreur');
      }
  });
});

$('.test').on('click','.suivant',function(){

  //var i = parseInt($(this).attr('data-next')) + 1;
  var reponse = [];
  $("input:checked").each(
      function() {
      reponse.push($(this).attr('value'));
      }
    );

  $.ajax({
      url : 'traitement.php',
      type : 'POST',
      data : {"i" : i,"reponse" : [reponse]},
      dataType : 'html',
      success : function(data, statut){
        $('.test').html(data);
      },
      error : function(resultat, statut, erreur){
        console.log('erreur');
      }
  });
})
