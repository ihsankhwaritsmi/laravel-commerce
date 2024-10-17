document.addEventListener('DOMContentLoaded', function () {
    const updateButtons = document.querySelectorAll('[data-modal-toggle="updateProductModal"]');
    const productIdInput = document.getElementById('modal_product_id');
    const productDeleteId = document.getElementById('modal_delete_id');
    const productNameInput = document.getElementById('modal_product_name');
    const productBrandInput = document.getElementById('modal_product_brand');
    const productPriceInput = document.getElementById('modal_product_price');
    const productCategoryInput = document.getElementById('modal_product_category');
    const productDescriptionInput = document.getElementById('modal_product_description');

    updateButtons.forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.getAttribute('data-product-id');
            const productName = this.getAttribute('data-product-name');
            const productBrand = this.getAttribute('data-product-brand');
            const productPrice = this.getAttribute('data-product-price');
            const productCategory = this.getAttribute('data-product-category');
            const productDescription = this.getAttribute('data-product-description');

            // Isi modal dengan data produk
            productIdInput.value = productId;
            productDeleteId.value = productId;
            productNameInput.value = productName;
            productBrandInput.value = productBrand;
            productPriceInput.value = productPrice;
            productCategoryInput.value = productCategory;
            productDescriptionInput.value = productDescription;
        });
    });
});