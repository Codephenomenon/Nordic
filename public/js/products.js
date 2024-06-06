document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.accordion-item button');
    const beverageInfos = document.querySelectorAll('.beverage-info');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            beverageInfos.forEach(info => info.classList.remove('active'));

            const targetId = button.id.replace('-btn', '-info');
            const targetInfo = document.getElementById(targetId);

            if (targetInfo) {
                targetInfo.classList.add('active');
            }

            buttons.forEach(btn => btn.classList.remove('active'));

            button.classList.add('active');
        });
    });
});