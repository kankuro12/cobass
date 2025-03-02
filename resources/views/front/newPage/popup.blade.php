<style>
    /* Popup Styles */
    .popup-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: flex-start; /* Align to the top */
        padding-top: 20px; /* Add space from top */
        transition: opacity 0.5s ease; /* Smooth transition for fading */
    }

    .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        position: relative;
        max-width: 600px; /* Optional: Set max width for the popup */
        margin: 0 auto;
    }

    .popup-close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 25px;
        color: #000;
        cursor: pointer;
        transition: transform 0.3s ease; /* Smooth transition on hover */
    }

    .popup-close:hover {
        transform: scale(1.2); /* Hover effect: enlarge close button */
    }
</style>
@if($popup)
    <div id="popupModal" class="popup-modal">
        <div class="popup-content">
            <span class="popup-close">&times;</span>
            <img src="{{ asset($popup->image) }}" alt="Popup Image" style="max-width: 100%; height: auto;">
        </div>
    </div>
@endif

<script>
    // Show the popup when the page loads, if active
    document.addEventListener('DOMContentLoaded', function() {
        @if($popup)
            const popupModal = document.getElementById('popupModal');
            popupModal.style.display = 'flex'; // Show the popup

            // Fade-in effect with smooth transition
            setTimeout(() => {
                popupModal.style.opacity = 1;
            }, 100);
        @endif

        // Close the popup when the close button is clicked
        const closeBtn = document.querySelector('.popup-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                const popupModal = document.getElementById('popupModal');
                // Add smooth fade-out transition before hiding
                popupModal.style.opacity = 0;
                setTimeout(() => {
                    popupModal.style.display = 'none';
                }, 500); // Match this time with the fade-out duration
            });
        }

        // Close the popup if the user clicks outside the content
        window.onclick = function(event) {
            const popupModal = document.getElementById('popupModal');
            if (event.target === popupModal) {
                popupModal.style.opacity = 0;
                setTimeout(() => {
                    popupModal.style.display = 'none';
                }, 500); // Match this time with the fade-out duration
            }
        };
    });
</script>
