<!-- background -->
<div style="min-height: 80vh; background-color: #ced4da;">
  <section class="projects pb-5">
    <!-- <h1 class="display-3 text-dark fw-normal">Virtual Diary</h1>
    <p class="lead">Pindutin para malaman ang hinaharap</p> -->
    <div class="row pt-4">

      <!-- Private Notebook -->
      <div class="project-col p-5">
        <a href="<?=base_url('privatenotebook')?>">
          <img src="<?=base_url('assets/images/mainpage/privatenotebook.png')?>" alt="project1" class="responsive">
          <div class="layer">
            <!-- <h3>Private<br>Notebook</h3> -->
          </div>
        </a>
      </div>

      <!-- Public Notebook -->
      <div class="project-col p-5">
        <a href="<?=base_url('publicnotebook')?>">
          <img src="<?=base_url('assets/images/mainpage/publicnotebook.png')?>" alt="project2" class="responsive">
          <div class="layer">
            <!--<h3>Public<br>Notebook</h3>-->
          </div>
        </a>
      </div>

      <!-- Sticky Notes Wall -->
      <div class="project-col p-5">
        <a href="<?=base_url('stickynoteswall')?>">
          <img src="<?=base_url('assets/images/mainpage/stickynoteswall.png')?>" alt="project3" class="responsive">
          <div class="layer">
            <!--<h3>Sticky<br>Notes<br>Wall</h3>-->
          </div>
        </a>
      </div>

    </div>
  </section>
</div>

<style>
  @media (max-width: 990px) {
  
    .row {
      flex-direction: column;
    }
  }
@media (max-width:768px) and (min-width:600px){
    .responsive{
      padding:50px;
    }
}
@media (max-width:990px) and (min-width:768px){
    .responsive{
      padding:100px;
    }
}
  .custom-toggler.navbar-toggler {
    border-color: white;
  }

  .custom-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
  }

  .projects {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
  }
  
  .project-col {
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
  }

  .project-col img {
    width: 100%;
  }

  .layer {
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
  }

  .layer:hover {
    background: rgba(68, 104, 101, 0.2);
  }

  .layer h3 {
    width: 100%;
    font-weight: 600;
    color: #edf0f1;
    font-size: 20px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
  }

  .layer:hover h3 {
    bottom: 49%;
    opacity: 1;
  }
</style>