<nav class="bg-[#2f211b]/95 backdrop-blur-sm text-white border-b border-white/10 sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-6 py-4">

        <div class="flex items-center justify-between">

            <!-- Logo / Brand -->
            <a href="#home" class="flex items-center gap-3">

                <img
                    src="{{ asset('images/logo.jpg') }}"
                    alt="BFC Coffee Shop Logo"
                    width="48"
                    height="48"
                    class="w-12 h-12 object-cover rounded-lg"
                >

                <span class="font-serif text-xl font-semibold">
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

                <a href="#showcase"
                   class="px-4 py-2 border border-white/40 rounded-lg
                          hover:border-white hover:bg-white/5
                          transition">
                    View Menu
                </a>

                <a href="#contact"
                   class="px-4 py-2 bg-[#d6b98c]
                          text-[#2f211b] rounded-lg
                          font-semibold hover:bg-white transition">
                    Contact Us
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
                aria-controls="mobile-menu"
            >
                <svg id="menu-icon-open" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menu-icon-close" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" class="hidden" aria-hidden="true">
                    <path d="M6 6l12 12M18 6L6 18"/>
                </svg>
            </button>

        </div>


        <!-- Mobile Navigation -->
        <div
            id="mobile-menu"
            class="md:hidden max-h-0 opacity-0 overflow-hidden
                   transition-all duration-300 ease-out"
        >

            <div class="flex flex-col gap-2 pt-5 pb-2">

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
            <div class="grid grid-cols-2 gap-3 pb-4">

                <a href="#showcase"
                   class="mobile-link text-center px-4 py-3
                          border border-white/40 rounded-lg
                          hover:border-white hover:bg-white/5
                          transition">
                    View Menu
                </a>

                <a href="#contact"
                   class="mobile-link text-center px-4 py-3
                          bg-[#d6b98c] text-[#2f211b]
                          rounded-lg font-semibold
                          hover:bg-white transition">
                    Contact Us
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
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        function openMenu() {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
            mobileMenu.classList.remove('opacity-0');
            menuButton.setAttribute('aria-expanded', 'true');
            menuButton.setAttribute('aria-label', 'Close navigation menu');
            iconOpen.classList.add('hidden');
            iconClose.classList.remove('hidden');
        }

        function closeMenu() {
            mobileMenu.style.maxHeight = '0px';
            mobileMenu.classList.add('opacity-0');
            menuButton.setAttribute('aria-expanded', 'false');
            menuButton.setAttribute('aria-label', 'Open navigation menu');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        }

        menuButton.addEventListener('click', function () {
            const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
            isOpen ? closeMenu() : openMenu();
        });

        mobileLinks.forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });

    });
</script>