<form action=" {{ route('cart.store') }} " method="POST">
    @csrf
    {{-- Data --}}
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">
    <input type="hidden" name="quantity" value="1">

    {{-- Attributes --}}
    <input type="hidden" name="image" value="{{ $product->image }}">
    <input type="hidden" name="sku" value="{{ $product->image }}">
    <input type="hidden" name="description" value="{{ $product->description }}">
    <input type="hidden" name="thumbnail" value="{{ $product->thumbnail }}">
    <input type="hidden" name="category" value="{{ $product->category }}">
    <input type="hidden" name="stock" value="{{ $product->stock }}">
    <input type="hidden" name="weight" value="{{ $product->weight }}">

    <button
        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-2"
        type="submit">Add to cart</button>
</form>
