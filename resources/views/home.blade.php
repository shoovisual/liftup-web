<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liftup Tanzania - Elevating Your Standards</title>
    <meta name="description"
        content="Trusted installation, modernization, and maintenance of elevators, escalators & travelators across Tanzania. Member of Gulf Group with 20+ years experience.">
    <meta name="keywords" content="elevators, escalators, travelators, KONE, maintenance, installation, Tanzania, Gulf Group">
    <meta property="og:title" content="Liftup Tanzania - Elevating Your Standards">
    <meta property="og:description"
        content="Trusted installation, modernization, and maintenance of elevators, escalators & travelators across Tanzania. Member of Gulf Group with 20+ years experience.">
    <meta property="og:image" content="{{ asset('img/favicon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Tailwind CSS -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <style>

    </style>
</head>

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    @include('layouts.sections.navbar')
    <!-- Hero Section -->
    <section id="home" class="hero-section relative h-[80vh] flex md:items-center pt-20">
        <img src="{{ asset('img/hero-bg.jpg') }}" class="absolute hidden md:block top-0 left-0 w-full h-full object-cover" alt="">
        <img src="{{ asset('img/hero-cover-mobile.jpg') }}" class="absolute md:hidden top-0 left-0 w-full h-full object-cover" alt="">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="text-white fade-in">
                    <h1 class="text-4xl md:text-6xl text-white font-medium mb-6 leading-tight"> Lifting Tanzania,<br>
                        <span>One Floor at a Time</span>
                    </h1>
                    <p class="md:text-xl text-lg mb-8 opacity-90"> Trusted installation, modernization, and maintenance of elevators, escalators &
                        travelators across Tanzania. </p>
                    <div class="space-x-4 flex">
                        <button class="bg-liftup-blue hover:bg-liftup-blue/80  cursor-pointer justify-between flex items-center transition-all duration-300 px-4.5 py-3 rounded-full text-white font-semibold hover-element">
                            Get Quote <span class="px-2 py-2.5 ml-3 flex justify-center bg-white rounded-full"><img src="{{ asset('img/icon_quote.svg') }}" class="w-5" alt=""></span>
                        </button>
                        <button class="border cursor-pointer flex items-center border-white px-4.5 group py-3 rounded-full text-white font-semibold hover:bg-white hover:text-gray-800 transition-all hover-element">
                            Read More <span class="px-2 py-2.5 ml-3 flex justify-center bg-liftup-blue/0 group-hover:bg-liftup-blue rounded-full"><img src="{{ asset('img/arrow.svg') }}" class="h-5 block group-hover:hidden" alt=""><img src="{{ asset('img/arrow.svg') }}" class="h-0 group-hover:h-5 hidden group-hover:inline" alt=""></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold section-title mb-4">About Liftup Tanzania</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto"> A proud member of the Gulf Group, bringing over two decades of industry
                    experience to Tanzania's vertical transport sector. </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left">
                    <h3 class="text-2xl font-semibold section-title mb-6">Our Heritage & Expertise</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed"> As part of a powerful regional brand involved in import, export, and
                        distribution of diverse goods—from medical supplies to ICT and building materials—we proudly deliver world-class
                        elevator and escalator solutions. </p>
                    <p class="text-gray-600 mb-8 leading-relaxed"> Our clientele includes government institutions, multinational
                        corporations, and private developments across Tanzania. </p>
                    {{-- <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="text-center p-4 bg-gray-50 rounded-lg card-hover border border-gray-200">
                            <h4 class="font-semibold text-gray-800">Customer Satisfaction</h4>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg card-hover border border-gray-200">
                            <h4 class="font-semibold text-gray-800">Technical Innovation</h4>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg card-hover border border-gray-200">
                            <h4 class="font-semibold text-gray-800">Integrity</h4>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg card-hover border border-gray-200">
                            <h4 class="font-semibold text-gray-800">Reliable Partnerships</h4>
                        </div>
                    </div> --}}
                </div>
                <div class="slide-in-right">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-liftup-blue to-liftup-green p-8 rounded-2xl text-white">
                            <i class="bi bi-building-gear text-6xl mb-4 opacity-80"></i>
                            <h3 class="text-2xl font-bold mb-4">Gulf Group Member</h3>
                            <p class="mb-6 opacity-90"> Leveraging decades of experience in import, export, and distribution across multiple
                                industries. </p>
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold">Gulf Group</div>
                                    <div class="text-sm opacity-80">Trusted Partner</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.services')
    <!-- CTA -->
    <section id="cta" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 rounded-xl bg-liftup-blue gap-12 items-center">
                <div class="nice-img">
                    <img src="{{ asset('img/img_ee.jpg') }}" alt="Liftup Tanzania" class="w-full md:rounded-l-xl rounded-t-xl">
                </div>
                <div class="text-white fade-in p-4">
                    <p class="md:text-4xl text-2xl">Elevator and escalator installation, service, modernization, replacement and supporting world-class people flow in your buildings.</p>
                    <button class="bg-white px-6 py-2 rounded-full text-liftup-blue text-lg flex items-center font-semibold hover-element mt-6">
                        Get Quote
                        <img src="{{ asset('img/icon_quote.svg') }}" class="ml-3 w-5" alt="">
                    </button>
                </div>
            </div>
        </div>
    </section>
    @include('sections.products')
    <!-- Industries Section -->
    <section id="industries" class="py-20 bg-gray-50">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold section-title mb-4">Industries We Serve</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600">Customized solutions across diverse sectors</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/residential.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Residential Buildings</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/office.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Offices & Retail</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/hotels.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Hotels & Resorts</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/medical.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Medical Facilities</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/airport.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Transport Hubs</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/school.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Educational</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/pitch.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Sports Centers</h3>
                </div>
                <div class="industry-card w-full mx-auto flex flex-col items-center justify-center gap-y-3 card-hover scale-in">
                    <img src="{{ asset('img/industrial.svg') }}" class="h-15 object-cover bg-red" alt="">
                    <h3 class="text-lg font-semibold section-title">Industrial</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold section-title mb-4">Contact Us</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600">Get in touch for your vertical transport needs</p>
            </div>
            <div class="grid md:grid-cols-5 gap-12">
                <div class="slide-in-left col-span-2">
                    <h3 class="text-2xl font-semibold section-title mb-6">Get In Touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <i class="bi bi-telephone-fill text-2xl text-liftup-green mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Phone</h4>
                                <p class="text-gray-600">+255 714 433 337</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="bi bi-envelope-fill text-2xl text-liftup-green mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@liftup.co.tz</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="bi bi-geo-alt-fill text-2xl text-liftup-green mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Address</h4>
                                <p class="text-gray-600">FNB House, Ground Floor<br>Opposite Serena Hotel<br>P.O. Box: 10789</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="bi bi-globe text-2xl text-liftup-green mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Website</h4>
                                <p class="text-gray-600">www.liftup.co.tz</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button class="btn-primary px-8 py-3 rounded-full text-white font-semibold hover-element">
                            <i class="bi bi-chat-dots mr-2"></i>Start Conversation
                        </button>
                    </div>
                </div>
                <div class="slide-in-right col-span-3">
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <h3 class="text-xl font-semibold section-title mb-6">Request a Quote</h3>
                        <form class="space-y-4">
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Full Name"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition-colors hover-element">
                                <input type="email" placeholder="Email Address"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition-colors hover-element">
                            </div>
                            <div>
                                <input type="tel" placeholder="Phone Number"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition-colors hover-element">
                            </div>
                            <div>
                                <select
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition-colors hover-element">
                                    <option>Select Service</option>
                                    <option>New Installation</option>
                                    <option>Modernization</option>
                                    <option>Maintenance</option>
                                    <option>Emergency Repair</option>
                                </select>
                            </div>
                            <div>
                                <textarea placeholder="Project Details" rows="4"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition-colors hover-element resize-none"></textarea>
                            </div>
                            <button type="submit" class="btn-primary flex items-center rounded-full px-8 py-4 text-white font-semibold hover-element">
                                Send Request <img src="{{ asset('img/arrow.svg') }}" class="w-5.5 ml-2" alt="LiftUp Contact form">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="navbar bg-liftup-blue py-10 text-white">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in-2">
                    <h3 class="text-xl font-bold mb-4">
                        <img src="{{ asset('img/logo-white.svg') }}" class="w-32" alt="">
                    </h3>
                    <p class="mb-4"> Elevating Tanzania's standards with world-class vertical transport solutions. A proud
                        member of Gulf Group. </p>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-white transition-colors hover-element">
                            <i class="bi bi-facebook text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-white transition-colors hover-element">
                            <i class="bi bi-twitter text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-white transition-colors hover-element">
                            <i class="bi bi-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-white transition-colors hover-element">
                            <i class="bi bi-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="fade-in-2">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="hover:text-white transition-colors hover-element">Home</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors hover-element">About Us</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors hover-element">Services</a>
                        </li>
                        <li><a href="#products" class="hover:text-white transition-colors hover-element">Products</a>
                        </li>
                        <li><a href="#industries" class="hover:text-white transition-colors hover-element">Industries</a>
                        </li>
                        <li><a href="#contact" class="hover:text-white transition-colors hover-element">Contact</a></li>
                    </ul>
                </div>
                <div class="fade-in-2">
                    <h4 class="text-lg font-semibold mb-4">Emergency Support</h4>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-telephone-fill text-white"></i>
                            <span>+255 714 433 337</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-envelope-fill text-white"></i>
                            <span>info@liftup.co.tz</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-clock-fill text-white"></i>
                            <span>24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-white my-8">
            <div class="text-center flex items-center justify-between text-white">
                <p>&copy;{{ date('Y') }} Liftup Tanzania Limited - Elevating Your Standards. Powered by Gulf Group.</p>
                <ul class="flex justify-center space-x-6 mt-4">
                    <li><a href="#" class="text-white hover:text-white transition-colors hover-element">Privacy Policy</a></li>
                    <li><a href="#" class="text-white hover:text-white transition-colors hover-element">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-8 right-8 bg-liftup-green text-white p-3 rounded-full shadow-lg hover:bg-green-700 transition-all opacity-0 pointer-events-none hover-element">
        <img src="{{ asset('img/arrow-up.svg') }}" class="w-6 h-6 fill-white" alt="">
    </button>



</body>

</html>
