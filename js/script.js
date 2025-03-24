// counter
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter-number");
  
    const animateCounters = (counter) => {
      const target = +counter.getAttribute("data-count").trim(); // Trim spaces to avoid errors
      let count = 0;
  
      // Adjust speed dynamically based on target value
      let speed = 100;
  
      const updateCount = () => {
        const increment = target / speed;
  
        if (count < target) {
          count = Math.ceil(count + increment);
          counter.innerText = count;
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target;
        }
      };
  
      updateCount();
      console.log("counter running");
      
    };
  
    // Observer to trigger animation when counters come into view
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounters(entry.target); // Animate each counter individually
            observer.unobserve(entry.target); // Stop observing after animation starts
          }
        });
      },
      { threshold: 0.3 } // Ensures counter is 30% visible before animating
    );
  
    counters.forEach((counter) => observer.observe(counter));
  });
  // slow counter
  
  document.addEventListener("DOMContentLoaded", () => {
    const slowCounters = document.querySelectorAll(".slow-counter");
  
    // Function for slow counting (For counter with value 10)
    const animateSlowCounter = (counter) => {
      const target = +counter.getAttribute("data-count").trim();
      let count = 0;
      const speed = 300; // Slow speed
  
      const updateCount = () => {
        if (count < target) {
          count++;
          counter.innerText = count;
          setTimeout(updateCount, 300); // Slower update frequency
        } else {
          counter.innerText = target;
        }
      };
  
      updateCount();
    };
  
    // Intersection Observer for slow counters
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateSlowCounter(entry.target);
            observer.unobserve(entry.target); // Stop observing after animation starts
          }
        });
      },
      { threshold: 0.3 }
    );
  
    // Attach observer only to slow counters
    slowCounters.forEach((counter) => observer.observe(counter));
  });
//   indexSwiper init


$(document).ready(function() {
  var swiper = new Swiper(".indexSwiper", {
      loop: true,
      spaceBetween: 30,
      freeMode: true,
      autoplay: {
          delay: 2000, // 2 seconds per slide
          disableOnInteraction: false, // Keeps autoplay active after user interaction
      },
      effect: "coverflow", // Add a cool 3D coverflow effect
      grabCursor: true,
      centeredSlides: true,
      coverflowEffect: {
          rotate: 30, // Rotate slides
          stretch: 0, // Space between slides
          depth: 100, // Depth effect
          modifier: 1,
          slideShadows: true, // Add shadows
      },
      breakpoints: {
          320: { // Mobile
              slidesPerView: 1,
              spaceBetween: 10
          },
          768: { // Tablets
              slidesPerView: 3,
              spaceBetween: 20
          },
          992: { // Large screens (desktop)
              slidesPerView: 5,
              spaceBetween: 30
          }
      }
  });
});

