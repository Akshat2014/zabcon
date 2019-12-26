try {
    $('#banner-carousel').owlCarousel({
       items: 1,
       loop:true,
       margin:0,
       nav: true,
       dots:false,
       autoplay:true,
       autoplayTimeout:5000,
       autoplayHoverPause:true,
       smartSpeed:1000,
       paginationSpeed: 1000
       
       
 
    })
 
 } catch (error) {}
 


// //  on scroll 

// function myTransform() {
//    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//       document.getElementsByClassName("header-wrapper-container").classList.add('shift') 
//    }else{
//       document.getElementsByClassName("header-wrapper-container").classList.remove('shift')    }
// }
//  window.onscroll = myTransform();



try {
   
   const headerChange = () => {

      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.querySelector('#header-wrapper-container').classList.add('shift') 
   }else{
      document.querySelector('#header-wrapper-container').classList.remove('shift')   
    }
}



window.addEventListener('scroll' , headerChange)


} catch (error) {
   
}







  
 