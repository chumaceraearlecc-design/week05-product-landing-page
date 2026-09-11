@extends('layouts.app')

@section('title', 'BFC Coffee Shop')

@section('content')

    <x-hero />

    <!-- Features Section -->
    <section id="features" class="py-24 bg-[#fffaf5]">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <p class="text-[#8b5e3c] font-semibold uppercase
                          tracking-widest mb-3">
                    Why Choose BFC
                </p>

                <h2 class="text-3xl md:text-4xl font-bold
                           text-[#2f211b] mb-4">
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

    <!-- Product Showcase -->
    <x-product-showcase />

@endsection