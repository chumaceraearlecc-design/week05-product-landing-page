@extends('layouts.app')

@section('title', 'BFC Coffee Shop')

@section('content')

    <!-- Hero Section -->
    <x-hero />


    <!-- Features Section -->
    <section id="features" class="py-24 bg-[#fffaf5]">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c] font-semibold uppercase tracking-widest mb-3">
                    Why Choose BFC
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-[#2f211b] mb-4">
                    Made for Coffee Lovers
                </h2>

                <p class="text-gray-600">
                    Discover what makes every visit to
                    BFC Coffee Shop worth enjoying.
                </p>

            </div>


            <!-- Feature Cards -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <x-feature-card
                    icon="☕"
                    title="Freshly Brewed Coffee"
                    description="Enjoy freshly prepared coffee made for every order."
                />

                <x-feature-card
                    icon="🌱"
                    title="Quality Ingredients"
                    description="Carefully selected ingredients create flavorful drinks."
                />

                <x-feature-card
                    icon="🥐"
                    title="Delicious Pairings"
                    description="Enjoy snacks and treats that pair perfectly with your drink."
                />

                <x-feature-card
                    icon="🛋️"
                    title="Cozy Atmosphere"
                    description="A comfortable space for relaxing, studying, or catching up."
                />

                <x-feature-card
                    icon="✨"
                    title="Friendly Service"
                    description="Welcoming service helps make every visit enjoyable."
                />

                <x-feature-card
                    icon="💰"
                    title="Great Value"
                    description="Enjoy satisfying drinks and food at reasonable prices."
                />

            </div>

        </div>

    </section>


    <!-- Product Showcase Section -->
    <x-product-showcase />


    <!-- Pricing Section -->
    <section id="pricing" class="py-24 bg-[#fffaf5]">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c] font-semibold uppercase tracking-widest mb-3">
                    Pricing Plans
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-[#2f211b] mb-4">
                    Choose Your Perfect Plan
                </h2>

                <p class="text-gray-600">
                    Select a plan that fits your coffee needs
                    and enjoy the BFC Coffee Shop experience.
                </p>

            </div>


            <!-- Pricing Cards -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Basic Plan -->
                <x-pricing-card
                    name="Basic"
                    price="99"
                    :features="[
                        '1 Coffee per Day',
                        'Access to Wi-Fi',
                        'Friendly Service'
                    ]"
                />


                <!-- Standard Plan -->
                <x-pricing-card
                    name="Standard"
                    price="149"
                    :features="[
                        '2 Coffees per Day',
                        'Access to Wi-Fi',
                        'Delicious Snacks'
                    ]"
                    featured
                />


                <!-- Premium Plan -->
                <x-pricing-card
                    name="Premium"
                    price="199"
                    :features="[
                        'Unlimited Coffee',
                        'Access to Wi-Fi',
                        'Exclusive Offers'
                    ]"
                />

            </div>

        </div>

    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c] font-semibold uppercase tracking-widest mb-3">
                    Testimonials
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-[#2f211b] mb-4">
                    What Our Customers Say
                </h2>

                <p class="text-gray-600">
                    See what customers love about their
                    BFC Coffee Shop experience.
                </p>

            </div>


            <!-- Testimonial Cards -->
            <div class="grid md:grid-cols-3 gap-6">

                <!-- Customer 1 -->
                <x-testimonial-card
                    image="images/customer1.png"
                    name="Customer One"
                    position="Regular Customer"
                    review="I enjoy the relaxing atmosphere and the freshly prepared coffee."
                />


                <!-- Customer 2 -->
                <x-testimonial-card
                    image="images/customer2.png"
                    name="Customer Two"
                    position="Coffee Lover"
                    review="A comfortable place to enjoy coffee, snacks, and time with friends."
                />


                <!-- Customer 3 -->
                <x-testimonial-card
                    image="images/customer3.png"
                    name="Customer Three"
                    position="Regular Customer"
                    review="The friendly service and enjoyable coffee experience keep me coming back."
                />

            </div>

        </div>

    </section>


    <!-- Call to Action Section -->
    <section class="py-24 bg-[#2f211b] text-white">

        <div class="max-w-4xl mx-auto px-6 text-center">

            <p class="text-[#d6b98c] font-semibold uppercase tracking-widest mb-3">
                Ready for Your Next Coffee?
            </p>

            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                Make Every Coffee Moment Better with BFC
            </h2>

            <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10">
                Discover your favorite drinks, enjoy a relaxing
                coffee experience, and see what BFC Coffee Shop
                has to offer.
            </p>


            <!-- CTA Buttons -->
            <div class="flex flex-wrap justify-center gap-4">

                <x-button
                    href="#contact"
                    variant="light"
                >
                    Register
                </x-button>


                <x-button
                    href="#contact"
                    variant="light"
                    class="bg-transparent border border-white
                           text-white hover:bg-white
                           hover:text-[#2f211b]"
                >
                    Contact Sales
                </x-button>


                <x-button
                    href="#pricing"
                    variant="light"
                    class="bg-transparent border border-[#d6b98c]
                           text-[#d6b98c] hover:bg-[#d6b98c]
                           hover:text-[#2f211b]"
                >
                    Start Free Trial
                </x-button>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <x-footer />

@endsection