<nav class="bg-[#2f211b] text-white shadow-md sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-6 py-4">

        <div class="flex items-center justify-between">

            <!-- Logo / Brand -->
            <a href="#home" class="flex items-center gap-3">

                <div class="w-10 h-10 rounded-full bg-[#d6b98c]
                            flex items-center justify-center
                            font-bold text-[#2f211b]">
                    BFC
                </div>

                <span class="text-xl font-semibold">
                    BFC Coffee Shop
                </span>

            </a>


            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">

                <a href="#home"
                   class="hover:text-[#d6b98c] transition">
                    Home
                </a>

                <a href="#features"
                   class="hover:text-[#d6b98c] transition">
                    Features
                </a>

                <a href="#pricing"
                   class="hover:text-[#d6b98c] transition">
                    Pricing
                </a>

                <a href="#testimonials"
                   class="hover:text-[#d6b98c] transition">
                    Testimonials
                </a>

                <a href="#contact"
                   class="hover:text-[#d6b98c] transition">
                    Contact
                </a>

            </div>


            <!-- Desktop Buttons -->
            <div class="hidden md:flex items-center gap-3">

                <a href="#contact"
                   class="px-4 py-2 border border-white rounded-lg
                          hover:bg-white hover:text-[#2f211b]
                          transition">
                    Sign In
                </a>

                <a href="#contact"
                   class="px-4 py-2 bg-[#d6b98c]
                          text-[#2f211b] rounded-lg
                          font-semibold hover:bg-white transition">
                    Get Started
                </a>

            </div>


            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-button"
                type="button"
                class="md:hidden w-10 h-10 flex items-center
                       justify-center border border-white/30
                       rounded-lg hover:bg-white/10 transition"
                aria-label="Open navigation menu"
                aria-expanded="false"
            >
                <span class="text-2xl">
                    ☰
                </span>
            </button>

        </div>


        <!-- Mobile Navigation -->
        <div
            id="mobile-menu"
            class="hidden md:hidden pt-5 pb-2"
        >

            <div class="flex flex-col gap-2">

                <a href="#home"
                   class="mobile-link px-4 py-3 rounded-lg
                          hover:bg-white/10
                          hover:text-[#d6b98c] transition">
                    Home
                </a>

                <a href="#features"
                   class="mobile-link px-4 py-3 rounded-lg
                          hover:bg-white/10
                          hover:text-[#d6b98c] transition">
                    Features
                </a>

                <a href="#pricing"
                   class="mobile-link px-4 py-3 rounded-lg
                          hover:bg-white/10
                          hover:text-[#d6b98c] transition">
                    Pricing
                </a>

                <a href="#testimonials"
                   class="mobile-link px-4 py-3 rounded-lg
                          hover:bg-white/10
                          hover:text-[#d6b98c] transition">
                    Testimonials
                </a>

                <a href="#contact"
                   class="mobile-link px-4 py-3 rounded-lg
                          hover:bg-white/10
                          hover:text-[#d6b98c] transition">
                    Contact
                </a>

            </div>


            <!-- Mobile Buttons -->
            <div class="grid grid-cols-2 gap-3 mt-4">

                <a href="#contact"
                   class="mobile-link text-center px-4 py-3
                          border border-white rounded-lg
                          hover:bg-white
                          hover:text-[#2f211b] transition">
                    Sign In
                </a>

                <a href="#contact"
                   class="mobile-link text-center px-4 py-3
                          bg-[#d6b98c] text-[#2f211b]
                          rounded-lg font-semibold
                          hover:bg-white transition">
                    Get Started
                </a>

            </div>

        </div>

    </div>

</nav>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        menuButton.addEventListener('click', function () {

            mobileMenu.classList.toggle('hidden');

            const isOpen = !mobileMenu.classList.contains('hidden');

            menuButton.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );

            menuButton.querySelector('span').textContent =
                isOpen ? '✕' : '☰';

        });


        mobileLinks.forEach(function (link) {

            link.addEventListener('click', function () {

                mobileMenu.classList.add('hidden');

                menuButton.setAttribute(
                    'aria-expanded',
                    'false'
                );

                menuButton.querySelector('span').textContent = '☰';

            });

        });

    });
</script>