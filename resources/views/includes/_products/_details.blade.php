<section class="h-screen flex justify-center items-center">
    <div class="container mx-auto ">
        <div class="flex flex-col justify-center h-screen">
            @include('includes._backoffice._message_flash')
            <div
                class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
                <div class="w-full md:w-1/3 bg-white grid place-items-center">
                    <img src="{{ $product->image }}" alt="{{ $product->alt }}" class="rounded-xl" />
                </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
                    <h3 class="font-black text-gray-800 md:text-3xl text-xl">{{ $product->description_title }}</h3>
                    <p>
                        {{ $product->description }}
                    </p>
                    <div class="flex flex-col justify-between item-center">
                        @foreach($gameplays as $gameplay)
                            <img src="{{ $gameplay->image }}" alt="{{ $gameplay->alt }}" class="rounded-xl m-2">
                        @endforeach
                    </div>
                    <div class="flex justify-between item-center">
                        <a href="{{ route('accueil.index') }}">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <i class="fa-solid fa-arrow-left"></i> Retour à l'accueil
                            </button>
                        </a>
                        <a href="{{ route('catalogue.index') }}">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <i class="fa-solid fa-book"></i> Retour au catalogue
                            </button>
                        </a>
                        <a href="{{ route('cart.addToCart', ['id' => $product->id]) }}">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <i class="fa-solid fa-arrow-right"></i> Ajouter au panier
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
