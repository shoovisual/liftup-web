<!-- Products Section -->
<section id="products" class="py-20 bg-white">
    <div class="container lg:max-w-7xl mx-auto px-4">
        <div class="text-center mb-8 fade-in">
            <h2 class="text-4xl font-bold section-title mb-4">Products & Solutions</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600">Premium vertical transport solutions for every need</p>
        </div>
        @php
            $products = [
                [
                    'type' => 'image',
                    'src' => 'img/products/passenger.jpg',
                    'title' => 'Passenger Elevators',
                    'description' => 'Elevate your experience with our premium passenger elevators.'
                ],
                [
                    'type' => 'image',
                    'src' => 'img/products/cargo.jpg',
                    'title' => 'Goods Elevators',
                    'description' => 'Robust and reliable goods elevators for heavy loads.'
                ],
                [
                    'type' => 'image',
                    'src' => 'img/products/bed.webp',
                    'title' => 'Bed Elevators',
                    'description' => 'Specialized bed elevators for hospitals and care facilities.'
                ],
                [
                    'type' => 'image',
                    'src' => 'img/products/scenic.jpg',
                    'title' => 'Scenic Elevators',
                    'description' => 'Experience breathtaking views with our scenic elevators.'
                ],
                [
                    'type' => 'image',
                    'src' => 'img/products/escalator.jpg',
                    'title' => 'Escalators',
                    'description' => 'Efficient and reliable escalators for high-traffic areas.'
                ],
                [
                    'type' => 'image',
                    'src' => 'img/products/travelator.jpg',
                    'title' => 'Travelators',
                    'description' => 'Efficient and reliable travelators for smooth horizontal transport.'
                ],
            ];
        @endphp

        <div class="products-slider">
            @foreach ($products as $product)
                <div class="my-5 py-3 group transition-all duration-300 cursor-pointer mx-3">
                    <img src="{{ asset($product['src']) }}" alt="{{ $product['title'] }}" class="mx-auto mb-4">
                    <div class="absolute-2">
                        <h3 class="text-3xl group-hover:underline mb-3">{{ $product['title'] }}</h3>
                        <p class="text-lg">{{ $product['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
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
    $(document).ready(function(){
        function initProductsSlider() {
            $('.products-slider').slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: prevArrow,
                nextArrow: nextArrow,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 8000,
                pauseOnHover: true,
                draggable: true,
                swipe: true,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }

        initProductsSlider();
        $(window).on('resize', function () {
            initProductsSlider();
        });
    });
</script>
