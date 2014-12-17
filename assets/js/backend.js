$(document).ready(function(){


  // FUNCTIONS 




  function confirmdialog() {
      $("#dialog-confirm").html("Confirm Dialog Box");

      // Define the Dialog and its properties.
      $("#dialog-confirm").dialog({
          resizable: false,
          modal: true,
          title: "Modal",
          height: 250,
          width: 400,
          buttons: {
              "Yes": function () {
                  $(this).dialog('close');
                  callback(true);
              },
                  "No": function () {
                  $(this).dialog('close');
                  callback(false);
              }
          }
      });
  }




  // Main Menu

  $("nav [href]").each(function() {
    if (this.href == window.location.href) {
        $("nav [href]").removeClass("active");
        $(this).addClass("active");     
    }
  });




  // Tab System

  $('.htabs').each(function(){
    // For each set of tabs, we want to keep track of
    // which tab is active and it's associated content
    var $active, $content, $links = $(this).find('a');

    // If the location.hash matches one of the links, use that as the active tab.
    // If no match is found, use the first link as the initial active tab.
    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('activetab');

    $content = $($active[0].hash);

    // Hide the remaining content
    $links.not($active).each(function () {
      $(this.hash).hide();
    });

    // Bind the click event handler
    $(this).on('click', 'a', function(e){
      // Make the old tab inactive.
      $active.removeClass('activetab');
      $content.hide();

      // Update the variables with the new link and content
      $active = $(this);
      $content = $(this.hash);     

      // Make the tab active.
      $active.addClass('activetab');
      $content.show();

      // Prevent the anchor's default click action
      e.preventDefault();
    });
  });


  // HANDLE DATABASE TABLE CONFIGS

  $('.actions a').on('click', function(e){
    

    // skjul edit content
    $('.edit').addClass('none');
    // skjul show content
    $('.show').addClass('none');
    // skjul add content
    $('.addrow').addClass('none');

    if($(this).attr('href') == '#edit'){

      $(this).parents('.tbl_container').find('.edit').toggleClass('none');
      
    }

    if($(this).attr('href') == '#show'){
      
      $(this).parents('.tbl_container').find('.show').toggleClass('none');

    } 

    if($(this).attr('href') == '#add'){
      
      $(this).parents('.tbl_container').find('.addrow').toggleClass('none');

    }

    event.preventDefault();
    
  });

  $('#addrow').on('click', function(e){

    var text = $(this).parents('.addrow').find('tr:nth-child(2)');

    var mod = text.clone().find('td').each(function(){
      $(this).find('label').remove();
    }).parent();


    text.after(mod);

  });


  $('form.addrow').on('submit', function(){

    var url = $(this).attr('action'),
        type = $(this).attr('method'),
        data = {},
        input = 0;

    $(this).find('[name]').each(function(){
      var value = $(this).val();

      data[input] = value;

      input++;
      
    });

    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(output){
        if(output == 'true'){
          $('.success').fadeIn().text('NICE!');
        } else {
          $('.error').fadeIn().text('BAD!');
        }
      }
    });

    return false;
  });


  $('a.slet').on('click', function(e){
    event.preventDefault();
    var current = $(this),
        url = $(this).attr('href'),
        name = $(this).attr('name'),
        type = $(this).attr('type'),
        tbl = current.attr('name');



    var title = '<h1>Du er i færd med at slette en table !</h1>',
        desc = '<p>hvis du ikke har forstand på hvad du laver, bedes du venligst holde dig væk fra denne funktion</p>',
        tips = '<ul><b>Gode råd herunder</b><li>Kontakt en der har forstand på det</li> <li>Lav en backup af databasen/tabel før du sletter</li></ul>';


    $("#dialog-confirm").html(title+desc+tips);

      // Define the Dialog and its properties.
      $("#dialog-confirm").dialog({
          resizable: false,
          modal: true,
          title: "Er du sikker?",
          height: 350,
          width: 475,
          buttons: {
              "Ja, jeg er sikker": function () {
                  $(this).dialog('close');
                  callback(true);
              },
                  "Nej": function () {
                  $(this).dialog('close');
                  callback(false);
              }
          }
     });

    function callback(value) {
        if (value) {
            $.get(url,{},function(response) { 

              if(response == 'true'){
               
                // print success

                if($('.succes').is(':visible')){

                  $('.success').hide();
                  $('.success').fadeIn().html('Tabellen <b>"'+tbl+'"</b> blev slettet uden problemer :)');
                } else {
                  $('.warning').hide();
                  $('.info').hide();
                  $('.error').hide();
                  $('.success').slideDown().html('Tabellen <b>"'+tbl+'"</b> blev slettet uden problemer :)');
                }

                current.parents('.tbl_head').find('td').css({'background': '#ff6d6d'}).parents('.tbl_container').parent().closest('tr').fadeOut(1000, function(){
                  $(this).remove();
                });
              } else {
                if($('.error').is(':visible')){
                  $('.error').hide();
                  $('.error').fadeIn().html('Tabellen <b>"'+tbl+'"</b> blev slettet uden problemer :)');
                } else {
                  $('.warning').hide();
                  $('.info').hide();
                  $('.success').hide();
                  $('.error').slideDown().html('Tabellen <b>"'+tbl+'"</b> blev slettet uden problemer :)');
                }

                $('.error').slideDown(1000).html('FEJL. <b>'+tbl+'</b> blev ikke slettet...');
              }

            });
        }
    }

  });

  // Handle tooltip
  $(document).mousemove( function(event) {
    mouseX = event.pageX + 25; 
    mouseY = event.pageY;
  }); 

  
  $('.actions a, table img').mousemove(function(e) { 
    
    if($(this).is('.actions a')){
      var html = $(this).find('img').attr('alt');
    } else {
      var html = $(this).attr('alt');
    }
    
    $('#tooltip').css({'top': mouseY,'left': mouseX}).html(html).show();
      
    console.log (mouseX, mouseY);

  }).mouseout(function() {
    $('#tooltip').hide();
  });
  


  // HANDLE DOUBLECLICK EDIT

  $('.name').dblclick(function(){
    var that = $(this).find('p').text();
    
    $(this).find('p').hide();
    $(this).find('input').removeClass('none');
    $(this).find('input').focus();
  }).keypress(function(e) {
    
    if(e.which == 13) {

      var value = $(this).find('input').val(),
          that = $(this).find('p').text();

      $(this).find('p').show().text(value);
      $(this).find('input').addClass('none');
      
      $.get('../includes/edit.php?type=tabel&old='+that+'&new='+value,{},function(response) { 
          if(response == 'true'){

            // hide messages boxes before print
            $('.success').hide();
            $('.warning').hide();
            $('.info').hide();
            $('.error').hide();


            // print success
            $('.success').fadeIn().html('Tabellen <b>"'+that+'"</b> skiftede navn til <b>"'+value+'"</b> uden problemer :)');


            
          } else {
                $('.error').fadeIn().html('FEJL. <b>'+tbl+'</b> blev ikke slettet...');
          }
      });

    }
    }).focusout(function(e) {
      $(this).find('p').show();
      $(this).find('input').addClass('none');
    });


});
