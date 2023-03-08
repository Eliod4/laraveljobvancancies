<x-home>
    <x-product class="p-10">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage jobs to be posted
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($product->isEmpty())
                @foreach($product as $item)
                    
               
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a href='/onepost/{{ $item->id }}'>
                           {{ $item->title }}
                        </a>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href='/viewing/{{ $item->id }}/edit'
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <form action="/viewing/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                      <button class="flex text-red-500 ">
                          <i class="fa-solid fa-trash">
                                DELETE
                          </i>
                      </button>
                      </form>
                    </td>
                </tr>
                @endforeach

                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-center">No products</td>
                </tr>
                @endunless


               
            </tbody>
        </table>
    </x-product>
</x-home>   