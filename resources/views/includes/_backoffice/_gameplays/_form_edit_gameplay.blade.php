<div class="container mx-auto flex justify-center items-center">
    <form class="w-full" action="{{ route('gameplays.update', ['id' => $gameplay->id ]) }}" method="post">
        @csrf
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_name" class=" peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $gameplay->name }}</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="image" id="floating_image" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_image" class=" peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">@if(!empty($gameplay->image)) {{ $gameplay->image }} @else Image @endif</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="alt" id="floating_alt" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_alt" class=" peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">@if(!empty($gameplay->alt)) {{ $gameplay->alt }} @else Alt de l'image @endif </label>
        </div>
        <label for="product_id" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selection d'un produit</label>
        <select id="product_id" name="product_id" class=" mb-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" @if(empty($gameplay->product_id)) selected @endif>Choisir un produit</option>
            @foreach($products as $product)
                <option value="{{$product->id}}" @if(!empty($gameplay->product_id)) selected @endif>{{$product->name}}</option>
            @endforeach
        </select>

        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:green:bg-blue-700 dark:focus:ring-green-800"><i class="fa-solid fa-floppy-disk"></i> Sauvegarder les changements</button>
    </form>
</div>