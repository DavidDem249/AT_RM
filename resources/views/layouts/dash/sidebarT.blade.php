<div class="dlabnav" style="background: rgb(42,60,72);
background: linear-gradient(90deg, rgba(42,60,72,1) 0%, rgba(47,108,150,1) 44%, rgba(30,100,151,1) 85%, rgba(60,118,161,1) 100%);">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Tableau de bord</li>
            <li>
                <a href="{{ route('admin.admindash') }}" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text">Accueil</span>
                </a>
            </li>
			<li>
                <a class="ai-icon" href="{{ route('admin.ressources') }}" aria-expanded="false">
					<i class="la la-calendar"></i>
					<span class="nav-text">Réssources</span>
				</a>
            </li>
			
            <li>
                <a href="{{ route('admin.recruteur') }}" aria-expanded="false">
					<i class="la la-desktop"></i>
					<span class="nav-text">Recruteurs</span>
				</a>
            </li>
            <li class="nav-label">Offre d'emploi</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
					<i class="la la-file-text"></i>
					<span class="nav-text">Offre</span>
				</a>
                <ul aria-expanded="false">
                    <li><a href="#">Ajouter offre</a></li>
                    <li><a href="#">Liste des offres</a></li>
                    <li><a href="#">Candidatures</a></li>
                </ul>
            </li>
            <li class="nav-label">Gestion de pack</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
					<i class="la la-table"></i>
					<span class="nav-text">Pack service</span>
				</a>
                <ul aria-expanded="false">
                    <li>
                        <a href="#">Liste des packs</a></li>
                    <li>
                        <a href="#">Nouveau pack</a>
                    </li>
                </ul>
            </li>
            <li class="nav-label">Configuration</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
					<i class="la la-th-list"></i>
					<span class="nav-text">Lieu et domaine</span>
				</a>
                <ul aria-expanded="false">
                    <li>
                        <a href="#">Villes & Pays</a>
                    </li>
                    <li>
                        <a href="#">Domaine</a>
                    </li>
                    <!-- <li>
                        <a href="#">Lock Screen</a>
                    </li> -->
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-th-list"></i>
                    <span class="nav-text">Paiement</span>
                </a>

            </li>

		</ul>
    </div>
</div>