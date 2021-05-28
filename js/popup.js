var openPopup = document.getElementById('openPopup'),
    overlayPopup = document.getElementById('overlayPopup'),
    popup = document.getElementById('popup'),
    closePopup = document.getElementById('closePopup');
    
openPopup.addEventListener('click', function(){
    overlayPopup.classList.add('active');
});

closePopup.addEventListener('click', function(){
    overlayPopup.classList.remove('active');
});



