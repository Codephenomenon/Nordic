<!-- 21 & over verificationoOverlay -->
<div id="verificationOverlay" class="overlay">
    <div class="overlay-content">
        <h2>Age Verification</h2>
        <p>You must be 21 years or older to enter this site.</p>
        <button @click="enterSite">I am 21 or older</button>
        <button @click="leaveSite">I am under 21</button>
    </div>
</div>

<script type="text/javascript">
    const { createApp, onMounted } = Vue;

    const app = createApp({
        data() {
            return {};
        },
        methods: {
            enterSite()  {
                sessionStorage.setItem('is21', 'true');
                this.hideOverlay();
            },
            leaveSite()  {
                // Redirect to another site or page
                window.location.href = 'https://www.google.com';
            },
            hideOverlay()  {
                document.getElementById('verificationOverlay').classList.add('d-none');
            }
        },
        mounted() {
            if (sessionStorage.getItem('is21') === 'true') {
                this.hideOverlay();
            }
        }
    });

    app.mount('#verificationOverlay');
</script>