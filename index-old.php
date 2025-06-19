<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll-Stacked Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body>
<!-- HEADER SECTION to display basic info, photo etc. This will be full screen at start, minimise and then move up the screen on scroll. JS script below -->
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
<!-- Start the stacked box content. These boxes serve as the main display and navigation displaying an overview of my work -->
    <div class="stacked-intro standard-content">
        <div class="stack-scroll-wrapper">

            <div class="stack-container profession">
                <div class="angle-extension profession-ext"></div>
                <section class="stack-box profession-int scroll-box">
                  
                    <svg class="angled-label-svg">
                    <defs>
                        <path id="path-profession" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-profession" id="angledTextProfession">Professional</textPath>
                    </text>
                    </svg>

                    <!-- TODO: maybe than messing about with all theis JS to make the scrolling work it might be better to just simply have a more vibrant section in the header with bigger text and a 'More info' box that will take the user to a seperate page. This would have the advantage of being easily responsive and would also allow for better traccking of what the user is doing on the site. -->
                    <main class="scroll-content">
                        <p>I’m a creative and commercially minded marketing professional with over a decade of experience spanning brand development, digital strategy, campaign delivery and stakeholder engagement. I’ve scaled a business from the ground up, led marketing for major events, and worked agency-side supporting a range of dynamic clients — from food and drink to arts and culture.</p>
                        <br />
                        <p>I combine strategic thinking with hands-on execution, equally comfortable crafting a brand voice as I am analysing SEO performance or briefing designers. My work is rooted in storytelling, community-building and creating value — whether that’s through digital growth, meaningful partnerships or beautifully crafted content.</p>
                        <br />
                        <p>Alongside my professional life, I’m an avid forager and passionate about nature. I grew up in a permaculture garden, learned to cook with freshly picked ingredients, and have a soft spot for woodlands and arboretums — especially Kew Gardens, which I’ve returned to time and again for creative inspiration.</p>
                        <br />
                        <p>Key Strengths:</p>
                        <p><ul>
	                        <li>Full-stack marketing: SEO, paid media, CRM, UX, copywriting, analytics</li>
	                        <li>Strategic brand building with proven commercial results</li>
	                        <li>Strong design sensibility grounded in a background in graphic design</li>
	                        <li>Excellent stakeholder management and cross-functional collaboration</li>
	                        <li>Experience working in and with start-ups, agencies, and cultural organisations</li>
	                        <li>Skilled in adapting processes and systems to work smarter and scale sustainably</li>
                        </ul></p>
                        <br />
                        <p>If you’re looking for someone who brings both creative energy and business rigour — with a strong ethical compass and a collaborative spirit — I’d love to connect.</p>
                    </main>
                    <div class="stack-sentinel"></div>
                </section>
            </div>

            <div class="stack-container design">
                <div class="angle-extension design-ext"></div>
                <section class="stack-box design-int scroll-box">
                    <svg class="angled-label-svg">
                    <defs>
                        <path id="path-design" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-design" id="angledTextDesign">Design</textPath>
                    </text>
                    </svg>

                    <main class="scroll-content">
                        <p>Skilled in graphic design and web, I build brands that not only look good but work beautifully — from pixel-perfect layouts to user-focused websites.</p>
                        <h2>Latest Design Work:</h2>
                        <div class="stacked-design-view">
                            <img class="stacked-design-img" src="./assets/design/southampton-university-conference.png" alt="Southampton University Conference Image">
                            <img class="stacked-design-img" src="./assets/design/corporate-logo-design.png" alt="Corporate Logo Design">
                        </div>
                        <br />
                        <p>Want to see more? Dive into the full portfolio here.</p>
                    </main>
                    <div class="stack-sentinel"></div>
                </section>
            </div>

            <div class="stack-container coding">
                <div class="angle-extension coding-ext"></div>
                <section class="stack-box coding-int scroll-box">
                    <svg class="angled-label-svg">
                    <defs>
                        <path id="path-coding" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-coding" id="angledTextCoding">Coding</textPath>
                    </text>
                    </svg>

                    <main class="scroll-content">
                        <h2>Self-taught and ever-curious, I’ve been dabbling in web design and coding for over 20 years.</h2><br />
                        <p>Originally trained in graphic design, I’ve always had a keen eye for how things look — and how they work. That foundation sparked a deep interest in digital marketing and web design, where I’ve been able to blend creativity with strategy.</p>
                        <br />
                        <p>Now, I’m building on that by studying for a Level 4 BCS Certificate in Full Stack Development — formalising the skills I’ve honed over decades and pushing them further.</p>
                        <br />
                        <p><strong>Scroll down to see what I’m capable of — or <a href="">click here</a> to jump straight to some code examples.</strong></p>
                        <p>Want to dive deeper? <a href="">View the full source code for this site</a> and explore my GitHub version control here.</p>
                    </main>
                    <div class="stack-sentinel"></div>
                </section>
            </div>

            <div class="stack-container consult">
                <div class="angle-extension consult-ext"></div>
                <section class="stack-box consult-int scroll-box">
                    <svg class="angled-label-svg">
                    <defs>
                        <path id="path-consult" />
                    </defs>
                    <text dy="18">
                        <textPath class="angled-text" href="#path-consult" id="angledTextConsult">Consultancy</textPath>
                    </text>
                    </svg>

                    <main class="scroll-content">
                        <p>With over 15 years’ experience in the alcohol and events industry — including 8 years scaling a multi-award-winning retail drinks distributor — I bring unique insight into what today’s beverage consumers want. From flavour profiles to consumer offerings, and most importantly, how to get your product into the right hands, I specialise in helping breweries connect with their market.</p>
                        <br />
                        <p>Over the years, I’ve sold tens of thousands of litres of beer direct to consumers, judged for competitions such as the European Beer Challenge, and worked across festivals, retail, and on-trade environments. I am not here to teach you how to run your brewery — I am here to help you position your brand, refine your offer, and grow your reach.</p>
                        <br />
                        <p><strong>This lives on a separate site — <a href="">click here</a> to find out more.</strong></p>
                    </main>
                    <div class="stack-sentinel"></div>
                </section>
            </div>

            <section class="stack-container"></section>
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

// v0.67 — Unlock on 0% when scrolling up + fix for text box reset

const debugBox = document.getElementById('debug-box');
const sentinels = document.querySelectorAll('.stack-sentinel');
let scrollLocked = false;
let activeScrollBox = null;
let activeBoxClass = null;
let lastScrollY = window.scrollY;

const lockScroll = () => {
  if (!scrollLocked) {
    document.body.style.overflow = 'hidden';
    scrollLocked = true;
  }
};

const unlockScroll = () => {
  if (scrollLocked) {
    document.body.style.overflow = '';
    scrollLocked = false;
  }
};

const observer = new IntersectionObserver((entries) => {
  let visibleSentinel = null;

  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const container = entry.target.closest('.stack-container');
      if (container) {
        visibleSentinel = container;
      }
    }
  });

  if (visibleSentinel) {
    const classList = visibleSentinel.className.split(' ');
    activeBoxClass = classList[1].toUpperCase();
    const scrollBox = visibleSentinel.querySelector('.scroll-content');

    const isScrollable = scrollBox.scrollHeight > scrollBox.clientHeight;

    if (isScrollable) {
      activeScrollBox = scrollBox;
      lockScroll();
    } else {
      activeScrollBox = null;
      unlockScroll();
    }
  } else {
    activeBoxClass = null;
    activeScrollBox = null;
    unlockScroll();
    debugBox.textContent = `NONE IN VIEW`;
  }
}, {
  threshold: 0.1,
  rootMargin: '0px 0px 0px 0px'
});

sentinels.forEach(sentinel => observer.observe(sentinel));

// Redirect scroll to active box (mouse)
window.addEventListener('wheel', (e) => {
  if (scrollLocked && activeScrollBox) {
    activeScrollBox.scrollTop += e.deltaY;
    e.preventDefault();
  }
}, { passive: false });

// Redirect scroll to active box (touch)
let touchStartY = 0;
window.addEventListener('touchstart', (e) => {
  if (scrollLocked) {
    touchStartY = e.touches[0].clientY;
  }
}, { passive: false });

window.addEventListener('touchmove', (e) => {
  if (scrollLocked && activeScrollBox) {
    const touchY = e.touches[0].clientY;
    const deltaY = touchStartY - touchY;
    activeScrollBox.scrollTop += deltaY;
    touchStartY = touchY;
    e.preventDefault();
  }
}, { passive: false });

// Scroll % Tracker + reset on scroll up
setInterval(() => {
  const currentScrollY = window.scrollY;
  const scrollingUp = currentScrollY < lastScrollY;
  lastScrollY = currentScrollY;

  if (scrollLocked && activeScrollBox && activeBoxClass) {
    const scrollTop = activeScrollBox.scrollTop;
    const scrollHeight = activeScrollBox.scrollHeight - activeScrollBox.clientHeight;
    const scrollPercent = (scrollTop / scrollHeight) * 100;

    debugBox.textContent = `${activeBoxClass}: IN VIEW – SCROLLED: ${scrollPercent.toFixed(1)}%`;

    if (scrollPercent >= 100) {
      unlockScroll();
      debugBox.textContent = `${activeBoxClass}: UNLOCKED (BOTTOM)`;
    }

    if (scrollingUp && scrollPercent <= 0) {
      unlockScroll();
      debugBox.textContent = `${activeBoxClass}: UNLOCKED (TOP)`;
    }

    if (scrollingUp && scrollPercent > 0) {
      activeScrollBox.scrollTop = 0;
      debugBox.textContent = `${activeBoxClass}: RESET ON UP`;
    }
  }
}, 100);
    </script>
</body>
</html>