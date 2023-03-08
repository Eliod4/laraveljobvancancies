<x-home>
    <x-product class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24" >
    
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                           login into account
                        </h2>
                        
                    </header>

                    <form action='/users/authenicate' method="POST">
                          @csrf

                         
                       

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{ old('email') }}"
                                
                            />
                            @error('email')
                                <p class="text-red text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                            
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                                >password</label
                            >
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password"
                                {{-- value="{{ old('password') }}" --}}
                               
                            />
                            @error('password')
                            <p class="text-red text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                        
                        </div>


                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                               login
                            </button>
                        </div>

                        <div class="mt-8">
                            <p>
                            You  dont have an account?
                                <a href='/register' class="text-laravel"
                                    >Register</a
                                >
                            </p>
                        </div>
                    </form>
                </x-product>
</x-home>