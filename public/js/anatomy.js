document.addEventListener('DOMContentLoaded', function () {
    const listItems = document.querySelectorAll('.list-item');
    const arrowRight = document.getElementById('arrow-right');
    const arrowLeft = document.getElementById('arrow-left');
    const highlightArea = document.getElementById('highlight-area');
    const description = document.getElementById('description');

    // Muat explanations dari file JSON
    let explanations = {};
    fetch('/data/explanations.json')
        .then(response => response.json())
        .then(data => {
            explanations = data;
        })
        .catch(error => console.error('Gagal memuat explanations:', error));

    listItems.forEach(item => {
        item.addEventListener('click', () => {
            const position = item.getAttribute('data-position');
            const size = item.getAttribute('data-size');

            // Validasi apakah 'data-position' ada
            if (position) {
                const [topValue, leftValue] = position.split(';').map(val => val.trim());
                const topPx = topValue.split(':')[1].trim();
                const leftPx = parseInt(leftValue.split(':')[1], 10);

                // Sembunyikan semua panah dan area khusus saat item lain diklik
                arrowRight.style.display = 'none';
                arrowLeft.style.display = 'none';
                highlightArea.style.display = 'none';

                // Periksa dan gunakan nilai data-size jika ada
                if (size) {
                    const [widthValue, heightValue] = size.split(';').map(val => val.trim());
                    const widthPx = widthValue.split(':')[1].trim();
                    const heightPx = heightValue.split(':')[1].trim();

                    if (item.id === 'area') {
                        // Tampilkan highlight area untuk elemen dengan id khusus
                        highlightArea.style.top = topPx;
                        highlightArea.style.left = leftPx + 'px';
                        highlightArea.style.width = widthPx;
                        highlightArea.style.height = heightPx;
                        highlightArea.style.display = 'block';
                    }
                } else {
                    // Logika untuk menampilkan panah horizontal
                    if (leftPx > 83) {
                        arrowLeft.style.top = topPx;
                        arrowLeft.style.left = leftValue.split(':')[1].trim();
                        arrowLeft.style.display = 'block';
                    } else {
                        arrowRight.style.top = topPx;
                        arrowRight.style.left = leftValue.split(':')[1].trim();
                        arrowRight.style.display = 'block';
                    }
                }

                // Tampilkan penjelasan dari explanations
                const partName = item.textContent.trim();
                description.querySelector('p').textContent = explanations[partName] || "Penjelasan tidak tersedia.";
            }
        });
    });
});
