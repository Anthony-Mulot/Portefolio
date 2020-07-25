<!DOCTYPE html>
<html lang="fr">

<head>
    <?php

    ?>
    <title>Portefolio</title>
    <meta charset="UTF-8">

    <!--[if IE]-->
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <!-- [endif] -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" id="" href="img/logo.png" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
    <link href="style.css" rel="stylesheet">
</head>
<header>
    <nav id="" class="flex bg-white ">
        <a href="" class="mr-auto"><img class="w-16" src="img/logo.png"></a>

        <div class="flex  ml-auto">

            <div class=" flex ml-auto">
                <ul id="menu" class="flex  mr-16 items-center text-lg  ">
                    <li class=" m-3 hover:text-blue-600 font-semibold"><a href="" style="color: #4378FF;">Accueil</a> </li>
                    <li class="text-black m-3 hover:text-blue-600 "><a href="#ancre1">Projets</a></li>
                    <li class="text-black m-3 hover:text-blue-600"><a href="#ancre2">Competences</a></li>
                    <li class="text-black m-3 hover:text-blue-600"><a href="#ancre3">Infos & contacts</a></li>
                    <a href="Cv.pdf" class="text-lg text-black rounded-lg font-semibold p-1 hover:shadow-xs hover:text-blue-500">Telecharger mon CV</a>
                </ul>
            </div>

        </div>

        <div id="hamburger">
            <div class="line" id="one"></div>
            <div class="line" id="two"></div>
            <div class="line" id="three"></div>
        </div>

        
            <div class="mobile-menu bg-blue-600  ">
                <ul class="mobile-menu__items text-center text-4xl ">
                    <li class="hover"><a class="" href="">Accueil</a></li>
                    <li class="hover"><a href="#ancre1">Projets</a></li>
                    <li class="hover"><a href="#ancre2">Competences</a></li>
                    <li class="hover"><a href="#ancre3">Infos & contacts</a></li>
                    <li><a href="Cv.pdf" class="text-lg text-black rounded-lg font-semibold p-1 hover:shadow-xs hover:text-blue-500">Telecharger mon CV</a></li>

                </ul>
            </div>
        
    </nav>
</header>

<body class="text-white  ">
    <div id="front" class="block">
        <h1 id="titre" class="text-center  lg:mr-4 justify-center font-bold  ">ANTHONY MULOT</h1>
        <?php
        if (isset($_GET['submit'])) {

            echo "confirmation de l'envoi du contact";
        }
        ?>
        <div class="content">
            <div class="content__container">
                <p class="content__container__text">
                    Hello
                </p>
                <ul class="content__container__list">
                    <li class="content__container__list__item">world !</li>
                    <li class="content__container__list__item">max!</li>
                    <li class="content__container__list__item">users !</li>
                    <li class="content__container__list__item">everybody !</li>
                </ul>
            </div>
        </div>

    </div>

    <body class="text-white ">
        <div id="presentation" class=" justify-center text-center ">
            <p class="lg:mx-40 lg:mx-40 mt-48 mb-10 mx-10 text-justify font-bold" id="titre2">
                Diplômé du CESI de vandoeuvre les Nancy, je suis à la recherche d’une alternance d'une année en RIL "Responsable Ingienerie des Logiciels" pour aquérir des compétences supplémentaires .</br>
            </p>
            <p class="lg:mx-40 lg:mx-40 mt-10 mb-10 mx-10 text-justify font-bold" id="titre2">Un précédent stage chez Soludoc m’a permis d’acquérir des compétences techniques et de confirmer mon envie de travailler dans l’univers du developpement informatique.
                </br></br> Créatif, rigoureux et dynamique,
                je souhaite mettre mes compétences à profit pour soutenir vos équipes.
            </p>
        </div>
        <div id=container class="text-center">
            Make
            <div id=flip>
                <div>
                    <div>wOrK</div>
                </div>
                <div>
                    <div>lifeStyle</div>
                </div>
                <div>
                    <div>Everything</div>
                </div>
            </div>
            AweSoMe!
        </div>
        <h2 id="ancre1" class="text-black uppercase  font-semibold text-center text-3xl lg:text-4xl pt-20 pb-20 ">Mes projets</h2>
        <div id="module2" class=" mx-20  flex justify-around">
            <div class="lg:flex xl:flex  p-6">
                <div class="flip-card xl:mr-8 lg:mr-8 xl:ml-4 lg:ml-4 mx-auto lg:mb-0 mb-8  ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front ">
                            <img class="" src="img/image1.jpg" alt="Avatar" style="width:300px;height:250px;background-size:cover;background-position:center">
                        </div>
                        <div class="flip-card-back">
                            <h1 class="mt-6 text-xl font-semibold">Projet web en formation</h1>
                            <p class="mt-6">Site de recette de cuisine</p>
                            <p class="mt-6 mb-5">Techno: </br> PHP7 / HTML / CSS / Javascript</p>
                            <a class="font-bold hover:text-blue-300" href="https://github.com/Anthony-Mulot/Projet_web_php">Lien Github</a>
                        </div>
                    </div>
                </div>
                <div class="flip-card lg:mr-8 xl:mr-8 mx-auto lg:mb-0 mb-8">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/nettoy.jpg" alt="Avatar" style="width:300px;height:250px;">
                        </div>
                        <div class="flip-card-back">
                            <h1 class="mt-6 text-xl font-semibold">Projet web en cours</h1>
                            <p class="mt-6">Site professionel nettoyage automobile</p>
                            <p class="mt-6">Techno: </br> PHP7 / HTML / CSS / Javascript </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card lg:mr-8 xl:mr-8 mx-auto lg:mb-0 mb-8 ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front ">
                            <img class="bg-center bg-cover" src="img/avengers.gif" alt="Avatar" style="width:300px;height:250px;">
                        </div>
                        <div class="flip-card-back">
                            <h1 class="mt-6 text-xl font-semibold">Projet web en formation</h1>
                            <p class="mt-6">Application web "Avengers"</p>

                            <p class="text-justify text-sm m-4 h-full">L'application est destiné à toute la population et aux supers héros. L'application donne la possibilité à un civil de
                                declarer un incident avec plusieurs details , qui permetteront ou non de faire intervenir un avengers . </br></br>
                                Projet réalisé en 1 Mois pour valider un module de notre formation developpeur informatique. </br></br>
                                Equipe : 4 Super-dev
                            </p>
                            <p class="mt-6 mb-2">Techno: </br> Java , Framework Spring + Thymeleaf</p>
                            <a class="font-bold hover:text-blue-300" href="https://github.com/Fanokiller/ProjetAvengerV2.0">Lien Github</a>
                        </div>
                    </div>
                </div>
                <div class="flip-card lg:mr-8 xl:mr-8 mx-auto lg:mb-0 mb-8 ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front ">
                            <img class="" src="img/img6.jpg" alt="Avatar" style="width:300px;height:250px;">
                        </div>
                        <div class="flip-card-back">
                            <h1 class="mt-6 text-xl font-semibold">Projet web en formation</h1>
                            <p class="mt-6">Site de recette de cuisine</p>
                            <p class="mt-6">Techno: </br> Php / Html / Css / Javascript</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mb-20 ">
            <h2 id="ancre2" class="text-black font-semibold uppercase text-center text-3xl lg:text-4xl mt-20  mb-20">Mes competences</h2>
            <div id="" class="lg:flex">
                <div class=" w-full ">
                    <div class="flex items-center mt-1">
                        <div class="w-1/5 text-indigo-500 flex tracking-tighter">
                            <ion-icon id="logoc" class="mx-auto" name="logo-html5"></ion-icon>
                        </div>
                        <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-8/12 bg-indigo-600 rounded-lg h-2"></div>
                            </div>
                        </div>
                        <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-xl">80%</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-1">
                        <div class="w-1/5 text-indigo-500 flex tracking-tighter">
                            <div class="mx-auto">
                                <ion-icon id="logoc" class="mx-auto" name="logo-css3"></ion-icon>
                            </div>
                        </div>
                        <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-7/12 bg-indigo-600 rounded-lg h-2"></div>

                            </div>
                        </div>
                        <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-xl">65%</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-1">
                        <div class="w-1/5  text-indigo-500 tracking-tighter">
                            <img class="w-24 mx-auto " src="img/logophp.png">
                        </div>
                        <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-5/12 bg-indigo-600 rounded-lg h-2"></div>
                                <p class="text-black text-sm xl:text-lg font-semibold font-italic">Initiation framework symphony - Maitrise PDO - POO - integration</p>
                            </div>
                        </div>
                        <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-xl">45%</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-1">
                        <div class="w-1/5 text-indigo-500 tracking-tighter">
                            <img style="height: 120px;width:80px" class="mx-auto " src="img/logjav.png">
                        </div>
                        <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-4/12 bg-indigo-600 rounded-lg h-2"></div>
                                <p class="text-black  text-sm xl:text-lg font-semibold font-italic">Utilisation Framework "SpringBoot" + Thymeleaf .</p>
                            </div>
                        </div>
                        <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-xl">35%</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-1">
                        <div class="w-1/5 text-indigo-500 flex tracking-tighter">
                            <ion-icon id="logoc" class="mx-auto" name="logo-javascript"></ion-icon>
                        </div>
                        <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-4/12 bg-indigo-600 rounded-lg h-2"></div>
                            </div>
                        </div>
                        <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-xl">25%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex p-5  lg:m-0">
            <!-- FORMULAIRE DE CONTACT -->
            <div id="ancre3" class="lg:w-1/2 ">
                <h1 id="titre3" class="text-center font-semibold uppercase ">Me Contacter</h1>
                <form class="w-full mx-auto max-w-lg mb-20 mt-10" method="post" action="fonctions.php">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prenom">
                                Prenom :
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text" placeholder="" required>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nom">
                                Nom :
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="lastname" name="lastname" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                Adresse mail:
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email" placeholder="exemple@mail.com" required>
                            <p class="text-gray-600 text-xs italic"></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="ville">
                                Ville :
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="ville" name="ville" type="text" placeholder="Paris" required>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pays">
                                Pays :
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pays" name="pays" required>
                                    <option>France</option>
                                    <option>Allemagne</option>
                                    <option>Belgique</option>
                                    <option>Suisse</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="postal">
                                Code Postal :
                            </label>
                            <input maxlength="5" pattern="[0-9]{5}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="postal" id="postal" type="text" placeholder="90210" required>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Votre message :
                            </label>
                            <textarea class="appearance-none lg:max-w-xl  max-w-xs   block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Bonjour .." type="text" rows="10" cols="70" name="message" id="message" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" id="button" name="submit" value="1" class="p-3 px-8 mt-4 shadow-xl rounded-lg text-lg ">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="">
                <img class="" id="setup" src="img/setup.jpg" class="">
            </div>
        </div>
        <!-- -->
        <script>
            document.getElementById("hamburger").addEventListener("click", function() {
                this.classList.toggle("active");
                document.querySelector(".mobile-menu").classList.toggle("active");
            });
        </script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"> </script>
        <script src="https://kit.fontawesome.com/cd3053ba4f.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
        <script src="script.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    </body>
    <footer>
        <div class="container mx-auto justify-around px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div id="" class="text-center  flex rounded-lg  ">
                    <div id="" class=" flex mx-auto ">
                        <img id="antho" src="img/antho1.jpg" class="w-full z-40 text-center  rounded-full border-4 " alt="">
                    </div>
                </div>
                <div class="xl:mx-auto lg:mx-auto">
                    <div class="flex mx-auto mx-auto border-b xl:pb-0 lg-pb-0 pb-8 border-blue-500 text-white ">
                        <div class=" text-center hidden lg:inline-block xl:inline-block  text-md mx-6">
                            <ul class="list-reset text-left mb-6">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline  hover:text-blue-500">Vehicula fringilia
                                        suspenndisse</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline  hover:text-blue-500">vulplutate
                                        convallis massa </a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline  hover:text-blue-500">aliquam gravida
                                        lacinia</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline  hover:text-blue-500">nulla dictum
                                        praesent</a>
                                </li>
                            </ul>
                        </div>
                        <div class=" mx-auto  lg:mt-0 mt-6 lg:mx-0 flex text-md text-center  xl:mx-6 lg:mx-6">
                            <div class=" xl:hidden lg:hidden text-white text-md lg:ml-32 items-center  ">
                                <div class="">
                                    <p class="font-bold mb-2">NOUS CONTACTER </p>
                                    <p class="mb-2">96 rue de la colline </br> 54000 Nancy</p>
                                    <p class="mb-2">06 33 50 47 32 </p>
                                    <a class="text-white hover:text-blue-700" href="mailto:anthonym-54@hotmail.fr">Anthonym-54@hotmail.fr</a>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center text-md text-white">
                        <ul class="list-reset mb-6">
                            <div class="xl:mx-8 lg:mx-8 text-left">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    @ 2020 Copyright .Tous droits reservés
                                </li>
                            </div>
                            <div class="flex xl:mx-8 lg:mx-8 text-left">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline border-r pr-2 mr-2 hover:text-blue-500">Mentions Légales</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class=" no-underline hover:underline   hover:text-blue-500">Plan du site</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="hidden xl:block lg:block text-white text-md items-center  ">
                    <div class=" m-10 mt-4">
                        <p class="font-bold mb-2">NOUS CONTACTER </p>
                        <p class="mb-2">96 rue de la colline </br> 54000 Nancy</p>
                        <p class="mb-2">06 33 50 47 32 </p>
                        <a class="text-white hover:text-blue-900 hover:border-b hover:border-white" href="mailto:anthonym-54@hotmail.fr">Anthonym-54@hotmail.fr</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</html>