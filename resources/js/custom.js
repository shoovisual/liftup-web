// GSAP Animations and Interactions
        gsap.registerPlugin(ScrollTrigger);

        // Custom Cursor
        const cursor = document.querySelector('.custom-cursor');
        const hoverElements = document.querySelectorAll('.hover-element');

        document.addEventListener('mousemove', (e) => {
            gsap.to(cursor, {
                x: e.clientX - 10,
                y: e.clientY - 10,
                duration: 0.1
            });
        });

        hoverElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.classList.add('hover');
            });
            el.addEventListener('mouseleave', () => {
                cursor.classList.remove('hover');
            });
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu if open
                mobileMenu.classList.add('hidden');
            });
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                gsap.to(backToTop, {
                    opacity: 1,
                    pointerEvents: 'auto',
                    duration: 0.3
                });
            } else {
                gsap.to(backToTop, {
                    opacity: 0,
                    pointerEvents: 'none',
                    duration: 0.3
                });
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Stats Counter Animation
        const statsCounters = document.querySelectorAll('.stats-counter');
        statsCounters.forEach(counter => {
            ScrollTrigger.create({
                trigger: counter,
                start: "top 80%",
                onEnter: () => {
                    const target = counter.textContent;
                    const number = parseInt(target.replace(/\D/g, ''));
                    const suffix = target.replace(/\d/g, '');

                    gsap.fromTo(counter, {
                        textContent: 0
                    }, {
                        textContent: number,
                        duration: 2,
                        snap: { textContent: 1 },
                        onUpdate: function () {
                            counter.textContent = Math.ceil(counter.textContent) + suffix;
                        }
                    });
                }
            });
        });

        // Fade In Animations
        gsap.utils.toArray('.fade-in').forEach(element => {
            gsap.fromTo(element, {
                opacity: 0,
                y: 30
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Slide In Left Animations
        gsap.utils.toArray('.slide-in-left').forEach(element => {
            gsap.fromTo(element, {
                opacity: 0,
                x: -50
            }, {
                opacity: 1,
                x: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Slide In Right Animations
        gsap.utils.toArray('.slide-in-right').forEach(element => {
            gsap.fromTo(element, {
                opacity: 0,
                x: 50
            }, {
                opacity: 1,
                x: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Scale In Animations
        gsap.utils.toArray('.scale-in').forEach((element, i) => {
            gsap.fromTo(element, {
                opacity: 0,
                scale: 0.8
            }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: i * 0.1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Navbar Background on Scroll
        const navbar = document.querySelector('.navbar');

        ScrollTrigger.create({
            trigger: "body",
            start: "top -80",
            end: "bottom top",
            onUpdate: self => {
                if (self.direction === 1) {
                    gsap.to(navbar, {
                        backgroundColor: "#ffffff",
                        backdropFilter: "blur(10px)",
                        duration: 0.3
                    });
                } else {
                    gsap.to(navbar, {
                        backgroundColor: "#ffffff",
                        backdropFilter: "blur(10px)",
                        duration: 0.3
                    });
                }
            }
        });

        // Form Submission (Demo)
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Simple form validation and success message
            const formData = new FormData(form);

            // Simulate form submission
            gsap.to(form, {
                opacity: 0.5,
                duration: 0.3,
                onComplete: () => {
                    setTimeout(() => {
                        alert('Thank you for your inquiry! We will contact you soon.');
                        form.reset();
                        gsap.to(form, { opacity: 1, duration: 0.3 });
                    }, 1000);
                }
            });
        });

        // Parallax Effect for Hero Section
        gsap.to(".floating", {
            y: -30,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "power2.inOut"
        });

        // Initialize Page
        document.addEventListener('DOMContentLoaded', () => {
            // Hide loading elements and show content
            gsap.from("body", {
                opacity: 0,
                duration: 0.5,
                onComplete: () => {
                    // Trigger initial animations
                    ScrollTrigger.refresh();
                }
            });

            // Add intersection observer for performance
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // Observe all animation elements
            document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in').forEach(el => {
                observer.observe(el);
            });
        });

        // Performance optimizations
        let ticking = false;

        function updateScrollPosition() {
            // Throttled scroll events for better performance
            if (!ticking) {
                requestAnimationFrame(() => {
                    // Additional scroll-based animations can go here
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', updateScrollPosition, { passive: true });

        // Optimize GSAP for mobile
        if (window.innerWidth <= 768) {
            ScrollTrigger.config({ ignoreMobileResize: true });
            cursor.style.display = 'none';
        }

        // Add loading state management
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
            ScrollTrigger.refresh();
        });

        // SEO and accessibility enhancements
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
        });

        document.addEventListener('mousedown', () => {
            document.body.classList.remove('keyboard-navigation');
        });
