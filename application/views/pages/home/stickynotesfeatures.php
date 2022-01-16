<section class="features-head text-light bg-dark py-5 ">
        <div class="container grid">
            <div>
                <h1 class="">Features</h1>
                <p class="lead">
                    Check out the features of Sticky Notes Wall
                </p>
            </div>
           
        </div>
    </section>

   
    <section class="features-sub-head py-5">
        <div class="container grid">
            <div>
                <h2 class="md">The Sticky Notes Platform</h2>
                <p>
                  Sticky Notes Wall is small-scale social networking tool that allows you to connect with other people by providing them with the notes to communicate with you, and you back to them, anonymously.
                </p>
            </div>
            <img src="<?=base_url('assets/images/registration/stick.png')?>" alt="">
        </div>
    </section>

    <section class="features-main my-2 mb-5">
        <div class="container grid grid-3">
           
            <div class="card flex">
                <i class="bi bi-sticky h1"></i>
                <p>
                    It allows you to organize notes.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-palette h1"></i>
                <p>
                    Choose between multiple themes, and background color.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-person-circle h1"></i>
                <p>
                    You can send notes to other people.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-search h1"></i>
                <p>
                    You can search other notes.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-star h1"></i>
                <p>
                    You can also react to some notes.
                </p>
            </div>
            <div class="card flex">
                <i class="bi bi-question-octagon h1"></i>
                <p>
                    You can send a notes anonymously.
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

.features-main .card {
  margin-right: 5px;
}

.features-main .grid {
  padding: 20px;
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