document.querySelectorAll('.color-palette').forEach((palette) => {
    palette.addEventListener('click', (e) => {
    e.target.parentNode.querySelectorAll('li').forEach((li) => {
        li.classList.remove('selected');
    })

        if (e.target.tagName.toLowerCase() !== 'li') {
        return;
    }
    
        e.target.classList.add('selected');

        // set the hidden input to the hex value stored in the <li> element
        palette.previousElementSibling.value = e.target.getAttribute('data-hex-value');
    })
});