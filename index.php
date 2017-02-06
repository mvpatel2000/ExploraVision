<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Exploravision</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <!-- Header section -->
        <!-- If this section is altered, it has to be changed in every file. -->
        <!-- Image header-bg.jpg is the background for this. -->
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header"> 
            <!-- Logo + Caption -->
            <!-- Change logo.jpg in images folder to update -->
            <div class="mdl-layout__header-row portfolio-logo-row"> 
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">Nanoparticle Prion Treatments</span>
                </span>
            </div>
            <!-- Navigation -->
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="index.php">Overview</a>
                    <a class="mdl-navigation__link" href="problem.html">The Problem</a>
                    <a class="mdl-navigation__link" href="methods.html">Existing Methods</a>
                    <a class="mdl-navigation__link" href="solution.html">Our Solution</a>
                    <a class="mdl-navigation__link" href="outcome.html">Outcome</a>
                </nav>
            </div>
        </header>
        <!-- Navigation Small Screens -->
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.php">Overview</a>
                <a class="mdl-navigation__link" href="problem.html">The Problem</a>
                <a class="mdl-navigation__link" href="methods.html">Existing Methods</a>
                <a class="mdl-navigation__link" href="solution.html">Our Solution</a>
                <a class="mdl-navigation__link" href="outcome.html">Outcome</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <!-- Header for Page -->
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Overview</h2>
                    </div>

                    <!-- Fully horizontal picture -->
                    <div class="mdl-card__media">
                        <!-- Add new image under images folder and update src to have new name. USE JPG. -->
                        <img class="article-image" src="images/cover-00.png" border="0" alt="">
                    </div>

                    <!-- Image Caption -->
                    <div class="mdl-card__supporting-text">
                        <!-- The <strong>  turns the text bold -->
                        <span>https://phys.org/news/2016-05-powering-nanotechnology-world-smallest.html</span>
                    </div>

                    <!-- Main Stuff -->
                    <div class="mdl-grid portfolio-copy">

                        <!-- Basically, you add titles, paragraphs, and images.-->
                        <!-- Each one has a class which contains its number. This is its width out of 12. -->
                        <!-- So for example, width 12 (titles) take up the entire thing whereas 2 6s share the page. -->
                        <!-- If current + new > 12, the new element starts a new line. -->

                        <!-- Start Paragraph Set -->
                        <!-- Title -->
                        <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Prion Diseases</h3>
                        <!-- Paragraph -->
                        <div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding">
                            <!-- Add paragraph in between the ps. -->
                            <p>
                                Prion diseases are a type of neurodegenerative diseases caused by a mutated prion protein (PrP) that are 100% fatal and affect one in every one million people. No successful cures for the disease currently exist and developing technology is inefficient and impractical.
                            </p>
                        </div>
                        <!-- Associated image -->
                        <div class="mdl-cell mdl-cell--6-col">
                            <!-- Add image in images folder and then update the name in src. USE JPG. -->
                            <img class="article-image" src=" images/cover-01.jpg" border="0" alt="">
                            <div class="mdl-card__supporting-text">
                                <span>http://dev.rodpub.com/images/133/864_main.jpg</span>
                            </div>
                        </div>
                        <!-- End Paragraph Set -->

                         <!-- Start Paragraph Set -->
                        <!-- Title -->
                        <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">The Cure</h3>
                        <!-- Paragraph -->
                        <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding">
                            <!-- Add paragraph in between the ps. -->
                            <p>
                                Our vision is to use a highly specific nanoparticle system to target and degrade mutant PrP removing the disease from the human body and preventing its spread. This system relies upon immunoprecipitation with use of nanobodies to determine which proteins to target and the degradation through serine protease. The nanoparticle system will be made with quantum dots as fluorescent probes to tag prions for termination by peroxisomes. Furthermore, a neural dust implants, tiny ultrasonic devices, will be implemented to detect nerve activity and monitor progress of our potential treatment. Our experimental design is both feasible and inexpensive, pointing to the possibility of effective treatment to this deleterious disease.
                            </p>
                        </div>
                        <!-- End Paragraph Set -->
                    </div>
                    <!-- End Main -->
                </div>
            </div>
            <!-- Footer -->
            <footer class="mdl-mini-footer" style="padding-left: 44%">
                <div>
                    Email: nanoparticles@gmail.com
                </div>
            </footer>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>
