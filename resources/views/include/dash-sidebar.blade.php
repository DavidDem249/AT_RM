<div class="col-sm-4 col-md-3">
  
    <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-life-ring"></i> <span>Dashboard</span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-car"></i> <span>Offres</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i> Offres postées
                    </a></li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i> Ajouter une offre
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i> <span>Employés</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                {{-- <li>
                    <a href="your_proposals.html">
                        <i class="fa fa-circle-o"></i> Ajouter
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('view.employe') }}">
                        <i class="fa fa-circle-o"></i> Liste
                    </a>
                </li>
            </ul>
        </li>
    </ul>		


    <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a href="editprofile.html">
                <i class="fa fa-user"></i> <span>Modifier profile</span>
            </a>
        </li>
        <li>
            <a href="profileimage.html">
                <i class="fa fa-image"></i> <span>Changer photo profile</span>
            </a>
        </li>
        <li>
            <a href="password.html">
                <i class="fa fa-lock"></i> <span>Changer mot de passe</span>
            </a>
        </li>
    </ul>			 
         
</div>