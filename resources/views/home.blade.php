<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liftup Tanzania - Elevating Your Standards</title>
    <meta name="description"
        content="Trusted installation, modernization, and maintenance of elevators, escalators & travelators across Tanzania. Member of Gulf Group with 20+ years experience.">
    <meta name="keywords" content="elevators, escalators, travelators, KONE, maintenance, installation, Tanzania, Gulf Group">
    <!-- Tailwind CSS -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>

    </style>
</head>

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    @include('layouts.sections.navbar')
    <!-- Hero Section -->
    <section id="home" class="hero-section relative h-[80vh] flex items-center pt-20">
        <img src="{{ asset('img/hero-cover.jpg') }}" class="absolute top-0 left-0 w-full h-full object-cover" alt="">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-liftup-blue fade-in">
                    <h1 class="text-5xl md:text-6xl text-black font-bold mb-6 leading-tight"> Lifting Tanzania,<br>
                        <span>One Floor at a Time</span>
                    </h1>
                    <p class="text-xl mb-8 opacity-90"> Trusted installation, modernization, and maintenance of elevators, escalators &
                        travelators across Tanzania. </p>
                    <div class="space-x-4 flex">
                        <button class="bg-liftup-blue hover:bg-liftup-blue/80 transition-all duration-300 px-8 py-3 rounded-full text-white font-semibold hover-element">
                            Get Quote
                        </button>
                        <button
                            class="border-2 flex items-center border-gray-500 px-8 py-3 rounded-full text-gray-500 font-semibold hover:bg-white hover:text-gray-800 transition-all hover-element">
                            Read More <img src="{{ asset('img/arrow.svg') }}" class="ml-2 h-5" alt="">
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
                    <div class="grid grid-cols-4 gap-6">
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
                    </div>
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
    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold section-title mb-4">Our Services</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600">Comprehensive solutions for all your vertical transport needs</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover scale-in">
                    <div class="text-center">
                        <i class="bi bi-tools service-icon"></i>
                        <h3 class="text-xl font-semibold section-title mb-4">Installation & Replacement</h3>
                        <p class="text-gray-600 mb-6">Complete turnkey solutions for KONE elevators, escalators, and travelators.</p>
                        <ul class="text-left text-gray-600 space-y-2 mb-6">
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Site assessments</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Shaft preparation</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Safe, compliant installation</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Operator training</li>
                        </ul>
                        <button class="btn-primary px-6 py-2 rounded-full text-white font-semibold hover-element w-full"> Learn More
                        </button>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover scale-in">
                    <div class="text-center">
                        <i class="bi bi-arrow-up-circle service-icon"></i>
                        <h3 class="text-xl font-semibold section-title mb-4">Modernization & Parts</h3>
                        <p class="text-gray-600 mb-6">Upgrade aging equipment with our expert modernization services.</p>
                        <ul class="text-left text-gray-600 space-y-2 mb-6">
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Improved performance</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Reduced energy costs</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Modern compliance</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>In-house spare parts</li>
                        </ul>
                        <button class="btn-primary px-6 py-2 rounded-full text-white font-semibold hover-element w-full"> Learn More
                        </button>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover scale-in">
                    <div class="text-center">
                        <i class="bi bi-headset service-icon"></i>
                        <h3 class="text-xl font-semibold section-title mb-4">24/7 Maintenance</h3>
                        <p class="text-gray-600 mb-6">Comprehensive maintenance ensuring smooth operations year-round.</p>
                        <ul class="text-left text-gray-600 space-y-2 mb-6">
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Monthly maintenance</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Emergency response</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Technical troubleshooting</li>
                            <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>Full parts inventory</li>
                        </ul>
                        <button class="btn-primary px-6 py-2 rounded-full text-white font-semibold hover-element w-full"> Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section -->
    <section id="products" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold section-title mb-4">Products & Solutions</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600">Premium vertical transport solutions for every need</p>
            </div>
            <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="text-center p-6 bg-gray-50 rounded-xl card-hover scale-in">
                    <i class="bi bi-building text-4xl text-blue-600 mb-4"></i>
                    <h3 class="font-semibold text-gray-800">Passenger Elevators</h3>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-xl card-hover scale-in">
                    <i class="bi bi-box-seam text-4xl text-liftup-green mb-4"></i>
                    <h3 class="font-semibold text-gray-800">Goods Elevators</h3>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-xl card-hover scale-in">
                    <i class="bi bi-heart-pulse text-4xl text-red-600 mb-4"></i>
                    <h3 class="font-semibold text-gray-800">Bed Elevators</h3>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-xl card-hover scale-in">
                    <i class="bi bi-eye text-4xl text-purple-600 mb-4"></i>
                    <h3 class="font-semibold text-gray-800">Scenic Elevators</h3>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-xl card-hover scale-in">
                    <i class="bi bi-stairs text-4xl text-orange-600 mb-4"></i>
                    <h3 class="font-semibold text-gray-800">Escalators</h3>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-xl card-hover scale-in">
                    <i class="bi bi-arrow-right text-4xl text-teal-600 mb-4"></i>
                    <h3 class="font-semibold text-gray-800">Travelators</h3>
                </div>
            </div>
        </div>
    </section>
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
            <div class="grid md:grid-cols-2 gap-12">
                <div class="slide-in-left">
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
                            <i class="bi bi-chat-dots mr-2"></i>Start Conversation </button>
                    </div>
                </div>
                <div class="slide-in-right">
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <h3 class="text-xl font-semibold section-title mb-6">Request a Quote</h3>
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Full Name"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition-colors hover-element">
                            </div>
                            <div>
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
                            <button type="submit" class="btn-primary w-full py-3 rounded-lg text-white font-semibold hover-element">
                                <i class="bi bi-send mr-2"></i>Send Request </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="navbar bg-liftup-blue py-8 text-white">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in">
                    <h3 class="text-xl font-bold mb-4">
                        <i class="bi bi-building mr-2"></i>Liftup Tanzania
                    </h3>
                    <p class="text-gray-300 mb-4"> Elevating Tanzania's standards with world-class vertical transport solutions. A proud
                        member of Gulf Group. </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors hover-element">
                            <i class="bi bi-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors hover-element">
                            <i class="bi bi-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors hover-element">
                            <i class="bi bi-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors hover-element">
                            <i class="bi bi-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="fade-in">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white transition-colors hover-element">Home</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors hover-element">About Us</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-white transition-colors hover-element">Services</a>
                        </li>
                        <li><a href="#products" class="text-gray-300 hover:text-white transition-colors hover-element">Products</a>
                        </li>
                        <li><a href="#industries" class="text-gray-300 hover:text-white transition-colors hover-element">Industries</a>
                        </li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors hover-element">Contact</a></li>
                    </ul>
                </div>
                <div class="fade-in">
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
            <hr class="border-gray-600 my-8">
            <div class="text-center flex items-center justify-between text-gray-300">
                <p>&copy;{{ date('Y') }} Liftup Tanzania Limited - Elevating Your Standards. Powered by Gulf Group.</p>
                <ul class="flex justify-center space-x-6 mt-4">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover-element">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover-element">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-8 right-8 bg-liftup-green text-white p-3 rounded-full shadow-lg hover:bg-green-700 transition-all opacity-0 pointer-events-none hover-element">
        <img src="{{ asset('img/arrow-up.svg') }}" class="w-6 h-6 fill-white" alt="">
    </button>
    <script>

    </script>
</body>

</html>
