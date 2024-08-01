@extends('layout.mainlayout')
@section('main')  

<section class="bg-primary">
    <div class="grid max-w-screen-2xl py-0 mx-auto lg:gap-8 xl:gap-0 lg:py-0 lg:grid-cols-12">
        <div class="mr-12 place-self-center lg:col-span-7">
            <p class="max-w-2xl mb-1 font-medium text-white lg:mb-1 uppercase md:text-lg lg:text-xl ">Relive traveling with</p>
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight uppercase leading-none md:text-5xl xl:text-6xl text-white">HurryUp cabs!</h1>
            <p  class="inline-flex items-center justify-center  text-xl font-medium  text-white ">
                A Journey is an experience and HurryUp cabs believe in making it a <br> good one!
            </p>
            
        </div>
        <div class="hidden lg:-mt-72 lg:col-span-5 lg:flex ">
            <img src="about.webp" alt="car" class="h-4/5 mt-72  ">
        </div>                
    </div>
</section>
    @include('section.service')
    

@endsection