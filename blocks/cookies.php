<link href="https://fonts.googleapis.com/css2?family=Exo:wght@800&family=Montserrat&display=swap" rel="stylesheet">


<div class="cookie-popup cookie-popup--short cookie-popup--dark">
    <div>
        Este site usa cookies, que são pequenos arquivos ou trechos de texto baixados para um aparelho quando o visitante acessa um site ou app. Acesse a nossa <a href="https://google.com">Política de Privacidade</a> para saber mais.
    </div>
    <div class="cookie-popup-actions">
        <button>OK</button>
    </div>

</div>


<style>
    /* PAGE STYLES */
    :root {
        font-size: 16px;
    }


    .cookie-popup {
        font-family: 'Montserrat', sans-serif;
    }

    .pin-title {
        position: fixed;
        top: 1.875rem;
        bottom: 1.875rem;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Exo', sans-serif;
        font-weight: 800;
        font-size: 800%;
        letter-spacing: 0.0625rem;
        color: #f3f3f3;
        user-select: none;
        z-index: -1;
        text-align: center;
    }


    /* COOKIE POPUP STYLES */

    .cookie-popup {
        font-size: 0.875rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        position: fixed;
        bottom: -6.25rem;
        left: 1.25rem;
        right: 1.25rem;
        padding: 0.625rem 0.9375rem;
        box-shadow: 0 0 0.625rem 0 rgba(0, 0, 0, .15);
        line-height: 150%;
        transition: opacity .5s;
        opacity: 0;
        border-radius: 10px;
    }

    .cookie-popup--short {
        right: none;
        width: 21.875rem;
    }

    .cookie-popup--dark {
        background: #000;
        color: #fff;
    }

    .cookie-popup--not-accepted {
        opacity: 1;
        animation: cookie-popup-in .5s ease forwards;
    }

    .cookie-popup--accepted {
        opacity: 0;
    }

    .cookie-popup a {
        color: skyblue;
    }

    .cookie-popup a:visited {
        color: skyblue;
        text-decoration: none;
    }

    .cookie-popup-actions {
        flex: 1;
        text-align: right;
    }

    .cookie-popup-actions button {
        color: #03fc45;
        border: none;
        background: none;
        font-family: inherit;
        font-style: inherit;
        font-size: inherit;
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 0.75rem;
        padding: 0;
        cursor: pointer;
    }

    .cookie-popup-actions button:hover {
        text-decoration: underline;
    }

    @keyframes cookie-popup-in {
        from {
            bottom: -6.25rem;
        }

        to {
            bottom: 1.25rem;
        }
    }

    @media only screen and (max-width: 480px) {
        .cookie-popup {
            left: 2%;
            right: 0;
            border-radius: 10px;
            margin-bottom: 25%;
            width: 95%;
        }
    }
</style>

<script>
    /* common fuctions */
    function el(selector) {
        return document.querySelector(selector)
    }

    function els(selector) {
        return document.querySelectorAll(selector)
    }

    function on(selector, event, action) {
        els(selector).forEach(e => e.addEventListener(event, action))
    }

    function cookie(name) {
        let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name + '='))
        return c ? c.split('=')[1] : false;
    }


    /* popup button hanler */
    on('.cookie-popup button', 'click', () => {
        el('.cookie-popup').classList.add('cookie-popup--accepted');
        document.cookie = `cookie-accepted=true`
    });

    /* popup init hanler */
    if (cookie('cookie-accepted') !== "true") {
        el('.cookie-popup').classList.add('cookie-popup--not-accepted');
    }



    /* page buttons handlers */

    function _reset() {
        document.cookie = 'cookie-accepted=false';
        document.location.reload();
    }

    function _switchMode(cssClass) {
        el('.cookie-popup').classList.toggle(cssClass);
    }
</script>