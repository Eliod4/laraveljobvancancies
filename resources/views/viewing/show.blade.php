<x-home>
    
@include('partials.form')


<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4 "> 
<x-product class="bg-black p-10">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{ $product1->logo ? asset('storage/'.$product1->logo) : asset('/images/today10.jpeg')}}"
            {{-- src="{{ asset('images/download.jpg') }}" --}}
            alt=""
        />

        <h3 class="text-2xl mb-2">{{ $product1->title }}</h3>
        <div class="text-xl font-bold mb-4">{{ $product1->company }}</div>
        <x-tag :tagss="$product1->tags" />
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i>{{ $product1->location }}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg space-y-6">
                <p>
                  {{ $product1->description }}.
                </p>

                <a
                    href="mailto:{{$product1->email }}"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >

                <a href="{{ $product1->website }}" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</x-product>
</div>

</x-home>