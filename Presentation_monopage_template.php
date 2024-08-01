<div class="row">

    <!-- 
    TODELETE (DPQ <-> Brian debug comments)

    general comments:

    missing information:
    
    - need to define how to add title to image, video, audio playbar, etc. (e.g. with h3 tag in same div)
    - need to define centering (left, middle, right) behaviors in template
    - need to define iframe grid behavior (no static size definition), e.g. 
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src=".." frameborder="0" allowfullscreen></iframe>
        </div>
    - generalize above comment to all non text elements (images, pdf, etc.) for automatic centering and resizing on small pages
    -->

    <!-- title and subtitle -->
    <div class="col-sm-12">
    <h1 class="indent-with-toc">
        Titre
        <br>
        <small>
            Sous-titre
        </small>
    </h1>
    </div>

    <!-- the col-..-.. classes below define the page content positioning depending on browser window width. See https://getbootstrap.com/docs/4.1/layout/grid for more details -->

    <!-- table of content (automatic generation from <h2> elements in the page -->
    <div class="col-sm-2">
        <nav id="toc" data-toggle="toc" class="sticky-top"></nav>
    </div>

    <!-- main content area -->
    <div class="col-sm-10">

        <!-- 2 columns section with project description and image -->
        <div class="col-sm-6">
            <h2>Principal Contributors</h2>
            <ul>
                <li> Développeur: <a href="http://www.lam.jussieu.fr/Membres/Katz/index.php?page=accueil">Brian F.G. Katz</a> </li>
                <li> Support style: <a href="https://pyrapple.github.io/">David Poirier-Quinot</a> </li>
                <li> Support web: <a href="http://www.dalembert.upmc.fr/ijlrda/index.php?option=com_contact&view=contact&id=111:le-saec-pascal&catid=11&Itemid=128">Pascal Le Saec</a> </li>
				
            </ul>
        </div>
        <div class="col-sm-6">
            <img src="Presentation_monopage_template_files\myguitar.jpg" alt="My Guitar" width="100%" >
        </div>

        <!-- single column section -->
        <div class="col-sm-12">

            <h2>Resume du template</h2>

            <p>Ce template peux vous aider pour faire une page web pour votre projet facilement dans un style commun à l'équipe.</p>

            <p>Voici un lien pour <a href="http://www.lam.jussieu.fr/Projets/Presentation_monopage_template_files/Presentation_monopage_template.zip">  télécharger ce template.</a></p>

            <p>
            Il faut créer un document nommé typiquement "MyProjectName.php". Si vous avez des fichers associés, il faut les mettres dans un dossier nommé "MyProjectName_files".
            </p>
           
            <h2> Section titre </h2>

            <p>Exemple d'une lecture de fichier audio</p>

			<h3>Audio example titre</h3>
            <p><audio controls>
                <source src="Presentation_monopage_template_files\conductor_position_recording_16bit.wav" type="audio/wav">
                Sorry, but your browser doesn't appear to support the audio element.
            </audio></p>

            <h2> Demos / Videos </h2>

            <p>Texte</p>

            <h3> Section sous-titre (not added to TOC)</h3>

            <p> Exemple d'une lecture de vidéo sur YouTube </p>

			<div class='embed-responsive embed-responsive-16by9'>
			<!-- prescrire le format ratio 4by3 ou 16by9 -->
				<p>
					<iframe  src="https://www.youtube.com/embed/-dPiAJyEonA" frameborder="0" allowfullscreen ></iframe>
				</p>
			</div>

            <h2>Section titre</h2>

            Exemple pour inclure un PDF, par exemple si vous avez un PPT à monter.

			<div class='embed-responsive embed-responsive-4by3'> 
			<!-- prescrire le format ratio 4by3 ou 16by9 -->
			<!-- pour un ratio non-standard, padding-bottom est pour definir l'hauteur du viewer par rapport à son largeur --> 
			<!-- <div class='embed-responsive' style='padding-bottom:35%'> -->
				<p><object data="Presentation_monopage_template_files\GAM_11_Acoustique-Salles_Winckel.pdf" type="application/pdf"  view="Fit">
				</object></p>
			</div>

            <h2> Publications associées</h2>

            <h4>Publications Journaux</h4>
            <ul>
                <li> B. N. Postma and B. F. Katz, “Perceptive and objective evaluation of calibrated room acoustic simulation auralizations,” J. Acoust. Soc. Am., vol. 140, pp. 4326–4337, Dec. 2016, doi:<a href="http://dx.doi.org/10.1121/1.4971422">10.1121/1.4971422</a>.
            </ul>

            <h4>Proceedings de Conference</h4>
            <ul>
                <li> B. F. Katz, B. Postma, D. Thery, D. Poirier-Quinot, and P. Luizard, “Objective and perceptive evaluations of high-resolution room acoustic simulations and auralizations,” in Euronoise, (Crete), pp. 2107–2114, May 2018, <a href="http://www.euronoise2018.eu/docs/papers/352_Euronoise2018.pdf">(url)</a>.
            </ul>

            
            <h2>Contact</h2>
            For any questions, please contact the head of the project:  <a href="http://www.lam.jussieu.fr/Membres/Katz/index.php?page=accueil">Brian F.G. Katz</a>

        </div>

    </div>

</div>
