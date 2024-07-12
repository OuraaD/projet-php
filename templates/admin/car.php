
<main>
    <h1>Cars</h1>

    <form action="/projet-php/dashboard/car/add" method="POST">

        <div>
            <label for="name">modèle</label>
            <input type="text" id="email" name="email">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <input type="submit" value="Ajouter">

    </form>

</main>