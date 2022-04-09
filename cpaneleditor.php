<?php
require_once("internal/news_db.php");
$edit_existing = false;

$title = "";
$description = "";
$date = "";
$author_id = 0;
$content = "";
$article_id = 0;
$tags_string = "";

if (isset($_GET["article_id"])) {
    $edit_existing = true;
    $article = news_db::getArticleById($_GET["article_id"]);
    if (!$article) {
        echo "Ta clanek ne obstaja!";
        die();
    }

    $title = $article["news_article_title"];
    $description = $article["news_article_description"];
    $date = $article["news_article_date"];
    $author_id = $article["news_author_id"];
    $content = $article["news_article_content"];
    $article_id = $article["news_article_id"];

    $tags = news_db::getTagsByArticle($article_id);
    $tag_arr = array();
    $i = 0;
    foreach ($tags as $tag):
        $tag_arr[$i] = $tag["news_tag_name"];
        $i = $i+1;
    endforeach;
    $tags_string = join(", ", $tag_arr);
}
?>

        <center><div id="container">
            <div id="save_indicator" style="display: none; min-width: 20em; min-height: 1em; font-size: 1.5em; background-color: green;">Članek shranjen</div>
            <div id="error_indicator" style="display: none; min-width: 20em; min-height: 1em; font-size: 1.5em; background-color: red;">Napaka pri shranjevanju</div>
            <br><br><br>
            <label for="title">Naslov: </label><input required style="width:25em" type="text" id="title" name="title" value="<?= $title ?>"><br>
            <label for="description">Opis: </label><textarea style="resize: both;" id="description" name="description"><?= $description ?></textarea><br>
            <label for="date">Datum: </label><input type="datetime-local" id="date" name="date" value="<?= $date ?>"><br>
            <label for="title">Tags: </label><input style="width:25em" type="text" id="tags" name="tags" value="<?= $tags_string ?>"><br>
            <label for="author_id">Avtor: </label>
            <select id="author_id" name="author_id">
                <?php
                $authors = news_db::getAuthors();
                foreach ($authors as $author):
                    if ($author['news_author_id'] == $author_id) {?>
                        <option selected="true" value="<?= $author['news_author_id'] ?>"><?= $author['news_author_name'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $author['news_author_id'] ?>"><?= $author['news_author_name'] ?></option>
                <?php }
                endforeach; ?>
            </select><br>
            <label for="preview_image">Slika: </label><input type="file" id="preview_image" name="preview_image" accept="image/*">
            <div id="editor-toolbar">
                <span class="ql-formats">
                    <select class="ql-font"></select>
                    <select class="ql-size"></select>
                </span>
                <span class="ql-formats">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-strike"></button>
                </span>
                <span class="ql-formats">
                    <select class="ql-color"></select>
                    <select class="ql-background"></select>
                </span>
                <span class="ql-formats">
                    <button class="ql-script" value="sub"></button>
                    <button class="ql-script" value="super"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-header" value="1"></button>
                    <button class="ql-header" value="2"></button>
                    <button class="ql-blockquote"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-indent" value="-1"></button>
                    <button class="ql-indent" value="+1"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-direction" value="rtl"></button>
                    <select class="ql-align"></select>
                </span>
                <span class="ql-formats">
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                    <button class="ql-video"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-clean"></button>
                </span>
            </div>
            <div id="editor-container"><?= $content ?></div>
            <input type="button" value="Shrani" name="submit" onclick="saveArticle()">
        </div></center>

        <script src="quill.min.js"></script>
        <script src="image-resize.min.js"></script>
        <script src="quill.imageUploader.min.js"></script>
        <script>
Quill.register("modules/imageUploader", ImageUploader);
var editor = new Quill('#editor-container', {
        modules: {
            toolbar: '#editor-toolbar',
            imageResize: {
                modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
            },
            imageUploader: {
                upload: file => {
                    return new Promise((resolve, reject) => {
                        const formData = new FormData();
                        formData.append("image", file);

                        fetch(
                            "/upload_image.php",
                            {
                                method: "POST",
                                body: formData
                            }
                        )
                            .then(response => {
                                if (response.status == 200){
                                    response.text().then(
                                                txt => resolve(txt)
                                            )
                                } else if (response.status != 0) {
                                    reject("Upload failed");
                                }
                                })
                            .catch(error => {
                                reject("Upload failed");
                                console.error("Error:", error);
                            });
                    });
                }
            }
        },
        theme: 'snow'
    });
        </script>
        <script>
function saveArticle() {
    let fd = new FormData();
//$title, $description, $content, $preview_image, $date, $author_id
    fd.append("title", document.getElementById("title").value);
    fd.append("description", document.getElementById("description").value);
    fd.append("preview_image", document.getElementById("preview_image").files[0]);
    fd.append("tags", document.getElementById("tags").value);
    fd.append("date", document.getElementById("date").value);
    fd.append("author_id", document.getElementById("author_id").value);
    fd.append("content", editor.root.innerHTML);
    <?php
    if ($edit_existing) { ?>
        fd.append("article_id", <?= $article_id ?>);
    <?php }?>

    let xhr = new XMLHttpRequest();

    xhr.upload.addEventListener("progress", function(evt) {
        if (evt.lengthComputable) {
            progress.style.width = (evt.loaded*100 / evt.total) + "%";
            textProd.nodeValue = Math.round(evt.loaded*100 / evt.total) + "%";
        } else {
            textProd.nodeValue = "Unknown progress";
        }
        progNumber.onchange(textProd.nodeValue);
    }, false);
    xhr.addEventListener("load", function(evt) {
        if (xhr.status == 200) {
            document.getElementById("save_indicator").style.display = "block";
            document.getElementById("error_indicator").style.display = "hidden";
        } else {
            document.getElementById("error_indicator").style.display = "block";
            document.getElementById("save_indicator").style.display = "hidden";
        }
    }, false);
    xhr.open("POST", "add_new_article.php");
    xhr.send(fd);
}
        </script>

