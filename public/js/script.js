document.addEventListener('DOMContentLoaded', () => {
    
    const languageLabel = document.getElementById('language-label');

    languageLabel.addEventListener('click', () => {
        const lang = languageLabel.textContent;
        if (lang=="Español") {
            languageLabel.textContent = "English"
        }
        else{
            languageLabel.textContent = "Español"
        }
    });
});

window.onload = function() {
  const popup = document.getElementById("popup");
  const closeBtn = document.querySelector(".popup .close");

  popup.style.display = "flex";
  document.body.classList.add('popup-open');

  const close = () => { popup.style.display = "none"; document.body.classList.remove('popup-open'); };

  closeBtn.onclick = close;
  popup.addEventListener('click', (e) => { if (e.target === popup) close(); });
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') close(); });
};