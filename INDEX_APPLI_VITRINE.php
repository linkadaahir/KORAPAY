<!DOCTYPE html>
<html >
    <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce Immobilier</title>
        <!-- lien de carousel-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!--lien de ont awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <!--lien de la feuille de style-->
        <link rel="stylesheet" href="css/Appli_vitrine.css">
    </head>
    <body>
         <!--debut du header-->
        <header>

            <div class="header-1">

                 <a href="#" class="logo"><img src="korapay/dist/img/habitatsimple.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style=" width:50px; margin-bottom: -20px; opacity: .8 ">
                         Korapay Sarl
                 </a>

                <div class="form-container">

                    <form action="">
                        <input type="search" placeholder="recherche" id="search"/>
                        <label for="search" class="fas fa-search"></label>
                    </form>

                </div>

            </div>

            <div class="header-2">

                <div id="menu" class="fas fa-bars"></div>

                <nav class="navbar">

                    <ul>
                        <li><a class="active" href="#Accueil">Accueil</a></li>
                        <li><a href="#filActualités">fil d'Actualités</a></li>
                        <li><a href="#Historiques">Historiques</a></li>
                        <li><a href="#APropos">A Propos</a></li>

                    </ul>
                </nav>

                <div class="icons">
                    <a href="Pages/Favoris.php" class="fas fa-heart"></a>
                    <a href="Pages/Profile_Appli.php" class="fas fa-user"></a>

                </div>

            </div>
        </header>



        <!--debut de la section Accueil-->
            <section class="Accueil" id="Accueil">

                <div class="home-slider owl-carousel">

                    <div class="item">
                        <img src="Images/lit4.jpg" alt="">
                        <div class="content">
                            <h3>votre agence immobilière</h3>
                            <p>Grace au professionnalisme de l'agence , la vente de nos locaux se realise de facon rapide</p>
                            <a href="#"><button class="btn">Visiter</button></a>
                        </div>
                    
                    </div>


                    <div class="item">
                        <img src="Images/photo1.png" alt="">
                        <div class="content">
                            <h3>Villa d'architecte</h3>
                            <p>Idealement situé à deux minute du métro ,entièrement libéré </p>
                            <a href="#"><button class="btn">Visiter</button></a>
                        </div>
                    
                    </div>

                    <div class="item">
                        <img src="Images/lolo2.jpg" alt="">
                        <div class="content">
                            <h3>l'Accueil reste primordiale</h3>
                            <p>Affiche plein format,  propriété de luxe</p>
                            <a href="#"><button class="btn">Visiter</button></a>
                        </div>
                    
                    </div>

                    <div class="item">
                        <img src="Images/maison-cabine-de-bois.jpg" alt="">
                        <div class="content">
                            <h3>Charlon le pont</h3>
                            <p>coup de coeur pour ce terrain et grande villa</p>
                            <a href="#"><button class="btn">Visiter</button></a>
                        </div>
                    
                    </div>



                </div>

            </section>



          
            <section class="Quartier">
                       <h1 class="heading"><span>Quartier</span></h1>

                        <ul class="controls">
                            <li class="btn button-active" data-filter= "Tous">Tous</li>
                            <li class="btn" data-filter= "Akwa">Akwa</li>
                            <li class="btn" data-filter= "Bepanda">Bepanda</li>
                            <li class="btn" data-filter= "Bonandjo">Bonandjo</li>
                            <li class="btn" data-filter= "Logpom">Logpom</li>
                        </ul>
                        



                    <div class="image-container">
                            
                            <div class="box Akwa">

                                        <div class="image">
                                        <img src="images/016.jfif" alt="">

                                    </div>

                                    <div class="info">
                                        <h3>Akwa (avenue DeLaSalle)</h3>
                                        
                                            <p>1Salon , 4chambres, 1cuisine,2douche</p>
                                       
                                        <div class="subinfo">
                                            <strong class="price">Villa</strong>
                                            <div class="stars">
                                            <a href="pages/maison/Akwa(avenue DeLaSalle).php"><button class="btn">savoir plus+</button></a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
                                
                               
                            </div>


                            <div class="box Akwa">
                                            <div class="image">
                                              <img src="images/0113.jfif" alt="">
                                           </div>

                                           <div class="info">
                                                <h3>Akwa (rond point mtn)</h3>
                                                
                                                    <p>1Salon , 3chambres, 2cuisine,1douche,1magasin</p>
                                            
                                                <div class="subinfo">
                                                    <strong class="price">Villa</strong>
                                                    <div class="stars">
                                                    <a href="pages/maison/Akwa (rondpointmtn).php"><button class="btn">savoir plus+</button></a>

                                                    </div>
                                                </div>
                                          </div>

                                        <div class="overlay">
                                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                                        </div>
  
                               
                            </div>


                        

                            <div class="box Bonandjo">
                                       <div class="image">
                                        <img src="images/014.jfif" alt="">

                                       </div>

                                       <div class="info">
                                            <h3>Bonandjo (service du gouverneur)</h3>
                                            
                                                <p>5Salon , 10chambres, 4cuisine,8douches,15balcons</p>
                                        
                                            <div class="subinfo">
                                                <strong class="price">Immeuble</strong>
                                                <div class="stars">
                                                <a href="pages/maison/Bonandjo(servicedugouverneur).php"><button class="btn">savoir plus+</button></a>

                                                </div>
                                            </div>
                                     </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
                             </div>



                             <div class="box Akwa">
                                            <div class="image">
                                              <img src="images/018.jfif" alt="">
                                           </div>

                                           <div class="info">
                                                    <h3>Akwa (Boulangerie Zepol)</h3>
                                                    
                                                        <p>1Salon , 2chambres, 1cuisine,2douche,balcon</p>
                                                
                                                    <div class="subinfo">
                                                        <strong class="price">Appartement</strong>
                                                        <div class="stars">
                                                        <a href="pages/maison/Akwa(BoulangerieZepol).php"><button class="btn">savoir plus+</button></a>

                                                        </div>
                                                    </div>
                                              </div>

                                        <div class="overlay">
                                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                                        </div>
  
                               
                            </div>


                             <div class="box Bepanda">
                                   
                                   <div class="image">
                                          <img src="images/012.jfif" alt="">
  
                                      </div>
  
                                      <div class="info">
                                            <h3>Bepanda (boulangerie de la paix)</h3>
                                            
                                                <p>1Salon , 4chambres, 1cuisine,1douches,1balcons</p>
                                        
                                            <div class="subinfo">
                                                <strong class="price">Appartement</strong>
                                                <div class="stars">
                                                <a href="pages/maison/Bepanda(boulangeriedelapaix).php"><button class="btn">savoir plus+</button></a>

                                                </div>
                                            </div>
                                     </div>
  
                                      <div class="overlay">
                                          <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                          <a href="#" style="--i:3;" class="fas fa-search"></a>
                                      </div>
                                              
                                  </div>
  


                              <div class="box Logpom">
                                        <div class="image">
                                        <img src="images/019.jfif" alt="">

                                    </div>

                                    <div class="info">
                                                    <h3>Logpom (fin Goudron Bassong)</h3>
                                                    
                                                        <p>4Salons , 7chambres, 5cuisine,8douche</p>
                                                
                                                    <div class="subinfo">
                                                        <strong class="price">Immeuble</strong>
                                                        <div class="stars">
                                                        <a href="pages/maison/Logpom(finGoudronBassong).php"><button class="btn">savoir plus+</button></a>

                                                        </div>
                                                    </div>
                                              </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
                                
                             </div>


                             <div class="box Bonandjo">
                                        <div class="image">
                                          <img src="images/logo11.jpg" alt="">

                                        </div>

                                        <div class="info">
                                                    <h3>Bonandjo (Poste centrale)</h3>
                                                    
                                                        <p>1Salon , 4chambres, 1cuisine,2douches</p>
                                                
                                                    <div class="subinfo">
                                                        <strong class="price">Villa</strong>
                                                        <div class="stars">
                                                        <a href="pages/maison/Bonandjo(Postecentrale).php"><button class="btn">savoir plus+</button></a>

                                                        </div>
                                                    </div>
                                              </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
   
                              </div>


                              <div class="box Bepanda">
                                        <div class="image">
                                        <img src="images/07.jfif" alt="">

                                    </div>

                                    <div class="info">
                                                    <h3>Bepanda (fin Goudron Omnisport)</h3>
                                                    
                                                        <p>1Salon , 3chambres, 1cuisine,2douches</p>
                                                
                                                    <div class="subinfo">
                                                        <strong class="price">Villa</strong>
                                                        <div class="stars">
                                                        <a href="pages/maison/Bepanda(finGoudronOmnisport).php"><button class="btn">savoir plus+</button></a>

                                                        </div>
                                                    </div>
                                              </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
                              </div>

                              <div class="box Bonandjo">
                                        <div class="image">
                                          <img src="images/017.jfif" alt="">

                                        </div>

                                        <div class="info">
                                            <h3>Bonandjo )(Lycee JOSS</h3>
                                            
                                                <p>2Salon , 6chambres, 3cuisine,5douches,4balcons</p>
                                        
                                            <div class="subinfo">
                                                <strong class="price">Appartement</strong>
                                                <div class="stars">
                                                <a href="pages/maison/Bonandjo(LyceeJOSS).php"><button class="btn">savoir plus+</button></a>

                                                </div>
                                            </div>
                                     </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
   
                              </div>



                        <div class="box Bonandjo">
                        <div class="image">
                                          <img src="images/0111.jfif" alt="">

                                        </div>

                                        <div class="info">
                                            <h3>Bonandjo (maliwee)</h3>
                                            
                                                <p>1Salon ,5chambres, 2cuisine,2douches,4balcons</p>
                                        
                                            <div class="subinfo">
                                                <strong class="price">villa</strong>
                                                <div class="stars">
                                                <a href="pages/maison/Bonandjo(maliwee).php"><button class="btn">savoir plus+</button></a>

                                                </div>
                                            </div>
                                     </div>
                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>

                               
                          </div>

                            <div class="box Logpom">
                                        <div class="image">
                                            <img src="images/015.jfif" alt="">

                                        </div>

                                        <div class="info">
                                            <h3>Logpom (Entree IUC)</h3>
                                            
                                                <p>2Salon , 4chambres, 1cuisine,1douches,1balcons</p>
                                        
                                            <div class="subinfo">
                                                <strong class="price">Appartement</strong>
                                                <div class="stars">
                                                <a href="pages/maison/Logpom(EntreeIUC).php"><button class="btn">savoir plus+</button></a>

                                                </div>
                                            </div>
                                     </div>

                                        <div class="overlay">
                                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                                        </div>

                                    
                              </div>



                                 <div class="box Bepanda">
                                   
                                 <div class="image">
                                        <img src="images/0112.jfif" alt="">

                                    </div>

                                    <div class="info">
                                            <h3>Bepanda (Double balles)</h3>
                                            
                                                <p>1Salon , 4chambres, 1cuisine,1douches,1balcons</p>
                                        
                                            <div class="subinfo">
                                                <strong class="price">Appartement</strong>
                                                <div class="stars">
                                                <a href="pages/maison/Bepanda(Doubleballes).php"><button class="btn">savoir plus+</button></a>

                                                </div>
                                            </div>
                                     </div>

                                    <div class="overlay">
                                        <a href="#" style="--i:1;" class="fas fa-heart"></a>
                                        <a href="#" style="--i:3;" class="fas fa-search"></a>
                                    </div>
                                            
                                </div>
                        </div> 

            </section>
        

           
        <!--fin de la section Accueil-->
















        <!--debut de la section fil d'Actualités-->
         <!--   <section class="filActualités" id="filActualités">

                <h1 class="heading"><span>actualités</span></h1>

                <div class="box-container">

                    <div class="box">
                        <div class="image">
                            <img src="images/ampoule.jpg" alt="">

                        </div>

                        <div class="info">
                            <h3>ampoule</h3>
                            <div class="subinfo">
                                <strong class="price"> 100$/- <span> 150$/-</span> </strong>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>

                                </div>
                            </div>
                        </div>

                        <div class="overlay">
                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                        </div>

                    </div>


                    <div class="box">
                        <div class="image">
                            <img src="images/boule.jpg" alt="">

                        </div>

                        <div class="info">
                            <h3>boule grosse</h3>
                            <div class="subinfo">
                                <strong class="price"> 100$/- <span> 150$/-</span> </strong>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>

                                </div>
                            </div>
                        </div>

                        <div class="overlay">
                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                        </div>

                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/meilleurs-fonds.jpg" alt="">

                        </div>

                        <div class="info">
                            <h3>fond beau</h3>
                            <div class="subinfo">
                                <strong class="price"> 100$/- <span> 150$/-</span> </strong>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>

                                </div>
                            </div>
                        </div>

                        <div class="overlay">
                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                        </div>

                    </div>


                    <div class="box">
                        <div class="image">
                            <img src="images/stetoscope.jpg" alt="">

                        </div>

                        <div class="info">
                            <h3>stecoscope grand et enorme</h3>
                            <div class="subinfo">
                                <strong class="price"> 100$/- <span> 150$/-</span> </strong>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>

                                </div>
                            </div>
                        </div>

                        <div class="overlay">
                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                        </div>

                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/unnamed_maison .jpg" alt="">

                        </div>

                        <div class="info">
                            <h3>maison de oouffff!</h3>
                            <div class="subinfo">
                                <strong class="price"> 100$/- <span> 150$/-</span> </strong>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>

                                </div>
                            </div>
                        </div>

                        <div class="overlay">
                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                        </div>

                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/nodam.jpg" alt="">

                        </div>

                        <div class="info">
                            <h3>cest glouck</h3>
                            <div class="subinfo">
                                <strong class="price"> 100$/- <span> 150$/-</span> </strong>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>

                                </div>
                            </div>
                        </div>

                        <div class="overlay">
                            <a href="#" style="--i:1;" class="fas fa-heart"></a>
                            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
                            <a href="#" style="--i:3;" class="fas fa-search"></a>
                        </div>

                    </div>

                </div>

            </section>
         -->
        <!--fin de la section fil d'Actualités-->

   








        <!--debut de la section featured de production-->
          <!-- <section class="feature">
                <h1 class="heading"><span>Etat ouvert</span></h1>
                <div class="row">


                    <div class="image-container">

                        <div class="big-image">

                            <img src="images/prod-1.jpg" alt="">

                        </div>
                        <div class="small-image">

                            <img class="image-active" src="images/prod-1.jpg" alt="">
                            <img src="images/prod-2.jpg" alt="">
                            <img src="images/prod-5.jpg" alt="">
                            <img src="images/prod-5.jpg" alt="">
                            
                        </div>

                    </div>

                    <div class="content">
                            <h3>chaussure</h3>
                           <div class="stars">  

                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>500 reviews</span>
                             </div>
                             <p>jfjwjfvfwnevenvwnweicnowenfcwufwbfwcfwgvccuvcer cc crvcrcvencncvuegvgvbjvjncnsvaejrewrthwr nc gb   hqqc3c34tntyn35ytthn45</p>
                             <strong class="price">10000fcfa <span>1500fcfa</span></strong>
                             <a href="#"><button class="btn">retour</button></a>
                             <a href="#"><button class="btn">savoir plus+</button></a>

                    </div>

                </div>

             
             </section>
           -->

        <!--fin de la section featured de production-->













        <!--debut de la section Historiques-->
         <!-- <section class="Historiques" id="Historiques">

          </section>
         -->
        <!--fin de la section Historiques-->





        





        <!--debut de la section APropos  -->
            <section class="APropos" id="APropos">

             <h1 class="heading"><span>A Propos</span></h1>

                <div class="box-container">

                    <div class="box">
                                    <img src="images/photo2.png" alt="">
                                    <div class="content">
                                          <h3>chaise regroupées</h3>
                                          <p>Nos maisons deja en ventes</p>
                                          <a href="#"><button class="btn">devoiler</button></a>

                                     </div>                 
                    </div>    

                     <div class="box">
                                    <img src="images/photo3.jpg" alt="">
                                    <div class="content">
                                          <h3>La Dame de lecture maison</h3>
                                          <p>Assise dans sa luxieuse maison</p>
                                          <a href="#"><button class="btn">devoiler</button></a>

                                     </div>                 
                    </div>               
                    
                </div>

                <div class="icons-container">

                    <div class="icons">
                        <a href=""><i class="fas fa-shipping-fast"></i></a>
                        <h3>livraison rapide</h3>
                        <p>cette partie se charge de rassurer le client sur les potentielles danger</p>

                    </div>

                    <div class="icons">
                      <a href="">  <i class="fas fa-user-clock"></i></a>
                        <h3>24 * 7 support</h3>
                        <p>cette partie se charge de rassurer le client sur les potentielles danger</p>

                    </div>

                    <div class="icons">
                        <a href=""><i class="fas fa-money-check-alt"></i></a>
                        <h3> le payement</h3>
                        <p>cette partie se charge de rassurer le client sur les potentielles danger</p>

                    </div>

                    <div class="icons">
                        <a href=""><i class="fas fa-box"></i></a>
                        <h3>remplacements</h3>
                        <p>cette partie se charge de rassurer le client sur les potentielles danger</p>

                    </div>

                </div>

            </section>
        <!--fin de la section APropos-->






         <!--debut de la section footerEmail-->
         
                <section class="footerEmail">
                    <h1>Informations classiques</h1>
                    <p>get in touch for latest discounts and undates</p>
                    <form action="">
                        <input type="email" placeholder="entrer votre adresse email">
                        <a href="#"><input type="submit" class="btn"></a>
                    </form>

                 </section>
        <!--fin de la section footerEmail--->

        

         <!--debut de la section footer-->
         
            <section class="footer">

                <div class="box-container">

                    <div class="box">
                        <a href="#" class="logo"><i class="fas fa-shopping-bag"></i> location</a>
                        <p>      Le cas échéant, majoration du loyer en cours de bail consécutive à des travaux d'amélioration
                                          entrepris par le bailleur
                         </p>

                     </div>

                     <div class="box">
                        <h3>liens</h3>
                        <a href="#Accueil">Accueil</a>
                        <a href="#filActualités">fil d'Actualités</a>
                        <a href="#Historiques">Historique</a>
                        <a href="#APropos">A Propos</a>
                     </div>

                     <div class="box">
                        <h3>contact</h3>

                        <p><i class="fas fa-home"></i>
                             mumbai marakesh,inde,japon
                         </p>

                         <p><i class="fas fa-phone"></i>
                             +91000020338
                         </p>

                         <p><i class="fas fa-globe"></i>
                             xyz@toncomptessite.com
                         </p>

                     </div>

                 </div>
              <h1 class="credit">created by <a href="#"><span> Mr. Daahir designer </span> </a>|all location.|</h1> 

            </section>
        <!--fin de la section footer--->


























        <!-- lien de jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--lien du caroussel-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- lien javascript-->
        <script src="js/main.js"></script>
        
    </body>
    
</html>
