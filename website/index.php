<?php
include_once 'startup.php';
displayhead($status);
?>
<section>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 index-background">
            <div class="col-lg-6">
                <h1 class="mt-5">Linkin Park</h1>
                <p>Linkin Park to amerykański zespół muzyczny, który wykonuje szeroko pojętą
                    muzykę rockową i metalową. Zespół powstał w 1996 roku w Agoura Hills w Kalifornii.
                    Sławę zyskał w 2000 roku po wydaniu swojego pierwszego albumu, "Hybrid Theory". Od tego czasu
                    Linkin Park stał się jednym z najpopularniejszych zespołów w historii muzyki,
                    sprzedając ponad 100 milionów płyt.

                    Zespół wydał siedem albumów studyjnych i stworzył wiele międzynarodowych przebojów, takich jak
                    „Numb”, „In the End”, „What I’ve Done”, „Castle of Glass”, „Crawling”,
                    „New Divide”, „Burn It Down”, „Faint” czy „Breaking the Habit”. Zdobyli wiele nagród, w tym dwie
                    Grammy. Zespół zawiesił działalność po samobójstwie wokalisty Chestera
                    Benningtona w 2017 roku.

                    W 2023 roku zespół wydał swoją pierwszą kolekcję singli zatytułowaną “Papercuts”. Album obejmuje
                    20 utworów z całej kariery zespołu, w tym 18 esencjonalnych hymnów,
                    nigdy wcześniej niepublikowany utwór “Friendly Fire” nagrany podczas sesji w 2017 roku do ich
                    siódmego albumu “One More Light” oraz rzadko spotykany utwór fanów "QWERTY".
                </p>
            </div>
            <div class="col-lg-6">
                <h1 class="mt-5">Członkowie zespołu</h1>
                <div id="carouselExampleIndicators" class="carousel slide ind-img">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/artysci/Brad_Delson.jpg" class="d-block w-100" alt="Brad Delson">
                            <div class="carousel-caption d-md-block">
                                <h5>Brad Delson</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/artysci/Chester_Bennington.jpg" class="d-block w-100"
                                alt="Chester Bennington">
                            <div class="carousel-caption d-md-block">
                                <h5>Chester Bennington</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/artysci/Dave_Farrell.jpg" class="d-block w-100" alt="Dave Farrell">
                            <div class="carousel-caption d-md-block">
                                <h5>Dave Farrell</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/artysci/Joe_Hahn.jpg" class="d-block w-100" alt="Joe Hahn">
                            <div class="carousel-caption d-md-block">
                                <h5>Joe Hahn</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/artysci/Mike_Shinoda.jpg" class="d-block w-100" alt="Mike Shinoda">
                            <div class="carousel-caption d-md-block">
                                <h5>Mike Shinoda</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/artysci/Rob_Bourdon.jpg" class="d-block w-100" alt="Rob Bourdon">
                            <div class="carousel-caption d-md-block">
                                <h5>Rob Bourdon</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- JS Bootstrap'a-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Reszta plików JS-->
<script src="js/scripts.js"></script>
</body>

</html>