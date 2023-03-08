<x-home>
@include('partials.header')
@include('partials.form')


<div
   class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

   @unless(count($product)==0)
    
   @foreach ($product as $item) 

   <x-item-card :item="$item"/>

   @endforeach
   @else
   <p>no products</p>
    @endunless
  </div>
  <div class="mt-6 p-4">
    {{ $product->links() }}
</div>
</x-home>