<section class="features-head text-light bg-dark py-5">
        <div class="container grid">
            <div>
                <h1 class="">Features</h1>
                <p class="lead">
                    Check out the features of Public Notebook
                </p>
            </div>
           
        </div>
    </section>

   
    <section class="features-sub-head py-5">
        <div class="container grid">
            <div>
                <h2 class="md">The Public Notebook Platform</h2>
                <p>
                  Public Notebook allow you to create, update, and share your thought with the world.
                </p>
            </div>
            <img src="<?=base_url('assets/images/registration/ha.png')?>" alt="">
        </div>
    </section>

    <section class="features-main my-2 mb-5">
        <div class="container grid grid-3">
            <div class="card flex">
                <i class="bi bi-journal h1"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nemo saepe corrupti et dolorem voluptate at, nostrum rem voluptatem ab alias quia molestiae ea, libero nihil deserunt. Molestias, eum? Necessitatibus!</p>
            </div>
            <div class="card flex">
                <i class="bi bi-calendar-date h1"></i>
                <p>
                  it can shows the time at which something happened or was done.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-star h1"></i>
                <p>
                   you can react to the other people.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-person-circle h1"></i>
                <p>
                you can now create a Profile. This is the start of social features on Public Notebook!
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-images h1"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis,
                    magnam.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-chat-left-dots h1"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis,
                    magnam.
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

.features-main .card > i {
  margin-right: 20px;
}

.features-main .grid {
  padding: 30px;
}

.features-main .grid > *:first-child {
  grid-column: 1 / span 3;
}

.features-main .grid > *:nth-child(2) {
  grid-column: 1 / span 2;
}



.container {
  max-width: 1100px;
  margin: 0 auto;
  overflow: auto;
  
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