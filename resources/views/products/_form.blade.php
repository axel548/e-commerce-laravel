<div class="form-group mb-6">
    <label for="name" class="form-label inline-block mb-2 text-gray-700">Name</label>
    <span class="text-xs text-red-600"> @error('name')
            {{ $message }}
        @enderror </span>
    <input type="text"
        class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        id="name" name="name" placeholder="Name" value="{{ old('name', $product->name) }}">
</div>

<div class="grid grid-cols-2 gap-4">
    <div class="form-group mb-6">
        <label for="price" class="form-label inline-block mb-2 text-gray-700">Price</label>
        <span class="text-xs text-red-600"> @error('price')
                {{ $message }}
            @enderror </span>
        <input type="text"
            class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="price" name="price" aria-describedby="emailHelp123" placeholder="Price"
            value="{{ old('price', $product->price) }}">
    </div>
    <div class="form-group mb-6">
        <label for="weight" class="form-label inline-block mb-2 text-gray-700">Weight</label>
        <span class="text-xs text-red-600"> @error('weight')
                {{ $message }}
            @enderror </span>
        <input type="text"
            class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="weight" name="weight" aria-describedby="emailHelp124" placeholder="Weight"
            value="{{ old('weight', $product->weight) }}">
    </div>
</div>
<div class="form-group mb-6">
    <label for="image" class="form-label inline-block mb-2 text-gray-700">Image</label>
    <span class="text-xs text-red-600"> @error('image')
            {{ $message }}
        @enderror </span>
    <input type="url"
        class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        id="image" name="image" placeholder="Image url" value="{{ old('image', $product->image) }}">
</div>

<div class="form-group mb-6">
    <label for="category" class="form-label inline-block mb-2 text-gray-700">Category</label>
    <span class="text-xs text-red-600"> @error('category')
            {{ $message }}
        @enderror </span>
    <select
        class="select form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        id="category" name="category">
        <option>Select an option</option>
        <option value="2" @if($product->category == "Clothes") selected  @endif>Clothes</option>
        <option value="3" @if($product->category == "Electronics") selected  @endif>Electronics</option>
        <option value="4" @if($product->category == "Furniture") selected  @endif>Furniture</option>
        <option value="4" @if($product->category == "Shoes") selected  @endif>Shoes</option>
        <option value="4" @if($product->category == "Others") selected  @endif>Others</option>
    </select>
</div>
<div class="form-group mb-6">
    <label for="stock" class="form-label inline-block mb-2 text-gray-700">Stock</label>
    <span class="text-xs text-red-600"> @error('stock')
            {{ $message }}
        @enderror </span>
    <select
        class="select form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        id="stock" name="stock">
        <option> Select an option</option>
        <option value="1" @if($product->stock == "yes") selected  @endif>Yes</option>
        <option value="2" @if($product->stock == "no") selected  @endif>No</option>
    </select>
</div>

<div class="form-group mb-6">
    <label for="description" class="form-label inline-block mb-2 text-gray-700">Description</label>
    <span class="text-xs text-red-600"> @error('description')
            {{ $message }}
        @enderror </span>
    <textarea
        class="
      form-control
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
    "
        id="description" name="description" rows="3"
        placeholder="Description">{{ old('description', $product->description) }}</textarea>
</div>


<button type="submit"
    class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Create</button>


<a href=" {{ route('products.list') }} " class="text-indigo-600 flex felx-row mt-5">
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-alt-circle-left" class="w-4 h-4 m-1"
        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor"
            d="M8 256c0 137 111 248 248 248s248-111 248-248S393 8 256 8 8 119 8 256zm448 0c0 110.5-89.5 200-200 200S56 366.5 56 256 145.5 56 256 56s200 89.5 200 200zm-72-20v40c0 6.6-5.4 12-12 12H256v67c0 10.7-12.9 16-20.5 8.5l-99-99c-4.7-4.7-4.7-12.3 0-17l99-99c7.6-7.6 20.5-2.2 20.5 8.5v67h116c6.6 0 12 5.4 12 12z">
        </path>
    </svg> Volver
</a>
