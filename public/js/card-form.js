const obj = {
    createNew: document.getElementById('create_new'),
    existingCard: document.getElementById('card_id'),
    baseInfo: document.getElementById('base_info'),
    manaCost: document.getElementById('mana_cost'),
    cmc: document.getElementById('cmc'),
    useExisting: document.getElementById('use_existing'),
};

obj.createNew.addEventListener('click', function() {
    let action = this.dataset.action;
    if (action == 'create_new') {
        obj.baseInfo.classList.remove('hidden');
        obj.baseInfo.disabled = false;
        obj.existingCard.disabled = true;
        this.textContent = 'Usa esistente';
        this.dataset.action = 'use_existing';
        obj.useExisting.value = 'false';
    } else {
        obj.baseInfo.classList.add('hidden');
        obj.baseInfo.disabled = true;
        obj.existingCard.disabled = false;
        this.textContent = 'Crea nuova';
        this.dataset.action = 'create_new';
        obj.useExisting.value = 'true';
    }
});

obj.manaCost.addEventListener('input', function() {
    const cmc = calculateCMC(this.value);
    obj.cmc.value = cmc;
});

function calculateCMC(manaCost) {
    let cmc = 0;
    const regex = /\{([0-9]+|[WUBRG]|[WUBRG]\/[WUBRG])\}/g;
    let match;

    while ((match = regex.exec(manaCost)) !== null) {
        const symbol = match[1];
        if (!isNaN(symbol)) {
            cmc += parseInt(symbol, 10);
        } else {
            cmc += 1; // Each colored mana symbol and hybrid mana symbol counts as 1
        }
    }

    return cmc;
}