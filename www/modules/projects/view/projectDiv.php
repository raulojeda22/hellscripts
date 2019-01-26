<div class="col-lg-2 col-md-3 col-sm-4 col-6 ">
    <div class="probootstrap-card">
        <div class="probootstrap-card-media responsive-square">
            <img src="<? echo $_POST['data']['image']; ?>" class="img-responsive responsive-square-content img-border"/>
        </div>
        <div class="probootstrap-card-text">
            <div class="row text-center" id="project<? echo $_POST['data']['id']; ?>">
                <button class="btn btn-primary btn-sm projectGet" name="GET">Show</button>
            </div>
            <h5 class="text-white"><? echo $_POST['data']['name']; ?></h5>
            <h6 class="category"><? echo $_POST['data']['languages']; ?></h6>
        </div>
    </div>
</div>