document.addEventListener('DOMContentLoaded', (evt) => {
    const updateActionAndSubmit = (event) => {
        const elemForm = document.forms.mainNav;
        if (!(elemForm instanceof HTMLFormElement)) {
          return;
        }
  
        const elemType = document.getElementById('TYPE_SELECTION');
        if (!(elemType instanceof HTMLSelectElement)) {
          return;
        }
  
        const elemTexts = document.getElementById('TEXTS_SELECTION');
        if (!(elemTexts instanceof HTMLSelectElement)) {
          return;
        }

        elemForm.action = `${window.oom.siteurl}${elemType.value}/${elemTexts.value}`;
        elemForm.submit();
    }
    
    const elemType = document.getElementById('TYPE_SELECTION');
    if (elemType instanceof HTMLElement) {
        elemType.addEventListener('change', updateActionAndSubmit);
    }
    
    const elemTexts = document.getElementById('TEXTS_SELECTION');
    if (elemTexts instanceof HTMLElement) {
        elemTexts.addEventListener('change', updateActionAndSubmit);
    }

    const elemLabels = document.getElementById('LABELS_SELECTION');
    if (elemLabels instanceof HTMLElement) {
        elemLabels.addEventListener('change', updateActionAndSubmit);
    }

    const elemDate = document.getElementById('DATE_SELECTION');
    if (elemDate instanceof HTMLElement) {
        elemDate.addEventListener('change', updateActionAndSubmit);
    }

    const elemBible = document.getElementById('BIBLE_SELECTION');
    if (elemBible instanceof HTMLElement) {
        elemBible.addEventListener('change', updateActionAndSubmit);
    }
});