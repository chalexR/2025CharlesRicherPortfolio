<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charles Richer - Digital Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- Header Section, designed to minimise and love to the left when the screen starts scrolling -->
    <header class="hero">
        <section>
            <img src="assets/charlesricher-image.jpg" alt="Charles Richer-Smith">
            <h1>Charles Richer</h1>
            <p><strong>Creative strategist. Brand builder. Plant enthusiast.</strong></p>    
            <p>I grow ideas, shape stories, and bring a fresh eye to every brief (ideally from beneath a tree).</p>
            <a href="#contact">Contact</a>
            <div id="debug-box" style="position: relative; background: white; color: black; padding: 0.5rem; font-weight: bold;">NOTHING
            </div>
        </section>
    </header>

    <section class="stacked-intro">
    <!-- Professional Header Section -->
        <div class="stack-container profession">

                <div class="angle-extension profession-ext"></div>

                <section class="stack-box profession-int scroll-box">
                    <svg class="angled-label-svg">
                        <defs>
                            <path id="path-profession" />
                        </defs>
                        <text dy="18">
                            <textPath class="angled-text" href="#path-profession" id="angledTextProfession">
                                Professional
                            </textPath>
                        </text>
                    </svg>

                    <!-- TODO: CONTENT -->

                </section>
        </div>
    <!-- Design Header Section -->
        <div class="stack-container design">

                <div class="angle-extension design-ext"></div>

                <section class="stack-box design-int scroll-box">
                    <svg class="angled-label-svg">
                        <defs>
                            <path id="path-design" />
                        </defs>
                        <text dy="18">
                            <textPath class="angled-text" href="#path-design" id="angledTextDesign">
                                Design
                            </textPath>
                        </text>
                    </svg>

                    <!-- TODO: CONTENT -->

                </section>
        </div>
    <!-- Coding Header Section -->
        <div class="stack-container coding">

                <div class="angle-extension coding-ext"></div>

                <section class="stack-box coding-int scroll-box">
                    <svg class="angled-label-svg">
                        <defs>
                            <path id="path-coding" />
                        </defs>
                        <text dy="18">
                            <textPath class="angled-text" href="#path-coding" id="angledTextCoding">
                                Coding
                            </textPath>
                        </text>
                    </svg>

                    <!-- TODO: CONTENT -->

                </section>
        </div>
    <!-- Consult Header Section -->
        <div class="stack-container consult">

                <div class="angle-extension consult-ext"></div>

                <section class="stack-box consult-int scroll-box">
                    <svg class="angled-label-svg">
                        <defs>
                            <path id="path-consult" />
                        </defs>
                        <text dy="18">
                            <textPath class="angled-text" href="#path-consult" id="angledTextConsult">
                                Consulting
                            </textPath>
                        </text>
                    </svg>

                    <!-- TODO: CONTENT -->

                </section>
        </div>
    <!-- Final Header Section -->
        <div class="stack-container final">

                <div class="angle-extension final-ext"></div>

                <section class="stack-box final-int scroll-box">
                    

                    <!-- TODO: CONTENT -->

                </section>
        </div>
    </section>
    
    <main class="standard-content">
        Hello!!
        <br />

    </main>
    
    <script>
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
            const translateX = shouldShrink ? -15 : 0;
            const translateY = shouldShrink ? 0 : 0;
            const scrollUp = clampedOffset;

            hero.style.transform = `translate(${translateX}vw, calc(${translateY}vh - ${scrollUp}px)) scale(${scale})`;
        });
    </script>

    <script>
        // Function to update all angled SVG text paths on the page
        function updateAllDiagonalPaths() {
            // Select all SVGs used for angled labels
            const svgs = document.querySelectorAll('.angled-label-svg');

            svgs.forEach(svg => {
                // Select the <path> element inside the <defs> tag
                const path = svg.querySelector('defs path');

                // Get current viewport dimensions
                const vw = window.innerWidth;
                const vh = window.innerHeight;

                // Find the parent stack box of this SVG
                const box = svg.closest('.stack-box');

                // Default offset for the diagonal line (50% of viewport height)
                let offsetPercent = 0.5;

                // Adjust the diagonal angle for specific sections if needed
                if (box.classList.contains('design')) offsetPercent = 0.6;
                if (box.classList.contains('coding')) offsetPercent = 0.7;
                if (box.classList.contains('consult')) offsetPercent = 0.8;

                // Define start and end coordinates for the diagonal path
                const startX = 0;
                const startY = vh * offsetPercent;
                const endX = vw * offsetPercent;
                const endY = 0;

                // Construct the path definition string for an angled line
                const pathDef = `M ${startX},${startY} L ${endX},${endY}`;

                // Update the SVG path's "d" attribute
                path.setAttribute('d', pathDef);

                // Optional: Log for debugging
                console.log(`Updated angled path for ${box.classList[1]}: ${pathDef}`);
            });
        }

        // Run the function on initial page load
        window.addEventListener('load', updateAllDiagonalPaths);

        // Run again whenever the window is resized
        window.addEventListener('resize', updateAllDiagonalPaths);
    </script>
</body>
</html>