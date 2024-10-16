<!-- drawer component -->
<div id="drawer-create-product-default" class="fixed top-0 left-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf <!-- Add CSRF token for security -->
        <div class="space-y-4">
            <!-- Product Name -->
            <div>
                <label for="pro_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                <input type="text" name="pro_name" id="pro_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
            </div>
            
            <!-- Brand Selection -->
            <div>
                <label for="brand_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                <select name="brand_id" id="brand_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                    <option selected="" disabled>Select Brand</option>
                    <option value="1">Adidas</option> <!-- Adjust these options based on your actual data -->
                    <option value="2">Puma</option>
                    <option value="3">Reebok</option>
                    <option value="4">Nike</option>
                    <option value="5">Vans</option>
                    <option value="6">New Balance</option>
                    <option value="7">Asics</option>
                    <option value="8">Crocs</option>
                </select>
            </div>
    
            <!-- Price -->
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="$2999" required>
            </div>
    
            <!-- Category Selection -->
            <div>
                <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                    <option selected="" disabled>Select Category</option>
                    <option value="1">Sneakers</option> <!-- Adjust these options based on your actual data -->
                    <option value="2">Boots</option>
                    <option value="3">Running</option>
                    <option value="4">Slides</option>
                    <option value="5">Sandals</option>
                    <option value="6">Hiking</option>
                </select>
            </div>
    
            <!-- Description -->
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Enter product description" required></textarea>
            </div>
    
            <!-- Submit Button -->
            <div class="flex justify-center w-full pb-4 space-x-4">
                <button type="submit" class=" w-full justify-center bg-green-500 hover:bg-red-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Add Product
                </button>
            </div>
        </div>
    </form>
</div>