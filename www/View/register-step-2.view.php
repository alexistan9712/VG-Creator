<link rel="stylesheet" href="/dist/css/register.css">

<script>
    document.querySelector('.right-panel-dasboard').remove()
</script>

<main>
    <section id="register-step-2">
        
        <div class="wrapper flex center-transform">

            <h1 class="title">Choisir votre pseudo</h1>

            <?php $this->includePartial("form", $user->getRegisterFormStep2()) ?>

        </div>
    </section>
</main>


