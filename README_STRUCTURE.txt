*** Introduction & general comments ***

  * HTML 4.01//EN (strict) throughout (to transition to html5)
  * all pages use the same base stylesheet: micron_main.css 
      (see the commented .txt version of this file for comments on style choices)
    additional style information is included in extra 
      page-specific .css files where necessary
  * major files in main directory - subdirectories are:-
        ./images/      - for general site images
        ./styles/      - for .css style sheets
        ./scripts/     - for php scripts
        ./gallery/     - for images in the "reasearch image gallery"
        ./people/      - for staff personal pages
        ./research/    - for research topic pages
        ./facilities/  - for pages about faciilities
        ./resources/   - for downloadable documents etc.
        ./wiki/        - for static html from wiki snapshot
    !!NB. to make sure includes and links in subdirectories work,
       soft links to the following are required in each:-
         ../micron_headnav.html  ../micron_footer.html  ../images  ../styles 
       note also that micron_headnav.html and micron_footer.html 
        contain absolute paths to links and images which are specific to
        the server: www2.bioch.ox.ac.uk
  * most files are .shtml, which tells the server to look for 
      "includes" (i.e. common "headnav" and "footer" .html files)
    all pages include: micron_headnav.html (header & navigation bar)
                       micron_footer.html (footer)
  * pages that include any php scripting are .php


*** Structure of the main pages ***

!!! Index.html & index.html soft link redirect to micron_home.php !!!

Home/Index page - micron_home.php
  * includes php script to load a random gallery image 
  * also includes a Twitter list widget for the Micron account
      (micron@bioch.ox.ac.uk) - widget code embedded in the html

7 Navigation options in addition to Home -
  * About Us - for people wanting to know more about Micron 
      includes Vision, "Plain English", and how to contact/find
  * People - for those interested in who we are / contact info -
      includes sections about Staff, Micron-associated groups, 
      Oxford bioimaging community and external contacts
  * Research - for those interested in our research (& output) - 
      Advanced Bioimaging (viz. Super-resolution & Localization 
      Microscopy, Image Analysis, Research Image Gallery, Publications
  * Facilities - for potential users who want to know what we have
      Fluorescence microscopes, Image analysis, Electron Microscopy
  * Resources - for students and researchers with questions -
      includes Wiki, FAQs, Protocols, other resources (links etc.)
  * News & Media - for more news & events, including Outreach - 
      Outreach, Image Gallery, News & Events
  * Booking - for existing users who want to book a microscope
      (this is an external LINK, which is hopefully obvious)

