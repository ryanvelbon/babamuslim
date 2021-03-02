document.querySelectorAll('.color-palette').forEach((palette) => {
    palette.addEventListener('click', (e) => {
    e.target.parentNode.querySelectorAll('li').forEach((li) => {
        li.classList.remove('selected');
    })

        if (e.target.tagName.toLowerCase() !== 'li') {
        return;
    }
    
        e.target.classList.add('selected');
    })
});