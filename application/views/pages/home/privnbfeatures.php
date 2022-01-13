<section class="features-head text-light bg-dark py-5">
        <div class="container grid">
            <div>
                <h1 class="">Features</h1>
                <p class="lead">
                    Check out the features of Private Notebook
                </p>
            </div>
           
        </div>
    </section>

   
    <section class="features-sub-head py-5">
        <div class="container grid">
            <div>
                <h2 class="md">The Private Notebook Platform</h2>
                <p>
                  Private Notebook allow you to create, update, and share notes using the app and protect them behind a strong password.
                </p>
            </div>
            <img src="<?=base_url('assets/images/registration/haha.png')?>" alt="">
        </div>
    </section>

    <section class="features-main my-2 mb-5">
        <div class="container grid grid-3">
           
            <div class="card flex">
                <i class="bi bi-journal-check h1"></i>
                <p>
                    It allows you to organize notes, pictures, and more information in a single page notebook.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-palette h1"></i>
                <p>
                    Choose between multiple themes, and background color.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-images h1"></i>
                <p>
                    it allows you to put some image.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-stopwatch h1"></i>
                <p>
                    A Timer When a Stopwatch just will not do! This timer is very easy to use.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-shield-lock h1"></i>
                <p>
                    Strong database encryption for maximum security and privacy
                </p>
            </div>
        </div>
    </section>
    <style>

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: 'Lato', sans-serif;
  line-height: 1.6;
}

.features-head img,
.docs-head img {
  width: 200px;
  justify-self: flex-end;
}

.features-sub-head img {
  width: 300px;
  justify-self: flex-end;
}

.features-main .card {
  margin-right: 5px;
}

.features-main .grid {
  padding: 20px;
}

.features-main .grid > *:first-child {
  grid-column: 1 / span 3;
}

.features-main .grid > *:nth-child(5) {
  grid-column: 1 / span 3;
}


.container {
  max-width: 1100px;
  margin: 0 auto;
  overflow: auto;
  padding: 0 40px;
}

.card {
  background-color: #fff;
  color: #333;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  margin: 10px;
}

.text-center {
  text-align: center;
}


.flex {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.grid-3 {
  grid-template-columns: repeat(3, 1fr);
}


</style>