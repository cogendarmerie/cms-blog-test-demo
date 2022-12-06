<?php
$session = new session();
$user = $session->get("user");
?>
<main>
    <div class="container">
        <div class="row m-5">
            <div class="card">
                <div class="card-body">
                    <h2>Créer un article</h2>

                    <form action="" method="POST">
                        <input type="hidden" name="action" value="create">
                        <div class="row p-3 mb-1">
                            <label for="title" class="form-label">Titre de la publication</label>
                            <input type="text" name="title" placeholder="Super titre d'inforation" class="form-control">
                        </div>
                        <div class="row p-3 mb-1">
                            <label for="title" class="form-label">Auteur</label>
                            <input type="text" name="author" value="<?php echo $user['username'] ?>" readonly class="form-control">
                        </div>
                        <div class="row p-3 mb-1">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <input type="text" name="categorie" class="form-control">
                        </div>
                        <div class="row p-3 mb-1">
                            <textarea name="article"></textarea>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                                });
                            </script>
                        </div>
                        <div>
                            <button class="genric-btn primary radius large">Créer</button>
                            <input type="reset" class="genric-btn danger large radius">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>