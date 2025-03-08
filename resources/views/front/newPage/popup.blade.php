@if ($popups->count() > 0)
    <div id="popupModal" class="popup-modal">
        <div class="popup-content">
            <span class="popup-close">&times;</span>
            @foreach ($popups as $popup)
                <img src="{{ asset($popup->image) }}" alt="Popup Image" style="max-width: 100%; height: auto;"
                     class="popup-image {{ $loop->first ? 'active' : 'hidden' }}"
                     data-index="{{ $loop->index }}"
                     data-mobile-image="{{ asset($popup->mobile_image) }}">
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popupModal = document.getElementById('popupModal');
            const popupImages = document.querySelectorAll('.popup-image');
            const closeButton = document.querySelector('.popup-close');
            let currentIndex = 0;

            // Detect if the user is on a mobile device
            const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

            // Update image sources for mobile view
            if (isMobile) {
                popupImages.forEach(function(image) {
                    const mobileImage = image.getAttribute('data-mobile-image');
                    if (mobileImage) {
                        image.src = mobileImage;
                    }
                });
            }

            // Prevent scrolling of the background content when popup is open
            document.body.style.overflow = 'hidden';

            // Show the modal when page loads
            popupModal.style.display = 'block';

            // Handle closing the current popup
            closeButton.addEventListener('click', function() {
                // Hide current popup
                popupImages[currentIndex].classList.add('hidden');
                popupImages[currentIndex].classList.remove('active');

                // Move to next popup or close modal if no more popups
                currentIndex++;
                if (currentIndex < popupImages.length) {
                    // Show next popup
                    popupImages[currentIndex].classList.remove('hidden');
                    popupImages[currentIndex].classList.add('active');
                } else {
                    // No more popups, close the modal
                    popupModal.style.display = 'none';
                    // Re-enable scrolling when all popups are closed
                    document.body.style.overflow = '';
                }
            });

            // Optional: Close modal when clicking outside of popup-content
            window.addEventListener('click', function(event) {
                if (event.target == popupModal) {
                    closeButton.click();
                }
            });
        });
    </script>

    <style>
        .popup-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            position: fixed;
            background-color: #fefefe;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 5px;
            max-width: 800px;
            width: 90%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .popup-close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 5px;
        }

        .popup-close:hover {
            color: black;
        }

        .popup-image {
            display: block;
            margin: 0 auto;
            max-height: 80vh;
        }

        .hidden {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
@endif
