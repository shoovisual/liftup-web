<!-- Navigation -->
    <nav class="navbar sticky top-0 w-full bg-white z-50 transparent">
        <div class="w-full border-b border-gray-300"><!-- Add this div for spacing -->
            <div class="container lg:max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
                <div class="navbar-brand">
                    <img src="{{ asset('img/logo.svg') }}" class="w-32 object-cover" alt="">
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="tel:+255 22 211 0000" class="text-gray-800 transition-colors">+255 714 433 337</a>
                    <a href="mailto:info@liftup.co.tz" class="text-gray-800 transition-colors">info@liftup.co.tz</a>
                    <button class="bg-liftup-blue hover:bg-liftup-blue/80 transition-all duration-300 px-8 py-3 rounded-full text-white font-semibold hover-element flex items-center">
                        Get Quote
                        <img src="{{ asset('img/arrow.svg') }}" class="ml-3 w-5" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full flex border-b border-gray-300">
            <div class="container lg:max-w-7xl mx-auto px-4 py-4 justify-between items-center">
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-800 transition-colors">Home</a>
                    <a href="#about" class="text-gray-800 transition-colors">About</a>
                    <a href="#services" class="text-gray-800 transition-colors">Services</a>
                    <a href="#products" class="text-gray-800 transition-colors">Products</a>
                    <a href="#industries" class="text-gray-800 transition-colors">Industries</a>
                    <a href="#contact" class="text-gray-800 transition-colors">Contact</a>
                </div>
                <button class="md:hidden text-liftup-blue text-xl" id="mobile-menu-btn">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-4 py-2 space-y-2">
                <a href="#home" class="block py-2 text-gray-800 hover:text-blue-600">Home</a>
                <a href="#about" class="block py-2 text-gray-800 hover:text-blue-600">About</a>
                <a href="#services" class="block py-2 text-gray-800 hover:text-blue-600">Services</a>
                <a href="#products" class="block py-2 text-gray-800 hover:text-blue-600">Products</a>
                <a href="#industries" class="block py-2 text-gray-800 hover:text-blue-600">Industries</a>
                <a href="#contact" class="block py-2 text-gray-800 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>
