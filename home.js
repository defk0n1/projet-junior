document.addEventListener('scroll',() =>{
    const navbar = document.getElementsByClassName("nav-list")[0];

if (window.scrollY > 0){
    navbar.classList.add("scrolled");
}
else{
    navbar.classList.remove("scrolled");
}} )

AOS.init();
          const aosElements = document.querySelectorAll('[data-aos]');
          
          aosElements.forEach(element => {
              element.addEventListener('mouseenter', () => {
                  element.setAttribute('data-aos', 'false'); // Change to the desired AOS animation type
                  AOS.refresh(); // Refresh AOS to apply the new animation
              });
      
              element.addEventListener('mouseleave', () => {
                  element.setAttribute('data-aos', 'fade-up'); // Disable AOS on hover out
                  AOS.refresh();
              });
          });














