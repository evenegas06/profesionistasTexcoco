var openPopup = document.getElementById('openPopup'),
    overlayPopup = document.getElementById('overlayPopup'),
    popup = document.getElementById('popup'),
    closePopup = document.getElementById('closePopup'),

    penPopup1 = document.getElementById('openPopup1'),
    overlayPopup1 = document.getElementById('overlayPopup1'),
    popup1 = document.getElementById('popup1'),
    closePopup1 = document.getElementById('closePopup1');
    
openPopup.addEventListener('click', function(){
    overlayPopup.classList.add('active');
});

closePopup.addEventListener('click', function(){
    overlayPopup.classList.remove('active');
});


openPopup1.addEventListener('click', function(){
    overlayPopup1.classList.add('active');
});

closePopup1.addEventListener('click', function(){
    overlayPopup1.classList.remove('active');
});