<?php
require_once('../core/init.php');



require_once('../views/header.php');
?>

    <div class="nes-container  with-title">
        <h3 class="title">Edit Blog</h3>
        <div class="nes-field">
        <label for="name_field">Judul</label>
        <input type="text" id="name_field" class="nes-input">
        </div>

        <div class="nes-field">
        <label for="textarea_field">Textarea</label>
        <textarea id="textarea_field" class="nes-textarea"></textarea>
        </div>

        <br>
        <h6>Pilih database</h6>
        <label>
            <input type="radio" class="nes-radio" name="answer" checked />
            <span>Web1</span>
            </label>

            <label>
            <input type="radio" class="nes-radio" name="answer" />
            <span>Web2</span>
        </label>

        <br>
        <div class="nes-field">
            <button type="button" class="nes-btn is-primary">Edit</button>  
        </div>
    </div>
</div>

<?php
require_once('../views/footer.php');
?>


