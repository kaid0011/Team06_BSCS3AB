<!-- background -->
<div style="background-color: #ced4da; min-height: 75vh;">
<section class="projects">
    <h1 class="display-3 text-dark fw-normal">Support Team</h1>
    <p class="lead p-3">Support team members' duties generally include performing administrative tasks, familiarizing and adhering to the company's policies and procedures, providing recommendations for improving customer's experience, developing strategies to increase the company's revenue and profitability, and maintaining a positive work</p>
    <div class="row">
        <div class="project-col">
        <a href="<?= base_url('supportteam/reportuserwall') ?>">
            <img src="<?=base_url('assets/images/registration/customer.png')?>" alt="project1">
            <div class="layer">
                <h3>USER REPORT</h3>
            </div>
            </a>
        </div>
        <div class="project-col">
        <a href="<?=base_url('supportteam/recommendation')?>">
            <img src="<?=base_url('assets/images/login/pic5.png')?>" alt="project2">
            <div class="layer">
                <h3>RECOMMENDATION</h3>
            </div>
            </a>
        </div>
        <div class="project-col">
        <a href="<?=base_url('supportteam/bugreport')?>">
            <img src="<?=base_url('assets/images/login/pic6.png')?>" alt="project3">
            <div class="layer">
                <h3>BUG REPORT</h3>
            </div>
            </a>
        </div>
        <div class="py-5">&nbsp;</div>
    </div>
</section>
</div>
<style>
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
  background: rgba(68, 104, 101, 0.7);
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
/* footer section */
.footer {
  background: #111;
  width: 100%;
  text-align: center;
  padding: 25px 0 10px 0;
}
.footer h4 {
  margin-bottom: 20px;
  margin-top: 15px;
  font-weight: 600;
  color: #edf0f1;
}
.footer fa {
  margin: 0 13px;
  cursor: pointer;
  padding: 18px 0;
}
.footer i {
  font-size: 20px;
}
.footerBot {
  background: #000;
  text-align: center;
}
.footerBot span {
  color: #a1e8cc;
}
.footer i {
  color: #edf0f1;
}
.icons a i:hover {
  color: #a1e8cc;
}
@media (max-width: 990px) {
    .row {
      flex-direction: column;
      min-height: 100vh;
    }
  }
</style>