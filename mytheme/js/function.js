// ========================================
// ハンバーガーメニュー
// ========================================
const ham = document.querySelector('#js-hamburger');
const nav = document.querySelector('#js-nav');

ham.addEventListener('click', function () {

  ham.classList.toggle('is-active');
  nav.classList.toggle('is-active');

});

// ========================================
// モーダル
// ========================================
const modal = document.querySelector('#js-modal');
const modalImage = document.querySelector('#js-modal-image');
const modalClose = document.querySelector('#js-modal-close');
const modalOverlay = document.querySelector('#js-modal-overlay');
const modalImages = document.querySelectorAll('.js-modal-image');

if (modal && modalImage) {
    let isDragging = false;
    let isDragged = false;
    let startX = 0;
    let startY = 0;
    let translateX = 0;
    let translateY = 0;

    modalImages.forEach((image) => {
        image.addEventListener('click', () => {
            modalImage.src = image.dataset.modalImage;
            modalImage.alt = image.alt;
            resetZoom();
            modal.classList.add('is-active');
            document.body.style.overflow = 'hidden';
        });
    });

    modalImage.addEventListener('click', () => {
        if (isDragged) {
            isDragged = false;
            return;
        }
        if (!modalImage.classList.contains('zoom')) {
            modalImage.classList.add('zoom');
            translateX = 0;
            translateY = 0;
            updateTransform();
        } else {
            resetZoom();
        }
    });

    modalImage.addEventListener('pointerdown', (e) => {
        if (!modalImage.classList.contains('zoom')) {
            return;
        }
        isDragging = true;
        isDragged = false;
        startX = e.clientX - translateX;
        startY = e.clientY - translateY;
        modalImage.classList.add('dragging');
        modalImage.setPointerCapture(e.pointerId);
        e.preventDefault();
    });

    modalImage.addEventListener('pointermove', (e) => {
        if (!isDragging) {
            return;
        }
        const newX = e.clientX - startX;
        const newY = e.clientY - startY;
        if (
            Math.abs(newX - translateX) > 3 ||
            Math.abs(newY - translateY) > 3
        ) {
            isDragged = true;
        }
        translateX = newX;
        translateY = newY;
        updateTransform();
    });

    modalImage.addEventListener('pointerup', (e) => {
        if (!isDragging) {
            return;
        }
        isDragging = false;
        modalImage.classList.remove('dragging');
        modalImage.releasePointerCapture(e.pointerId);
    });

    modalImage.addEventListener('pointercancel', () => {
        isDragging = false;
        modalImage.classList.remove('dragging');
    });

    modalClose?.addEventListener('click', closeModal);
    modalOverlay?.addEventListener('click', closeModal);

    function getZoomScale() {
        return window.innerWidth <= 767 ? 2.5 : 5;
    }

    function updateTransform() {
        const zoomScale = getZoomScale();
        modalImage.style.transform = `translate(${translateX}px, ${translateY}px) scale(${zoomScale})`;
    }

    function resetZoom() {
        isDragging = false;
        isDragged = false;
        modalImage.classList.remove('zoom', 'dragging');
        translateX = 0;
        translateY = 0;
        modalImage.style.transform = 'translate(0, 0) scale(1)';
    }

    function closeModal() {
        modal.classList.remove('is-active');
        resetZoom();
        document.body.style.overflow = '';
    }
}