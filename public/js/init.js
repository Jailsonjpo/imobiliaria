$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.slider').slider({full_width:true});
    $(".dropdown-trigger").dropdown();
    $('select').formSelect();
    
  });
  
  function sliderPrev(){
      
      $('.slider').slider('pause');
      $('.slider').slider('prev');
      
      
  }
  
function sliderNext(){
      
      $('.slider').slider('pause');
      $('.slider').slider('next');
            
  }
  
  
  