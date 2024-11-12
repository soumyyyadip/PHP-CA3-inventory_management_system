// Display a confirmation dialog when deleting a product
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        if (!confirm("Are you sure you want to delete this product?")) {
            e.preventDefault();
        }
    });
});
