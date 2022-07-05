<?php
     session_start();     
     
      if(isset($_GET['Exit'])){     
           session_destroy();
            } 
     
            
      
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <title>Ana Sayfa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body>
  <div class="wrapper80">

    <header>
      <div class="navbar">
        <div class="leftside-navbar">
          <img src="images/redlogo.png" class="logo" />
          <ul>
               <a href="">HOME</a>
            <a href="jobs/findjob.php">JOBS</a>
            <a href="newsFolder/news.html">NEWS</a>
            <a href="events/Events.php">EVENTS</a>
            <a href="formulas/formulas2.php">CALCULATORS</a>
          

          </ul>
        </div>
        <ul class="login-register">
          <?php
                    
                    if(isset($_SESSION["semail"])){ 
                        echo '<form  action ="index.php" name ="exitform" method="GET">'
                        . '<button type ="submit"  name="Exit" id="Exit" value="Exit" class="navbar_btn">Exit</button>'
                         .      ' </form>';                               
                    }else{
                        echo '<a href="userLoginRegister/login.php"><button class="navbar_btn">Login</button></a>';
                        echo '<a href="userLoginRegister/kayıtol.php"><button class="navbar_btn" >Register</button></a>';
                    }

                    ?>

        </ul>

      </div>
    </header>
    <section id="ads">
      <img
        src="https://media.discordapp.net/attachments/382126133740830730/924762455048060958/240_F_425467180_6X5wMcUBYIt48AiKYbEigXxN3pex4WK0.jpg"
        class="img" />
      <div class="ads-right">
        <h1>Job Opportunities</h1>
        <button class="navbar_btn">Learn More</button>
      </div>

    </section>

    <section id="jobs">
      <h1 class="section-main-title"> Vacancies</h1>
      <div class="job-list-container">

        <a href="Vacancies1.php" class="job-list-item">
          <div class="job-card-container">
            <div class="job-card-image">
              <img alt="" width="260" height="145"
                src="https://www.webtekno.com/images/editor/default/0001/99/53c4519e99523e640215ca3848b69b4902b9c4c4.jpeg">
            </div>
            <div class="job-card-main-content">
              <div class="job-card-title">Senior Electrical/Automation Maintenance Engineer
              </div>
              <p class="job-card-headline">Mercedes-Benz Türk A.Ş</p>
              <div class="job-card-location">Ataşehir,Istanbul, Turkey
              </div>

              <div class="job-card-info"> 1 gün önce </div>

              <div class="job-card-salary">
                <span>1450&nbsp;$</span>
              </div>
            </div>
          </div>
        </a>

        <a href="Vacancies2.php" class="job-list-item">
          <div class="job-card-container">
            <div class="job-card-image">
              <img alt="" width="260" height="145"
                src="https://egirisim.com/wp-content/uploads/2021/03/getir-unicorn.jpeg">
            </div>
            <div class="job-card-main-content">
              <div class="job-card-title">Talent for People Department</div>
              <p class="job-card-headline">Getir</p>
              <div class="job-card-location">Bakırköy,Istanbul, Turkey
              </div>

              <div class="job-card-info"> 2 gün önce </div>

              <div class="job-card-salary">
                <span>4000&nbsp;TL</span>
              </div>
            </div>
          </div>
        </a>

        <a href="Vacancies3.php" class="job-list-item">
          <div class="job-card-container">
            <div class="job-card-image">
              <img alt="" width="260" height="145"
                src="https://images-na.ssl-images-amazon.com/images/G/01/gc/designs/livepreview/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png">
            </div>
            <div class="job-card-main-content">
              <div class="job-card-title">Business Development Manager</div>
              <p class="job-card-headline">Amazon</p>
              <div class="job-card-location">Pendik,Istanbul, Turkey
              </div>

              <div class="job-card-info"> 3 gün önce </div>

              <div class="job-card-salary">
                <span>2300&nbsp;$</span>
              </div>
            </div>
          </div>
        </a>

        <a href="Vacancies4.php" class="job-list-item">
          <div class="job-card-container">
            <div class="job-card-image">
              <img alt="" width="260" height="145"
                src="https://cdnuploads.aa.com.tr/uploads/Contents/2019/07/24/thumbs_b_c_215ce783b0531721213cde6589eb48a8.jpg">
            </div>
            <div class="job-card-main-content">
              <div class="job-card-title">Future Reinforcers-Uzun Dönem Staj Programı</div>
              <p class="job-card-headline">KORDSA</p>
              <div class="job-card-location">Ataşehir,Istanbul, Turkey
              </div>

              <div class="job-card-info"> 4 gün önce </div>

              <div class="job-card-salary">
                <span>Ödeme aralığı mevcut değil&nbsp;</span>
              </div>
            </div>
          </div>
        </a>

      </div>
    </section>


    <section id="magazine">
      <h1 class="section-main-title"> Magazines</h1>
      <div class="magazine-list-container">

        <a href="./pdf_files/chemical_engineering.pdf" download="Chemical Enginering Magazine"
          class="magazine-list-item">
          <div class="magazine-card-container">
            <img src="images/cmenc8.jpeg" alt="">
            <h3>Chemical Engineering</h3>
          </div>
        </a>

        <a href="./pdf_files/chemical_engineering.pdf" download="Chemical Enginering Magazine"
          class="magazine-list-item">
          <div class="magazine-card-container">
            <img src="https://imgx.tradepub.com/free/aue/images/auec8.jpg" alt="">
            <h3>Automotive Engineering</h3>
          </div>
        </a>

        <a href="./pdf_files/chemical_engineering.pdf" download="Chemical Enginering Magazine"
          class="magazine-list-item">
          <div class="magazine-card-container">
            <img src="https://imgx.tradepub.com/free/ed/images/edc8.jpg" alt="">
            <h3>Electronic Design</h3>
          </div>
        </a>


      </div>
    </section>




    <section id="events">
      <h1 class="section-main-title"> Events </h1>


      <div class="event-list-container">

        <div class="event-list-item">
          <div class="event-card-shadow">
            <div class="event-card">
              <article class="event-card-content">
                <aside class="event-card-content-image-container">
                  <a href="https://dpsp.theiet.org/" target="_blank"class="event-card-content-link">
                    <div class="event-card-content-image-wrapper">
                      <div class="event-card-content-image-content">
                        <div class="event-card-content-image-placeholder"
                          style="background-color: rgb(229, 229, 229);">
                        </div>
                        <img class="event-card-image"
                          src="https://www.stm-publishing.com/wp-content/uploads/2019/10/IET.png">
                      </div>
                    </div>
                  </a>
                </aside>

                <div class="event-card-content-detail-container">
                  <div class="event-card-content-detail">
                    <div class="event-card-content-principal">
                      <div class="event-card-primary-content">
                        <a href="" class="event-card-content-link">
                          <h3 class="event-card-title">
                            <div data-spec="event-card-formatted-name">
                              <div class="event-card-formatted">
                                16th International Conference on Developments in Power System Protection
                              </div>
                            </div>
                          </h3>
                        </a>
                        <div class="event-card-content-date">
                          7 – 10 March 2022</div>
                      </div>

                      <div class="event-card-sub-content">
                        <div class="event-card-sub-item_loc-price">
                            Hilton Newcastle Gateshead, UK | Online
                        </div>
                        <div class="event-card-sub-item_loc-price">
                          13 $
                        </div>
                        <div class="event-card-sub-item_place">
                          IET
                        </div>
                        <span></span>66k followers
                      </div>
                    </div>
                  </div>
              </article>
            </div>
          </div>
        </div>


        <div class="event-list-item">
          <div class="event-card-shadow">
            <div class="event-card">
              <article class="event-card-content">
                <aside class="event-card-content-image-container">
                  <a href="https://www.bilgi.edu.tr/tr/etkinlik/10755/oteki-hikayeler-sergi-acilisi/" target="_blank"class="event-card-content-link">
                    <div class="event-card-content-image-wrapper">
                      <div class="event-card-content-image-content">
                        <div class="event-card-content-image-placeholder"
                          style="background-color: rgb(229, 229, 229);">
                        </div>
                        <img class="event-card-image"
                          src="https://www.bilgi.edu.tr/media/covers/2021/12/15/oteki-hikayeler-banner.jpg">
                      </div>
                    </div>
                  </a>
                </aside>

                <div class="event-card-content-detail-container">
                  <div class="event-card-content-detail">
                    <div class="event-card-content-principal">
                      <div class="event-card-primary-content">
                        <a href="" class="event-card-content-link">
                          <h3 class="event-card-title">
                            <div data-spec="event-card-formatted-name">
                              <div class="event-card-formatted">
                              The Other Stories Exhibition
                              </div>
                            </div>
                          </h3>
                        </a>
                        <div class="event-card-content-date">
                            
16 December 2021 – 07 February 2022
                        </div>
                      </div>

                      <div class="event-card-sub-content">
                        <div class="event-card-sub-item_loc-price">
                          
Santralistanbul Campus Energy Museum
                        </div>
                        <div class="event-card-sub-item_loc-price">
                          Free
                        </div>
                        <div class="event-card-sub-item_place">
                          İstanbul Bilgi University
                        </div>
                        <span></span>76 followers
                      </div>
                    </div>
                  </div>
              </article>
            </div>
          </div>
        </div>

        <div class="event-list-item">
          <div class="event-card-shadow">
            <div class="event-card">
              <article class="event-card-content">
                <aside class="event-card-content-image-container">
                  <a href="" class="event-card-content-link">
                    <div class="event-card-content-image-wrapper">
                      <div class="event-card-content-image-content">
                        <div class="event-card-content-image-placeholder"
                          style="background-color: rgb(229, 229, 229);">
                        </div>
                        <img class="event-card-image"
                          src="https://zirve.yga.org.tr/static/img/og.png">
                      </div>
                    </div>
                  </a>
                </aside>

                <div class="event-card-content-detail-container">
                  <div class="event-card-content-detail">
                    <div class="event-card-content-principal">
                      <div class="event-card-primary-content">
                        <a href="https://zirve.yga.org.tr/" class="event-card-content-link">
                          <h3 class="event-card-title">
                            <div data-spec="event-card-formatted-name">
                              <div class="event-card-formatted">
                              YGA - Zirve 2022
                              </div>
                            </div>
                          </h3>
                        </a>
                        <div class="event-card-content-date">
                          Dec 11-12, 11:00 AM
                        </div>
                      </div>

                      <div class="event-card-sub-content">
                        <div class="event-card-sub-item_loc-price">
                          İstanbul
                        </div>
                        <div class="event-card-sub-item_loc-price">
                          Free
                        </div>
                        <div class="event-card-sub-item_place">
                            Young Guru Academy
                        </div>
                        <span></span>6.3k followers
                      </div>
                    </div>
                  </div>
              </article>
            </div>
          </div>
        </div>



      </div>

    </section>





    <div class="news"></div>
    <div class="events"></div>
    <div class="calculators"></div>
  </div>
  </div>
</body>

</html>