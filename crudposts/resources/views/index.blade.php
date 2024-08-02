@extends('layout.mainlayout')
@section('main')  
<section class="bg-primary">
    <div class="flex flex-col lg:flex-row max-w-screen-xl h-[700px] md:h-[450px] mx-auto ">
      <div class="flex flex-col justify-center p-4 md:p-0  lg:pr-8 pt-20   md:-mt-28">
        <p class="max-w-2xl mb-0  text-lg tracking-widest font-medium text-white uppercase md:text-lg lg:text-xl">
          Relive traveling with
        </p>
        <h1 class="max-w-2xl mb-4 text-6xl font-bold tracking-tight uppercase leading-none text-white md:text-5xl xl:text-6xl">
          {{$data[0]->website_main_heading}}
        </h1>
        <p class="max-w-2xl text-xl font-medium text-white">
          {{$data[0]->website_main_heading_descri}}</p>
      </div>
      <div class="flex-grow justify-center lg:justify-end lg:mt-0 p-4 md:p-0 ">
        <img src="about.webp" alt="car" class="h-full md:ml-28 aspect-video lg:h-5/6 mt-20 lg:mt-20">
      </div>
    </div> 
  </section>
  
    @include('section.service', ['data' => $data])
    

@endsection