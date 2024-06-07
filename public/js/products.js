const { createApp, ref, onMounted } = Vue;

const app = createApp({
    setup() {
    const buttons = ref([]);
    const beverageInfos = ref([]);

    onMounted(() => {
        buttons.value = Array.from(document.querySelectorAll('.accordion-item button'));
        beverageInfos.value = Array.from(document.querySelectorAll('.beverage-info'));

        buttons.value.forEach(button => {
        button.addEventListener('click', toggleAccordion);
        });
    });

    const toggleAccordion = (event) => {
        const button = event.currentTarget;

        // Remove 'active' class from all beverageInfos
        beverageInfos.value.forEach(info => info.classList.remove('active'));

        const targetId = button.id.replace('-btn', '-info');
        const targetInfo = document.getElementById(targetId);
        if (targetInfo) {
        targetInfo.classList.add('active');
        }

        // Remove 'active' class from all buttons
        buttons.value.forEach(btn => btn.classList.remove('active'));
        
        button.classList.add('active');
    };

    return {
        buttons,
        beverageInfos
    };
    }
});

app.mount('#products');