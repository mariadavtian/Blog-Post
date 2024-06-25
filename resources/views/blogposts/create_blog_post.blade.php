<main>
    <section id="contacts-us">
        <h1>create a new post</h1>
        <div class="contactc-form">
            <form action="" method="post">
            <form>
                @csrf
                <label for="title" class="form-label">title</label><br>
                <input type="text" class="form-control" id="title" name="title">

                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">

                <label class="form-check-label" for="body">description</label>
                <textarea name="body" class="form-check-input" id="body"> </textarea>
                

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </form>
        </div>
    </section>
</main>
