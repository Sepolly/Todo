const rows = document.querySelectorAll('table tbody tr');
const searchInput = document.getElementById('search__input');

searchInput.addEventListener('input',()=>{
    const searchValue = searchInput.value.trim().toLowerCase();
    rows.forEach(row => {
        const title = row.querySelector('td:first-child').textContent.toLowerCase();
        
        if(title.includes(searchValue)){
            row.style.display = "table-row";
        }
        else{
            row.style.display = "none";
        }
    });

})
