<div class="col-md-4 col-sm-6 ">
    <div class="probootstrap-card">
        <div class="probootstrap-card-media">
            <a href="single-page.html"><img src="www/view/img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
        </div>
        <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0"><? echo $_POST['data']['name']; ?></h2>
            <p class="category"><? echo $_POST['data']['languages']; ?></p>
            <p><? echo $_POST['data']['description'] ?></p>
            <div class="row text-center" id="project<? echo $_POST['data']['id']; ?>">
                <button class="btn btn-primary btn-sm projectGet" name="GET">Get</button>
                <button class="btn btn-primary btn-sm projectUpdate" name="PUT">Update</button>
                <button class="btn btn-primary btn-sm projectDelete" name="DELETE">Delete</button>                
            </div>
        </div>
    </div>
</div>