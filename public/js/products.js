const { createApp, onMounted } = Vue;

const app = Vue.createApp({
    data() {
        return {
            buttons: [],
            beverageInfos: []
        };
    },
    methods: {
        toggleAccordion(event) {
            const button = event.currentTarget;

            // Remove 'active' class from all beverageInfos
            this.beverageInfos.forEach(info => info.classList.remove('active'));

            const targetId = button.id.replace('-btn', '-info');
            const targetInfo = document.getElementById(targetId);
            if (targetInfo) {
                targetInfo.classList.add('active');
            }

            // Remove 'active' class from all buttons
            this.buttons.forEach(btn => btn.classList.remove('active'));

            button.classList.add('active');
        }
    },
    mounted() {
        this.buttons = Array.from(document.querySelectorAll('.accordion-item button'));
        this.beverageInfos = Array.from(document.querySelectorAll('.beverage-info'));

        this.buttons.forEach(button => {
            button.addEventListener('click', this.toggleAccordion);
        });
    }
});
app.mount('#products');