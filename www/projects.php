<section class="probootstrap-section">
<div class="container">
    	<div class="row">
    			<h3>LISTA DE USUARIOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Usuario</b></th>
                    <td width=125><b>DNI</b></th>
                    <td width=125><b>Nombre</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['user'] . '</td>';
                    	   	echo '<td width=125>'. $row['dni'] . '</td>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['user'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['user'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['user'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading probootstrap-animate">
                <h2>Selected Projects</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">A Clever Bike</h2>
                        <p class="category">Design &amp; Model</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Sleek Spaker</h2>
                        <p class="category">Design</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Black Person</h2>
                        <p class="category">Photography</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">A Clever Bike</h2>
                        <p class="category">Design &amp; Model</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Black Person</h2>
                        <p class="category">Photography</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Sleek Spaker</h2>
                        <p class="category">Design</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">A Clever Bike</h2>
                        <p class="category">Design &amp; Model</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Sleek Spaker</h2>
                        <p class="category">Design</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Black Person</h2>
                        <p class="category">Photography</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- END section -->

<div class="container">
    <div class="probootstrap-cta probootstrap-animate border-bototm-none">
        <h2 class="mb20">Do you have amazing project in mind? Let's get started.</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
            ocean.</p>
        <p><a href="#" role="button" class="btn btn-primary">Get In Touch</a></p>
    </div>
</div>