<?php
include_once 'startup.php';
displayhead($status);
?>
<section>
    <br>
    <div class="container px-4 px-lg-5 form-background">
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-6">
                <h1 class="mt-5">Chcesz być na bieżąco? Wypełnij newsletter!</h1>
                <p>Wypełnij swoje dane osobowe i nie przegap nowych przesłanek odnośnie życia Linkin Park! </p>
            </div>
        </div>
        <div id="formularz">
            <form method="post" action="mailto:xxx@xxx.xx" onsubmit="return pokazDane()">
                <h4>Formularz zgłoszeniowy:</h4><br>
                <div class="form-item">
                    <div>
                        <label for="imie">Imie:</label>
                        <input name="imie" size="30" id="imie" class="form-input">
                    </div>
                    <span id="imie_error" class="czerwone"></span>
                </div>
                <div class="form-item">
                    <div>
                        <label for="nazwisko">Nazwisko:</label>
                        <input name="nazwisko" size="30" id="nazwisko" class="form-input">
                    </div>
                    <span id="nazwisko_error" class="czerwone"></span>
                </div>
                <div class="form-item">
                    <div>
                        <label for="wiek">Wiek:</label>
                        <input type="number" name="wiek" id="wiek" class="form-input">
                    </div>
                    <span id="wiek_error" class="czerwone"></span>
                </div>
                <div class="form-item">
                    <div>
                        <label for="kraj">Państwo:</label>
                        <select name="kraj" id="kraj" class="form-input">
                            <option value="pl" selected="selected">Polska</option>
                            <option value="gb">Wielka Brytania</option>
                            <option value="de">Niemcy</option>
                            <option value="fr">Francja</option>
                        </select>
                    </div>
                </div>
                <div class="form-item">
                    <div>
                        <label for="email">Adres e-mail:</label>
                        <input name="email" size="30" id="email" class="form-input">
                    </div>
                    <span id="email_error" class="czerwone"></span>
                </div>
                <br>

                <h4>Interesują mnie:</h4>

                <div class="form-item">
                    <label><input name="sklep" type="checkbox" id="sklep"> Nowości w sklepie</label>
                    <label><input name="wydarzenia" type="checkbox" id="wydarzenia"> Wydarzenia specjalne</label>
                    <label><input name="wiesci" type="checkbox" id="wiesci"> Wieści od członków zespołu</label>
                    <span id="zainteresowania_error" class="czerwone"></span>
                </div>
                <br>

                <h4>Częstotliwość wysyłania:</h4>

                <div class="form-item">
                    <label><input name="czestotliwosc" id="czestotliwosc" type="radio" value="Jak najszybciej"> Jak
                        najszybciej</label>
                    <label><input name="czestotliwosc" type="radio" value="Raz w tygodniu"> Raz w tygodniu</label>
                    <label><input name="czestotliwosc" type="radio" value="Dwa razy w tygodniu"> Dwa razy w
                        tygodniu</label>
                    <label><input name="czestotliwosc" type="radio" value="Raz w miesiącu"> Raz w miesiącu</label>

                    <span id="czestotliwosc_error" class="czerwone"></span>
                </div>
                <br>
                <div class="form-item">
                    <input type="button" value="Zapisz stan tekstowych pól formularza" onclick="zapiszStan()"
                        class="form-button">
                    <input type="button" value="Zmodyfikuj formularz (na podstawie imienia)" onclick="zmodyfikujStan()"
                        class="form-button">
                    <input type="button" value="Pokaż zapisany formularz (na podstawie imienia)"
                        onclick="pokazFormularz()" class="form-button">
                    <input type="button" value="Usuń wszystkie lokalne dane" onclick="usunDane()" class="form-button">
                    <br><br>
                    <input type="submit" value="Wyślij" class="form-button">
                    <input type="reset" value="Anuluj" class="form-button">
                </div>
            </form>
        </div>
    </div>
</section>
<!-- JS Bootstrap'a-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Reszta plików JS-->
<script src="js/scripts.js"></script>
</body>

</html>