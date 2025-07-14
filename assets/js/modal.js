document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('bookTableModal');
    const bookTableBtn = document.getElementById('bookTableBtn');
    const closeBtn = document.getElementsByClassName('close')[0];

    // Open modal when "Grab a Table" button is clicked
    bookTableBtn.addEventListener('click', function(e) {
        e.preventDefault();
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    });

    // Close modal when X is clicked
    closeBtn.addEventListener('click', function() {
        closeModal();
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
        }
    });

    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore background scrolling
    }
});