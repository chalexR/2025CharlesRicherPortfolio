<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll-Stacked Portfolio</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body>
    <div class="stacked-intro">
        <!-- This section is displayed first. The Contaner DIV is locked in place with JS while the scrolling content finishes -->
        <header class="hero">
            <img class="heroimg" src="assets/charlesricher-image.jpg" alt="Charles Richer-Smith">
            <h1>Your Name</h1>
            <a href="#contact">Contact</a>
        </header>

        <div class="stack-scroll-wrapper">
            <section class="stack-box profession">Profession</section>
            <section class="stack-box design">Design</section>
            <section class="stack-box coding">Coding</section>
            <section class="stack-box consultant">Consultant</section>
        </div>

    </div>

  <div class="scroll-unlock-space"></div>

  <div class="break"></div>

  <main class="standard-content">
    <section style="min-height: 150vh;">
      <h2>Normal Layout Starts Here</h2>
      <p>This is where your standard page content begins after the stacked diagonal section.</p>
    </section>
    <section style="min-height: 100vh;">
      <h2>More Content</h2>
      <p>Just adding extra height so we can scroll past the pinned block.</p>
    </section>
  </main>

    <script>
    //---------------SHRINK HERO SCROLL EFFECT---------------
    // Wait until DOM is fully loaded
        window.addEventListener('DOMContentLoaded', () => {
            const stackedIntro = document.querySelector('.stack-scroll-wrapper');
            const consultant = document.querySelector('.consultant');

            // Lock the scroll at the beginning
            document.body.classList.add('locked');

            //add listener for any scrolling. Runs code on any scroll
            window.addEventListener("scroll", () => {
                //store the .hero section as a veriable
                const hero = document.querySelector('.hero');
                //if the page has crolled more than 50px
                if (window.scrollY > 50) {
                    //add the shrink class to .hero
                    hero.classList.add('shrink');
                } else {
                    //if the page has scrolledless than 50px remove the shrink class. 
                    hero.classList.remove('shrink');
                }
            });

            // Check every frame whether consultant is in place
            function checkUnlock() {
                const consultantTop = consultant.getBoundingClientRect().top;

                // You can tweak the threshold as needed
                if (consultantTop <= 31) {
                    // Allow scroll
                    document.body.classList.remove('locked');
                    window.removeEventListener('scroll', checkUnlock); // Stop checking
                } else {
                    // Keep checking
                    requestAnimationFrame(checkUnlock);
                }
            }
        });
    </script>
</body>
</html>
