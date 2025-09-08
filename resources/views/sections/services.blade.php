<!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container lg:max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold section-title mb-4">Our Services</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600">Comprehensive solutions for all your vertical transport needs</p>
            </div>
            @php
            $services = [
                [
                    'icon' => 'img/installation.svg',
                    'title' => 'Installation',
                    'description' => 'Complete turnkey solutions for KONE elevators, escalators, and travelators.',
                    'features' => [
                        'Site assessments',
                        'Shaft preparation',
                        'Safe, compliant installation',
                        'Operator training',
                    ],
                ],
                [
                    'icon' => 'img/modernization.svg',
                    'title' => 'Modernization & Parts',
                    'description' => 'Upgrade aging equipment with our expert modernization services.',
                    'features' => [
                        'Improved performance',
                        'Reduced energy costs',
                        'Modern compliance',
                        'In-house spare parts',
                    ],
                ],
                [
                    'icon' => 'img/maintenance.svg',
                    'title' => '24/7 Maintenance',
                    'description' => 'Comprehensive maintenance ensuring smooth operations year-round.',
                    'features' => [
                        'Monthly maintenance',
                        'Emergency response',
                        'Technical troubleshooting',
                        'Full parts inventory',
                    ],
                ],
                [
                    'icon' => 'img/repair.svg',
                    'title' => 'Lift Repairs',
                    'description' => 'Comprehensive maintenance ensuring smooth operations year-round.',
                    'features' => [
                        'Monthly maintenance',
                        'Emergency response',
                        'Technical troubleshooting',
                        'Full parts inventory',
                    ],
                ],
            ];
            $useSlider = count($services) > 3;
            @endphp

            <div class="{{ $useSlider ? 'services-slider' : 'grid md:grid-cols-3 gap-4' }}">
                @foreach ($services as $service)
                    <div class="bg-white p-8 rounded-2xl border border-gray-200 cursor-pointer card-hover scale-in {{ $useSlider ? 'mx-2' : 'mx-0' }}">
                        <div class="text-center">
                            <img src="{{ asset($service['icon']) }}" class="w-26 object-cover mx-auto mb-6" alt="{{ $service['title'] }}">
                            <h3 class="text-xl font-semibold section-title mb-4">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 mb-6">{{ $service['description'] }}</p>
                            <ul class="text-left text-gray-600 space-y-2 mb-6">
                                @foreach ($service['features'] as $feature)
                                    <li><i class="bi bi-check-circle-fill text-green-500 mr-2"></i>{{ $feature }}</li>
                                @endforeach
                            </ul>
                            <button class="bg-white px-6 py-2 rounded-full border border-liftup-blue text-liftup-blue text-lg flex items-center justify-center font-semibold hover-element mt-6">
                                Get Quote
                                <img src="{{ asset('img/icon_quote.svg') }}" class="ml-3 w-5" alt="">
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- jQuery (required by Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
   $(document).ready(function () {
    function initServiceSlider() {
        const $slider = $('.services-slider');
        const itemCount = $slider.children().length;
        const isMobile = $(window).width() < 768;

        const prevArrow = `
        <button type="button" class="slick-prev border border-gray-100 p-4 cursor-pointer rounded-full bg-white shadow-md custom-arrow left-0">
            <img src="{{ asset('img/icon_quote.svg') }}" class="w-6 h-6 rotate-180" alt="Previous">
        </button>
        `;

        const nextArrow = `
            <button type="button" class="slick-next border border-gray-100 p-4 cursor-pointer rounded-full bg-white shadow-md custom-arrow right-0">
                <img src="{{ asset('img/icon_quote.svg') }}" class="w-6 h-6" alt="Next">
            </button>
        `;

        if (isMobile || itemCount > 3) {
            if (!$slider.hasClass('slick-initialized')) {
                $slider.slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: isMobile ? 1 : 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: prevArrow,
                    nextArrow: nextArrow,
                    autoplay: isMobile,
                    autoplaySpeed: 6000,
                    pauseOnHover: true,
                    draggable: true,
                    swipe: true,
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            }
        } else {
            if ($slider.hasClass('slick-initialized')) {
                $slider.slick('unslick');
            }
        }
    }

    initServiceSlider();
    $(window).on('resize', function () {
        initServiceSlider();
    });
});


</script>
