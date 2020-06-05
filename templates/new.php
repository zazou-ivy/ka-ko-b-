<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" id="display">
    <form id="contact" action="/?action=new" method="post">
        <h3>Votre Post</h3>
        <fieldset>
            <input placeholder="Nom de l'anime" type="text" tabindex="1" name="anime" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Titre de la chanson" type="text" name="song" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="Nom du groupe" type="text" name="group" tabindex="3" required>
        </fieldset>
        <fieldset>
            <textarea placeholder="Description" tabindex="10" name="description" required></textarea>
        </fieldset>
        <fieldset>
            <input placeholder="Lien youtube de l'opening" type="url" name="url_song" tabindex="4" required>
        </fieldset>
        <fieldset>
            <input placeholder="Lien de l'image" type="url" name="picture" tabindex="4" required>
        </fieldset>
        <fieldset>
            <button type="submit">ADD NEW OPENING</button>
        </fieldset>
    </form>
</div>