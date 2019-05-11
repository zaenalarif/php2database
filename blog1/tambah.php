<?php
require_once('../core/init.php');

if(isset($_POST['submit']))
{
    $judul = $_POST['judul'];
    $desc  = $_POST['deskripsi'];
    $db    = $_POST['database'];
    if(!empty(trim($judul)) && !empty(trim($desc))){
        if(tambahblog($judul, $desc, $db)){
            header('Location: index.php');
        }else{
            echo 'gagal menambahkan';
        }
    }else{
        echo '<p class="nes-btn is-error">data kosong</p>';
    }
}

require_once('../views/header.php');
?>

    <div class="nes-container  with-title">
        <h3 class="title">Tambah Blog</h3>
        <form action="" method="post">
            <div class="nes-field">
            <label for="name_field">Judul</label>
            <input type="text" id="name_field" class="nes-input" name="judul">
            </div>

            <div class="nes-field">
            <label for="textarea_field">Textarea</label>
            <textarea id="textarea_field" class="nes-textarea" name="deskripsi"></textarea>
            </div>

            <br>
            <label for="default_select">Pilih Database</label>
            <div class="nes-select">
            <select name="database" required id="default_select">
                <option value="1">Web1</option>
                <option value="2">Web2</option>
            </select>
            </div>

            <br>
            <div class="nes-field">
                <button type="submit" class="nes-btn is-primary" name="submit">Tambah</button>  
            </div>
        </form>
    </div>
</div>

<?php
require_once('../views/footer.php');
?>


