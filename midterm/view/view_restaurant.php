<?php 
    require_once('auth.php');
    checkLogin();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory Bites</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
    
    
    <!-- remixicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <nav class="navbar navbar-light bg-light mx-5 justify-space-around">
        <a class="navbar-brand" href="#">
            <i class="ri-restaurant-line"></i>
        </a>
        <div>
            <!-- <button onclick="view_menu()" class="btn btn-primary">View menu</button> -->
            <a href="view/view_menu_items.php" class="btn btn-primary">View Menu</a>
            <a href="view/view_order.php" class="btn btn-info">View Order</a>
            <a href="view/logout.php" class="btn btn-danger" >Logout</a>
            <!-- <button onclick="view_order()" class="btn btn-info">View order</button> -->
            
           
            
            

        </div>
            
       
    </nav>
    

  
    <div class="container container-fluid p-5" id="front-page">
        <h1 class="text-center ">Savory Bites</h1>
       <div class="mb-3 justify-content-center d-flex">
            <a href="#home"  class="btn btn-info mx-1">Home</a>
            
            <a href="#about"  class="btn btn-info mx-1">About Us</a>
            <a href="#frachise"  class="btn btn-info mx-1">Franchising</a>
            <a href="#contact"  class="btn btn-info mx-1">Contact Us</a>
       </div>
        <section id="home " class="d-flex justify-content-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                <img src="resources/caro1.jpg" class="d-block " width="700" height="700" alt="...">
                
                </div>
                <div class="carousel-item">
                <img src="resources/caro2.jpg" class="d-block "  width="700" height="700" alt="...">
                
                </div>
                <div class="carousel-item">
                <img src="resources/caro3.jfif" class="d-block"  width="700" height="700" alt="...">
               
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </section>



        <section id="about">
            <h1 class="text-center text-danger">Company Profile</h1>
            <p>Savory Bites is owned and managed by the <span class="text-danger">Ligma Corporation </span>through its food group subsidiary, <span class="text-danger">longgadog Holdings, Inc.</span>, fully acquiring all <span class="text-danger">Savory Bites</span> in the Philippines, becoming the master franchisee of <span class="text-danger">Savory Bites</span> in the country.</p>

            <h1 class="text-center text-danger">The Savory's Promise</h1>
            <p>We are committed to giving you fresh, delicious meals every step of the way. Sounds simple right? <br>
            This is the simple belief that we keep in mind, to serve great-tasting products every single day. Every one of our employees is focused on your satisfaction, and your loyalty to great food has helped us earn our place as an all-time favorite around the world. <br> 
            Quality is our recipe. That’s our secret to make sure that anytime is the best time for Wendy’s.
            </p>

            <h1 class="text-center text-danger"> Dave Legacy</h1>
            <p><span class="text-danger">Savory Bites</span> was founded by <span class="text-danger">John Isis Bantog</span> in 1969 and named after his <span class="text-danger">Ligma</span>.

                When <span class="text-danger">John Isis</span> opened the first Savory restaurant in Columbus, Ohio, he opened the door to a new standard in quality food. John Isis developed an innovative method to prepare made-to-order hamburgers, allowing the staff to quickly serve high quality food on a daily basis. Quality meant everything to John, but it was not just about the food. His passion was seen in the way he lived his days, even coining the phrase “Quality is our Recipe’ and making it a part of the Savory's way of life.

                Today, the number of Savory Bites restaurants worldwide grew to over 6,500. His words “We don’t cut corners on quality “affected everything from the hamburgers to customer service, and the insistence to freshness lives on even after passing in 2002.

                So whenever you visit our stores, we hope to remind you of John Isis' legacy to his customers and his dedication to serve honest food made from fresh, natural, high quality ingredients. We do not just do things differently. We do things better.
            </p>

            <h1 class="text-center text-danger">Our Food</h1>
            <p>Our customers can rely on getting great-tasting food from all our restaurants. Our hamburgers are always freshly prepared, the salads crisp and fresh, and the chili rich and meaty. The Frosty is rich and creamy, the fries hot and crispy, the chicken tender and flavorful. We make use of ingredients that are the highest quality. <br>

                Our hamburgers are made hot and juicy, and served on premium quality buns. Savory Bite's hamburgers do not sit under warming lamp. They come off the grill onto the bun and into our customer’s hands. <br>

                Our salads are prepared fresh each day in our restaurants with greens, fresh topping served with Thousand Island, Caesar salad or Ranch dressings. <br>

                Our Natural-Cut French fries, seasoned with sea salt, are served hot and crispy from the fryer. The list goes on.<br>

                Making sure every customer receives the freshest food is who we are. It’s the way we’ve done it from Day One. And it’s the way we always will.<br>

            </p>

            <h1 class="text-center text-danger">The Savory Bite's Brand</h1>
            <p>Wendy’s stand for honest food, high quality, fresh & wholesome ingredients: <br>

               <span class="text-danger w-100">PRODUCT: </span>  We custom-prepare honest, great-tasting food made with fresh and natural ingredients.

              <br> <span class="text-danger"> EXPERIENCE:</span> We are friendly, efficient and clean. We welcome you with Wendy’s mark of passionate hospitality.

              <br> <span class="text-danger">COMMITMENT:</span> We truly value every customer and demonstrate our commitment by providing a cut above restaurant experience at fast food prices.

              <br> <span class="text-danger">ORGANIZATION:</span> We don’t cut corners. Our entire organization is driven by the values of John Isis, our founder.</p>


        </section>


        


        <section id="frachise">
            <div class="container">
                <div>
                    <h3 class="text-center text-danger">Franchise Overview</h3>
                    <p>With the success of our brand in the past 3 years, we are now opening Wendy’s for franchising opportunities. With a passionate team behind the brand, we have beaten pre-pandemic same-store sales and consistently over the past 6 quarters, thru new product platforms, stronger campaigns, operational efficiencies and quality focus that drive customer satisfaction. <br><br>

                        As we unfold our growth story, we seek new partners that share the same passion, entrepreneurial spirit, and dedication to serve the Wendy’s experience to more cities in Luzon. <br><br>

                        As what our founder Dave Thomas says, “We do not just do things differently, we do thing better.” <br><br>
                    </p>
                </div>
                
                <div>
                    <h3 class="text-danger">WHY FRANCHISE WITH US</h3>
                    <div class="">
                        <h3>We Keep It Fresh</h3>
                        <p>
                            We stand for honest food, high quality, fresh and wholesome ingredients. <br><br>

                            Our hamburgers are made of 100% beef and always served hot-off-the-grill, the healthy salads crisp and fresh, the chicken tender and flavorful, and rice bowls crave-worthy and generous. The Frosty is rich and creamy, the natural-cut fries hot and crispy, iced tea real-brewed and refreshing . We make use of ingredients that are finest in quality.<br><br>
 
                            Making sure every customer receives the freshest food is who we are. It’s the way we’ve done it from Day One. And it’s the way we always will.<br><br>
                        </p>
                        <h3 class="text-danger">We Keep It Convinient</h3>
                        <div class="row">
                            <div class="col">
                                <b >We made Flexible Store Formats</b>
                                <li>Free-Standing Restaurant with Drive-Thru</li>
                                <li>Lean Store with Drive-Thru</li>
                                <li>Inline (outdoor or in-mall)</li>

                            </div>
                            <div class="col">
                                <b >With Easy Customer Accessibility</b>
                                <li>Take-out</li>
                                <li>Dine In</li>
                                <li>Delivery</li>
                                <li>Drive-Thru</li>
                                <li>24/7 Operations</li>
                                <li>E-commerce Platforms</li>
                            </div>
                        </div>

                        <div class="">
                            <h3 class="text-danger">We Keep Ut Simple</h3>
                            <b>Here’s who we are looking for</b>
                            <li>Dedicated to Quality, Efficiency, and Customer Satisfaction</li>
                            <li>With Financial Capability and Growth Mindset</li>
                            <li>Familiar with Food or Restaurant Operations</li>

                            <div class="row">
                                <div class="col">
                                    <b>Here’s our pre-opening support:</b>
                                    <li>Site Assessment and Store Design</li>
                                    <li>Store Construction and Project Management</li>
                                    <li>Training and Manpower Support</li>
                                    <li>Store Grand Opening Program</li>
                                </div>

                                <div class="col">
                                    <b>And our continuing business support</b>
                                    <li>Marketing</li>
                                    <li>Logistics and Supply</li>
                                    <li>Technology solution</li>
                                    <li>Growth and Expansion Opportunities</li>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h1 class="text-danger">We Keep It Growing</h1>

                                <p>Savory Bite's is turning up the heat, and we’re ready for passionate entrepreneurs to join our expansion. So why grow with Savory Bite's? <br><br>

                                    A Proven Recipe for Success.  Savory Bite's global standard has meticulously evolved through the years to deliver the best quality to our customers.  We’ve created a brand that resonates with people of all ages, forging memories and a loyal fan base.  With a winning formula and a thriving local fast-food industry, you’ll be serving up smiles to a market that is always hungry for quality, innovation, and experience.<br><br>

                                    Scalability.  Hungry for growth?  Our variety of store formats and structure franchise model provides a scalable business with a robust operational framework, streamlined system, and continuous territorial expansion opportunity that allows you to strategically grow business.  We sealed this with and award from Savory's International, the 2022 International Monument Award for Visionary Growth and Expansion.<br><br>

                                    Innovation.  We believe in constantly challenging boundaries.  Our menu is playground of bold innovation and culture fusion that cater to diverse tastes.  With us, impossible ideas come to life to bring you one step ahead.
                                </p>
                            </div>
                        </div>


                    </div>
                    
                </div>
                

            </div>

        </section>

        <section id="contact">

        <form>
            <h1 class="text-center text-danger">Contact Us</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>

        </section>

    </div>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>    


    <?php include("footer.php")?>