window.onload = function(){
  // Menu hamburger
  let buttonMenu = document.querySelectorAll(".hamb");
  buttonMenu ? (
    buttonMenu.forEach(buttonMenu => {
      buttonMenu.addEventListener('click', () => {
        if(buttonMenu.classList.contains("open-hamb")){
          buttonMenu.classList.remove( "open-hamb" );
          document.querySelector("#nav-menu-container").classList.remove( "container-menu-aberto" ); 
          document.querySelector("html").classList.remove( "no-scroll" );
          document.querySelector("body").classList.remove( "no-scroll" );
        } 
        else{
          buttonMenu.classList.add('open-hamb');
          document.querySelector("#nav-menu-container").classList.add('container-menu-aberto');
          document.querySelector("body").classList.add('no-scroll');
          document.querySelector("html").classList.add('no-scroll');
        }
      })
    })
  ) : false   


  //loadmore cards
  const btnsActiveCards = document.querySelectorAll('.loadmore')
  btnsActiveCards ? (
    btnsActiveCards.forEach(btnsActiveCards => {
      btnsActiveCards.addEventListener('click', () => {

        const attributeValue = btnsActiveCards.getAttribute('data-load'); 
        const cards =  document.querySelectorAll("."+attributeValue)
        cards ? (
          cards.forEach( cards => {
            cards.classList.remove( "card-none" );
            btnsActiveCards.style.display = "none";
          })
        ) : false  

      })
    })
  ) : false   
  
 
}

// ativar tracking whatsapp
const btns = document.querySelectorAll('.whats-tracking')
btns ? (
  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      gtag('event', 'WhatsApp', {
        'event_category': 'WhatsApp',
        'event_action' : 'Click',
        'event_label': 'WhatsApp',
        'value': 'WhatsApp'
      });

    })
  })
) : false   

// called when the window is scrolled. 
window.onscroll = function (e) {  
  if(window.pageYOffset || document.documentElement.scrollTop > 100){
    document.querySelector( "header" ).classList.add( "header-fixed" );
    document.querySelector( "header" ).style.transition = "0.7s";
    document.querySelector( "header" ).classList.add( "shadow" );  
  }
  else{
    document.querySelector( "header" ).classList.remove( "header-fixed" );
    document.querySelector( "header" ).classList.remove( "shadow" );
  }
} 


