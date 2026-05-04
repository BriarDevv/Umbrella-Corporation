export function initFilters() {
    const root = document.querySelector('[data-filter-root]');
    if (!root) return;

    const buttonGroups = root.querySelectorAll('[data-filter-group]');
    const items = root.querySelectorAll('[data-filter-item]');

    const state = {};
    buttonGroups.forEach((group) => {
        state[group.dataset.filterGroup] = 'all';
    });

    const apply = () => {
        items.forEach((item) => {
            let visible = true;
            for (const [group, value] of Object.entries(state)) {
                if (value === 'all') continue;
                const itemValue = item.dataset[`filter${capitalize(group)}`];
                if (!itemValue) {
                    visible = false;
                    break;
                }
                const tokens = itemValue.split('|').map((s) => s.trim().toLowerCase());
                if (!tokens.includes(value.toLowerCase())) {
                    visible = false;
                    break;
                }
            }
            item.dataset.hidden = visible ? 'false' : 'true';
            item.style.display = visible ? '' : 'none';
        });
    };

    buttonGroups.forEach((group) => {
        const groupName = group.dataset.filterGroup;
        const buttons = group.querySelectorAll('[data-filter-value]');
        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                const value = button.dataset.filterValue;
                state[groupName] = value;
                buttons.forEach((b) => {
                    const active = b === button;
                    b.dataset.active = active ? 'true' : 'false';
                    b.setAttribute('aria-pressed', active ? 'true' : 'false');
                });
                apply();
            });
        });
    });
}

function capitalize(value) {
    return value.charAt(0).toUpperCase() + value.slice(1);
}
