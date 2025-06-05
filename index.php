<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll-Stacked Portfolio</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body>
<!-- HEADER SECTION to display basic info, photo etc. This will be full screen at start, minimise and then move up the screen on scroll. JS script below -->
    <header class="hero">
        <img class="heroimg" src="assets/charlesricher-image.jpg" alt="Charles Richer-Smith">
        <h1>Your Name</h1>
        <a href="#contact">Contact</a>
    </header>
<!-- Start the stacked box content. These boxes serve as the main display and navigation displaying an overview of my work -->
    <div class="stacked-intro">
        <div class="stack-scroll-wrapper">
            <section class="stack-box profession">
                <svg class="angled-label-svg">
                    <defs>
                        <path id="path-profession" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-profession" id="angledTextProfession">Professional</textPath>
                    </text>
                </svg>
            </section>
            <section class="stack-box design">
                <svg class="angled-label-svg">
                    <defs>
                        <path id="path-design" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-design" id="angledTextDesign">Design</textPath>
                    </text>
                </svg>
            </section>
            <section class="stack-box coding">
                <svg class="angled-label-svg">
                    <defs>
                        <path id="path-coding" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-coding" id="angledTextCoding">Coding</textPath>
                    </text>
                </svg>
            </section>
            <section class="stack-box consultant">
                <svg class="angled-label-svg">
                    <defs>
                        <path id="path-consult" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-consult" id="angledTextConsult">Consult</textPath>
                    </text>
                </svg>
            </section>
            <section class="stack-box"></section>
        </div>
    </div>
<!-- This serves as the main content and will scroll like a normal bit of content -->
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

<!-- Start the JavaScripts -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
//<<<STACK SCROLL CONSTANTS
            const standardContent = document.querySelector('.standard-content');//Identify the container for our content
            const displayHeight = window.innerHeight;//Get the height of the window screen
            const triggerPoint = displayHeight * 0.9 ; //Set a trigger point which allows for content to scroll earlier or later
            const stackIntro = document.querySelector('.stack-scroll-wrapper');//Identify the container for our scrolling stack
//>>>STACK SCROLL CONSTANTS

//<<<HERO ANIMATION CONSTANTS 1
            

            window.addEventListener('scroll', () => {

//<<<STACK SCROLL CODE
                const rect = standardContent.getBoundingClientRect();//get size of object and position in viewport
                if(rect.top <= triggerPoint){
                    // Calculate how far to scroll the stacked-intro upward
                    const offset = Math.min(triggerPoint - rect.top, displayHeight); // Cap at 100vh
                    stackIntro.style.transform = `translateY(-${offset}px)`;
                }
//>>>STACK SCROLL CODE

            });

//>>>STACK TITLES DIAGONAL PATHS FUNCTION
            function updateAllDiagonalPaths() {
                const svgs = document.querySelectorAll('.angled-label-svg');

                svgs.forEach(svg => {//for each of the paths on the page
//<<<STACK TITLES CONSTANTS
                    const path = svg.querySelector('path');
                    const vw = window.innerWidth;
                    const vh = window.innerHeight;

                    // Adjust values based on your clip-path for that box
                    const box = svg.closest('.stack-box');
                    let offsetPercent = 0.5; // default = 50vh
//>>>STACK TITLES CONSTANTS
                    
                    if (box.classList.contains('design')) offsetPercent = 0.6;
                    if (box.classList.contains('coding')) offsetPercent = 0.7;
                    if (box.classList.contains('consultant')) offsetPercent = 0.8;

                    const startX = 0;
                    const startY = vh * offsetPercent;
                    const endX = vw * offsetPercent;
                    const endY = 0;

                    path.setAttribute('d', `M ${startX},${startY} L ${endX},${endY}`);
                });
            }
//>>>STACK TITLES DIAGONAL PATHS FUNCTION
        //Run the function if page loads or resizes
            window.addEventListener('load', updateAllDiagonalPaths);
            window.addEventListener('resize', updateAllDiagonalPaths); 
        });

        // Wait until DOM is fully loaded
        window.addEventListener('DOMContentLoaded', () => {

//<<<SHRINK HERO SCROLL EFFECT
        const hero = document.querySelector('.hero');
        const standardContent = document.querySelector('.standard-content');
        const displayHeight = window.innerHeight;

        // Scroll event listener
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const rect = standardContent.getBoundingClientRect();
            const shrinkOffset = 50; // px after which hero shrinks
            const scrollOutTrigger = standardContent.offsetTop - displayHeight;

            // Handle shrink effect
            const shouldShrink = scrollY > shrinkOffset;

            // Handle upward scroll-out
            const scrollOutAmount = Math.max(0, scrollY - scrollOutTrigger);
            const maxScrollOut = displayHeight; // Cap it at 100vh
            const clampedOffset = Math.min(scrollOutAmount, maxScrollOut);

            // Combine both transforms
            const scale = shouldShrink ? 0.5 : 1;
            const translateX = shouldShrink ? -35 : 0;
            const translateY = shouldShrink ? -35 : 0;
            const scrollUp = clampedOffset;

            hero.style.transform = `translate(${translateX}vw, calc(${translateY}vh - ${scrollUp}px)) scale(${scale})`;
        });
        });
    </script>
</body>
</html>