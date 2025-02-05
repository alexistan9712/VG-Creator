<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Template FRONT</title>
    <meta name="description" content="Description de ma page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../dist/css/main.css">
    <link rel="stylesheet" href="../dist/fontawesome/css/all.css">
    <link rel="stylesheet" href="../dist/fontawesome/webfonts/*">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" referrerpolicy="origin"></script>
    <script src="../dist/js/global.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header class="flex">
        <nav class="flex desktop-navigation">
            <a href="/" class="left-items">
                <svg class="logo" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 184.15676626860062" height="184.15676626860062" width="350"><defs id="SvgjsDefs6981"></defs><g id="SvgjsG6982" featurekey="1p4tPl-0" transform="matrix(1.7013888888888886,0,0,1.7013888888888886,89.98612246910731,-20.41656282212999)" fill="#EAA159"><g xmlns="http://www.w3.org/2000/svg" transform="translate(0,-952.36218)" fill="#EAA159"><path d="m 60.7828,964.36215 27.1809,0.8834 -27.1809,25.9958 z m -1.9745,1.4513 0,26.7845 -25.2681,0 c 8.6166,-8.7334 16.8796,-17.8103 25.2681,-26.7845 z m 27.7053,3.628 3.4864,1.1989 -12.5877,7.4768 z m -68.1835,2.9656 5.5226,0 12.8654,14.0705 -5.9854,6.1204 -12.4026,0 c 9e-4,-6.7347 0,-13.4597 0,-20.1909 z m -1.9746,1.2304 0,5.8364 -6.3555,0 z m 3.363,20.9796 38.627,0 -10.7675,29.43465 z m 39.0898,4.54286 0,41.20229 -12.5878,-6.8775 c 4.1972,-11.443 8.3886,-22.879 12.5878,-34.32479 z" style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:;enable-background:accumulate;" fill="#EAA159" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></g><g id="SvgjsG6983" featurekey="dYASrj-0" transform="matrix(2.239283822800813,0,0,2.239283822800813,-1.3435711478994754,138.60972870004954)" fill="#FFFFFF"><path d="M15.6 5.08 l-6.26 14.92 l-2.58 0 l-6.16 -14.92 l2.36 0 l5.1 12.48 l5.14 -12.48 l2.4 0 z M31.18 7 l-1.4 1.64 q-0.82 -0.84 -1.96 -1.32 t-2.4 -0.48 q-1.64 0 -2.99 0.74 t-2.11 2.02 q-0.78 1.34 -0.78 2.98 q0 1.56 0.84 2.88 q0.8 1.24 2.15 1.97 t2.91 0.73 q1.1 0 2.11 -0.38 t1.81 -1.06 l0 -2.72 l-1.92 0 l-0.94 -2.16 l5.02 0 l0 5.8 q-1.14 1.28 -2.73 1.99 t-3.37 0.71 q-2.22 0 -4.08 -1.08 q-1.82 -1.04 -2.86 -2.86 q-1.08 -1.86 -1.08 -4.08 q0 -2.14 1.14 -3.94 q1.08 -1.72 2.93 -2.73 t3.97 -1.01 q1.66 0 3.16 0.64 q1.46 0.6 2.58 1.72 z M43.72 13.58 l-9.5 0 l0 -1.86 l9.5 0 l0 1.86 z M59.89999999999999 7 l-1.4 1.64 q-0.82 -0.84 -1.96 -1.32 t-2.4 -0.48 q-1.64 0 -2.99 0.74 t-2.11 2.02 q-0.78 1.34 -0.78 2.98 q0 1.56 0.84 2.88 q0.8 1.24 2.15 1.97 t2.91 0.73 q1.44 0 2.68 -0.62 t2.06 -1.72 l1.34 1.82 q-1.14 1.28 -2.73 1.99 t-3.37 0.71 q-2.22 0 -4.08 -1.08 q-1.82 -1.04 -2.86 -2.86 q-1.08 -1.86 -1.08 -4.08 q0 -2.14 1.14 -3.94 q1.08 -1.72 2.93 -2.73 t3.97 -1.01 q1.66 0 3.16 0.64 q1.46 0.6 2.58 1.72 z M65.61999999999999 7.26 l0 4.96 q0.62 -0.36 1.38 -0.48 q0.56 -0.1 1.44 -0.1 l2.84 0 q1.18 0 1.84 -0.54 q0.7 -0.58 0.7 -1.74 q0 -1.1 -0.74 -1.64 q-0.64 -0.46 -1.8 -0.46 l-5.66 0 z M72 17.64 l-1.82 -3.82 l-1.74 0 q-0.82 0 -1.44 0.1 q-0.76 0.14 -1.38 0.48 l0 5.6 l-2.18 0 l0 -14.92 l7.84 0 q1.38 0 2.44 0.52 t1.64 1.48 q0.62 1.02 0.62 2.4 q0 1.68 -0.9 2.76 t-2.54 1.5 l1.16 2.38 q0.5 0.74 0.78 1.04 q0.34 0.38 0.65 0.51 t0.81 0.13 l0.22 0 l0.48 -0.02 l0 2.22 q-1.16 0 -1.72 -0.08 q-0.94 -0.16 -1.6 -0.62 q-0.78 -0.56 -1.32 -1.66 z M82.41999999999999 14.02 l0 3.8 l9.2 0 l0 2.18 l-11.38 0 l0 -14.92 l10.5 0 l0 2.2 l-8.32 0 l0 4.52 q0.62 -0.36 1.38 -0.48 q0.56 -0.1 1.44 -0.1 l3.26 0 l0 2.22 l-3.26 0 q-0.82 0 -1.44 0.1 q-0.76 0.14 -1.38 0.48 z M99.77999999999999 6.66 l-0.82 -1.84 l2.4 0 l7.18 15.18 l-2.44 0 l-0.98 -2.18 l-4.54 0 q-1.28 0 -2.3 0.24 q-0.9 0.22 -1.5 0.58 q-0.54 0.32 -0.72 0.66 l-0.38 0.7 l-2.36 0 z M101.38 15.620000000000001 l2.76 0 l-3.26 -6.3 l-3.3 7.14 q0.44 -0.38 1.34 -0.6 q1.02 -0.24 2.46 -0.24 z M122.43999999999998 7.279999999999999 l-5.26 0 l0 12.72 l-2.12 0 l0 -12.72 l-5.32 0 l0 -2.2 l12.7 0 l0 2.2 z M138.14 12.440000000000001 q0 -1.6 -0.82 -2.9 q-0.78 -1.26 -2.13 -1.98 t-2.93 -0.72 q-1.64 0 -2.99 0.74 t-2.11 2.02 q-0.78 1.34 -0.78 2.98 q0 1.56 0.84 2.88 q0.8 1.24 2.15 1.97 t2.92 0.73 t2.92 -0.76 t2.13 -2.04 q0.8 -1.34 0.8 -2.92 z M140.29999999999998 12.559999999999999 q0 2.16 -1.12 3.98 q-1.08 1.74 -2.93 2.77 t-3.99 1.03 q-2.22 0 -4.08 -1.08 q-1.82 -1.04 -2.86 -2.86 q-1.08 -1.86 -1.08 -4.08 q0 -2.14 1.14 -3.94 q1.08 -1.72 2.93 -2.73 t3.97 -1.01 q2.18 0 4.04 1.06 q1.82 1.04 2.88 2.82 q1.1 1.86 1.1 4.04 z M145.88 7.26 l0 4.96 q0.62 -0.36 1.38 -0.48 q0.56 -0.1 1.44 -0.1 l2.84 0 q1.18 0 1.84 -0.54 q0.7 -0.58 0.7 -1.74 q0 -1.1 -0.74 -1.64 q-0.64 -0.46 -1.8 -0.46 l-5.66 0 z M152.26 17.64 l-1.82 -3.82 l-1.74 0 q-0.82 0 -1.44 0.1 q-0.76 0.14 -1.38 0.48 l0 5.6 l-2.18 0 l0 -14.92 l7.84 0 q1.38 0 2.44 0.52 t1.64 1.48 q0.62 1.02 0.62 2.4 q0 1.68 -0.9 2.76 t-2.54 1.5 l1.16 2.38 q0.5 0.74 0.78 1.04 q0.34 0.38 0.65 0.51 t0.81 0.13 l0.22 0 l0.48 -0.02 l0 2.22 q-1.16 0 -1.72 -0.08 q-0.94 -0.16 -1.6 -0.62 q-0.78 -0.56 -1.32 -1.66 z" fill="#000"></path></g></svg>
            </a>
            <ul class="flex">
                <li><a href="/#templates" class="link">Nos projets</a></li>
                <li><a href="/#faq" class="link">Qui sommes-nous ?</a></li>
                <li><a href="/#footer" class="link">Nous contacter</a></li>
            </ul>
            <div class="flex right-items">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <a href="/register" class="button--secondary">S'inscrire</a>
                <a href="/login" class="button--secondary--accent ">Connexion</a>
            </div>
        </nav>

        <label class="mobile-navigation">
            <nav class="center-items flex">
                <input type="checkbox">
                <span class="menu"> 
                    <span class="hamburger"></span> 
                </span>
                <ul class="flex">
                    <li><a href="/#templates" class="link">Nos projets</a></li>
                    <li><a href="/#faq" class="link">Qui sommes-nous ?</a></li>
                    <li><a href="/#footer" class="link">Nous contacter</a></li>
                </ul>
            </nav>
        </label>
    </header>
        
    <?php include "View/".$this->view.".view.php"; ?>

        
    <footer id="footer" class="footer">

        <div class="footer-list footer-list-container flex">
            <ul>
                <li><a href="#" class="link">Condition d'utilisation</a></li>
                <li><a href="#" class="link">Assistance</a></li>
                <li><a href="#" class="link">Mentions légales</a></li>
            </ul>
            <ul>
                <li><a href="#" class="link">Politiques de confidentialité</a></li>
                <li><a href="#" class="link">Politique d'utilisation des cookies</a></li>
            </ul>
        </div>
        <div class="footer-credits">
            <p>© 2022 VG-CREATOR, Inc. All rights reserved</p>
            <div class="social-media">
                <a href="https://github.com/JustGritt/VG-Creator/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://github.com/JustGritt/VG-Creator/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://github.com/JustGritt/VG-Creator/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/JustGritt/VG-Creator/" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </footer>
    
    <!-- <script src="../dist/css/main.css"></script> -->
    <script src="/dist/js/dark-mode.js"></script>
    <script src="/dist/js/global.js"></script>

    <?php
    use App\Core\FlashMessage;
        $flash = new FlashMessage();
        $this->includePartial("flash_messages", ['errors' => [$flash->getFlash('errors')]]);
        $this->includePartial("flash_messages", ['success' => [$flash->getFlash('success')]]);
    ?>
</body>
</html>

<script>
    let errorCards = document.querySelectorAll(".error-card");
    errorCards.forEach(function(card) {
        card.querySelector(".error-close").addEventListener("click", function() {
            card.remove();
        });
    });
    
    let successCards = document.querySelectorAll(".success-card");
    successCards.forEach(function(card) {
        card.querySelector(".success-close").addEventListener("click", function() {
            card.remove();
        });
    });
</script>