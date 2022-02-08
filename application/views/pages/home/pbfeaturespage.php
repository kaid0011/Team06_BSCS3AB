<section class="features-head text-light bg-dark py-5 pt-5 pb-5">
        <div class="container grid">
            <div>
                <h1 class="">Features</h1>
                <p class="lead">
                    Check out the features of the Public Notebook
                </p>
            </div>
           
        </div>
    </section>

   
    <section class="features-sub-head py-5">
        <div class="container grid">
            <div>
                <h2 class="md">The Public Notebook Platform</h2>
                <p>
                  Public Notebook allows you to create, update, and share your thoughts with the world.
                </p>
            </div>
            <img src="<?=base_url('assets/images/registration/ha.png')?>" alt="">
        </div>
    </section>

    <section class="features-main mb-5">
        <div class="container grid grid-3 text-center align-items-center">
            <div class="card flex">
                <i class="bi bi-journal h1 pb-3 ps-4"></i>
                <p>You start right away by creating a notebook. Public Notebooks are suitable for all users and give easy access to other users.</p>
            </div>
            <div class="card flex">
                <i class="bi bi-calendar-date h1 pb-3 ps-4"></i>
                <p>
                  It can show the time at which something happened or was done.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-star h1 pb-3 ps-4"></i>
                <p>
                   You can react to the other people's pages.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-person-circle h1 pb-3 ps-4"></i>
                <p>
                You can now create a Profile. This is the start of social features on Public Notebook!
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-images h1 pb-3 ps-4"></i>
                <p>
                You can share photos to public notebook from your computer or phone.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-chat-left-dots h1 pb-3 ps-4"></i>
                <p>
                 You can know other people's thoughts. 
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