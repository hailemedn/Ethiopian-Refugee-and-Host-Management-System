<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminhome.php">
        
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <hr class="sidebar-divider">

    <li class="nav-item">

        <span> <a class="nav-link collapsed" href="users.php">Users</a> </span>
        <span>  <a class="nav-link collapsed" href="posts.php">Posts</a> </span>
        <span>  <a class="nav-link collapsed" href="broadcast.php">Broadcast</a> </span>
        
    </li>

    <hr class="sidebar-divider d-none d-md-block">

</ul>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="adminlogout.php">Logout</a>
            </div>
        </div>
    </div>
</div>
