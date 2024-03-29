<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form action="/register" method="post">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="text"
                        name="name"
                        id="name"
                        required    
                    >
                </div>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="text"
                        name="username"
                        id="username"
                        required    
                    >
                </div>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="email"
                        name="email"
                        id="email"
                        required    
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="password"
                        name="password"
                        id="password"
                        required    
                    >
                </div>
                
    

            </form>


        </main>
    </section>
</x-layout>