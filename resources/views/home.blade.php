@extends('layouts.app')

@section('content')


    <div class="loader_bg">
        <div class="loader "></div>
    </div>

    <nav class="main-nav">
        <ul class="ul__first relative">
            <li id="logo">
                <a href="#">b</a>
            </li>
        </ul>
        <ul class="ul__second">
            <li class="px-4"><a href="#home">L'accueil</a></li>
            <li class="px-4"><a href="#resume">A propos</a></li>
            <li class="px-4"><a href="#projects">Projets</a></li>
            <li class="px-4"><a href="#tools">Outils</a></li>
            <li class="px-4"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <canvas id="canvas3d" class="absolute"></canvas>

    <div class="outer-wrapper ">
        <div class="wrapper">

            <!-- Slide ONE -->
            <div id="home" class="slide one flex">
                <div class="relative  text-4xl w-full h-full self-center mx-auto flex flex-col">
                    <p class="text-center  text-5xl custom-police pt-20 pb-20">BIENVENUE</p>
                </div>
            </div>

            <!-- Slide TWO -->
            <div id="resume" class="slide two flex">
                <div class="relative  text-4xl w-full h-full self-center mx-auto flex flex-col">
                    <p class="text-center  text-5xl custom-police pt-20 pb-20">À propos</p>
                </div>

            </div>

            <!-- Slide THREE -->
            <div id="projects" class="slide three flex">
                <div class="relative  text-4xl w-full h-full flex  justify-center ">

                    <div class="flex w-1/3 h-screen">
                        <p class="flex mx-auto  text-5xl custom-police self-center">Mes projets</p>
                    </div>

                    <!-- Projects -->

                    <div class="flex w-2/3 h-screen ">
                        <div
                            class="w-5/6 mx-auto  h-5/6 self-center justify-center   flex">
                            <!-- component -->
                            <div class=" rounded-2xl w-full  overflow-auto custom-overflow ">

                                <div class="flex  ">
                                    <div
                                        class="h-full text-left custom-height-project  w-full justify-end  ">
                                        <div class="flex  ">
                                            <div class="w-1/2 pl-5 pr-5 bg-white rounded-bl-2xl rounded-tl-2xl opacite-left  flex">
                                                <img
                                                    class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                    src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                    alt="">

                                            </div>
                                            <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                <div class="flex flex-col self-center">
                                                    <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                            dolor sit amet, consectetur adipisicing elit. Corporis id
                                                            pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                            fugit harum
                                                            labore molestias nesciunt optio quas sit totam veritatis
                                                            vero
                                                            voluptatem.</p></div>
                                                    <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                            href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                            target="_blank"
                                                            class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                            au projet 😎
                                                        </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex  ">
                                    <div
                                        class="h-full text-left custom-height-project  w-full justify-end  ">
                                        <div class="flex  ">
                                            <div class="w-1/2 pl-5 pr-5 bg-white rounded-bl-2xl rounded-tl-2xl opacite-left  flex">
                                                <img
                                                    class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                    src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                    alt="">

                                            </div>
                                            <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                <div class="flex flex-col self-center">
                                                    <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                            dolor sit amet, consectetur adipisicing elit. Corporis id
                                                            pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                            fugit harum
                                                            labore molestias nesciunt optio quas sit totam veritatis
                                                            vero
                                                            voluptatem.</p></div>
                                                    <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                            href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                            target="_blank"
                                                            class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                            au projet 😎
                                                        </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex  ">
                                    <div
                                        class="h-full text-left custom-height-project  w-full justify-end  ">
                                        <div class="flex  ">
                                            <div class="w-1/2 pl-5 pr-5 bg-white rounded-bl-2xl rounded-tl-2xl opacite-left  flex">
                                                <img
                                                    class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                    src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                    alt="">

                                            </div>
                                            <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                <div class="flex flex-col self-center">
                                                    <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                            dolor sit amet, consectetur adipisicing elit. Corporis id
                                                            pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                            fugit harum
                                                            labore molestias nesciunt optio quas sit totam veritatis
                                                            vero
                                                            voluptatem.</p></div>
                                                    <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                            href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                            target="_blank"
                                                            class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                            au projet 😎
                                                        </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex  ">
                                    <div
                                        class="h-full text-left custom-height-project  w-full justify-end  ">
                                        <div class="flex  ">
                                            <div class="w-1/2 pl-5 pr-5 bg-white rounded-bl-2xl rounded-tl-2xl opacite-left  flex">
                                                <img
                                                    class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                    src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                    alt="">

                                            </div>
                                            <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                <div class="flex flex-col self-center">
                                                    <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                            dolor sit amet, consectetur adipisicing elit. Corporis id
                                                            pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                            fugit harum
                                                            labore molestias nesciunt optio quas sit totam veritatis
                                                            vero
                                                            voluptatem.</p></div>
                                                    <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                            href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                            target="_blank"
                                                            class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                            au projet 😎
                                                        </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex  ">
                                    <div
                                        class="h-full text-left custom-height-project  w-full justify-end  ">
                                        <div class="flex  ">
                                            <div class="w-1/2 pl-5 pr-5 bg-white rounded-bl-2xl rounded-tl-2xl opacite-left  flex">
                                                <img
                                                    class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                    src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                    alt="">

                                            </div>
                                            <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                <div class="flex flex-col self-center">
                                                    <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                            dolor sit amet, consectetur adipisicing elit. Corporis id
                                                            pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                            fugit harum
                                                            labore molestias nesciunt optio quas sit totam veritatis
                                                            vero
                                                            voluptatem.</p></div>
                                                    <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                            href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                            target="_blank"
                                                            class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                            au projet 😎
                                                        </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>




                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Slide Tools -->
            <div id="tools" class="slide four flex">
                <div class="relative  text-4xl w-full h-full self-center mx-auto flex flex-col">
                    <p class="text-center  text-5xl custom-police pt-20 pb-20">Mes outils</p>
                    <div class="glide self-center mx-auto ">

                        <div class="glide__track relative custom-police" data-glide-el="track">
                            <ul class="glide__slides  ">
                                <li class="glide__slides relative  flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/figma.jpeg"
                                            class=" h-64   right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">FIGMA</h1>
                                                <p class="text-sm font-bold">Éditeur graphique</p>

                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2"> Figma est un éditeur de
                                                    graphiques vectoriels et un outil de prototypage. Il est
                                                    principalement basé sur le web, avec des fonctionnalités hors
                                                    ligne
                                                    supplémentaires activées par des applications de bureau pour
                                                    macOS
                                                    et Windows.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://www.figma.com/" target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/spline.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">SPLINE</h1>
                                                <p class="text-sm font-bold">Éditeur 3D</p>

                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2"> Spline est un outil
                                                    gratuit
                                                    pour créer des expériences web en 3D.
                                                    Il est possible d’ajouter des
                                                    formes : cube, sphère, carré, rectangle, de les modifier
                                                    (couleur,
                                                    forme, bord…), du texte peut également être ajouté.
                                                    Pour ceux qui souhaitent exporter leurs créations, une option
                                                    est
                                                    possible. Vous pouvez intégrer la
                                                    création à un site web en copiant le code.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://spline.design/" target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/css.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">CSS</h1>
                                                <p class="text-sm font-bold">Langage</p>
                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2"> Le CSS est l'un des
                                                    langages
                                                    principaux du Web ouvert et a été standardisé par le W3C.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://developer.mozilla.org/fr/docs/Web/CSS"
                                                   target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/html.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80 w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6 ">
                                                <h1 class="font-bold text-2xl">HTML</h1>
                                                <p class="text-sm font-bold">Langage balistique</p>
                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2">Il est utilisé afin de
                                                    créer
                                                    et de représenter le contenu d'une page web et sa structure.
                                                    D'autres technologies sont utilisées avec HTML pour décrire la
                                                    présentation d'une page.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://developer.mozilla.org/fr/docs/Web/HTML"
                                                   target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/js.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">JAVASCRIPT</h1>
                                                <p class="text-sm font-bold">Langage</p>
                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2">Le JavaScrip est un
                                                    langage de
                                                    script léger, orienté objet,
                                                    principalement connu comme le langage de script des pages web.
                                                    C'est un langage à objets utilisant le concept de prototype,
                                                    disposant d'un
                                                    typage faible et dynamique qui permet de programmer suivant
                                                    plusieurs paradigmes de programmation : fonctionnelle,
                                                    impérative et
                                                    orientée objet.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://developer.mozilla.org/fr/docs/Web/javascript"
                                                   target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/php.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">PHP</h1>
                                                <p class="text-sm font-bold">Langage</p>
                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2">PHP est un langage de
                                                    scripts
                                                    généraliste et Open Source, spécialement conçu pour le
                                                    développement
                                                    d'applications web. Il peut être intégré facilement au HTML.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://www.php.net/manual/fr/intro-whatis.php"
                                                   target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/laravel.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">LARAVEL</h1>
                                                <p class="text-sm font-bold">Framework Backend</p>
                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2">Laravel est un framework
                                                    d'application Web avec une syntaxe expressive et élégante. Un
                                                    framework Web fournit une structure et un point de départ pour
                                                    créer
                                                    votre application, vous permettant de vous concentrer sur la
                                                    création de quelque chose d'extraordinaire pendant que nous
                                                    transpirons les détails.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://laravel.com/docs/8.x#why-laravel" target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/nuxt.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">NUXT</h1>
                                                <p class="text-sm font-bold">Framework Frontend</p>
                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2">Construisez votre
                                                    prochaine
                                                    application Vue.js en toute confiance en utilisant NuxtJS. Un
                                                    framework open source qui rend le développement web simple et
                                                    puissant.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://fr.nuxtjs.org/docs/2.x/get-started/installation"
                                                   target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slides relative mx-auto flex ">
                                    <div class="mx-auto  self-center ">
                                        <img
                                            src="/img/Tailwindcss.jpg"
                                            class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                            alt="">
                                        <div
                                            class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                            <div class="h-1/6">
                                                <h1 class="font-bold text-2xl">TAILWINDCSS</h1>
                                                <p class="text-sm font-bold">Framework CSS</p>


                                            </div>

                                            <div class="h-3/6 pt-6">
                                                <p class="text-justify text-sm pl-2 pr-2"> Tailwind CSS est un
                                                    framework
                                                    CSS de bas niveau, hautement personnalisable, qui vous donne
                                                    tous
                                                    les éléments de base dont vous avez besoin pour créer des
                                                    conceptions sur mesure sans avoir à vous battre avec des styles
                                                    préexistants par défaut.</p>
                                            </div>

                                            <div class="h-2/6 flex self-center">
                                                <a href="https://tailwindcss.com/docs" target="_blank"
                                                   class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                    plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button
                                class="glide__arrow glide__arrow--left transform hover:scale-125 transition duration-300"
                                data-glide-dir="<"><
                            </button>
                            <button
                                class="glide__arrow glide__arrow--right transform hover:scale-125 transition duration-300"
                                data-glide-dir=">">>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div id="contact" class="slide five">
                <p class="text-center  text-5xl custom-police pt-20 py-8   ">Contactez-moi 📞</p>
                <section class="">

                    <div class="container">
                        <div class="contactinfo  reveal-1 rounded-xl">
                            <div>
                                <h2>Contact Info</h2>
                                <ul class="info py-2">
                                    <li class="flex">
                                    <span class="flex self-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                              fill="#130F26"/>
                                        <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="#130F26"/>
                                        </svg>
                                        </span>
                                        <span class="text-1xl flex self-center">Sur la
                                            </span>
                                        <p class=" flex text-4xl pl-2 opacity-25 hover:opacity-75">🌎</p>

                                    </li>
                                    <li>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"
                                              fill="black"/>
                                        </svg>
                                    </span>
                                        <span>samy.alexandre85@gmail.com</span>
                                    </li>
                                    <li>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z"
                                              fill="#130F26"/>
                                        </svg>

                                        </span>
                                        <span>06 61 79 86 84</span>
                                    </li>
                                </ul>
                            </div>
                            <ul class="sci">
                                <li><a href="https://www.linkedin.com/in/samy-alexandre-1b22551b7/">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="black"/>
                                            <path
                                                d="M28 20.7444V26.2601H24.7713V21.0807C24.7713 19.8027 24.3004 18.9283 23.157 18.9283C22.2825 18.9283 21.7444 19.5336 21.5426 20.0718C21.4753 20.2735 21.4081 20.5426 21.4081 20.8789V26.2601H18.1794C18.1794 26.2601 18.2466 17.5157 18.1794 16.6413H21.4081V17.9865C21.8117 17.3139 22.6188 16.3722 24.3004 16.3722C26.3856 16.3722 28 17.7848 28 20.7444ZM14.8161 12C13.7399 12 13 12.7399 13 13.6816C13 14.6233 13.6726 15.3632 14.7489 15.3632C15.8924 15.3632 16.565 14.6233 16.565 13.6816C16.6323 12.6726 15.9596 12 14.8161 12ZM13.2018 26.2601H16.4305V16.6413H13.2018V26.2601Z"
                                                fill="white"/>
                                        </svg>
                                    </a>
                                </li>


                                <li>
                                    <a href="https://github.com/samsampanda">
                                        <svg width="40" height="40" viewBox="0 0 16 16" fill="black"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"
                                                  fill="#24292E"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="contactForm rounded-xl reveal-2">

                            <form class="formBox" id="Contact" action="https://formspree.io/f/xbjqrkvo"
                                  method="POST">
                                <div class="inputBox  w50 pt-4">
                                    <input maxlength="25" type="text" name="Prénom" id="prenom" required>
                                    <span>Prénom</span>

                                </div>
                                <div class="inputBox w50  pt-4">
                                    <input maxlength="25" type="text" name="nom" id="nom" required>
                                    <span>Nom</span>
                                </div>
                                <div class="inputBox w50 pt-4">
                                    <input type="text" name="mail" maxlength="40" id="mail" required>
                                    <span>Adresse mail</span>
                                </div>
                                <div class="inputBox w50 pt-4">
                                    <input type="text" maxlength="10" max="10" name="Tél" id="telephone" required>
                                    <span>Numéro de téléphone</span>
                                </div>
                                <div class="inputBox w100 pt-4">
                                <textarea maxlength="1000" class="overflow-y-auto resize-none" name="Message"
                                          required></textarea>
                                    <span>Écrivez votre message ici...</span>
                                </div>
                                <div class="inputBox w100 text-center">
                                    <input type="submit" value="Envoyer">
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script async>

        // On load
        setTimeout(function () {

            $('.loader').fadeToggle();
        }, 0);

        setTimeout(function () {

            $('.loader_bg').fadeToggle();
        }, 0);


        // five slide

        const ratio = 0.1

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: ratio
        }

        const handleIntersect = function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.intersectionRatio > ratio) {
                    entry.target.classList.add('reveal-visible')
                    observer.unobserve(entry.target)
                } else {

                }

            })
        }

        const observer = new IntersectionObserver(handleIntersect, options);
        document.querySelectorAll('.reveal-2').forEach(function (r) {
            observer.observe(r)
        })
        document.querySelectorAll('.reveal-1').forEach(function (a) {
            observer.observe(a)
        })


        // Carousel
        const config = {
            type: 'carousel',
            perView: 3
        }

        new Glide('.glide', config).mount();


    </script>
    <style>
        img {
            height: 200px;
            width: 400px;
        }

        .w-custom {
            width: 400px;
        }

        .custom-police {
            font-family: 'Century Gothic';
        }
        .custom-height-project {
            max-height: 410px;
            min-height: 410px;
        }

        /* width */
        .custom-overflow::-webkit-scrollbar {
            width: 10px;

        }

        /* Track */
        .custom-overflow::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        .custom-overflow::-webkit-scrollbar-thumb {
            background: dodgerblue;
        }

        /* Handle on hover */
        .custom-overflow::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .opacite-right {
            background-color: rgb(255, 255, 255); /* alternative solide */
            background-color: rgba(255, 255, 255, 0.75);
        }
        .opacite-left {
            background-color: rgb(255, 255, 255); /* alternative solide */
            background-color: rgba(255, 255, 255, 0.75);
        }


    </style>

@endsection
