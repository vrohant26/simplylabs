/**
 * Simply Labs Custom Scripts
 *
 * Swiper Carousel initialization and horizontal progress indicator syncing.
 */

document.addEventListener("DOMContentLoaded", () => {
  // Initialize Lenis
  const lenis = new Lenis({
    autoRaf: true,
  });

  // Listen for the scroll event and log the event data
  lenis.on("scroll", (e) => {
    console.log(e);
  });

  const progressBars = document.querySelectorAll(
    ".carousel-progress-indicators .progress-bar",
  );
  const progressTracks = document.querySelectorAll(
    ".carousel-progress-indicators .progress-track",
  );
  const swiperContainer = document.querySelector(".hero-swiper");

  if (!swiperContainer) return;

  console.log("Simply Labs Swiper Carousel: Initializing...", {
    swiperContainer,
    progressBarsCount: progressBars.length,
    progressTracksCount: progressTracks.length,
  });

  // Initialize Swiper.js
  const swiper = new Swiper(".hero-swiper", {
    loop: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true, // Native Swiper pause-on-hover
    },
    on: {
      // Fired on every autoplay tick
      autoplayTimeLeft(s, timeLeft, percentage) {
        const delay = s.params.autoplay.delay || 1000;
        let fillPercent = 0;

        if (typeof timeLeft === "number") {
          const elapsed = delay - timeLeft;
          fillPercent = (elapsed / delay) * 100;
        } else if (typeof percentage === "number") {
          fillPercent = (1 - percentage) * 100;
        }

        // Clamp value safely between 0 and 100
        fillPercent = Math.max(0, Math.min(100, fillPercent));

        const activeIndex = s.realIndex;
        progressBars.forEach((bar, idx) => {
          if (idx === activeIndex) {
            bar.style.width = `${fillPercent}%`;
          } else {
            bar.style.width = "0%";
          }
        });
      },
      // Reset all bars on slide transition completion
      slideChange(s) {
        progressBars.forEach((bar) => {
          bar.style.width = "0%";
        });
      },
    },
  });

  console.log("Simply Labs Swiper Carousel: Initialization complete.", swiper);

  // Add click functionality to progress tracks to allow manual navigation
  progressTracks.forEach((track, idx) => {
    track.addEventListener("click", () => {
      swiper.slideToLoop(idx);
    });
  });

  // Intersection Observer for scroll-triggered fade-up animations
  const observerOptions = {
    root: null,
    rootMargin: "0px 0px -50px 0px", // Trigger slightly before it hits the viewport top
    threshold: 0.1,
  };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Stop observing once triggered
      }
    });
  }, observerOptions);

  const fadeElements = document.querySelectorAll(".fade-up");
  fadeElements.forEach((el) => revealObserver.observe(el));

  // Play/Pause Video Card Interactivity
  const videoCard = document.querySelector(".choose-video-card");
  if (videoCard) {
    const video = videoCard.querySelector(".why-choose-video");
    const iconPause = videoCard.querySelector(".icon-pause");
    const iconPlay = videoCard.querySelector(".icon-play");

    videoCard.addEventListener("click", () => {
      if (video.paused) {
        video.play();
        iconPause.style.display = "block";
        iconPlay.style.display = "none";
      } else {
        video.pause();
        iconPause.style.display = "none";
        iconPlay.style.display = "block";
      }
    });
  }

  // Initialize Our Tests Swiper Carousel
  const testsSwiperContainer = document.querySelector(".tests-swiper");
  if (testsSwiperContainer) {
    const testsSwiper = new Swiper(".tests-swiper", {
      slidesPerView: 1,
      spaceBetween: 24,
      grabCursor: true,
      navigation: {
        nextEl: ".tests-next",
        prevEl: ".tests-prev",
      },
      breakpoints: {
        640: { slidesPerView: 1.5 },
        768: { slidesPerView: 2.2 },
        1024: { slidesPerView: 2.8 },
        1200: { slidesPerView: 3.5 }, // Show 3 1/2 cards on desktop
      },
    });
  }
});
