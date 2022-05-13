<?php include 'process.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <title>Pet Care</title>
</head>
<body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!-- <h1><a href="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1">CHat bot</a></h1> -->

    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="StagBot"
  agent-id="b7b3ce0a-da40-4ae9-9823-467e311ac398"
  language-code="en"
></df-messenger>
        <!-- Landing Area -->
        <section class="special">
        <section id="landing__area" class="container__center">
            <nav class="center__row">
                <h1 class="logo"><i class="fas fa-paw"></i>Pet Care</h1>
                <ul class="center__row">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about" >About Us</a></li>
                    <li><a href="#join">Join Us</a></li>
                    <li><a href="#donation">Donate</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="landing__content center__row">
                <div class="landing__info align__left">
                    <h1>
                        Add Action <br>
                        To your <br>
                        COMPASSION <br>
                    </h1>
                    <!-- <p>As you grow older , you will discover that you have two hands - One for helping yourself , the other for helping others<br>-AUDREY HEPBURN</p> -->
                    <p>Your Pets deserve the best , <br> Get the best products for your pets right here !!!!!!!</p>
                    <button><a href="pets.html">Pet Crew</a></button>
                    <!-- <button><a href="#join">I want to join</a></button> -->
                </div>
            </div> 
        </section>
     </section>

    <!-- Landing Area -->
    <!-- <section id="landing__area" class="container__center"> -->
        <!-- <header><h1 class="logo"><i class="fas fa-paw"></i>True Comfort</h1></header> -->
        <!-- <nav class="center__row">
            <ul class="center__row">
                <h1 class="logo"><i class="fas fa-paw"></i>True Comfort</h1>
                <li><a href="#">Home</a></li>
                <li><a href="#about" >About US</a></li>
                <li><a href="#join">Join Us</a></li>
                <li><a href="#donation">DONATE</a></li>
                <li><a href="#contact">Contact US</a></li>
            </ul>
        </nav>
    <div class="landing__content center__row">
        <div class="landing__info align__left">
            <h1>
                Add Action <br>
                To your <br>
                COMPASSION 
            </h1>
            <p>As you grow older , you will discover that you have two hands - One for helping yourself , the other for helping others<br>-AUDREY HEPBURN</p>
            <button><a href="#join">I want to join</a></button>
        </div>
    </div> 
</section> -->
        <!-- HELP  -->
        <section id="help" class="container__center">
            <h1>Find out how to help the animals</h1>
            <div class="help__cards--container center__row">
                <div class="help__card container__center">
                    <span class="card__title">Adopting</span>
                    <h3>Give the animal you love a home</h3>
                    <p>Make this world better by adopting a pet , as people can change their lives and become kinder and happier by showing mercy</p>
                    <div class="card__link container__center">
                        <a href="JoinUs.html">Adopt Now</a>
                    </div>
                </div>
                <div class="help__card container__center">
                    <span class="card__title">Volunteering</span>
                    <h3>Be part of the team helping the animals</h3>
                    <p>Make this world better by adopting a pet , as people can change their lives and become kinder and happier by showing mercy</p>
                    <div class="card__link container__center">
                        <a href="JoinUs.html">Join Now</a>
                    </div>
                </div>
                <div class="help__card container__center">
                    <span class="card__title">Charity</span>
                    <h3>Help the Pets Care Foundation</h3>
                    <p>Make this world better by adopting a pet , as people can change their lives and become kinder and happier by showing mercy</p>
                    <div class="card__link container__center">
                        <a href="donation.html">Help Now</a>
                    </div>
                </div>
            </div>

        </section>

        <!-- ABOUT US -->
        <a  id="about">
        <section>
            <!-- STARTING OF ORIGINAL PAGE -->
  <section id="title" class="colored-section">
    <div class="container-fluid">
      <!-- Title -->
      <h1 class="heading-main" align="center">
        Who are we?
      </h1>
  </section>

      <!-- Helping  -->

  <!-- cards new -->

          <!-- HELP  -->
          <section id="help" class="container__center">
            <div class="help__cards--container center__row1">
                <div class="help__card container__center">
                    <span class="card__title">About Us</span>
                    <!-- <h3>Give the animal you love a home</h3> -->
                    <p><img src="" alt=""><br>
                      Our organisation had made a collaboration with Animal aid unlimited,peepal farm,voice for voiceless,Peoples for animals,Wildlife SOS India and the international organisation which is The Dodo forthe support related to animal rescue. we are 24/7 online for the safety of animals. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi aspernatur aliquid, ipsam fugit minima repellendus id culpa nemo esse quibusdam nulla obcaecati non rem veniam distinctio modi placeat, veritatis illum?</p>
                    <div class="card__link container__center">
                        <a href="#">Adopt Now</a>
                    </div>
                </div>
                <div class="help__card container__center">
                    <span class="card__title">Providing Help</span>
                    <!-- <h3>Be part of the team helping the animals</h3> -->
                    <p> <img src="" alt=""><br> We help to stop cruelity towards animals. 
                      We rescue the animals if they are found injured or ill and give them proper medicine and treatment. We recommend people to not to buy  pets from a pet store or a breeder. Instead, adopt one from an animal shelter or adoption center. If you are really kind hearted, just pick up a pup on the side of the
                      street and take him home. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, adipisci recusandae quam, impedit sed est hic consequuntur, culpa nesciunt rerum magni maxime veritatis harum! Quo ipsum expedita aut sed molestiae.<p>
                    <div class="card__link container__center">
                        <a href="#">Join Now</a>
                    </div>
                </div>
                <div class="help__card container__center">
                    <span class="card__title">Animal Welfare Camp</span>
                    <!-- <h3>Help the Pets Care Foundation</h3> -->
                    <p> <img src="" alt=""> <br> An animal health camp was organized on 21st December, 2018 under Tribal Sub-plan Scheme of ICAR-NRRI,
                      Cuttack at Pitabari village of Kandhamal district. The animals were examined by Dr. R.K. Mohanta, member
                      of TSP team and Dr. Sangram Keshari Sahu, local Veterinary Assistant Surgeon and assisted by Sri
                      Nrusinghanath Das, livestock inspector and line of treatment suggested along with treatment of some cases. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quasi! Natus corrupti ea alias repellendus culpa excepturi officia dolor at saepe totam, incidunt temporibus, tempore tenetur ut aspernatur iure vero.</p>
                    <div class="card__link container__center">
                        <a href="#">Help Now</a>
                    </div>
                </div>
            </div>

        </section>

        </section>
    </a>
<!-- ABOUT US -->

<!-- JOIN US -->
<section>
    <a id="join">
                        <!-- HELP  -->
                        <section id="help" class="container__center">
                            <h1>Join Our Organization </h1>
                            <div class="help__cards--container center__row1">
                                <div class="help__card container__center">
                                    <span class="card__title">As a Volunteer</span>
                                    <h3>Be part of the team helping the animals</h3>
                                    <p>You can join as a volunteer in various campaingns cinducted by our Organization.If any injured or abandoned pet is found , you can report to the NGO. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eligendi, quod ratione dolore illum, dolores obcaecati omnis delectus debitis voluptas incidunt officia aliquam laborum perspiciatis eum eos repellat quas eveniet!</p>
                                    <div class="card__link container__center">
                                        <a href="Register.html">Join Now</a>
                                    </div>
                                </div>
                                <div class="help__card container__center">
                                    <span class="card__title">As a Chemist</span>
                                    <h3>Take time out to help the injured animals</h3>
                                    <p>You can contribute as a chemist and provide the neccessary treatment for the injured and ill animals.This can help to recover the animlas, Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quod aspernatur sit, laboriosam accusamus, atque, est necessitatibus ducimus neque impedit eligendi dolores? Cupiditate commodi atque, sit numquam itaque architecto aliquam!<p>
                                    <div class="card__link container__center">
                                        <a href="Register.html">Join Now</a>
                                    </div>
                                </div>
                                <div class="help__card container__center">
                                    <span class="card__title">As a Vet</span>
                                    <h3>Your contribution as a vet can save lives of thousands of animals</h3>
                                    <p>Take time out to save the lives of innocent species.This can help us in saving the lives of many innocent animals. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quo ipsa nobis quam recusandae ut, reprehenderit placeat dicta sapiente, perferendis accusamus in impedit ducimus neque temporibus repellat doloribus nemo sint!</p>
                                    <div class="card__link container__center">
                                        <a href="Register.html">Join Now</a>
                                    </div>
                                </div>
                            </div>
                
                        </section>
    </a>
</section>
<!-- JoinUs -->

<!-- DONATE  -->
<section>
    <a id="donation">
        
        
  <!-- Details -->
  <!-- Donate -->
  <section id="about" class="colored-section">
    <div class="container-fluid">
      <h1 class="heading-large">
        Every single donation counts.
      </h1>
    </div>
  </section>
  <!-- Donation -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
    
          <form>
            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HWJ4fltVsz50ff"
              async> </script>
          </form>
        </div>
      </div>
    </div>
  </div>
    </a>
</section>
<!-- Donation -->

<!-- contact -->
<section>
    <a id="contact">
        
                         <!-- Contact -->
                         <div>
                            <a href="#"><h4>Contact Us</h4></a>
                        </div>
                        <form  class ="regiter" action="" method="post">

                           <div class="form__row">
                               <input type="text" name="Name" placeholder = "Your Name">
                           </div>
       
                           <div class="form__row">
                               <input type="email" name="Email" placeholder = "Your Email">
                           </div>
       
                           <div class="form__row">
                               <input type="number" name="Phone" placeholder = "Phone Number">
                           </div>
       
                           <!--div class="form__row">
                               <textarea  id="textarea" cols="30" rows="10" name="Message" placeholder="Write your message here" ></textarea>
                           </div-->
                           <!--button type="submit" name="btn-send">Send message</button-->
       
                           <div class="form__row">
                           <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
                           <input type="submit" name="submit" class="send-btn" value="Send">
                           <!-- <button type="submit">Send message</button> -->
                           </div>
                       </form>
    </a>
</section>
<!-- contact -->


        <!-- Gallery -->
        <section id="gallery">
            <img src="https://i2.wp.com/www.thecheshirepetnetwork.co.uk/wp-content/uploads/2017/08/005.jpg?fit=1300%2C662" class="img__gallery" id="img-1">
            <img src="https://tse4.mm.bing.net/th?id=OIP.IqlCwvfGNtJEY0AAV0ti4QHaE8&pid=Api&P=0&w=263&h=176" class="img__gallery" id="img-2">
            <img src="https://tse1.mm.bing.net/th?id=OIP.xDjHbTorgy83sHlaTvdyYQHaFf&pid=Api&P=0&w=243&h=181" class="img__gallery" id="img-3">
            <img src="https://tse1.mm.bing.net/th?id=OIP.IIZ6CfkCLpVg2ORESvVB2gHaE8&pid=Api&P=0&w=297&h=199" class="img__gallery" id="img-4">
            <img src="https://tse3.mm.bing.net/th?id=OIP.kp4-jdwZBuaG5nyLznaRRgHaE8&pid=Api&P=0&w=225&h=151" class="img__gallery" id="img-5">
            <img src="https://tse2.mm.bing.net/th?id=OIP.F24GEZiW9t3brwHSGZJT4QHaD4&pid=Api&P=0&w=343&h=181" class="img__gallery" id="img-6">
            <img src="https://tse4.mm.bing.net/th?id=OIP.4kxjWXQ0hhYN-k4BfEbAkQHaEm&pid=Api&P=0&w=243&h=152" class="img__gallery" id="img-7">
            <img src="https://tse1.mm.bing.net/th?id=OIP.SvcI3AoD40_fQ8co3tO9uQHaC7&pid=Api&P=0&w=428&h=170" class="img__gallery" id="img-8">
            <img src="https://tse4.mm.bing.net/th?id=OIP.aRBWXoz8pPjkKSAb1_m63wHaG1&pid=Api&P=0&w=172&h=160" class="img__gallery" id="img-9">
        </section>


        <footer>
            <div class="footer__cont center__row">
                <p>2021 &copyPetsCare</p>
                <div>


                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </div>
            </div>
        </footer>

        <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>
</html>