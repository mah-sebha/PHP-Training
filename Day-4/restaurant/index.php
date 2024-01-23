<?php
include __DIR__ . '/includes/header.php';
?>
    <main>
        <section class="container text-center summary mb-3">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto info">
                    <h1 class="fw-light">Best Dishes</h1>
                    <p class="lead">
                    Ordering from us is simple and convenient. Browse our menu, select your favorites, and let us take care of the rest. We're committed to ensuring that every meal you order is a memorable one, with prompt delivery and impeccable quality.
                    </p>
                    <p>
                    </p>
                </div>
            </div>
       </section>
       <div class="container">
            <div class="row">
                <div class="col">
                    <?php include('list.php'); ?>
                </div>
                <div class="col">
                    <?php include('form.php'); ?>
                </div>
            </div>
       </div>
    </main>
<?php
include __DIR__ . '/includes/footer.php';    