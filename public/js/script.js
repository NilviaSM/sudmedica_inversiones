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