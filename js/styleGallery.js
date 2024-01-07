// Get all the gallery images
const galleryImages = document.querySelectorAll('.gallery-grid a');

// Add event listeners for mouseover and mouseout on each gallery image
galleryImages.forEach((image) => {
  image.addEventListener('mouseover', () => {
    // Gradually increase the size to 300%
    image.style.transition = 'transform 0.5s ease';
    image.style.transform = 'scale(3)';
    
    // Move the image to the top
    image.style.zIndex = '1000';
  });

  image.addEventListener('mouseout', () => {
    // Gradually return to the original size
    image.style.transition = 'transform 0.5s ease';
    image.style.transform = 'scale(1)';
    
    // Reset the z-index
    image.style.zIndex = '';
  });
});
