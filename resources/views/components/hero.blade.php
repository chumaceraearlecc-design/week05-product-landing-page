<section
    id="home"
    class="relative min-h-[650px] md:min-h-[720px]
           bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: url('{{ asset('images/background.png') }}');"
>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-[#1f1713]/55"></div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6
                py-20 md:py-28
                grid md:grid-cols-2 gap-12 items-center
                min-h-[650px] md:min-h-[720px]">

        <!-- LEFT CONTENT -->
        <div class="max-w-2xl">

            <p class="text-[#d6b98c] font-semibold uppercase
                      tracking-widest mb-4">
                Welcome to BFC Coffee Shop
            </p>

            <h1 class="text-4xl sm:text-5xl md:text-6xl
                       font-bold text-white leading-tight mb-6">
                Freshly Brewed Coffee,
                Made for Every Moment.
            </h1>

            <p class="text-white/80 text-lg leading-relaxed
                      mb-8 max-w-xl">
                Enjoy quality coffee, relaxing vibes, and delicious drinks
                crafted to make every visit more enjoyable.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4">

                <a
                    href="#features"
                    class="px-6 py-3
                           bg-[#d6b98c]
                           text-[#2f211b]
                           rounded-xl
                           font-semibold
                           hover:bg-white
                           hover:-translate-y-1
                           transition duration-300"
                >
                    Explore Menu
                </a>

                <a
                    href="#contact"
                    class="px-6 py-3
                           border border-white
                           text-white
                           rounded-xl
                           font-semibold
                           hover:bg-white
                           hover:text-[#2f211b]
                           hover:-translate-y-1
                           transition duration-300"
                >
                    Visit Us
                </a>

            </div>

        </div>


        <!-- RIGHT PRODUCT SLIDER -->
        <div class="relative flex items-center justify-center
                    min-h-[430px] md:min-h-[500px]">

            <!-- Background Circle -->
            <div class="absolute
                        w-[300px] h-[300px]
                        sm:w-[340px] sm:h-[340px]
                        md:w-[400px] md:h-[400px]
                        bg-[#f7f1ea]/70
                        rounded-full
                        backdrop-blur-sm">
            </div>


            <!-- FIXED PRODUCT CONTAINER -->
            <div class="relative z-10
                        w-[230px] h-[330px]
                        sm:w-[260px] sm:h-[370px]
                        md:w-[290px] md:h-[410px]
                        lg:w-[310px] lg:h-[430px]
                        flex items-center justify-center">

                <img
                    id="hero-product-image"
                    src="{{ asset('images/americano.png') }}"
                    alt="Americano"
                    class="w-full h-full
                           object-contain
                           drop-shadow-2xl
                           opacity-100
                           transition-opacity
                           duration-700
                           ease-in-out"
                >

            </div>


            <!-- Featured Drink Card -->
            <div class="absolute
                        bottom-0
                        left-1/2
                        -translate-x-1/2
                        md:left-8
                        md:translate-x-0
                        bg-white/90
                        backdrop-blur-md
                        px-5 py-3
                        rounded-xl
                        shadow-xl
                        z-20">

                <p class="text-xs
                          text-[#8b5e3c]
                          font-semibold
                          uppercase
                          tracking-wider">
                    Featured Drink
                </p>

                <p
                    id="hero-product-name"
                    class="text-[#2f211b] font-bold"
                >
                    Americano
                </p>

            </div>

            <!-- Slider Dots -->
            <div class="absolute -bottom-10 left-1/2
                        -translate-x-1/2
                        flex items-center gap-2 z-20">

                <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white"></span>
                <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40"></span>
                <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40"></span>
                <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40"></span>
                <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40"></span>
                <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40"></span>

            </div>

        </div>

    </div>

</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const products = [
            {
                name: 'Americano',
                image: '{{ asset('images/americano.png') }}'
            },
            {
                name: 'Caramel',
                image: '{{ asset('images/caramel.png') }}'
            },
            {
                name: 'Dark Coffee',
                image: '{{ asset('images/dark.png') }}'
            },
            {
                name: 'Spanish Latte',
                image: '{{ asset('images/icespanishlatter.png') }}'
            },
            {
                name: 'Matcha Espresso',
                image: '{{ asset('images/matchaespresso-removebg-preview.png') }}'
            },
            {
                name: 'Vanilla Latte',
                image: '{{ asset('images/vanillalatte.png') }}'
            }
        ];

        const productImage =
            document.getElementById('hero-product-image');

        const productName =
            document.getElementById('hero-product-name');

        const dots =
            document.querySelectorAll('.hero-dot');

        let currentProduct = 0;


        function updateDots() {

            dots.forEach(function (dot, index) {

                if (index === currentProduct) {

                    dot.classList.remove('bg-white/40');
                    dot.classList.add('bg-white');

                } else {

                    dot.classList.remove('bg-white');
                    dot.classList.add('bg-white/40');

                }

            });

        }


        function changeProduct() {

            /*
            |--------------------------------------------------------------------------
            | FADE OUT
            |--------------------------------------------------------------------------
            */

            productImage.classList.remove('opacity-100');
            productImage.classList.add('opacity-0');


            setTimeout(function () {

                /*
                |--------------------------------------------------------------------------
                | NEXT PRODUCT
                |--------------------------------------------------------------------------
                */

                currentProduct++;

                if (currentProduct >= products.length) {
                    currentProduct = 0;
                }


                /*
                |--------------------------------------------------------------------------
                | CHANGE IMAGE + NAME
                |--------------------------------------------------------------------------
                */

                productImage.src =
                    products[currentProduct].image;

                productImage.alt =
                    products[currentProduct].name;

                productName.textContent =
                    products[currentProduct].name;


                /*
                |--------------------------------------------------------------------------
                | UPDATE DOTS
                |--------------------------------------------------------------------------
                */

                updateDots();


                /*
                |--------------------------------------------------------------------------
                | FADE IN
                |--------------------------------------------------------------------------
                */

                productImage.classList.remove('opacity-0');
                productImage.classList.add('opacity-100');

            }, 700);

        }


        /*
        |--------------------------------------------------------------------------
        | AUTO CHANGE EVERY 4 SECONDS
        |--------------------------------------------------------------------------
        */

        setInterval(changeProduct, 4000);

    });
</script>