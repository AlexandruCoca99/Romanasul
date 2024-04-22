document.addEventListener('DOMContentLoaded', function () {
    const leftSides = document.querySelectorAll('.left-side');
    const rightSides = document.querySelectorAll('.right-side');

    leftSides.forEach(side => {
        side.addEventListener('click', function() {
            alert('Ai apăsat pe partea stângă!');
        });
    });

    rightSides.forEach(side => {
        side.addEventListener('click', function() {
            alert('Ai apăsat pe partea dreaptă!');
        });
    });
});