<div class="col col-lg-2 col-md-3 col-sm-4">
    <div class="probootstrap-card">
        <div class="probootstrap-card-media responsive-square">
            <img src="<? echo $_POST['data']['image']; ?>" class="img-responsive responsive-square-content img-border"/>
        </div>
        <div class="probootstrap-card-text">
            <div class="row text-center" id="project<? echo $_POST['data']['id']; ?>">
                <a target="_blank" href="<? echo $_POST['data']['url']; ?>" class="btn btn-primary btn-sm btn-link projectGet" name="GET"><i class="icon-github"></i> Show</a>
            </div>
            <h4 class="text-white"><? echo $_POST['data']['name']; ?></h4>
            <h6 class="category"><? echo $_POST['data']['languages']; ?></h6>
        </div>
    </div>
</div>