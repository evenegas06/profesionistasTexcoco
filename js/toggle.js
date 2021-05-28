const toggle = document.getElementById('toggle');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');

document.onclick = function(e) {
    if(e.target.id !== 'sidebar' && e.target.id !== 'toggle' )
    {
        toggle.classList.remove('active');
        sidebar.classList.remove('active');    
        overlay.classList.remove('active');
    }
}

toggle.onclick = function(){
    toggle.classList.toggle('active');
    sidebar.classList.toggle('active');
    overlay.classList.toggle('active');
}

