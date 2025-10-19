document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('dot-container');
    const dotCount = 150;

    for (let i = 0; i < dotCount; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dot.style.left = Math.random() * 100 + 'vw';
        const size = Math.random() * 4 + 2;
        dot.style.width = size + 'px';
        dot.style.height = size + 'px';
        const duration = Math.random() * 10 + 5;
        dot.style.animationDuration = duration + 's';
        dot.style.animationDelay = Math.random() * 10 + 's';
        const startY = Math.random() * 100;
        dot.style.transform = `translateY(${startY}vh)`;
        container.appendChild(dot);
    }
});
