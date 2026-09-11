@extends('layouts.app')

@section('title', 'BFC Coffee Shop')

@section('content')


    <!-- =====================================================
         HERO SECTION
    ====================================================== -->
    <x-hero />


    <!-- =====================================================
         FEATURES SECTION
    ====================================================== -->
    <section id="features" class="py-24 bg-[#fffaf5]" aria-labelledby="features-heading">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c]
                          font-semibold
                          uppercase
                          tracking-widest
                          mb-3">
                    Why Choose BFC
                </p>

                <h2 id="features-heading" class="font-serif text-3xl md:text-4xl
                           font-bold
                           text-[#2f211b]
                           mb-4">
                    Made for Coffee Lovers
                </h2>

                <p class="text-gray-600">
                    Discover what makes every visit to
                    BFC Coffee Shop worth enjoying.
                </p>

            </div>


            <!-- Feature Cards -->
            <ul class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <li>
                    <x-feature-card
                        icon="coffee"
                        title="Freshly Brewed Coffee"
                        description="Enjoy freshly prepared coffee made for every order."
                    />
                </li>

                <li>
                    <x-feature-card
                        icon="leaf"
                        title="Quality Ingredients"
                        description="Carefully selected ingredients create flavorful drinks."
                    />
                </li>

                <li>
                    <x-feature-card
                        icon="pairing"
                        title="Delicious Pairings"
                        description="Enjoy snacks and treats that pair perfectly with your drink."
                    />
                </li>

                <li>
                    <x-feature-card
                        icon="cozy"
                        title="Cozy Atmosphere"
                        description="A comfortable space for relaxing, studying, or catching up."
                    />
                </li>

                <li>
                    <x-feature-card
                        icon="friendly"
                        title="Friendly Service"
                        description="Welcoming service helps make every visit enjoyable."
                    />
                </li>

                <li>
                    <x-feature-card
                        icon="value"
                        title="Great Value"
                        description="Enjoy satisfying drinks and food at reasonable prices."
                    />
                </li>

            </ul>

        </div>

    </section>


    <!-- =====================================================
         PRODUCT SHOWCASE
    ====================================================== -->
    <x-product-showcase />


    <!-- =====================================================
         PRICING / COFFEE PACKAGES
    ====================================================== -->
    <section id="pricing" class="py-24 bg-[#fffaf5]" aria-labelledby="pricing-heading">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c]
                          font-semibold
                          uppercase
                          tracking-widest
                          mb-3">
                    Coffee Packages
                </p>

                <h2 id="pricing-heading" class="font-serif text-3xl md:text-4xl
                           font-bold
                           text-[#2f211b]
                           mb-4">
                    Choose Your Coffee Experience
                </h2>

                <p class="text-gray-600">
                    Explore sample coffee packages designed for
                    different coffee moments and preferences.
                </p>

            </div>


            <!-- Pricing Cards -->
            <ul class="grid md:grid-cols-3 gap-8">

                <!-- Solo Coffee -->
                <li>
                    <x-pricing-card
                        name="Solo Coffee"
                        price="119"
                        :features="[
                            '1 Featured Coffee Drink',
                            'Choice of Hot or Iced',
                            'Perfect for Individual Orders'
                        ]"
                    />
                </li>


                <!-- Coffee + Snack -->
                <li>
                    <x-pricing-card
                        name="Coffee + Snack"
                        price="169"
                        :features="[
                            '1 Featured Coffee Drink',
                            '1 Selected Snack',
                            'Great for Coffee Breaks'
                        ]"
                        featured
                    />
                </li>


                <!-- BFC Bundle -->
                <li>
                    <x-pricing-card
                        name="BFC Bundle"
                        price="229"
                        :features="[
                            '2 Featured Drinks',
                            '1 Selected Snack',
                            'Perfect for Sharing'
                        ]"
                    />
                </li>

            </ul>


            <!-- Pricing Note -->
            <p class="text-center text-sm text-gray-500 mt-8">
                Sample pricing created for this academic landing page project.
            </p>

        </div>

    </section>


    <!-- =====================================================
         TESTIMONIALS / CUSTOMER REVIEWS
    ====================================================== -->
    <section id="testimonials" class="py-24 bg-white" aria-labelledby="testimonials-heading">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c]
                          font-semibold
                          uppercase
                          tracking-widest
                          mb-3">
                    Customer Reviews
                </p>

                <h2 id="testimonials-heading" class="font-serif text-3xl md:text-4xl
                           font-bold
                           text-[#2f211b]
                           mb-4">
                    What Customers Say About BFC
                </h2>

                <p class="text-gray-600">
                    Real customer feedback about their
                    BFC Coffee Shop experience.
                </p>

            </div>


            <!-- Reviews -->
            <ul class="grid md:grid-cols-3 gap-8">

                <!-- Emmanuel -->
                <li>
                    <x-testimonial-card
                        image="images/customer1.png"
                        name="Emmanuel Canlas"
                        position="Local Guide"
                        review="On our way back to Manila we came across this coffee shop in an obscure gas station by the side of the road. They have the beat iced coffee! Auro Iced coffee!!"
                    />
                </li>


                <!-- Jorinda -->
                <li>
                    <x-testimonial-card
                        image="images/customer3.png"
                        name="Jorinda Guiron"
                        position="Local Guide"
                        review="Great taste😍...the coffee and the foods luv it 💕. nice ambience, a cozy place 👌"
                    />
                </li>


                <!-- Ann Katherine -->
                <li>
                    <x-testimonial-card
                        image="images/customer2.png"
                        name="Ann Katherine Reyes"
                        position="Customer"
                        review="BFC has a warm and inviting ambiance, Best coffee we've had🥰"
                    />
                </li>

            </ul>


            <!-- Source Note -->
            <p class="text-center text-sm text-gray-500 mt-8">
                Reviews adapted from publicly posted customer feedback.
            </p>

        </div>

    </section>


    <!-- =====================================================
         CALL TO ACTION
    ====================================================== -->
    <section class="relative py-24
                    bg-[#2f211b]
                    text-white
                    overflow-hidden"
              aria-labelledby="cta-heading">


        <!-- Background Decoration -->
        <div aria-hidden="true" class="absolute -top-24 -left-24
                    w-72 h-72
                    bg-[#8b5e3c]/30
                    rounded-full
                    blur-3xl">
        </div>


        <div aria-hidden="true" class="absolute -bottom-32 -right-24
                    w-96 h-96
                    bg-[#d6b98c]/20
                    rounded-full
                    blur-3xl">
        </div>


        <!-- CTA Content -->
        <div class="relative z-10
                    max-w-4xl mx-auto
                    px-6 text-center">

            <p class="text-[#d6b98c]
                      font-semibold
                      uppercase
                      tracking-widest
                      mb-4">
                Ready for Your Next Coffee?
            </p>


            <h2 id="cta-heading" class="font-serif text-3xl sm:text-4xl md:text-5xl
                       font-bold
                       leading-tight
                       mb-6">
                Discover Your Next Favorite Drink at BFC
            </h2>


            <p class="text-white/70
                      text-lg
                      leading-relaxed
                      max-w-2xl
                      mx-auto
                      mb-10">
                Explore BFC Coffee Shop's featured drinks,
                enjoy a relaxing coffee experience, and find
                the perfect drink for your next coffee moment.
            </p>


            <!-- CTA Buttons: primary action, secondary action, tertiary link -->
            <div class="flex flex-col sm:flex-row
                        justify-center
                        items-center
                        gap-5">


                <!-- Primary: Explore Drinks -->
                <a
                    href="#showcase"
                    class="w-full sm:w-auto
                           px-8 py-3.5
                           bg-[#d6b98c]
                           text-[#2f211b]
                           rounded-xl
                           font-semibold
                           shadow-[0_12px_28px_-12px_rgba(214,185,140,0.5)]
                           hover:bg-white
                           hover:-translate-y-0.5
                           transition duration-300"
                >
                    Explore Our Drinks
                </a>


                <!-- Secondary: Visit BFC (links out to Google Maps — replace with your actual location URL) -->
                <a
                    href="https://maps.google.com/?q=BFC+Coffee+Shop"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-full sm:w-auto
                           px-8 py-3.5
                           border border-white/40
                           text-white
                           rounded-xl
                           font-semibold
                           hover:border-white
                           hover:bg-white/5
                           hover:-translate-y-0.5
                           transition duration-300"
                >
                    Visit BFC
                </a>


                <!-- Tertiary: Contact, styled as a plain link so it doesn't compete with the two buttons above.
                     NOTE: no section with id="contact" exists on this page yet — add one, or point this
                     at your actual contact page/route, or the link will go nowhere. -->
                <a
                    href="#contact"
                    class="text-[#d6b98c]
                           font-semibold
                           underline underline-offset-4
                           decoration-[#d6b98c]/40
                           hover:decoration-[#d6b98c]
                           transition duration-300"
                >
                    Contact Us
                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FOOTER
    ====================================================== -->
    <x-footer />


@endsection