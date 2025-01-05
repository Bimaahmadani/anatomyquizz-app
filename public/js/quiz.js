function selectOption(element, value) {
    // Hapus kelas 'selected' dari semua elemen sibling
    const siblings = element.parentElement.children;
    for (let sibling of siblings) {
        sibling.classList.remove('selected');
        
        // Tambahkan kembali class hover ke elemen sibling
        sibling.classList.add('hover:bg-neutral', 'hover:text-secondary');
    }

    // Tambahkan kelas 'selected' pada elemen yang dipilih
    element.classList.add('selected');
    
    // Hapus efek hover dari elemen yang dipilih
    element.classList.remove('hover:bg-neutral', 'hover:text-secondary');

    // Simpan nilai yang dipilih ke dalam input tersembunyi
    document.getElementById('selectedAnswer').value = value;
}
