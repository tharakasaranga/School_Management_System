document.addEventListener('DOMContentLoaded', (event) => {
    const images = [
        'img1.jpg',
        'img1.jpeg',
        'img4.jpeg',
        'img5.jpg'
    ];

    let currentIndex = 0;
    const imgElement = document.querySelector('.images .img');

    setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        imgElement.src = images[currentIndex];
    }, 5000); 
});
